$(document).ready(function() {
    // Khi hover vào dropdown-toggle
    $('.dropdown').hover(
        function() {
          //$(this).children().show('slow')
          //$(this).children('.dropdown-menu:first').show(500);
          $(this).children('.dropdown-menu:first').fadeToggle(500);
            // Tìm dropdown-menu đầu tiên trong cùng một nav-item dropdown và hiển thị nó
            //$(this).find('.dropdown-menu').toggle();
            //jQuery(this).find('.dropdown-menu:first').toggle()
        }
        
    );
    // click vào từng thẻ li menu công cụ
    $('.navbar .list-group-item').click(function(){
      let menuActive = $(this).attr('c-data');
        $('#'+menuActive).show();
        $('.item-menu-child > *:not(#'+ menuActive+')').hide();
    })

    $('.changeTabSlide .list-group-item').click(function(){
        let slideShow = '.slider-' + $(this).attr('c-data');
        $('.slider-carosel .itemSlider').hide();
        $(slideShow).show();
      })

    $('.item-lv .list-group-item').click(function(){
      $(this).find('.disabled:eq(0), .disabled:eq(1)').toggle();
      $(this).find('.fa-chevron-down:eq(0)').toggle();
      $(this).find('.fa-chevron-up:eq(0)').toggle();
    })
    $('.slider-hinh-anh').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.slider-video').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.slider-noi-bat').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.slider-am-thanh').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
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