(function(){
    //Hellow World

    console.log('Hello World');

    console.info('Im info');

    console.warn('Warrning');

    console.error('Error');

    //alert(5 + 6);

    document.write(5+5+" Noob");

    /*document.getElementById("demo").innerHTML = 5 + 6;

    var x = 5;
    var y = 6;
    var z = x + y;
    document.getElementById("demo").innerHTML = z;*/


    function date() {
        document.getElementById("demo").innerHTML = Date();

    function myFunction() {
    }
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
        $("p").click(function(){
            $(this).empty();
        });

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
            $('#demo3').html(date);
            $('#dani').html(dani);
        });

        $('buton').click(function(){
            $('#imeShow').html(forma);
        });

        // $( "p" ).click(function() {
        //     $( this ).slideUp();
        // });
    });

    //vezba

    //$('h2').hide();
$(document).on('ready', function(){
        //var foo = 3;
        // window.foo = 3;
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




//js laboratorija

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
            alert(laborant.ime);
    }

    lab = new Laboratorija('Metlab', 'Masala Tita 5');
    console.info(lab);
    zap=new Zaposleni('daaa','dasdad');
    laborant=new Laborant('pero','smit','dr mr',lab);
    console.info(laborant);

    laborant.ispis();



