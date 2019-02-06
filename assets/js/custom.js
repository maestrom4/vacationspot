// jQuery('.carousel-control.left').click(function() {
//     jQuery('#myCarousel').carousel('prev');
//   });
  
//   jQuery('.carousel-control.right').on('click',function() {
//       console.log('dfsdfsfsf');
//     jQuery('#myCarousel').carousel('next');
//   });


  // Fixes the prev/next links of the sliders
jQuery('.carousel-control.left').click(function(e) {
    e.stopPropagation();
    jQuery('.js-carousel').carousel('prev');
    return false;
  });
  
  jQuery('.carousel-control.right').click(function(e) {
    e.stopPropagation();
    jQuery('.js-carousel').carousel('next');
    return false;
  });