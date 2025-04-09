$(document).ready(function() {
    // Khi hover vào dropdown-toggle
    $('.dropdown').hover(
        function() {
          //$(this).children().show('slow')
          //$(this).children('.dropdown-menu:first').show(500);
          $(this).children('.dropdown-menu:first').fadeToggle(500);
          $(this).find('.fa-angle-down:eq(0)').toggle();
          $(this).find('.fa-angle-up:eq(0)').toggle();
            // Tìm dropdown-menu đầu tiên trong cùng một nav-item dropdown và hiển thị nó
            //$(this).find('.dropdown-menu').toggle();
            //jQuery(this).find('.dropdown-menu:first').toggle()
        }
        
    );
    $('.list-group-item').click(function(){
      let menuActive = $(this).attr('c-data');
        $('#'+menuActive).show();
        $('.item-menu-child > *:not(#'+ menuActive+')').hide();
    })
    $('.item-lv .list-group-item').click(function(){
      $(this).find('.disabled:eq(0), .disabled:eq(1)').toggle();
      $(this).find('.fa-chevron-down:eq(0)').toggle();
      $(this).find('.fa-chevron-up:eq(0)').toggle();
    })
    $('.owl-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
$('.owl-picture').owlCarousel({
    loop:true,
    margin:1,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})

$('.owl-partner').owlCarousel({
    loop:true,
    margin:1,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})

});