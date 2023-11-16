function bannerHeight(){
    var bannerHeight = $(window).height();

   $('.banner .item').height(bannerHeight);
}

AOS.init();


function Carousel(){
    $('.banner .owl-carousel').owlCarousel({
        items:1,
        loop:true,
        animateOut: 'fadeOut',
        smartSpeed:1000,
        responsive:{
             0:{
                 nav:false,
                 dots: true
             },
             768:{
                 nav:true,
                 dots:false,
             },
        }
    }); 
    $('.blogs .owl-carousel').owlCarousel({
        items:3,
        margin: 10,
        loop:true,
        smartSpeed:1000,
        responsive:{
             0:{
                 nav:false,
                 dots: true
             },
             768:{
                 nav:true,
                 dots:false,
             },
        }
    });
}

$(document).ready(function(){
    bannerHeight();
    Carousel();
});

$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});