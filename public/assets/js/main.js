/* --------------------------------------------------------

Template Name: Leonard
Description: Personal Portfolio Template
Version: 1.0
Author: modern_theme

=>  Table of Content  <=

1 - Adjust Loading Page
2 - Make Header takes the Full Height of the window
3 - Color Switcher && Changing Colors
4 - Sticky Menu
5 - About Section Skill Bars
6 - Particle Background in Home Section
7 - Hide menu after clicking on a link
8 - Jquery Smooth Scroll
9 - jquery scroll spy
10 - Parallax Effect
11 - Start numbers animate at fun-facts section 
12 - Start Isotop Plugin in Portfolio Section
13 - Start Owl Carousel Plugin in Client Section
14 - Typed Text in Home Section

------------------------------------------------------- */

(function($) {

    "use strict";

	/* ---------------------------------------------------
        1 - Adjust Loading Page
	----------------------------------------------------- */
    $(window).on("load", function () {
        $("#loading #loading-center").delay(500).animate({
            top: "-100%"
        }, 1000, "easeInQuart");
        $("#loading").delay(1800).fadeOut(1500);
    });
        
    /* ----------------------------------------------------------
        2 - Make Header takes the Full Height of the window
    ------------------------------------------------------------ */
    var homeSec = $("#home");
    homeSec.height($(window).height());

    $(window).on("resize", function() {
        homeSec.height($(window).height());
    });

    /* --------------------------------------------------------
        3 - Color Switcher && Changing Colors
    ---------------------------------------------------------- */
    /* Variables */
    var colorSwitcher 	= $(".color-switcher"),
        switcherBtn 	= $(".switcher-btn"),
        colorSlot 		= $(".color-switcher .color-slot");
    /* Show/Hide color switcher on clicking on switcher button */
    switcherBtn.on("click", function(e) {
        e.preventDefault();
        if(colorSwitcher.hasClass("closed")) {
            colorSwitcher.removeClass("closed").animate({
                left: "0px"
            }, 300, "easeInOutSine");
        } else {
            colorSwitcher.animate({
                left: "-200px"
            }, 300, "easeInOutSine").addClass("closed");
        }
    });

    /* Giving every color-slot it's background color */
    colorSlot.css("background-color", function () {
        return $(this).attr("data-background");
    });

    /* Changing color when clicking on color-slot  */
    colorSlot.on("click", function() {
        var dataTarget = $(this).attr("data-target");
        $("link[href*='color-']").attr("href", dataTarget);		
    });
    
    /* ---------------------------------------------------
        4 - Sticky Menu
    ----------------------------------------------------- */
    $(".header-area").sticky({topSpacing:0});
    
    /* ---------------------------------------------------
        5 - About Section Skill Bars  
    ----------------------------------------------------- */
    $(".about-us").appear(function () {
        $(".skillbar").skillBars();
    }, {
        accX: 0,
        accY: -350
    });
    
    /* ---------------------------------------------------
        6 - Particle Background in Home Section
    ----------------------------------------------------- */
    window.onload = function() {
        Particles.init({
            // normal options
            color: '#b9b9b9',
            connectParticles: false,
            selector: '.particle-bg',
            maxParticles: 100,
            minDistance: 120,
            sizeVariations: 5,
            speed: 0.6,

            // options for breakpoints
            responsive: [
                {
                    breakpoint: 768,
                    options: {
                        maxParticles: 70,
                        color: '#b9b9b9',
                        connectParticles: false
                    }
                }, {
                    breakpoint: 425,
                    options: {
                        maxParticles: 30,
                        connectParticles: true
                    }
                }, {
                    breakpoint: 320,
                    options: {
                        maxParticles: 0 // disables particles.js
                    }
                }
            ]
        });
    };
    
    /* ---------------------------------------------------
        7 - Hide menu after clicking on a link 
    ----------------------------------------------------- */
    $("ul.nav li a").on("click", function () {
        $("#myNavbar").collapse("hide");
    });

    /* ---------------------------------------------------
        8 - Jquery Smooth Scroll
    ----------------------------------------------------- */
    $("li.smooth-menu > a").on("click", function (event) {
        var $anchor = $(this);
        var headerH = '56';
        $("html, body").stop().animate({
            scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    });       

    /* ---------------------------------------------------
        9 - jquery scroll spy
    ----------------------------------------------------- */
    $(window).on("scroll", function () {
        $("body").scrollspy({
            target: '.navbar-collapse',
            offset: 94
        }); 
    });

    /* ---------------------------------------------------
        10 - Parallax Effect
    ----------------------------------------------------- */
    var parallaxHome 	    = $("#home.parallax"),
        parallaxFacts 	    = $("#fun-facts.parallax"),
        parallaxPromo 	    = $("#promo.parallax"),
        parallaxclient 	    = $("#client.parallax");
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        parallaxHome.css({"background-attachment": "scroll"});
        parallaxFacts.css({"background-attachment": "scroll"});
        parallaxPromo.css({"background-attachment": "scroll"});
        parallaxclient.css({"background-attachment": "scroll"});
    } else {
        parallaxHome.parallax("50%", 0.3);
        parallaxFacts.parallax("50%", 0.3);
        parallaxPromo.parallax("30%", 0.3);
        parallaxclient.parallax("50%", 0.3);
    }
    
    /* ---------------------------------------------------
        11 - Start numbers animate at fun-facts section 
    ----------------------------------------------------- */
    $(".fun-facts").appear(function () {
          $(".timer").countTo();
    }, {
          accX: 0,
          accY: -350
    });
    
    /* ---------------------------------------------------
        12 - Start Isotop Plugin in Portfolio Section
    ----------------------------------------------------- */
    //active isotop js
    $('.porfolio-items').isotope({
        itemSelector: '.single-porfolio',
        layoutMode: 'fitRows',
    });

    //isoptop click function
    $(".portfolio-filter > ul.nav > li").on("click", function () {
        $(".portfolio-filter > ul.nav > li").removeClass("active");
        $(this).addClass("active");

        var selector = $(this).attr("data-filter");
        $(".porfolio-items").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        return false;
    });
    
    /* ---------------------------------------------------
        13 - Start Owl Carousel Plugin in Client Section
    ----------------------------------------------------- */
    $(".client-group").owlCarousel({
        navigation: false,
        autoPlay: 3000,
        slideSpeed: 1500,
        pagination: true,
        paginationSpeed: 1500,
        singleItem: true 
    });
    
    /* ---------------------------------------------------
        14 - Typed Text in Home Section
	----------------------------------------------------- */
	$(".typed-element").typed({
    	strings: ["joseph leonard .", "live in australia .", "helpfull hacker at", "themeforest.net ."],
    	typeSpeed: 15,
    	loop: true,
    	backDelay: 3000
    });

})(jQuery);