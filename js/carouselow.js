$(document).ready(function() {

      var owl1 = $("#owl1");
     
      owl1.owlCarousel({items : 4 });

           // Custom Navigation Events
        $(".next").click(function(){
        owl1.trigger('owl.next');
        })
        $(".prev").click(function(){
        owl1.trigger('owl.prev');
        })


         var owl0 = $("#owl0");
     
          owl0.owlCarousel({items : 6 });

           // Custom Navigation Events
        $(".next").click(function(){
        owl0.trigger('owl.next');
        })
        $(".prev").click(function(){
        owl0.trigger('owl.prev');
        })

         var owl2 = $("#owl2");
     
      owl2.owlCarousel({items : 4 });

           // Custom Navigation Events
        $(".next").click(function(){
        owl2.trigger('owl.next');
        })
        $(".prev").click(function(){
        owl2.trigger('owl.prev');
        })

         var owl3 = $("#owl3");
     
        owl3.owlCarousel({items : 4 });

           // Custom Navigation Events
        $(".next").click(function(){
        owl3.trigger('owl.next');
        })

        $(".prev").click(function(){
        owl3.trigger('owl.prev');
        })

         var owl4 = $("#owl4");
     
       owl4.owlCarousel({items : 4 });

           // Custom Navigation Events
        $(".next").click(function(){
        owl4.trigger('owl.next');
        })
        $(".prev").click(function(){
        owl4.trigger('owl.prev');
        })

          var owl6 = $("#owl6");
     
       owl6.owlCarousel({items : 6 });

           // Custom Navigation Events
        $(".next").click(function(){
        owl6.trigger('owl.next');
        })
        $(".prev").click(function(){
        owl6.trigger('owl.prev');
        })

         var owl8 = $("#owl8");
     
       owl8.owlCarousel({items : 6 });

           // Custom Navigation Events
        $(".next").click(function(){
        owl8.trigger('owl.next');
        })
        $(".prev").click(function(){
        owl8.trigger('owl.prev');
        })

       
     
    });