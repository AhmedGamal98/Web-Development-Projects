$(document).ready(function() {
    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this),
                settings = $.extend({
                    //title: "",
                    format: "dropdown",
                    sticky: false
                }, options);

            return this.each(function() {
                cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
                $(this).find("#menu-button").on('click', function() {
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideToggle().removeClass('open');
                    } else {
                        mainmenu.slideToggle().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').slideToggle();
                        }
                    }
                });

                cssmenu.find('li ul').parent().addClass('has-sub');

                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideToggle();
                        } else {
                            $(this).siblings('ul').addClass('open').slideToggle();
                        }
                    });
                };

                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');

                if (settings.sticky === true) cssmenu.css('position', 'fixed');

                resizeFix = function() {
                    if ($(window).width() > 991) {
                        cssmenu.find('ul').show();
                    }

                    if ($(window).width() <= 991) {
                        cssmenu.find('ul').hide().removeClass('open');
                    }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);

            });
        };
        $("#cssmenu").menumaker({
            title: "",
            format: "multitoggle"
        });
    })(jQuery);

    $('#cssmenu > ul > li > a').click(function() {
        $('#cssmenu > ul > li > a').removeClass("active");
        $(this).addClass("active");
    });

    // End Menu

    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            $('.header').addClass("sticky");
        } else {
            if ($(this).scrollTop() < 10) {
                $('.header').removeClass("sticky");
            }
        }
    });

    // End Scroll Header


    jQuery(function() {
        jQuery("a.bla-2").YouTubePopUp({ autoplay: 1 }); // Disable autoplay
    });


    $('.pagination li a').click(function() {
        $('.pagination li a').removeClass("active");
        $(this).addClass("active");
    });





    $('.list-menu a').click(function() {
        $('.list-menu a').removeClass("active");
        $(this).addClass("active");
    });


    $('.filterby').click(function() {
        $('.item-inner,body').addClass('active');
        $(".overlay").fadeIn("");
    });

    $('.clos-filter').click(function() {
        $(".item-inner,body").removeClass("active");
        $(".overlay").fadeOut("");
    });

    $('.overlay').click(function() {
        $(".show-cart,body,.item-inner").removeClass("active");
        $(".overlay").fadeOut("");
    });


    $('.icon-close').click(function() {
        $('.ws-popup').removeClass("active");
    });


    $(".accordion").on("click", ".question", function() {
        $(this).toggleClass("active").next().slideToggle();
        $(".answer").not($(this).next()).slideUp(300);
        $(this).siblings().removeClass("active");
    });


});



//var blank="http://upload.wikimedia.org/wikipedia/commons/c/c0/Blank.gif";
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('.img_prev')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        var img = input.value;
        $('.img_prev').attr('src', img);
    }
}

// End loop of file input elementsResponse