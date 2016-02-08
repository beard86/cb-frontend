(function($) {
    //wait function to use as  a timer in functions
    $.fn.wait = function( ms, callback ) {
        return this.each(function() {
            window.setTimeout((function( self ) {
                return function() {
                    callback.call( self );
                }
            }( this )), ms );
        });
    };

    var isMobile = window.matchMedia("only screen and (max-width: 760px)"),
        $body = $('body'),
        nav = $body.find('nav'),
        burger = nav.find('li.burger'),
        burgerBtn = burger.find('#burger-nav'),
        signIn = $body.find('#sign-in'),
        contactUsBtn = $body.find('.contact-us'),
        search = $body.find('.search'),
        videoOverlay = $('#video-overlay');

    //region select
    var MakeFilter = function (type) {

        return function ($set) {
            return $set.filter(function (index) {
                return $(this).hasClass('filter-' + type);
            });
        }
    }
    // make wrapper for 2 col carousel thanks kev
    var MakeWrapBlocksOfN = function (n) {


        return function ($target) {
            var $els = $target.children()
            for (var i = 0; i < $els.length; i += n) {
                $els.slice(i, i + n).wrapAll("<div class='new wrap-" + n + "'></div>");
            }
            return $target;
        }
    }

    // make fitler block for region select 2 col carousel thanks kev

    var MakeFilterBlock = function ($target) {
            var $filterItems = $target.children();
            $filterItems.detach();
            return function (location) {
                var filterFunction = MakeFilter(location);
                var $els = filterFunction($filterItems).clone();
                var $wrapper = $target.find('.wrapper');
                $target.html("<div class='wrapper'></div>");
                $wrapper.append($els);
                return $wrapper;
            }

    }
    // Init carousel 

    var initCarousell = function ($target) {
        $target.owlCarousel({
            callbacks: true, loop: false, margin: 30, navRewind: false, responsiveClass: true, nav: true, items: 3, responsive: {
                0: {
                    items: 2, nav: true, margin: 15
                },
                600: {
                    items: 3, nav: true
                },
                1000: {
                    items: 3, nav: true, loop: false, slideBy: 3
                }
            }
        });
    }

    var wrapBlocks = MakeWrapBlocksOfN(2);
    var filterBlock = MakeFilterBlock($("#grid-to-list"))


    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.  
    var Citibank = {
        // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages
                UTIL.navClickEvents();
                UTIL.detectMobile();
                UTIL.loadCarousels();
                UTIL.windowResizeListener();
                UTIL.homeAccordion();
                UTIL.contactDropDown();
                UTIL.viewMoreBtn();
                UTIL.paginateLongPages();
                UTIL.contactMapImg();
                UTIL.jqueryValidateInit();
                UTIL.addCountryCodeSelect();
                $('input.timepicker').timepicker({});
                if(isMobile.matches) {
                    //UTIL.removePinchAndZoomNav();
                }

                //get geo location based on IP for wealth experts
                //console.log(geoplugin_city());
                //console.log(geoplugin_countryCode());
                //console.log(geoplugin_countryName());
                //console.log(geoplugin_latitude() + geoplugin_longitude());
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function() {
                // JavaScript to be fired on the home pages
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // Wealth page
        'wealth': {
            init: function() {
                // JavaScript to be fired on the wealth pages
                UTIL.listViewSwitcher();
                UTIL.animateBlueLine('.animate-line');
                UTIL.changeRegion();
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        'bio': {
            init: function() {
                // JavaScript to be fired on the Accomodation page
                UTIL.animateBlueLine('.animate-line');
                UTIL.animateBlueLine('.animate-line-2');

            }
        },
        'modules': {
            init: function() {
                // JavaScript to be fired on the Accomodation page
                UTIL.listViewSwitcher();
                UTIL.animateBlueLine('.animate-line');

            }
        },
        'fresh': {
            init: function() {

                UTIL.animateBlueLine('.animate-line');
                UTIL.paginateLongPages();
                UTIL.monthSelectDropDown();
                UTIL.shuffleFreshInsights();

            }
        },
        'investments': {
            init: function() {
                UTIL.animateBlueLine('.animate-line');


            }
        },
        'Location': {
            init: function() {



            }
        }
    };
    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Citibank;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },

        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        },

        animateBlueLine: function(ele) {
            function isElementInViewport(elem) {
                var $elem = $(elem);

                // Get the scroll position of the page.
                var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
                var viewportTop = $(scrollElem).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                // Get the position of the element on the page.
                var elemTop = Math.round( $elem.offset().top );
                var elemBottom = elemTop + $elem.height();

                return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
            }

            // Check if it's time to start the animation.
            function checkAnimation() {
                var $elem = $(ele);

                // If the animation has already been started
                if ($elem.hasClass('animate')) return;

                if (isElementInViewport($elem)) {
                    // Start the animation
                    $elem.addClass('animate');
                }
            }

            // Capture scroll events
            $(window).scroll(function(){
                checkAnimation();
            });
        },



        goToSection: function(id) {

            $('html, body').animate({
                scrollTop: $(id).offset().top - 100
            }, 500);

        },

        darkenNav: function() {

            burgerBtn.toggleClass('active');
            nav.toggleClass('black');
            nav.find('img.logo').toggleClass('visuallyhidden');

            $body.toggleClass('disable-scroll');// check for longer overlays
            $body.scrollTop(0);

        },

        navClickEvents: function() {
            var videoOverlay = $('#video-overlay'),
                megaMenu = $('#mega-menu-overlay'),
                megaMenuContact = megaMenu.find('.contact-us');

            burger.on('click', UTIL.burgerBtnFn);

            signIn.on('click', UTIL.signInBtn);

            search.on('click', UTIL.searchBtn);

            contactUsBtn.on('click', UTIL.contactUs);
            megaMenuContact.on('click', UTIL.contactUs);

            UTIL.contactUsNav();
            UTIL.videoOverlayInit();
        },

        contactUs: function () {

            var megaMenu = $('#mega-menu-overlay'),
            contactOverlay = $('#contact-us-overlay');

            if(nav.hasClass('black')) {
                contactOverlay.removeClass('visuallyhidden');
                megaMenu.addClass('visuallyhidden');

            } else {

                UTIL.darkenNav();
                contactOverlay.removeClass('visuallyhidden');

            }
        },

        signInBtn: function () {
                    //nav.addClass('close-nav');  
            UTIL.darkenNav();
            $('#sign-in-overlay').removeClass('visuallyhidden');
        },

        searchBtn: function () {
            UTIL.darkenNav();
            $('#search-overlay').removeClass('visuallyhidden');
        },



        burgerBtnFn: function () {
            var videoOverlay = $('#video-overlay'),
                megaMenu = $('#mega-menu-overlay');

            //signIn.on('click', signInBtn);
            nav.removeClass('close-nav');
            if($body.hasClass('disable-scroll')) {

                $body.find('.full-fixed').addClass('visuallyhidden');
                UTIL.darkenNav();

            } else if($body.hasClass('video-overlay')) {

                $body.removeClass('video-overlay');
                videoOverlay.addClass('visuallyhidden');
                burgerBtn.removeClass('active');

            } else if($body.hasClass('region-change')) {

                UTIL.goToSection('#grid-to-list');

            } else {

                megaMenu.toggleClass('visuallyhidden enable-scroll');
                UTIL.darkenNav();

            }

        },

        //navigate through contact screens
        contactUsNav: function() {

            var contactOverlay = $body.find('#contact-us-overlay'),
                phaseUl = contactOverlay.find('ul.light-list-md'),
                getDataType = phaseUl.find('a[data-type]'),
                mapImg = $body.find('svg.world-map');


            getDataType.on('click', function() {

                var $this = $(this),
                    getParent = $this.parents('ul');

                $('span.chevron-back').removeClass('visuallyhidden');

                $('span.chevron-back').on('click', function() {
                    phaseUl.addClass('visuallyhidden');
                    $('#phase-1').removeClass('visuallyhidden');
                    $(this).addClass('visuallyhidden');
                });
                console.log($this.data('type'));

                var thisData = $(this).data('type'),
                    thisDataLoc = $(this).data('location');
                    if(thisData == 'under25') {

                        getParent.addClass('visuallyhidden');
                        $('#phase-9').removeClass('visuallyhidden');

                    } else if (thisData == 'contact-details') {

                        getParent.addClass('visuallyhidden');
                        $('#phase-8').removeClass('visuallyhidden');

                    } else if (thisData == 'media-enquiries') {

                        getParent.addClass('visuallyhidden');
                        $('#phase-11').removeClass('visuallyhidden');

                    } else if(thisData == 'current') {

                        getParent.addClass('visuallyhidden');
                        $('#phase-4').removeClass('visuallyhidden');


                    } else if(thisData == 'art' || thisData == 'sport' || thisData == 'aviation' || thisData == 'alternative' || thisData == 'trust' || thisData == 'realestate' || thisData == 'banking' || thisData == 'finance' || thisData == 'lawfirm' || thisData == 'familyoffice' || thisData == 'nextgen') {

                            window.location.href = "/wealth-experts/bio.php";

                    } else if(thisData == 'enquiry'){

                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');

                    } else if(thisData == 'law'){

                        getParent.addClass('visuallyhidden');
                        $('#phase-10').removeClass('visuallyhidden');


                    } else if(thisData == 'individual') {

                        getParent.addClass('visuallyhidden');
                        $('#phase-2').removeClass('visuallyhidden');

                    } else if(thisData == 'over25' && thisDataLoc == 'asiapac-g') {

                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');


                    } else if(thisData == 'over25' && thisDataLoc == 'emea-g') {

                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');


                    } else if(thisData == 'over25' && thisDataLoc == 'latam-g') {

                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');


                    } else if(thisData == 'over25' && thisDataLoc == 'canada-g') {

                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');


                    } else if(thisData == 'over25' && thisDataLoc == 'usaeastcoast-g') {

                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');


                    } else if(thisData == 'over25' && thisDataLoc == 'usawestcoast-g') {
                        console.log('form eastcoast-g');
                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');


                    } else if(thisData == 'over25' && thisDataLoc == 'usacentral-g') {
                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');

                    } else if(thisData == 'over25' && thisDataLoc == 'newyork-g') {
                        $('#form-a').attr('data-location', thisDataLoc)
                        getParent.addClass('visuallyhidden');
                        $('#phase-6').removeClass('visuallyhidden');



                    } else {
                        console.log('else');
                        getParent.addClass('visuallyhidden');
                        getParent.next('ul').removeClass('visuallyhidden');

                    }
    


            });
            //merge into one function
            mapImg.on('click', function() {
                var $this = $(this),
                getParent = $this.parents('ul'),
                mapImgData = mapImg.data('location');

                getParent.addClass('visuallyhidden');
                $('span.chevron-back').addClass('visuallyhidden');
                if(mapImgData == 'northam') {

                    $('#phase-7').removeClass('visuallyhidden')
                    $('#M26 h1').text('Thank you. Mahrnaz Vahid will be in contact shortly.');
                    $('#M26 h2').text('Mahrnaz Vahid');

                } else if (mapImgData == 'latam'){

                    $('#phase-7').removeClass('visuallyhidden')
                    $('#M26 h1').text('Thank you. Mahrnaz Vahid will be in contact shortly.');
                    $('#M26 h2').text('Mahrnaz Vahid');

                } else if (mapImgData == 'latam-g' || mapImgData == 'emea-g' || mapImgData == 'asia-pac-g' || mapImgData == 'usaeastcoast-g' || mapImgData == 'usawestcoast-g' ||  mapImgData == 'usacentral-g' ||  mapImgData == 'usacentral-g' ||  mapImgData == 'canada-g'){


                    $('#phase-3').removeClass('visuallyhidden')

                    $('#phase-3').find('a').attr('data-location', mapImgData);


                } else if(mapImgData == 'emea'){

                    $('#phase-7').removeClass('visuallyhidden')
                    $('#M26 h1, #M26 h2').text('Thank you. Robert Mannering will be in contact shortly.');
                    $('#M26 h2').text('Robert Mannering');

                } else if (mapImgData == 'asia-pac'){

                    $('#phase-7').removeClass('visuallyhidden')
                    $('#M26 h2').text('Mahrnaz Vahid');

                } else {
                    $('#phase-6').removeClass('visuallyhidden');
                }


            }); 

            /*$('.btn-success').on('click', function() {
                var $this = $(this),
                    getParent = $this.parents('ul');
                getParent.addClass('visuallyhidden');
                getParent.next('ul').removeClass('visuallyhidden');
            }); 

            $('#number').on('change', function() {
                $('.form-group.email').addClass('visuallyhidden');
                $('.form-group.time').removeClass('visuallyhidden');
            });*/

        },

        contactMapImg: function() {

            //RAPHAEL plugin - waiting for final region maps from Design
            //https://parall.ax/blog/view/2985/tutorial-creating-an-interactive-svg-map

        },

        //functionality for the contact dropdown & image swap
        contactDropDown: function() {
            var mapImg = $body.find('svg.world-map');
            var formData = $body.find('#form-a');

            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    });
                    obj.dd.find('a').on('click', function(e) {

                        var txt = $(e.target).text(),
                            indx = $(e.target).parent().index();
                            thisDataLocation = $(this).data('location');

                            console.log($(this).data('location'));

                            mapImg.data('location', thisDataLocation);

                            $('#phase-6').addClass('added');

                        $(this).parents('#dd').find('span').text(txt);


                    });
                }
            }
            var dd = new DropDown( $('.dd') );

        },

        contactSequence: function() {},

        homeAccordion: function() {

            var accordionUl = $('ul.accordion'),
                li = accordionUl.find('li');
                link = li.find('a');
                div = link.find('div'),
                checkAllDivs = accordionUl.find('li>div');

            link.on('click', function() {

                var $this = $(this),
                    divNumber = $this.index(),
                    accordionDiv = $this.siblings('div');

                    //$this.removeClass('active');
                if(checkAllDivs.hasClass('show')) {

                    checkAllDivs.removeClass('show').addClass('heighthidden');
                }

                if($this.hasClass('active')) {

                    link.removeClass('active');
                    accordionDiv.removeClass('show').addClass('heighthidden');
                    //$this.addClass('active');

                } else {
                    link.removeClass('active');
                    $this.addClass('active');

                    accordionDiv.addClass('show').removeClass('heighthidden');


                }


            });

        },

        listViewSwitcher: function() {

			$('.list-view').on('click', function() {

                var $this = $(this);

				$this.toggleClass('grid-view');

				$('#grid-to-list').toggleClass('heighthidden visuallyhidden');

				$('#list-to-grid').toggleClass('heighthidden visuallyhidden');

			});



        },
        changeRegion: function() {
            var regionOverlay = $body.find('#region-overlay');

            $('#change-region').on('click', function() {
                $body.addClass('region-change');
                regionOverlay.removeClass('visuallyhidden');
                UTIL.darkenNav();
            });


            regionOverlay.find('a').on('click', function() {

           

                var thisLocation = $(this).data('group'),
                    thisText = $(this).text();
                    

                initCarousell(wrapBlocks(filterBlock(thisLocation)))
                //wrap this in lightenNav function
                burgerBtn.removeClass('active');

                regionOverlay.addClass('visuallyhidden');
                nav.removeClass('black');
                nav.find('img.logo').toggleClass('visuallyhidden');
                $body.removeClass('disable-scroll region-change');

                console.log(thisLocation);

                //$('#grid-to-list').removeClass('emea asiapac usaandc latam')
                //$('#grid-to-list').addClass(thisLocation);
               //$('#grid-to-list').slick('slickFilter', ':even');

                if(thisLocation == 'emea') {
                    $('#country-title').text(thisText);
                }

                if(thisLocation == 'asiapac') {
                    $('#country-title').text(thisText);
                }

                if(thisLocation == 'usaandc') {
                    $('#country-title').text(thisText);
                }

                if(thisLocation == 'latam') {
                    $('#country-title').text(thisText);
                }

            });




        },
        viewMoreBtn: function() {

            $('#list-to-grid li:gt(7)').hide();

            function handler1() {
                $('#view-all').addClass('less');
                $('#list-to-grid li:gt(7)').show();
                $('#view-all').html('View less');
                $(this).one("click", handler2);
            }
            function handler2() {
                $('#view-all').removeClass('less');
                $('#list-to-grid li:gt(7)').hide();
                $('#view-all').html('View more');
                $(this).one("click", handler1);
            }
            $('#view-all').one("click", handler1);

        },

        loadCarousels: function() {


            if (isMobile.matches) {
                //Conditional script here
                //alert('mobile');
            } else {
                //add divs for 2 col carousel
                //UTIL.twoColumnCarouselDesktop();
            }
            initCarousell(wrapBlocks(filterBlock('item')))


            var ticker = $('.ticker-carousel');

            ticker.slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true
            });

            //initiate owl carousel
            var owl = $('.owl-carousel');

            owl.owlCarousel({
                    callbacks:true, loop: false, margin:30, navRewind:false, responsiveClass:true, responsive:{
						0:{
						    items:2, nav:true, margin:15
						},
						600:{
						    items:3, nav:true
						},
						1000:{
						    items:5, nav:true, loop:false, slideBy:3
						}
					}
            });

            //initiate slick carousel
            $('#M27').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3
            });

        },

        videoOverlayInit: function() {
             var videoOverlay = $('#video-overlay');

            $('.video-play').on('click', function() {

                $body.addClass('video-overlay');
                videoOverlay.removeClass('visuallyhidden');
                nav.addClass('close-nav');
                burgerBtn.addClass('active');

            });
            
        },


        detectMobile: function() {
            //function not needed, use code & delete
            if (isMobile.matches) {
                //Conditional script here
                //alert('mobile');
            }

        },
        waitForFinalEvent: function() {
              //alert('waitForFinalEvent...');
              var timers = {};
              return function (callback, ms, uniqueId) {
                if (!uniqueId) {
                  uniqueId = "Don't call this twice without a uniqueId";
                }
                if (timers[uniqueId]) {
                  clearTimeout (timers[uniqueId]);
                }
                timers[uniqueId] = setTimeout(callback, ms);
              };

        }(),

        windowResizeListener: function() {
            //perform functons if window resized
            $(window).resize(function () {
                UTIL.waitForFinalEvent(function(){
                  //console.log('Resize...');
                  if ($(window).width() < 1024) {
                        console.log('oneColumnCarouselMobile')
                       // UTIL.oneColumnCarouselMobile();
                    }
                    else {
                        console.log('twoColumnCarouselDesktop')
                        //UTIL.twoColumnCarouselDesktop();

                    }

                }, 500, "some unique string");
            });

        },

        //remove pinch & zoom on nav element http://stackoverflow.com/questions/15233076/prevent-that-a-fixed-element-resizes-when-zooming-on-touchscreen
        removePinchAndZoomNav: function() {
            var nav = document.getElementById('M1');

            window.addEventListener('scroll', function(e){

                nav.style.position = 'absolute';
                nav.style.left = window.pageXOffset + 'px';
                nav.style.top = 0;
                nav.style["-webkit-transform"] = "scale(" + window.innerWidth/document.documentElement.clientWidth + ")";


            });

        },


        //functionality for the contact dropdown & image swap
        monthSelectDropDown: function() {
            var fromIndex = null,
                toIndex = null;

            function DropDownFrom(el) {
                this.ddFrom = el;
                this.initEvents();
            }
            function DropDownTo(el) {
                this.ddTo = el;
                this.initEvents();
            }
            DropDownFrom.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.ddFrom.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                        console.log('from');
                    });
                    obj.ddFrom.find('a').on('click', function(e) {

                        var txt = $(e.target).text(),
                            indx = $(e.target).parent().index() + 1;

                        fromIndex = indx;

                        $(this).parents('#ddfrom').find('span').text(txt);
                        $('#ddto').removeClass('disabled')
                        var ddTo = new DropDownTo( $('#ddto') );

                    });
                }
            }
            DropDownTo.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.ddTo.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                        console.log('to');
                    });
                    obj.ddTo.find('a').on('click', function(e) {

                        var txt = $(e.target).text(),
                            indx = $(e.target).parent().index() + 1;


                        toIndex = indx;

                        console.log(fromIndex + toIndex);
                        //console.log(toIndex);

                        $(this).parents('#ddto').find('span').text(txt);

                    });
                }
            }
            var ddFrom = new DropDownFrom( $('#ddfrom') );

        },
        //inifinte scroll, search results
        paginateLongPages: function() {

            $('#searchContentContainer').infinitescroll({
                navSelector     : "#next:last",
                nextSelector    : "a#next:last",
                itemSelector : "#searchContentContainer div.resultBlockText",
                loading: {
                    finishedMsg: "<em>No more results for your search</em>",
                }
            });

        },

        //adds class of external to Alert for all external links - modify to not add to links with ##

        alertExternalLinks: function() {
            var root = new RegExp(location.host);

            $('a').each(function(){

                if(root.test($(this).attr('href'))){ 
                    $(this).addClass('local');
                }
                else{
                    // a link that does not contain the current host
                    var url = $(this).attr('href');
                    if(url.length > 1)
                    {
                        $(this).addClass('external');
                    }
                }
            });

            $('a.external').on('click', function(e){

                e.preventDefault();
                var answer = confirm("You are about to leave the website of Citi Private Bank and view the content of an external website. Citi Private Bank cannot be held responsible for the content of external websites.");

                if (answer){
                    window.location = $(this).attr('href');
                } 

            });

        },

        shuffleFreshInsights: function() {
              var $gridCat = $('.sort');

              $gridCat.shuffle({
                itemSelector: '.item'
              });
                var $filterOptions = $('.category .col-md-4'),
                    $btns = $filterOptions.children('');

                $btns.on('click', function() {

                  var $this = $(this),
                      isActive = $this.hasClass( 'active' ),
                      group = isActive ? 'all' : $this.data('group');
                    console.log($this.data('group'))

                  // Hide current label, show current label in title
                  if ( !isActive ) {
                    $('.filter-options .active').removeClass('active');
                  }

                  $this.toggleClass('active');

                  // Filter elements
                  $gridCat.shuffle( 'shuffle', group );
                });

                $btns = null;
        },

        setupFilters: function() {
        },

        jqueryValidateInit: function() {

            $("#form-a").validate({
                    invalidHandler: function(e, validator) {
                        var errors = validator.numberOfInvalids();
                        if (errors) {
                            var message = errors == 1 ? '<span class="warning"></span> You have 1 error within this form. <a href="##" id="gotofield">Go to the first error.</a>' : '<span class="warning"></span> You have ' + errors + ' errors within this form.  <a href="##" id="gotofield">Go to the first error.</a>';
                            $("div.error div").html(message);
                            $("div.error").show();

                            $('#gotofield').on('click', function() {
                                console.log('gotofield');
                                var input = $("input.error");
                                input[0].focus()
                                return false;
                            });


                        } else {
                            $("div.error").hide();
                        }
                    },
                    onkeyup: false,
                    submitHandler: function() {
                        $("div.error").hide();
                        $("#phase-6").addClass('visuallyhidden');
                        $("#phase-7").removeClass('visuallyhidden');
                        $('span.chevron-back').addClass('visuallyhidden');

                        var formLocation = $("#form-a").data('location');

                        if(formLocation == 'usaeastcoast-g') {
                            $('#M26 h1').text('Thank you. Paul Hubert will be in contact shortly.');
                            $('#M26 h2').text('Paul Hubert');
                        } else if (formLocation == 'usaeastcoast-g') {

                            $('#M26 h1').text('Thank you. Paul Hubert will be in contact shortly.');
                            $('#M26 h2').text('Paul Hubert');

                        } else if (formLocation == 'usawestcoast-g') {

                            $('#M26 h1').text('Thank you. Hale Behzadi will be in contact shortly.');
                            $('#M26 h2').text('Hale Behzadi');

                        } else if (formLocation == 'canada-g') {

                            $('#M26 h1').text('Thank you. Bob McGuire will be in contact shortly.');
                            $('#M26 h2').text('Bob McGuire');

                        } else if (formLocation == 'emea-g') {

                            $('#M26 h1').text('Thank you. David Poole will be in contact shortly.');
                            $('#M26 h2').text('David Poole');

                        } else if (formLocation == 'asiapac-g') {

                            $('#M26 h1').text('Thank you. Steven Lo will be in contact shortly.');
                            $('#M26 h2').text('Steven Lo');

                        } else if (formLocation == 'latam-g') {

                            $('#M26 h1').text('Thank you. Jose Erneto Fuentes will be in contact shortly.');
                            $('#M26 h2').text('Jose Erneto Fuentes');

                        } else if (formLocation == 'newyork-g') {

                            $('#M26 h1').text('Thank you. Charles Merrill will be in contact shortly.');
                            $('#M26 h2').text('Charles Merrill');

                        } else if (formLocation == 'usacentral-g') {

                            $('#M26 h1').text('Thank you. Mark Connally will be in contact shortly.');
                            $('#M26 h2').text('Mark Connally');

                        }

                    },
                    messages: {
                        email: {
                            required: " ",
                            email: "Please enter a valid email address, example: you@yourdomain.com",
                            remote: jQuery.validator.format("{0} is already taken, please enter a different address.")
                        }
                    },
                    debug: true
            });

    
        },

        addCountryCodeSelect: function() {
            var countryData = $.fn.intlTelInput.getCountryData();

            console.log(countryData);

            $("#mobile-number").intlTelInput({
                autoPlaceholder:false
            });

        }

    };
    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.