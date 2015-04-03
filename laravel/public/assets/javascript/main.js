(function(){
    //Hellow World

    console.log('Hello World');

    console.info('Im info');

    console.warn('Warrning');

    console.error('Error');

    //alert(5 + 6);

    //document.write(5+5+" Noob");

    /*document.getElementById("demo").innerHTML = 5 + 6;

    var x = 5;
    var y = 6;
    var z = x + y;
    document.getElementById("demo").innerHTML = z;*/


    function myFunction() {
    
        document.getElementById("demo2").innerHTML = Math.random()*10;
    }


    //////

    function poz() {
        var hour = new Date().getHours(); 
        var greeting;
        if (hour < 18) {
            greeting = "Dobar dan";
        } else {
            greeting = "Dobro vece";
        }
        document.getElementById("demo3").innerHTML = greeting;
    }



    function vocke()
    {
        var i;
        var text="<ul>";
        var voce=["Banana","Narandza","Jabuka","Limun","Mango"];
        for(i=0;i<voce.length;i++){
            text+="<li>"+voce[i]+"</li>";
        }
        text+="</ul>";
        document.getElementById('voce').innerHTML=text;
    }
    function dani(){ 
    var text;
    switch(new Date().getDay())
    {
          case 1:
        case 2:
        case 3:
        default:
            text="Jedva cekam da nedelja dodje da bez zena jedan dan mi prodje!";
            break;
        case 4:
        case 5:
           text = "Jos malo pa vikend";
            break;
        case 0:
        case 6:
           text = "VIKEND! URAAA!";
    }
    document.getElementById('dani').innerHTML=text;
    }

    function forma()
    {
        var x=document.getElementById('ime').value;
        /*if(x==null ||x==""){
            alert("Ime mora biti ispunjeno");
            return false;
        }*/
        document.getElementById('imeShow').innerHTML=x;
    }

    //jQuery

    $(document).ready(function(){
        // $("p").click(function(){
        //     $(this).empty();
        // });

        $(".js-try-it").click(function(){
            $("#demo").html(myFunction);
        }); 

        $(".js-poz").click(function(){
            $("#demo2").html(poz);
        });

        $(".js-vocke").click(function(){
            $('#voce').html(vocke);
        });

        $(window).load(function(){
            $('#demo3').html(Date());
            $('#dani').html(dani);
        });

        $('buton').click(function(){
            $('#imeShow').html(forma);
        });

        //////////////////////////////////////////////////
        //////    editing form and AJAX update      //////                    
        //////////////////////////////////////////////////
        
        $('body').on('dblclick', '.js-item-row', function(evt){

            var $obj = $(this);
            //console.log($obj);
            var idItema = $obj.data("id-itema");
            var $desc = $obj.find('.js-desc');
            var $title = $obj.find('.js-title');
            var $save = $obj.find('.btn-save');
            var $cancel = $obj.find('.btn-cancel');
            var $obrisi = $obj.find('.js-obrisi');
            var $time = $obj.find('.js-time')
            var tekstTitle = $title.html().trim();
            var tekstDesc = $desc.html().trim();
            $save.show();
            $cancel.show();
            //console.log(tekstNaslova);
            //alert(idItema);

            $title.html('<input type="text" size="30" data-id-itema="' + idItema + '" id="title' + idItema + '" >');
            $desc.html('<input type="text" size="30" data-id-itema="' + idItema + '" id="desc' + idItema + '" >');
                $('#title'+idItema).val(tekstTitle);
                $('#desc'+idItema).val(tekstDesc);
            $save.html('<button data-id-itema="'+idItema+'" id="sacuvaj-'+idItema+'" class="btn btn-primary">Save</button>');
            $cancel.html('<button data-id-itema="'+idItema+'" id="ponisti-'+idItema+'" class="btn btn-danger">Cancel</button>');        
            $obrisi.hide();

            $('#ponisti-'+idItema).on('click', function(){
                $obrisi.show();
                $save.hide();
                $cancel.hide();
                $title.html(tekstTitle);
                //console.log($naslov);
                $desc.html(tekstDesc);
            })

            $('#sacuvaj-'+idItema).on('click', function(){

                var $post = {};
                $post.title = $('#naslov-'+idItema).val();
                //console.log($post.title);
                $post.description = $('#desc-'+idItema).val();
                $post._token = window._laravel_token;
                var id = $(this).data('id-itema');

                $title.html($('#title'+idItema).val());
                //console.log($naslov);
                $desc.html($('#desc'+idItema).val());

                console.log($post);
                $.ajax({

                    type:'PUT',
                    url:'http://test.dev/ajax-Update/'+id,
                    data: $post,
                    success: function(data){
                        $save.hide();
                        $cancel.hide();
                        $obrisi.show();
                        $time.html(data.updated_at);

                    }

                    })

            })

        });



        //////////////////////////////////////////////////
        //////           AJAX  create               //////                    
        //////////////////////////////////////////////////

        $('#nov').on('click',function(){
            $('#inputi').html('<div class="form-group col-md-3"><label> Title </label><input type="text" size="30" id="title" class="form-control"></input><label> Description </label> <textarea class="form-control" id="desc"></textarea><button id="dodaj" class="btn btn-primary">Dodaj</button><button id="sakrij" class="btn btn-danger">Hide</button></div>');
            $('#sakrij').click(function()
        {
            $('#inputi').html('');
        })
           $('#dodaj').on('click', function(){

                        var $post = {};
                        $post.title = $('#title').val();
                        $post.description = $('#desc').val();
                        $post._token = window._laravel_token;
                        console.log($post);
                    
                    $.ajax({

                        type: "POST",
                        url: 'http://test.dev/ajax-Post',
                        data: $post,
                        success: function(data){
                            $('#inputi').html('');
                            var user = window._laravel_user.name;
                            var noviRed = $("<tr class='js-item-row'></tr>");
                            noviRed.append('<td class="info">'+user+'</td>')
                            noviRed.append('<td class="js-title">'+data.title+'</td>');
                            noviRed.append('<td class="active js-desc">'+data.description+'</td>');
                            noviRed.append('<td class="js-time">'+data.created_at+'</td>');
                            noviRed.append('<td class="btn-save"></td>');
                            noviRed.append('<td class="btn-cancel"></td>');
                            noviRed.append('<button id="obrisi" class="btn btn-default js-obrisi">Obrisi</button>'); 
                            // var noviRed = $('<tr></tr>');
                            // noviRed.append('<td>'+data.title+'</td>');
                            $('table').append(noviRed);
                        }

                    });
                });
        });


    });

    //vezba

    //$('h2').hide();
        $(document).on('ready', function(){
        //////////////////////////////////////////////////
        //////           AJAX delete                //////                    
        //////////////////////////////////////////////////
        $('.js-obrisi').on('click',function(event){
            var id = $(this).data('id-itema');
            var token = window._laravel_token;

            $.ajax({
                url:'http://test.dev/ajax-Delete/'+id,
                type: 'delete',
                data: {_method: 'delete', _token :token},
                success: function (data){
                        $("tr[data-id-itema="+id+"]").hide();
                        }   
            });
        });
        //var foo = 3;
        // window.foo = 3;

 
        


        //////////////////////////////////////////////////
        //////           ajax practice              //////                    
        //////////////////////////////////////////////////
        $('button#callapi').on('click', function(event){
            $.ajax({                
                url: 'http://test.dev/json',                
                success: function (data){
                    console.log(data)                    
                    var post1 = $('table tr td#area1');
                    var post2 = $('table tr td#area2');                        
                        post1.html('');
                        post2.html('');                        
                        $.each(data, function(index, post){
                            post1.append('<tr><td>' + post.title + '</td></tr>');
                            post2.append('<tr><td>' + post.description + '</td></tr>');
                        })
                    
                    }
                });
            });
        }); 
    
    
})();
    


    //////////////////////////////////////////////////
    //////      klase u JS za laboratoriju      //////                    
    //////////////////////////////////////////////////


    function Laboratorija(naziv, ulica){
        this.naziv = naziv;
        this.ulica = ulica;
    }

    

    function Zaposleni(ime, prezime){
        this.ime=ime;
        this.prezime=prezime;
    }
    
    //console.info(zap);

    function Laborant(ime, prezime, zvanje, Laboratorija){
        Zaposleni.call(this,ime, prezime);    
        this.zvanje=zvanje;
        this.Laboratorija=Laboratorija

    }

    function Asistent(ime,prezime, zvanje){
        Zaposleni.call(this, ime, prezime);
        this.zvanje=zvanje;
    }

    Laborant.prototype.ispis = function(){
            document.write(laborant.ime);
    }

    lab = new Laboratorija('Metlab', 'Masala Tita 5');
    console.info(lab);
    zap=new Zaposleni('daaa','dasdad');
    laborant=new Laborant('pero','smit','dr mr',lab);
    console.info(laborant);

    //laborant.ispis();



