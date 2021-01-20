$(function () {
    "use strict";
    var $window = $(window),
        $body = $("body");
    jQuery(document).ready(
        (function ($) {
            $(".spinner").fadeOut();
            $(".preloader").delay(350).fadeOut(500);
            $body.delay(350).css({ overflow: "visible" });
            $(".option").on("click", function () {
                $("#box").toggleClass("open");
            }),
                $("body").on("click", function (o) {
                    $(o.target).closest("#box").length || $(".box").removeClass("open");
                });
            $(".blue").on("click", function () {
                $("#pagestyle").attr("href", "/vendor/confrariaweb/template-infusion/css/style.css");
            });
            $(".red").on("click", function () {
                $("#pagestyle").attr("href", "/vendor/confrariaweb/template-infusion/css/red.css");
            });
            $(".purple").on("click", function () {
                $("#pagestyle").attr("href", "/vendor/confrariaweb/template-infusion/css/purple.css");
            });
            $(".green").on("click", function () {
                $("#pagestyle").attr("href", "/vendor/confrariaweb/template-infusion/css/green.css");
            });
            $(".orange").on("click", function () {
                $("#pagestyle").attr("href", "/vendor/confrariaweb/template-infusion/css/orange.css");
            });
            $(".peach").on("click", function () {
                $("#pagestyle").attr("href", "/vendor/confrariaweb/template-infusion/css/peach.css");
            });
            var bg = jQuery("#home");
            function resizeBackground() {
                bg.height(jQuery(window).height() + 60);
            }
            resizeBackground();
            $(function () {
                $("body").stellar({ responsive: true, positionProperty: "position", horizontalScrolling: false });
            });
            var element = $(".element");
            $(function () {
                element.typed({ strings: ["Sou a Confraria Web.", "Sou uma Agência Digital.", "Sou do Marketing Digital.", "Sou da Programação."], typeSpeed: 100, loop: true });
            });
            new WOW().init();
            var startSkills = $(".single-skill");
            startSkills.waypoint(
                function () {
                    $(this).each(function () {
                        var data = $(this).data("percent");
                        $(this)
                            .find(".skill-bar-overlay")
                            .animate({ width: data + "%" }, 2000);
                        $(this)
                            .find("span")
                            .addClass("show")
                            .animate({ width: data + -20 + "%" }, 2000);
                    });
                },
                { triggerOnce: true, offset: "bottom-in-view" }
            );
            $(".nav a,#home a,#quote a,[href='#body']").on("click", function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $("html, body").animate({ scrollTop: $(hash).offset().top }, 900, function () {
                        window.location.hash = hash;
                    });
                }
            });
            $(document).on("scroll", onScroll);
            function onScroll(event) {
                var scrollPos = $(document).scrollTop() + 80;
                $(".nav a").each(function () {
                    var currLink = $(this);
                    var refElement = $(currLink.attr("href"));
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        $(".nav li a").removeClass("active");
                        currLink.addClass("active");
                    } else {
                        currLink.removeClass("active");
                    }
                });
            }
            $(".counter").counterUp({ delay: 1, time: 200 });
            $("#parent").magnificPopup({ delegate: "a.gallery", type: "image", closeOnContentClick: true, gallery: { enabled: true } });
            $("#parent").mixItUp();
            $("#owl-testimonial").owlCarousel({
                navigation: false,
                pagination: true,
                slideSpeed: 800,
                paginationSpeed: 800,
                smartSpeed: 500,
                autoplay: false,
                singleItem: true,
                loop: false,
                responsive: { 0: { items: 1 }, 580: { items: 2 }, 900: { items: 3 } },
            });
            $("#partners").owlCarousel({
                loop: true,
                nav: false,
                dots: false,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 1300,
                smartSpeed: 500,
                responsive: { 0: { items: 1 }, 320: { items: 2 }, 520: { items: 3 }, 860: { items: 5 }, 1000: { items: 6 } },
            });
            var validator = $("#form").validate({
                rules: { name: "required", email: { required: true, email: true }, subject: "required", message: "required" },
                messages: { name: "Please enter your name", email: "Please enter a valid email address", subject: "Please enter a subject", message: "Please enter your message" },
            });
            $(".send-btn").on("click touchstart", function () {
                $("#form").css("color", "#ac4b49");
            });

            /*
            var myCenter=new google.maps.LatLng(19.074,72.884);function initialize(){var mapProp={center:myCenter,zoom:13,scrollwheel:false,draggable:true,mapTypeId:google.maps.MapTypeId.ROADMAP};var map=new google.maps.Map(document.getElementById("map"),mapProp);var marker=new google.maps.Marker({position:myCenter,icon:'/vendor/confrariaweb/template-infusion/images/map.png',});marker.setMap(map);marker.setAnimation(google.maps.Animation.BOUNCE);}
            google.maps.event.addDomListener(window,'load',initialize);
            */

            $("#scroll-up").hide();
            $window.on("scroll", function () {
                if ($window.scrollTop() > 300) {
                    $("#scroll-up").fadeIn();
                } else {
                    $("#scroll-up").fadeOut();
                }
                if ($window.scrollTop() > 160) {
                    $("nav").addClass("scroll");
                } else {
                    $("nav").removeClass("scroll");
                }
            });
            $("#scroll-up").on("click", function () {
                $("html, body").animate({ scrollTop: 0 }, 1000);
                return false;
            });
        })(jQuery)
    );
});
