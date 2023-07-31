

<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    var section2 = document.querySelector(".section2");
    var section2OffsetTop = section2.offsetTop;
    var windowHeight = window.innerHeight;

    function animateSection2() {
      if (window.pageYOffset > section2OffsetTop - windowHeight + 100) {
        section2.classList.add("animate");
      }
    }

    window.addEventListener("scroll", animateSection2);
    animateSection2();
  });
</script>

<!-- Clients slider -->
<script>
  $(document).ready(function(){

if($('.brands_slider').length)
     {
         var brandsSlider = $('.brands_slider');

         brandsSlider.owlCarousel(
         {
             loop:true,
             autoplay:true,
             autoplayTimeout:5000,
             nav:false,
             dots:false,
             autoWidth:true,
             items:8,
             margin:0
         });

         if($('.brands_prev').length)
         {
             var prev = $('.brands_prev');
             prev.on('click', function()
             {
                 brandsSlider.trigger('prev.owl.carousel');
             });
         }

         if($('.brands_next').length)
         {
             var next = $('.brands_next');
             next.on('click', function()
             {
                 brandsSlider.trigger('next.owl.carousel');
             });
         }
     }


 });
</script>