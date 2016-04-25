var GOLOTHEMES = {};

(function($){
    var $onePageMenuAnchor = $('#primary-menu > ul > li > a');
    var defaultLogo = $('#logo').find('img').attr('src');
    var darkLogo = $('#logo').find('.standard-logo').attr('data-dark-logo');
    
    function sectOffset() {
        sectionOffset = 0;
        if ($('#header').hasClass('top-header')) {
            sectionOffset = 84;
        }
        if ($(window).width() < 1025 && $('#header').hasClass('left-icon-header')) {
            sectionOffset = 80;
        }
        if ($(window).width() < 992 && $('#header:not(.left-icon-header)')) {
            sectionOffset = 80;
        }
    }
    GOLOTHEMES.header = {
        
        superfish: function() {
            if ($().superfish) {
                if($('#header').hasClass('top-header')) {
                    $('#primary-menu ul ul').css('display', 'block');
                    GOLOTHEMES.header.dropdownPosition();
                }
                $('header:not(.left-icon-header) #primary-menu > ul').superfish({
                    popUpSelector: 'ul',
                    delay: 250,
                    speed: 350,
                    animation: {opacity: 'show'},
                    animationOut: {opacity: 'hide'},
                    cssArrows: false
                });
                
            }
        },
        
        menuFunctions: function() {
            $('header:not(.left-icon-header) #primary-menu ul li:has(ul)').addClass('has-child');
            
        },
        dropdownPosition: function() {
            $('#primary-menu ul ul ').each(function (index, element) {
                var $menuDropdown = $(element);
                var windowWidth = $(window).width();
                var dropdownOffset = $menuDropdown.offset();
                var dropdownWidth = $menuDropdown.width();
                var dropdownLeft = dropdownOffset.left;

                if (windowWidth - (dropdownWidth + dropdownLeft) < 0) {
                    $menuDropdown.addClass('dropdown-pos-change');
                }
            });
        },
        logo: function () {
            if ($('.overlayHeader').hasClass('stickyHeader')) {
                $('#logo').find('img').attr('src', darkLogo);
                
            } else {
                $('#logo').find('img').attr('src', defaultLogo);
            }
            if ($('.overlayHeader').hasClass('mobile-menu')) {
                $('#logo').find('img').attr('src', darkLogo);
            }
        },
        pushMenuTrigger: function () {
            $('#push-menu-trigger').click(function() {
                $(this).toggleClass('open');
                $('#header').toggleClass('open-menu');
                
                $('#primary-menu > ul > li > a').on('click', function(){
                    if(!$(this).next().is('ul')) {
                        $('#push-menu-trigger').removeClass('open');
                        $('#header').removeClass('open-menu');
                    }
                }); 
            });
        },
        onePageScroll: function() {
            $onePageMenuAnchor.click(function(e) {
               var element = $(this);
               var divScrollToAnchor = element.attr('href');
               if( $( divScrollToAnchor ).length > 0 ) {
                                    
                   $('html,body').stop().animate({
                            'scrollTop': $( divScrollToAnchor ).offset().top - Number(sectionOffset)
                    }, 800), 'fast';
        
               }
               e.preventDefault(); 
            });
        },
        onePageScroller: function () {
            var currentOnePageSection = GOLOTHEMES.header.onePageCurrentSection();

            if (currentOnePageSection !== '') {
                $('#primary-menu > ul > li > a').removeClass('active theme-color');
                $('#primary-menu > ul > li').find('a[href$="#' + currentOnePageSection + '"]').addClass('active theme-color');
            }
            
        },
        onePageCurrentSection: function () {
            var currentOnePageSection = '';
        
        $('.section').each(function(index) {
            var h = $(this).offset().top;
            var y = $ ( window ).scrollTop();
            var offsetScroll = 100;
           
            if ( $(this).attr('id') != undefined && 
                    y + offsetScroll >= h && y < h + $(this).height() && 
                    $(this).attr('id') != currentOnePageSection ) {
                
                currentOnePageSection = $(this).attr('id');
            }
        });
        
        return currentOnePageSection;
        },
        mobileMenu: function() {
            var windowWidth = $(window).width();
            var $header = $('#header');
            if ($header.hasClass('top-header') || $header.hasClass('side-header')) {
                if (windowWidth < 992) {
                    $('#header').addClass('mobile-menu');
                } else {
                    $('#header').removeClass('mobile-menu');
                }
            }
        },
        mobileMenuTrigger: function() {
            $('#mobile-menu-trigger').click(function() {
                $('#primary-menu > ul').toggleClass('show-menu');
                $(this).toggleClass('open');
                $('#primary-menu > ul > li:not(.has-child) > a').on('click', function() {
                    if($('#primary-menu > ul > li:not(.menu-item-has-children)')) {
                        $('#primary-menu > ul').removeClass('show-menu');
                        $('#mobile-menu-trigger').removeClass('open');
                    }
                });
                return false;
            });
        },
        pushTriggerColor: function() {
            if ($('#header.side-header-side-push')) {
                if ($(document).scrollTop() >= $('#home').height()) {
                    $('#push-menu-trigger').addClass('dark');
                } else {
                    $('#push-menu-trigger').removeClass('dark');
                }
            }
        },
        stickyHeader: function () {
            if ($(window).width() > 992) {
                var headerHeight = $('#header').outerHeight();
                if ($('#header.top-header:not(.light)')) {
                    if ($(window).scrollTop() > headerHeight) {
                        $('#header.top-header:not(.light)').removeClass('transparent').addClass('stickyHeader');
                    } else {
                        $('#header.top-header:not(.light)').addClass('transparent').removeClass('stickyHeader');
                    }
                }
            }
        },
        others: function() {
            $('#primary-menu a').find('i').removeClass('_mi _before icon ');
        }
    };
    
    /*----------------------------------------------------*/
    /* Button Navigation
    /*----------------------------------------------------*/       
    function animateScroll(anchor, sectionOffset) {
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - sectionOffset
        }, 1500, 'easeInOutExpo');
    }  
        
    $(document).ready(function() {
        
        GOLOTHEMES.header.superfish();
        GOLOTHEMES.header.menuFunctions();
        GOLOTHEMES.header.pushMenuTrigger();
        GOLOTHEMES.header.mobileMenuTrigger();
        GOLOTHEMES.header.mobileMenu();
        GOLOTHEMES.header.onePageScroll();
        GOLOTHEMES.header.logo();
        GOLOTHEMES.header.others();
        GOLOTHEMES.header.pushTriggerColor();
        sectOffset();
        
        $('.rev-btn, .rev-scroll-btn, .btn-scroll').on('click', function (event) {
            animateScroll($(this), sectionOffset);
            event.preventDefault();
        });
        
        if ( !($('.main-page').find('div.section').length > 0) ) {          
            $('.main-page').addClass('page-container container');     
        }
        
        $('[id^=facebook_share]').on( 'click', function() {
            window.open( 'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
            'facebookWindow',
            'width=650,height=350');            

            return false;
        });
        
        $('[id^=twitter_share]').on( 'click', function() {
            window.open( 'http://twitter.com/intent/tweet?text='+jQuery(".cbp-l-grid-blog-title").text() +' '+window.location,
            "twitterWindow",
            "width=650,height=350" );           

            return false;
        });
        
        $('[id^=linkedin_share]').on( 'click', function() {

            window.open( 'http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent( location.href )+'$title='+jQuery( ".cbp-l-grid-blog-title" ).text(),
            'linkedinWindow',
            'width=650,height=450, resizable=1');

            return false;
        });
        
    } );
    $(window).resize(function() {
        GOLOTHEMES.header.mobileMenu();
        GOLOTHEMES.header.logo();
        sectOffset();
    });
    $(window).scroll(function() { 
        GOLOTHEMES.header.onePageCurrentSection();
        GOLOTHEMES.header.onePageScroller();
        GOLOTHEMES.header.stickyHeader();
        GOLOTHEMES.header.logo();
        GOLOTHEMES.header.pushTriggerColor();
    });
    $(window).load(function() { 
         
        /* --------------------------------*/
        /* - Preloader
        /* -------------------------------*/
        $("#preloader").delay(900).fadeOut(500);
        
    });
})(jQuery);
