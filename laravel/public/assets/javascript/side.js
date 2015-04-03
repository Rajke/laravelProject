 $(document).on('ready',function(){


        //////////////////////////////////////////////////
        //////           Magnific PopUp             //////        Inline popup            
        //////////////////////////////////////////////////
        
     $('#open-popup').magnificPopup({
        items: [
          {
            src: 'assets/images/ac.jpeg',
            title: 'All Assassins Creed characters'
          },
          {
            src: 'assets/images/wallpaper-hd-11.jpg', 
            title: 'Abstract'
          },
          {
            src: 'assets/images/black pearl.jpg', 
            title: 'Black Pearl'
          },
          {
            src: 'assets/images/vendetta.jpeg', 
            title: 'Abstract'
          },
          {
            src: 'https://www.youtube.com/watch?v=7sXNOCQqzHs',
            type: 'iframe' // this overrides default type
          }
        ],
        gallery: {
          enabled: true
        },
        type: 'image' // this is a default type
    });

 });



