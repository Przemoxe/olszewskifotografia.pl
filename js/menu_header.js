

// desktop menu hamburger
jQuery(".burger_desktop").on("click", function(){
    jQuery(".fa, aside").toggleClass("show");

});
jQuery(".naw_2 ul.menu li a").on("click", function(){
    jQuery(".fa-times").removeClass("show");
    jQuery(".fa-bars").addClass("show");
});

// mobile menu hamburger

jQuery('.burger_mobile').on("click", function(){
    jQuery(".fa, .naw").toggleClass("off");
    
});

jQuery(".naw ul.menu li a").on("click", function(){
    jQuery(".fa-angle-up").addClass("off");
    jQuery(".fa-bars").removeClass("off");
});

// hide menu after click desktop
jQuery('.naw_2 ul.menu li a').on("click", function(){
    jQuery("aside").toggleClass("show");
    
});

// hide menu after click mobile
jQuery('.naw ul.menu li a').on("click", function(){
    jQuery(".naw").toggleClass("off");
    
});




