//*------------Latest Gallery------------*//

    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });
	

	
//*------------Light Box------------*//

	 $(document).ready(function () {
        // $("a[rel^='prettyPhoto']").prettyPhoto();

     $(".owl-slider").owlCarousel({

         autoPlay: 3000, //Set AutoPlay to 3 seconds
         items: 4,
         itemsDesktop: [1199, 3],
         itemsDesktopSmall: [979, 3]

     });
 });

 