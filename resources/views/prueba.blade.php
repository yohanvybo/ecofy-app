


<?php

/**
 * Template used for pages.
 * Template Name: 100% Width Costum
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>




<style>
    @media screen and (max-width: 820px)  {
        .vimeo-video-container, .mp4-video, .vimeo-video-container iframe {
            position: relative;
            top: auto;
            left: auto;
            transform: none;
            pointer-events: auto;
            width: auto;
            height: 100vh;
        }
    }

</style>



<!-- BEGINC CONTENT -->
<div id="info-bar">
    <div id="no-info">
        <p class="client-name"></p>
    </div>
</div>
<div class="video-controls-container remove-in-mobile-please">
    <!--<div id="sound-trigger">SOUND</div>-->
    <a class="video-control js-video-control" id="js-video-control" href="#">
        <span class="to-pause">PAUSE</span>
        <span class="to-play" style="display: none;">PLAY</span>
    </a>
    <div id="fullscreen-trigger">FULLSCREEN</div>
</div>
<!-- BEGINC general swiper-wraper -->

<div id="general-swiper" class="remove-in-mobile-please">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div id="swiper-1" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video  swiper-slide-1 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                        <video src="https://magmavs.com/wp-content/uploads/2022/08/01_DOLLYNOIRE.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-1 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="1" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="729567237" id="vimeo-container-1-2" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video12Player = new Vimeo.Player('vimeo-container-1-2');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                        <img class="image-1-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/06_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/06_DOLLYNOIRE.jpg" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                        <img class="image-1-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/05_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/05_DOLLYNOIRE.jpg" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                        <img class="image-1-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/03_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/03_DOLLYNOIRE.jpg" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                        <img class="image-1-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/02_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/02_DOLLYNOIRE.jpg" />
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">RECAP FW22</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">DOLLY NOIRE</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit">Director @fpbano</span>
                        <span class="project-credit">Dop @neilmurphy.m</span>
                        <span class="project-credit">Produced by @magma.vs</span><span class="project-credit"> Producer @marc.algora</span><span class="project-credit"> Producer @marc.algora</span><span class="project-credit">Stylism @roxdelgado</span><span class="project-credit">MUA @xnnx.makeup</span><span class="project-credit">Stills @albapetrichor</span><span class="project-credit">Talents @luisa_eusse,@annii__roller,@rubenvincentsk8,@mof_weedbmx,@davecrpz99</span>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-next-1"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders1 = jQuery(".swiper-slide-1").length;
                        if (jQuery(".swiper-slide-1").length == 1) {
                            jQuery("#swiper-1").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper1 = new Swiper('#swiper-1', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-1',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-1',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper1.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper1.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

        <div class="swiper-slide">
            <div id="swiper-2" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video  swiper-slide-2 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                        <video src="https://magmavs.com/wp-content/uploads/2022/08/01_THENORTHFACE.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-2 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="2" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703209770" id="vimeo-container-2-2" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video22Player = new Vimeo.Player('vimeo-container-2-2');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-2 white-text" style="background-color: #000000;">
                        <img class="image-2-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-2 white-text" style="background-color: #000000;">
                        <img class="image-2-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m01s836.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m01s836.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-2 white-text" style="background-color: #000000;">
                        <img class="image-2-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-04-28-10h47m45s068.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-04-28-10h47m45s068.png" />
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">YOUR WARMEST FRIEND</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">THE NORTH FACE</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit"> Director Marc Algora</span>
                        <span class="project-credit"> Dop Neil Murphy</span>

                    </div>
                </div>;
                <div class="swiper-button-next swiper-button-next-2"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders2 = jQuery(".swiper-slide-2").length;
                        if (jQuery(".swiper-slide-2").length == 1) {
                            jQuery("#swiper-2").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper2 = new Swiper('#swiper-2', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-2',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-2',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper2.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper2.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

        <div class="swiper-slide">
            <div id="swiper-3" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video  swiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                        <video src=" https://magmavs.com/wp-content/uploads/2022/08/01_NOMON.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703212158" id="vimeo-container-3-2" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video32Player = new Vimeo.Player('vimeo-container-3-2');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="3" data-vimeo-controls="false" data-vimeo-id="703212269" id="vimeo-container-3-3" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video33Player = new Vimeo.Player('vimeo-container-3-3');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="4" data-vimeo-controls="false" data-vimeo-id="703212231" id="vimeo-container-3-4" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video34Player = new Vimeo.Player('vimeo-container-3-4');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="5" data-vimeo-controls="false" data-vimeo-id="703212199" id="vimeo-container-3-5" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video35Player = new Vimeo.Player('vimeo-container-3-5');
                        </script>
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">NOMON</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">NOMON CLOCKS</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit"> Director Marcel Berengué</span>
                        <span class="project-credit"> Dop Lau Vila</span>

                    </div>
                </div>;
                <div class="swiper-button-next swiper-button-next-3"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders3 = jQuery(".swiper-slide-3").length;
                        if (jQuery(".swiper-slide-3").length == 1) {
                            jQuery("#swiper-3").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper3 = new Swiper('#swiper-3', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-3',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-3',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper3.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper3.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

        <div class="swiper-slide">
            <div id="swiper-4" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video wiper-slide-4 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="4" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703210462" id="vimeo-container-4-2" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video42Player = new Vimeo.Player('vimeo-container-4-2');
                        </script>
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">R1 LEGEND</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">YAMAHA</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit"> Director Marc Algora</span>
                        <span class="project-credit"> Dop Nicolas Garrido</span>

                    </div>
                </div>;
                <div class="swiper-button-next swiper-button-next-4"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders4 = jQuery(".swiper-slide-4").length;
                        if (jQuery(".swiper-slide-4").length == 1) {
                            jQuery("#swiper-4").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper4 = new Swiper('#swiper-4', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-4',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-4',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper4.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper4.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

        <div class="swiper-slide">
            <div id="swiper-5" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video  swiper-slide-5 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                        <video src="https://magmavs.com/wp-content/uploads/2022/08/01_SOMBIOTECH.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-5 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="5" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="729580891" id="vimeo-container-5-2" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video52Player = new Vimeo.Player('vimeo-container-5-2');
                        </script>
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">SOM3355</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">SOM BIOTECH</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit"> Director Marc Algora</span>
                        <span class="project-credit"> Dop Lau Vila </span>

                    </div>
                </div>;
                <div class="swiper-button-next swiper-button-next-5"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders5 = jQuery(".swiper-slide-5").length;
                        if (jQuery(".swiper-slide-5").length == 1) {
                            jQuery("#swiper-5").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper5 = new Swiper('#swiper-5', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-5',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-5',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper5.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper5.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

        <div class="swiper-slide">
            <div id="swiper-6" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video  swiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                        <video src="https://magmavs.com/wp-content/uploads/2022/08/01_TENNIUM.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703212672" id="vimeo-container-6-2" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video62Player = new Vimeo.Player('vimeo-container-6-2');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="3" data-vimeo-controls="false" data-vimeo-id="703209591" id="vimeo-container-6-3" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video63Player = new Vimeo.Player('vimeo-container-6-3');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="4" data-vimeo-controls="false" data-vimeo-id="703209002" id="vimeo-container-6-4" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video64Player = new Vimeo.Player('vimeo-container-6-4');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="5" data-vimeo-controls="false" data-vimeo-id="703208457" id="vimeo-container-6-5" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video65Player = new Vimeo.Player('vimeo-container-6-5');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="6" data-vimeo-controls="false" data-vimeo-id="703207975" id="vimeo-container-6-6" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video66Player = new Vimeo.Player('vimeo-container-6-6');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="7" data-vimeo-controls="false" data-vimeo-id="703207067" id="vimeo-container-6-7" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video67Player = new Vimeo.Player('vimeo-container-6-7');
                        </script>
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">GODÓ 2022</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">TENNIUM</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit"> Director Marc Algora</span>
                        <span class="project-credit"> Dop Lau Vila </span>

                    </div>
                </div>;
                <div class="swiper-button-next swiper-button-next-6"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders6 = jQuery(".swiper-slide-6").length;
                        if (jQuery(".swiper-slide-6").length == 1) {
                            jQuery("#swiper-6").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper6 = new Swiper('#swiper-6', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-6',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-6',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper6.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper6.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

        <div class="swiper-slide">
            <div id="swiper-7" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video wiper-slide-7 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="7" data-vimeo-index-del-slide="1" data-vimeo-controls="false" data-vimeo-id="703209920" id="vimeo-container-7-1" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video71Player = new Vimeo.Player('vimeo-container-7-1');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                        <img class="image-7-2 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/05_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/05_THENORTHRAVAL.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                        <img class="image-7-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/04_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/04_THENORTHRAVAL.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                        <img class="image-7-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/03_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/03_THENORTHRAVAL.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                        <img class="image-7-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/02_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/02_THENORTHRAVAL.png" />
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">08001 Experience</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">THENORTHRAVAL</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit"> Director Marc Algora</span>
                        <span class="project-credit"> Dop Nicolas Garrido</span>

                    </div>
                </div>;
                <div class="swiper-button-next swiper-button-next-7"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders7 = jQuery(".swiper-slide-7").length;
                        if (jQuery(".swiper-slide-7").length == 1) {
                            jQuery("#swiper-7").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper7 = new Swiper('#swiper-7', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-7',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-7',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper7.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper7.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

        <div class="swiper-slide">
            <div id="swiper-8" class="swiper-general-style">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-video  swiper-slide-8 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                        <video src="https://magmavs.com/wp-content/uploads/2022/08/01_LEO.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                    </div>
                    <div class="swiper-slide swiper-slide-video wiper-slide-8 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                        <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="8" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="729585142" id="vimeo-container-8-2" class="vimeo-video-container">
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script type="text/javascript">
                            var video82Player = new Vimeo.Player('vimeo-container-8-2');
                        </script>
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                        <img class="image-8-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/02_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/02_LEO.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                        <img class="image-8-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/03_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/03_LEO.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                        <img class="image-8-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                        <img class="image-8-6 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/04_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/04_LEO.png" />
                    </div>
                    <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                        <img class="image-8-7 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/05_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/05_LEO.png" />
                    </div>
                </div>

                <div class="project-info-bar">

                    <div class="project-info-module project-name">
                        <p class="mobile info-tag-mobile">Project</p>
                        <p class="project-title project-credit">Disfrutemos del Desastre</p>
                    </div>
                    <div class="project-info-module project-client">
                        <span class="mobile info-tag-mobile">Client</span>
                        <p class="client project-credit">L E O</p>
                    </div>
                    <div class="project-info-module project-info">
                        <span class="mobile info-tag-mobile">Info</span>
                        <p class="info-project-text project-credit"> -</p>
                    </div>

                    <div class="project-info-module project-credits">
                        <span class="mobile info-tag-mobile">Credits</span>
                        <span class="project-credit"> Director Marc Algora</span>
                        <span class="project-credit"> Dop Lau Vila </span>

                    </div>
                </div>;
                <div class="swiper-button-next swiper-button-next-8"></div>
                <div class="swiper-pagination hidehide"></div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        var sliders8 = jQuery(".swiper-slide-8").length;
                        if (jQuery(".swiper-slide-8").length == 1) {
                            jQuery("#swiper-8").addClass("disabled");
                        }
                    });
                </script>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).on("load", function() {
                const swiper8 = new Swiper('#swiper-8', {
                    direction: 'horizontal',
                    loop: true,
                    speed: 0,
                    allowTouchMove: false,
                    preventInteractionOnTransition: true,
                    navigation: {
                        nextEl: '.swiper-button-next-8',
                    },
                    pagination: {
                        el: '.swiper-pagination-span-8',
                        type: 'custom',
                        renderCustom: function(swiper, current, total) {
                            return (current) + '/' + (total);
                        },
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: false
                    },
                });
                setTimeout(function() {
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    };
                }, 100);
                swiper8.on('slideChange', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.pause();
                        fn.unload();
                        //fn.setVolume(0);
                        jQuery(".to-play").hide();
                        jQuery(".to-pause").show();
                        jQuery(".video-controls-container").removeClass("playing");
                        jQuery(".video-controls-container").addClass("paused");
                    }
                });
                swiper8.on('slideChangeTransitionEnd', function() {
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                        var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                        var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                        var fn = window[currentVimeoPlayer];
                        fn.unload();
                        fn.play();
                        fn.setVolume(1);
                    }
                    // LAZY LOADING
                    var L = [].slice.call(document.querySelectorAll('.lazy'));
                    if ('IntersectionObserver' in window) {
                        let o = new IntersectionObserver(function(E, observer) {
                            E.forEach(function(e) {
                                if (e.isIntersecting) {
                                    let l = e.target;
                                    if (l.tagName == 'IMG') {
                                        l.src = l.dataset.src;
                                    }
                                    if (l.tagName == 'VIDEO') {
                                        var P = l.play();
                                        if (P !== undefined) {
                                            P.catch(error => {
                                                l.controls = true;
                                                l.classList.add('no-autoplay');
                                            });
                                        }
                                    }
                                    l.classList.remove('lazy');
                                    o.unobserve(l);
                                }
                            });
                        });
                        L.forEach(function(l) {
                            o.observe(l);
                        });
                    }
                    if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                        jQuery(".video-controls-container").show();
                    } else {
                        jQuery(".video-controls-container").hide();
                    }
                    if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                        jQuery("body").addClass("to-white");
                        jQuery("#header-background").addClass("to-white");
                    } else {
                        jQuery("body").removeClass("to-white");
                        jQuery("#header-background").removeClass("to-white");
                    };
                });
            });
        </script>

    </div>

</div>
<!-- END general swiper-wraper -->

<script type="text/javascript">
    jQuery(document).ready(function() {
        if (jQuery(".active-project .swiper-slide-active").find(".vimeo-video-container").length !== 0) {
            jQuery(".video-controls-container").show();
        } else {
            jQuery(".video-controls-container").hide();
        }
        const swiperGeneral = new Swiper("#general-swiper", {
            direction: "vertical",
            loop: false,
            mousewheel: true,
            mousewheelControl: false,
            slideActiveClass: "active-project",
            slideNextClass: "next-project",
            slidePrevClass: "prev-project",
        });
        swiperGeneral.on("slideChange", function() {
            if (jQuery(".active-project .swiper-slide-active").find(".vimeo-video-container").length !== 0) {
                var currentVimeoPostId = jQuery(".active-project .swiper-slide-active .vimeo-video-container").attr("data-vimeo-id-del-post");
                var currentVimeoSlideIndex = jQuery(".active-project .swiper-slide-active .vimeo-video-container").attr("data-vimeo-index-del-slide");
                var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player";
                var fn = window[currentVimeoPlayer];
                fn.pause();
                fn.unload();
                jQuery(".to-play").show();
                jQuery(".to-pause").hide();
                jQuery(".video-controls-container").removeClass("playing");
                jQuery(".video-controls-container").addClass("paused");

            }

        });
        swiperGeneral.on("slideChangeTransitionEnd", function() {
            if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                jQuery("body").addClass("to-white");
                jQuery("#header-background").addClass("to-white");
            } else {
                jQuery("body").removeClass("to-white");
                jQuery("#header-background").removeClass("to-white");
            }
            jQuery("#info-bar .client-name").text(jQuery(".swiper-slide.active-project .project-info-module.project-client p.client").text());
        });
        swiperGeneral.on("slideChangeTransitionStart", function() {
            if (jQuery(".active-project .swiper-slide-active").find(".vimeo-video-container").length !== 0) {
                jQuery(".video-controls-container").show();
            } else {
                jQuery(".video-controls-container").hide();
            }
        });

        jQuery(".archive.category #cat-trigger-creative-direction").remove();
        jQuery(".archive.tag #collaborator-trigger-creative-direction").remove();
        jQuery("#info-bar .client-name").text(jQuery(".swiper-slide.active-project .project-info-module.project-client p.client").text());
    });
</script>
<!-- END CONTENT -->





















<section id="content" class="full-width">
    <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php echo fusion_render_rich_snippets_for_pages(); // phpcs:ignore WordPress.Security.EscapeOutput
        ?>
        <?php avada_singular_featured_image(); ?>
        <div class="post-content qwerty">
            <?php the_content(); ?>
            <?php fusion_link_pages(); ?>
        </div>
        <?php if (!post_password_required($post->ID)) : ?>
				<?php if (Avada()->settings->get('comments_pages')) : ?>
					<?php comments_template(); ?>
				<?php endif; ?>
			<?php endif; ?>
    </div>
    <?php endwhile; ?>
</section>













///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





<style>

    header{
        height: 100px;
    }

    .fusion-row{
        margin:0px;
    }

    .projects{
        background: rgb(5 5 5);
        min-height: 100vh;
        width: 100vw;
    }

    .main-projects{
        padding: 150px 220px 130px 220px;
        /*     background: rgba(11, 11, 11, 0.3); */
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        position: relative;
        z-index: 3;
        background-position: center;
        -webkit-background-size: cover;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }


    .filters {
        padding: 61px 140px 20px 140px;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10001;
        width: 60%;
        left: 20%;
    }

    .filters div {
        padding: 0 20px;
        cursor: pointer;
        font-size: 14px;
        line-height: 1.42857143;
        cursor:pointer;
    }

    .project{
        text-align: center;
        margin-bottom: 95px;
        width: 31.3%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;

        margin-left: 1%;
        margin-right: 1%;
        height: 158px;
        align-items: center;
        cursor:pointer;
    }

    .project a{
        position: absolute;
        max-width: calc(33% - 80px);
        z-index:100;
        transition:0.5s;
        transform:scale(1.1);
    }

    .project-background{
        width: 100%;
        height: 100%;
        background-size: cover;
        border-radius: 16px;
        box-shadow: 0px 2px 20px 0 #ffffff1f;
        opacity:0;
        transition:0.5s;
        transform:scale(0.9);
    }
    .project:hover .project-background{
        opacity:1;
        transform:scale(1);
    }
    .project:hover a{

        transform:scale(0.98);
    }

    .background-degrade{
        background-image: linear-gradient(0deg, #00000091, #00000000);
        height: inherit;
        border-radius: 16px;
    }

    .main-projects h2 {
        margin: 0;
        padding: 0;
        font-weight: 500;
        font-size: 30px;
        letter-spacing: -0.86px;
        line-height: 45px;
    }

    .main-projects h3 {
        font-weight: 100;
        font-size: 17px;
        letter-spacing: 0;
        line-height: 45px;
        margin: -17px 0 0 0;
        padding: 0;
        color: #AFAFAF;
    }


</style>

<section id="content " class="full-width projects">


    <div class="filters">

        <div class="project_cat" data-cat="branded-es">
            ALL			</div>
        <div class="project_cat" data-cat="documentales">
            VIDEOS			</div>
        <div class="project_cat" data-cat="programas-tv">
            PHOTOS			</div>
    </div>

    <div  class="main-projects">


        <div class="project">
            <!--
            https://magmavs.com/wp-content/uploads/2022/08/01_DOLLYNOIRE.mp4
            http://magmavs.com/wp-content/uploads/2022/08/02_DOLLYNOIRE.jpg
            https://player.vimeo.com/video/729567237?h=68372dd001&controls=0&app_id=122963
            -->
            <a href="https://vimeo.com/729566747" title="">
                <h2>RECAP FW22</h2>
                <h3>Dolly Noire</h3>
            </a>
            <div class="project-background"
                 style="background-image:url(http://magmavs.com/wp-content/uploads/2022/08/02_DOLLYNOIRE.jpg);"
            ><div class="background-degrade"></div></div>

        </div>

        <div class="project">
            <!--
            https://magmavs.com/wp-content/uploads/2022/08/01_DOLLYNOIRE.mp4
            http://magmavs.com/wp-content/uploads/2022/06/vlcsnap-2022-04-28-10h47m45s068.png
            https://player.vimeo.com/video/729567237?h=68372dd001&controls=0&app_id=122963
            -->
            <a href="https://vimeo.com/703209770" title="">
                <h2>COLD LOVERS</h2>
                <h3>The Nort Face</h3>
            </a>
            <div class="project-background"
                 style="background-image:url(http://magmavs.com/wp-content/uploads/2022/06/vlcsnap-2022-04-28-10h47m45s068.png);"
            ><div class="background-degrade"></div></div>

        </div>



        <div class="project" >
            <!--
            https://magmavs.com/wp-content/uploads/2022/08/01_THENORTHFACE.mp4
            https://player.vimeo.com/video/703209770?h=9b6178469e&controls=0&app_id=122963
            -->
            <a href="https://vimeo.com/703212158" title="">
                <h2>NOMOM</h2>
                <h3>Nomon Clocks</h3>
            </a>

            <div class="project-background"
                 style="background-image:url(http://magmavs.com/wp-content/uploads/2022/06/vlcsnap-2022-04-28-10h46m38s492.png);"
            ><div class="background-degrade"></div></div>

        </div>




        <div class="project" >
            <!--
             https://magmavs.com/wp-content/uploads/2022/08/01_NOMON.mp4
            https://player.vimeo.com/video/703212199?h=48491908cb&controls=0&app_id=122963

            -->
            <a href="https://vimeo.com/703210462" title="">
                <h2>R1 LEGEND</h2>
                <h3>Yamaha</h3>
            </a>
            <div class="project-background"
                 style="background-image:url(http://magmavs.com/wp-content/uploads/2022/06/vlcsnap-2022-01-19-13h09m09s976.png);"
            ><div class="background-degrade"></div></div>

        </div>


        <div class="project">
            <!--
             https://magmavs.com/wp-content/uploads/2022/08/01_NOMON.mp4
            https://player.vimeo.com/video/729580891?h=f0fb998b4b&controls=0&app_id=122963

            -->
            <a href="" title="">
                <h2>SOM3355</h2>
                <h3>Som Biotech</h3>
            </a>

            <div class="project-background"
                 style="background-image:url(https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-04-28-10h47m45s068.png);"
            ><div class="background-degrade"></div></div>

        </div>


        <div class="project">
            <!--
             https://magmavs.com/wp-content/uploads/2022/08/01_TENNIUM.mp4
            https://player.vimeo.com/video/729580891?h=f0fb998b4b&controls=0&app_id=122963

            -->
            <a href="https://vimeo.com/703207067" title="">
                <h2>GODÓ 2022</h2>
                <h3>Tennium</h3>
            </a>

            <div class="project-background"
                 style="background-image:url(http://magmavs.com/wp-content/uploads/2022/06/vlcsnap-2022-04-05-13h32m03s214.png);"
            ><div class="background-degrade"></div></div>

        </div>


        <div class="project" >
            <!--
            style="background-image:url(https://magmavs.com/wp-content/uploads/2022/08/02_THENORTHRAVAL.png);"
             https://magmavs.com/wp-content/uploads/2022/08/01_NOMON.mp4
            https://player.vimeo.com/video/703209920?h=0d565f5112&controls=0&app_id=122963

            -->
            <a href="https://vimeo.com/703209920" title="">
                <h2>08001 Expirience</h2>
                <h3>The North Raval</h3>
            </a>

            <div class="project-background"
                 style="background-image:url(https://magmavs.com/wp-content/uploads/2022/08/02_THENORTHRAVAL.png);"
            ><div class="background-degrade"></div></div>

        </div>


        <div class="project" >
            <!--
            style="background-image:url(https://magmavs.com/wp-content/uploads/2022/08/05_LEO.png);"
             https://magmavs.com/wp-content/uploads/2022/08/01_LEO.mp4
            https://player.vimeo.com/video/729585142?h=bb1efc7781&controls=0&app_id=122963

            -->
            <a href="" title="">
                <h2>DISFRUTEMOS DEL DESASTRE</h2>
                <h3>Leo</h3>
            </a>

            <div class="project-background"
                 style="background-image:url(https://magmavs.com/wp-content/uploads/2022/08/05_LEO.png);"
            ><div class="background-degrade"></div></div>

        </div>




    </div>


</section>




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//ULTIMO


<?php

/**
 * Template used for pages.
 * Template Name: 100% Width Magma
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>

<?php get_header(); ?>



<style>
    @media screen and (max-width: 820px)  {
        .vimeo-video-container, .mp4-video, .vimeo-video-container iframe {
            position: relative;
            top: auto;
            left: auto;
            transform: none;
            pointer-events: auto;
            width: auto;
            height: 100vh;

        }

    }

    .swiper-general-style{
        cursor: url(https://regalometro.com/dist/svg-icons/angle-right.svg), auto;
    }

    .swiper-general-style.to-pause{
        cursor: url(https://regalometro.com/dist/svg-icons/pause.svg), auto;
    }
    .mp4-video{
        cursor: url(https://regalometro.com/dist/svg-icons/angle-right.svg), auto;
    }
    .vimeo-video-container iframe{
        cursor: url(https://regalometro.com/dist/svg-icons/pause.svg), auto;
    }

</style>
<section id="content" class="full-width">
    <!-- BEGINC CONTENT -->
    <div id="info-bar">
        <div id="no-info">
            <p class="client-name"></p>
        </div>
    </div>
    <div class="video-controls-container " >
        <!--<div id="sound-trigger">SOUND</div>-->
        <a class="video-control js-video-control" id="js-video-control" href="#">
            <span class="to-pause">PAUSE</span>
            <span class="to-play" style="display: none;">PLAY</span>
        </a>
        <div id="fullscreen-trigger">FULLSCREEN</div>
    </div>
    <!-- BEGINC general swiper-wraper -->

    <div id="general-swiper" class="rmve-magma">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div id="swiper-1" class="swiper-general-style ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video  swiper-slide-1 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                            <video src="https://magmavs.com/wp-content/uploads/2022/08/01_DOLLYNOIRE.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-1 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="1" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="729567237" id="vimeo-container-1-2" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video12Player = new Vimeo.Player('vimeo-container-1-2');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                            <img class="image-1-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/06_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/06_DOLLYNOIRE.jpg" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                            <img class="image-1-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/05_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/05_DOLLYNOIRE.jpg" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                            <img class="image-1-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/03_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/03_DOLLYNOIRE.jpg" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-1 white-text" style="background-color: #000000;">
                            <img class="image-1-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/02_DOLLYNOIRE.jpg" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/02_DOLLYNOIRE.jpg" />
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">Recap FW22</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">Dolly Noire</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">Directed by @fpbano</span>
                            <span class="project-credit">Dop'd by @neilmurphy.m</span>
                            <span class="project-credit">Produced by @magma.vs</span><span class="project-credit">Producer @marc.algora</span><span class="project-credit">Producer @marc.algora</span><span class="project-credit">Stylism @roxdelgado</span><span class="project-credit">MUA @xnnx.makeup</span><span class="project-credit">Stills @albapetrichor</span><span class="project-credit"> Talents @luisa_eusse, @annii__roller,@rubenvincentsk8, @mof_weedbmx,@davecrpz99</span>
                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-1"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders1 = jQuery(".swiper-slide-1").length;
                            if (jQuery(".swiper-slide-1").length == 1) {
                                jQuery("#swiper-1").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper1 = new Swiper('#swiper-1', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-1',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-1',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper1.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper1.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

            <div class="swiper-slide">
                <div id="swiper-2" class="swiper-general-style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video  swiper-slide-2 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                            <video src="https://magmavs.com/wp-content/uploads/2022/08/01_THENORTHFACE.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-2 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="2" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703209770" id="vimeo-container-2-2" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video22Player = new Vimeo.Player('vimeo-container-2-2');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-2 white-text" style="background-color: #000000;">
                            <img class="image-2-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-2 white-text" style="background-color: #000000;">
                            <img class="image-2-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m01s836.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m01s836.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-2 white-text" style="background-color: #000000;">
                            <img class="image-2-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-04-28-10h47m45s068.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-04-28-10h47m45s068.png" />
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">YOUR WARMEST FRIEND</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">THE NORTH FACE</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">Directed by Marc Algora</span>
                            <span class="project-credit">Dop'd by Neil Murphy</span>

                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-2"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders2 = jQuery(".swiper-slide-2").length;
                            if (jQuery(".swiper-slide-2").length == 1) {
                                jQuery("#swiper-2").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper2 = new Swiper('#swiper-2', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-2',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-2',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper2.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper2.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

            <div class="swiper-slide">
                <div id="swiper-3" class="swiper-general-style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video  swiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                            <video src=" https://magmavs.com/wp-content/uploads/2022/08/01_NOMON.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703212158" id="vimeo-container-3-2" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video32Player = new Vimeo.Player('vimeo-container-3-2');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="3" data-vimeo-controls="false" data-vimeo-id="703212269" id="vimeo-container-3-3" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video33Player = new Vimeo.Player('vimeo-container-3-3');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="4" data-vimeo-controls="false" data-vimeo-id="703212231" id="vimeo-container-3-4" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video34Player = new Vimeo.Player('vimeo-container-3-4');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-3 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="3" data-vimeo-index-del-slide="5" data-vimeo-controls="false" data-vimeo-id="703212199" id="vimeo-container-3-5" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video35Player = new Vimeo.Player('vimeo-container-3-5');
                            </script>
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">NOMON</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">Nomon Clocks</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">Directed by Marcel Berengué</span>
                            <span class="project-credit">Dop'd by Lau Vila</span>

                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-3"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders3 = jQuery(".swiper-slide-3").length;
                            if (jQuery(".swiper-slide-3").length == 1) {
                                jQuery("#swiper-3").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper3 = new Swiper('#swiper-3', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-3',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-3',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper3.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper3.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

            <div class="swiper-slide">
                <div id="swiper-4" class="swiper-general-style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video wiper-slide-4 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="4" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703210462" id="vimeo-container-4-2" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video42Player = new Vimeo.Player('vimeo-container-4-2');
                            </script>
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">Sun</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">Yamaha</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit" style="opacity:0;"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">Directed by Marc Algora</span>
                            <span class="project-credit">Dop'd by Nico Garrido</span>

                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-4"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders4 = jQuery(".swiper-slide-4").length;
                            if (jQuery(".swiper-slide-4").length == 1) {
                                jQuery("#swiper-4").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper4 = new Swiper('#swiper-4', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-4',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-4',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper4.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper4.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

            <div class="swiper-slide">
                <div id="swiper-5" class="swiper-general-style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video  swiper-slide-5 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                            <video src="https://magmavs.com/wp-content/uploads/2022/08/01_SOMBIOTECH.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-5 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="5" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="729580891" id="vimeo-container-5-2" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video52Player = new Vimeo.Player('vimeo-container-5-2');
                            </script>
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">SOM3355</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">SOM BIOTECH</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">· Director Marc Algora</span>
                            <span class="project-credit">· Dop Lau Vila </span>

                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-5"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders5 = jQuery(".swiper-slide-5").length;
                            if (jQuery(".swiper-slide-5").length == 1) {
                                jQuery("#swiper-5").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper5 = new Swiper('#swiper-5', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-5',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-5',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper5.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper5.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

            <div class="swiper-slide">
                <div id="swiper-6" class="swiper-general-style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video  swiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                            <video src="https://magmavs.com/wp-content/uploads/2022/08/01_TENNIUM.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="703212672" id="vimeo-container-6-2" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video62Player = new Vimeo.Player('vimeo-container-6-2');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="3" data-vimeo-controls="false" data-vimeo-id="703209591" id="vimeo-container-6-3" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video63Player = new Vimeo.Player('vimeo-container-6-3');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="4" data-vimeo-controls="false" data-vimeo-id="703209002" id="vimeo-container-6-4" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video64Player = new Vimeo.Player('vimeo-container-6-4');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="5" data-vimeo-controls="false" data-vimeo-id="703208457" id="vimeo-container-6-5" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video65Player = new Vimeo.Player('vimeo-container-6-5');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="6" data-vimeo-controls="false" data-vimeo-id="703207975" id="vimeo-container-6-6" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video66Player = new Vimeo.Player('vimeo-container-6-6');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-6 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="6" data-vimeo-index-del-slide="7" data-vimeo-controls="false" data-vimeo-id="703207067" id="vimeo-container-6-7" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video67Player = new Vimeo.Player('vimeo-container-6-7');
                            </script>
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">GODÓ 2022</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">TENNIUM</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">Director Marc Algora</span>
                            <span class="project-credit">Dop Lau Vila </span>

                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-6"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders6 = jQuery(".swiper-slide-6").length;
                            if (jQuery(".swiper-slide-6").length == 1) {
                                jQuery("#swiper-6").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper6 = new Swiper('#swiper-6', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-6',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-6',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper6.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper6.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

            <div class="swiper-slide">
                <div id="swiper-7" class="swiper-general-style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video wiper-slide-7 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="7" data-vimeo-index-del-slide="1" data-vimeo-controls="false" data-vimeo-id="703209920" id="vimeo-container-7-1" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video71Player = new Vimeo.Player('vimeo-container-7-1');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                            <img class="image-7-2 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/05_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/05_THENORTHRAVAL.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                            <img class="image-7-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/04_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/04_THENORTHRAVAL.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                            <img class="image-7-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/03_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/03_THENORTHRAVAL.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-7 white-text" style="background-color: #000000;">
                            <img class="image-7-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/02_THENORTHRAVAL.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/02_THENORTHRAVAL.png" />
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">08001 Experience</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">The North Raval</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">Directed by Marc Algora</span>
                            <span class="project-credit">Dop'd by Nico Garrido</span>

                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-7"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders7 = jQuery(".swiper-slide-7").length;
                            if (jQuery(".swiper-slide-7").length == 1) {
                                jQuery("#swiper-7").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper7 = new Swiper('#swiper-7', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-7',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-7',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper7.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper7.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

            <div class="swiper-slide">
                <div id="swiper-8" class="swiper-general-style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-video  swiper-slide-8 swiper-slide-size-video-full-screen white-text" style="background-color: rgb(0,0,0);">
                            <video src="https://magmavs.com/wp-content/uploads/2022/08/01_LEO.mp4" loop muted playsinline id="mp4-video-1" class="mp4-video lazy" preload="auto"></video>
                        </div>
                        <div class="swiper-slide swiper-slide-video wiper-slide-8 swiper-slide-size-video-full-screen white-text" style="background-color: rgba(255,255,255,0);">
                            <div style="padding:100% 0 0 0;position:relative;" data-vimeo-autoplay="false" data-vimeo-id-del-post="8" data-vimeo-index-del-slide="2" data-vimeo-controls="false" data-vimeo-id="729585142" id="vimeo-container-8-2" class="vimeo-video-container">
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <script type="text/javascript">
                                var video82Player = new Vimeo.Player('vimeo-container-8-2');
                            </script>
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                            <img class="image-8-3 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/02_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/02_LEO.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                            <img class="image-8-4 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/03_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/03_LEO.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                            <img class="image-8-5 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/07/vlcsnap-2022-06-02-08h30m46s019.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                            <img class="image-8-6 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/04_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/04_LEO.png" />
                        </div>
                        <div class="swiper-slide swiper-slide-img swiper-slide-8 white-text" style="background-color: #000000;">
                            <img class="image-8-7 image-in-swiper lazy size-full-screen vertical-center horizontal-center" style="margin: 0px;" src="https://magmavs.com/wp-content/uploads/2022/08/05_LEO.png" alt="" data-src="https://magmavs.com/wp-content/uploads/2022/08/05_LEO.png" />
                        </div>
                    </div>

                    <div class="project-info-bar">

                        <div class="project-info-module project-name">
                            <p class="mobile info-tag-mobile">Project</p>
                            <p class="project-title project-credit">Disfrutemos del Desastre</p>
                        </div>
                        <div class="project-info-module project-client">
                            <span class="mobile info-tag-mobile">Client</span>
                            <p class="client project-credit">L E O</p>
                        </div>
                        <div class="project-info-module project-info">
                            <span class="mobile info-tag-mobile">Info</span>
                            <p class="info-project-text project-credit"> -</p>
                        </div>

                        <div class="project-info-module project-credits">
                            <span class="mobile info-tag-mobile">Credits</span>
                            <span class="project-credit">· Director Marc Algora</span>
                            <span class="project-credit">· Dop Lau Vila </span>

                        </div>
                    </div>;
                    <div class="swiper-button-next swiper-button-next-8"></div>
                    <div class="swiper-pagination hidehide"></div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            var sliders8 = jQuery(".swiper-slide-8").length;
                            if (jQuery(".swiper-slide-8").length == 1) {
                                jQuery("#swiper-8").addClass("disabled");
                            }
                        });
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(window).on("load", function() {
                    const swiper8 = new Swiper('#swiper-8', {
                        direction: 'horizontal',
                        loop: true,
                        speed: 0,
                        allowTouchMove: false,
                        preventInteractionOnTransition: true,
                        navigation: {
                            nextEl: '.swiper-button-next-8',
                        },
                        pagination: {
                            el: '.swiper-pagination-span-8',
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                return (current) + '/' + (total);
                            },
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: false
                        },
                    });
                    setTimeout(function() {
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        };
                    }, 100);
                    swiper8.on('slideChange', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.pause();
                            fn.unload();
                            //fn.setVolume(0);
                            jQuery(".to-play").hide();
                            jQuery(".to-pause").show();
                            jQuery(".video-controls-container").removeClass("playing");
                            jQuery(".video-controls-container").addClass("paused");
                        }
                    });
                    swiper8.on('slideChangeTransitionEnd', function() {
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            var currentVimeoPostId = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-id-del-post")
                            var currentVimeoSlideIndex = jQuery('.active-project .swiper-slide-active .vimeo-video-container').attr("data-vimeo-index-del-slide")
                            var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player"
                            var fn = window[currentVimeoPlayer];
                            fn.unload();
                            fn.play();
                            fn.setVolume(1);
                        }
                        // LAZY LOADING
                        var L = [].slice.call(document.querySelectorAll('.lazy'));
                        if ('IntersectionObserver' in window) {
                            let o = new IntersectionObserver(function(E, observer) {
                                E.forEach(function(e) {
                                    if (e.isIntersecting) {
                                        let l = e.target;
                                        if (l.tagName == 'IMG') {
                                            l.src = l.dataset.src;
                                        }
                                        if (l.tagName == 'VIDEO') {
                                            var P = l.play();
                                            if (P !== undefined) {
                                                P.catch(error => {
                                                    l.controls = true;
                                                    l.classList.add('no-autoplay');
                                                });
                                            }
                                        }
                                        l.classList.remove('lazy');
                                        o.unobserve(l);
                                    }
                                });
                            });
                            L.forEach(function(l) {
                                o.observe(l);
                            });
                        }
                        if (jQuery('.active-project .swiper-slide-active').find('.vimeo-video-container').length !== 0) {
                            jQuery(".video-controls-container").show();
                        } else {
                            jQuery(".video-controls-container").hide();
                        }
                        if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                            jQuery("body").addClass("to-white");
                            jQuery("#header-background").addClass("to-white");
                        } else {
                            jQuery("body").removeClass("to-white");
                            jQuery("#header-background").removeClass("to-white");
                        };
                    });
                });
            </script>

        </div>

    </div>
    <!-- END general swiper-wraper -->

    <script type="text/javascript">
        jQuery(document).ready(function() {
            if (jQuery(".active-project .swiper-slide-active").find(".vimeo-video-container").length !== 0) {
                jQuery(".video-controls-container").show();
            } else {
                jQuery(".video-controls-container").hide();
            }
            const swiperGeneral = new Swiper("#general-swiper", {
                direction: "vertical",
                loop: false,
                mousewheel: true,
                mousewheelControl: false,
                slideActiveClass: "active-project",
                slideNextClass: "next-project",
                slidePrevClass: "prev-project",
            });
            swiperGeneral.on("slideChange", function() {
                if (jQuery(".active-project .swiper-slide-active").find(".vimeo-video-container").length !== 0) {
                    var currentVimeoPostId = jQuery(".active-project .swiper-slide-active .vimeo-video-container").attr("data-vimeo-id-del-post");
                    var currentVimeoSlideIndex = jQuery(".active-project .swiper-slide-active .vimeo-video-container").attr("data-vimeo-index-del-slide");
                    var currentVimeoPlayer = "video" + currentVimeoPostId + currentVimeoSlideIndex + "Player";
                    var fn = window[currentVimeoPlayer];
                    fn.pause();
                    fn.unload();
                    jQuery(".to-play").show();
                    jQuery(".to-pause").hide();
                    jQuery(".video-controls-container").removeClass("playing");
                    jQuery(".video-controls-container").addClass("paused");

                }

            });
            swiperGeneral.on("slideChangeTransitionEnd", function() {
                if (jQuery(".active-project .swiper-slide-active").is(".white-text")) {
                    jQuery("body").addClass("to-white");
                    jQuery("#header-background").addClass("to-white");
                } else {
                    jQuery("body").removeClass("to-white");
                    jQuery("#header-background").removeClass("to-white");
                }
                jQuery("#info-bar .client-name").text(jQuery(".swiper-slide.active-project .project-info-module.project-client p.client").text());
            });
            swiperGeneral.on("slideChangeTransitionStart", function() {
                if (jQuery(".active-project .swiper-slide-active").find(".vimeo-video-container").length !== 0) {
                    jQuery(".video-controls-container").show();
                } else {
                    jQuery(".video-controls-container").hide();
                }
            });

            jQuery(".archive.category #cat-trigger-creative-direction").remove();
            jQuery(".archive.tag #collaborator-trigger-creative-direction").remove();
            jQuery("#info-bar .client-name").text(jQuery(".swiper-slide.active-project .project-info-module.project-client p.client").text());
        });
    </script>
    <!-- END CONTENT -->


</section>
<?php get_footer(); ?>






<div class="px-4 sm:px-10 pt-3 md:px-32 grid grid-cols-2 pb-3" style="
    margin-bottom: -12px;
    margin-top: -2px;
"><h1 class="font-sans px-1 font-bold text-gray2 tracking-wide w-56 text-lg2 sm:text-xl" style="
    color: #ffffff;
    font-weight: 400;
    /* margin-bottom: -15px; */
    /* letter-spacing: 0px; */
"> Tus Amigos </h1><div class="text-sm -mb-0.5 h-full cursor-pointer tracking-wide text-blue-opaque align-center inline-flex items-center font-sans ml-5 place-self-end" style="width: 102px;justify-content: center;/* margin-right: 5px; */border-radius: 50px;padding-top: 2px;color: #d0e2ffd9 !important;"> Ver todas <svg aria-hidden="true" class="svg-inline--fa fa-chevron-right fa-w-10 text-blue-opaque ml-1" data-icon="chevron-right" data-prefix="fad" focusable="false" role="img" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg" style="height: 17px;"><g class="fa-group"><path class="opacity-60" d="M188.74 256l56.78 56.89L91.21 466.9a24 24 0 0 1-33.94 0l-22.7-22.65a23.93 23.93 0 0 1 0-33.84z" fill="currentColor"></path><path class="fa-primary" d="M91.25 45.06l194.33 194a23.93 23.93 0 0 1 0 33.84l-40 40-211-211.34a23.92 23.92 0 0 1 0-33.84l22.7-22.65a24 24 0 0 1 33.97-.01z" fill="currentColor"></path></g></svg></div></div>

<div class="sm:hidden place-self-center w-100vw h-auto mx-3 sm:h-28 sm:mx-2 mr-2 sm:mt-5 md:pl-8" style="margin-top: 7px;margin-bottom: 9px;/* display: none; */"><div class="big-banner-enter sm:inline-flex m-auto mx-2 my-2 sm:mx-0 cursor-pointer text-sm leading-none inline-flex shadow" style="color: white;align-items: center;background-image: linear-gradient(227deg, rgb(51 116 191), rgb(31 96 180));/* width: 42.5%; *//* filter: hue-rotate(359deg); */"><button class="inline-flex items-center transition-colors duration-300 ease-in btn-banner-enter px-3 py-1" style="background-image: linear-gradient(345deg, rgba(255, 255, 255, 0.32) 50%, transparent 51%, transparent);"><span class="span-big-banner-enter">Pedir lista de deseos a amigo<br></span><span><img lazy="loading" src="/fotos/3d/bookmark-fav-dynamic-color.png" style="position: relative;top: 10px;/* left: -116px; */height: 129px;min-width: 129px;filter: hue-rotate(317deg);"></span></button></div><div class="big-banner-enter sm:inline-flex m-auto mx-2 my-2 ml-2 sm:pt-0 md:mb-6 md:mt-10 cursor-pointer bg-white text-sm leading-none inline-flex shadow" style="background-image: linear-gradient(45deg, rgb(247, 117, 86), rgb(255, 61, 61));color: white;width: 42%;display: none;"><button class="inline-flex items-center transition-colors duration-300 ease-in focus:outline-none px-3 py-1" style="background-image: linear-gradient(345deg, rgba(255, 255, 255, 0.16) 50%, transparent 51%, transparent); height: 100px; width: 100%;"><span class="span-big-banner-enter" style="min-width: 170px;">Añadir<br>deseo</span><span><img src="/fotos/3d/gift-dynamic-premium.png" width="200" height="200" style="filter: hue-rotate(314deg); height: 137px; top: 10px; position: relative; left: -120px; min-width: 137px;"></span></button></div></div>



///////////////////////////////////////////////////////

<?php
/**
 * Header template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html class="<?php avada_the_html_class(); ?>" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <?php Avada()->head->the_viewport(); ?>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">









    <?php wp_head(); ?>

    <?php
    /**
     * The setting below is not sanitized.
     * In order to be able to take advantage of this,
     * a user would have to gain access to the database
     * in which case this is the least of your worries.
     */
    echo apply_filters( 'avada_space_head', Avada()->settings->get( 'space_head' ) ); // phpcs:ignore WordPress.Security.EscapeOutput
    ?>
</head>

<?php
$object_id      = get_queried_object_id();
$c_page_id      = Avada()->fusion_library->get_page_id();
$wrapper_class  = 'fusion-wrapper';
$wrapper_class .= ( is_page_template( 'blank.php' ) ) ? ' wrapper_blank' : '';
?>
<body <?php body_class(); ?> <?php fusion_element_attributes( 'body' ); ?>>
<?php do_action( 'avada_before_body_content' ); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Avada' ); ?></a>



<style>

    body{
        font-family: 'IBM Plex Sans', sans-serif;
    }

    .client-name{
        font-family: 'IBM Plex Sans', sans-serif;
        font-weight: 500;
        font-size:30px;
    }

    #info-bar{
        bottom: 80px;
    }

    #boxed-wrapper{
        position: fixed;
        width: 100%;
    }





    .navbarmagma{
        position: absolute;
        top: 51px;
        left: 48px;
        font-family: 'IBM Plex Sans', sans-serif;
    }

    .navbarinsidemagma{
        overflow-x: hidden;
        height: 0px;
        transition: 0.5s;
        width: 500px;
        margin-top: 53px;
        margin-left: -4px;
    }






    .magma-cross{
        font-size: 81px;
        color: #9e3833;
        font-weight: 200;
        line-height: 20px;
        position: absolute;
    }
    .magma-minus{
        font-size: 80px;
        color: #9e3833;
        font-weight: 200;
        transform: translate(2px, -93px);
        position: absolute;
    }

    .magma-menus-title{
        font-size: 27px;
        margin: 10px 4px;
        writing-mode: vertical-lr;
        rotate: 180deg;
        font-weight: 400;
        cursor:pointer;
        transform: scale(1.0);
        transition: 0.5s;
    }


    .magma-menus-title:hover{
        transform: scale(1.09);

    }

    .magma-menus-title:focus{
        color: #9e3833;

    }

    .magma-mini-title-red{

        color: #9e3833;
        font-size: 17px;
        font-weight: 800;
        line-height: 24px;
    }



    .icon-menu-magma{
        border-radius: 50px;
        height: 32px;
        width: 32px;
        rotate: -90deg;
        background: #9e3833;
        padding: 5px 6px;
        margin-left: 13px;
        margin-top: 12px;
    }

    .magma-lang-title{
        margin: 13px 10px;
        writing-mode: vertical-lr;
        rotate: 180deg;
        font-weight: 500;
        font-size: 21px;
        cursor:pointer;
        transform: scale(1.0);
        transition: 0.5s;
    }
    .magma-lang-title:hover{
        transform: scale(1.05);
    }

    .navbarinsidemagma .menus{

    }

    .magma-submenu{
        overflow: hidden;
        transition: 0.5s;
        position: absolute;
        width: 0px;
        text-align: initial;
        margin-left: 66px;
        text-overflow: ellipsis;
        white-space: nowrap;
    }



    .show-contact #magma-contact{
        width:300px;
    }
    .show-contact .magma-contact-btn{
        color:#9e3833;
    }

    .show-aboutus #magma-aboutus{
        width:300px;
    }
    .show-aboutus .magma-aboutus-btn{
        color:#9e3833;
    }


    .hide-eng{
        display:none;
    }
    .eng .hide-eng{
        display:initial;
    }
    .eng .active-eng{
        color: #9e3833;
    }


    .hide-cat{
        display:none;
    }
    .cat .hide-cat{
        display:initial;
    }
    .cat .active-cat{
        color: #9e3833;
    }

    .hide-cast{
        display:none;
    }
    .cast .hide-cast{
        display:initial;
    }
    .cast .active-cast{
        color: #9e3833;
    }





    .project-info-module {
        padding: 0px;
    }

    .project-credit {
        display: block;
        font-weight: 300;
        font-size: 16px;
        opacity: 0.8;
        margin: 0;
        line-height: 20px;
        letter-spacing: 1px;
    }
    .info-tag-mobile {
        text-transform: uppercase;
        color: #9e3833;
        font-weight: 900;
        font-size: 17px;
        margin-bottom: -4px;
        margin-top: -2px;
    }

    .project-info-bar {
        position: absolute;
        bottom: 98px;
        display: grid;
        grid-template-columns: 1fr;
        width: calc(30% - 20px);
        pointer-events: none;
        z-index: 10;
        right: 50px;
        text-align: right;
    }
















    header{
        height: 100px;
    }

    .fusion-row{
        margin:0px;
    }

    .projects{
        background: rgb(5 5 5);
        min-height: 100vh;
        width: 100vw;
    }

    .main-projects{
        padding: 150px 220px 130px 220px;
        /*     background: rgba(11, 11, 11, 0.3); */
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        position: relative;
        z-index: 3;
        background-position: center;
        -webkit-background-size: cover;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }


    .filters {
        padding: 61px 140px 20px 140px;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10001;
        width: 60%;
        left: 20%;
    }

    .filters div {
        padding: 0 20px;
        cursor: pointer;
        font-size: 14px;
        line-height: 1.42857143;
        cursor:pointer;
    }

    .project{
        text-align: center;
        margin-bottom: 95px;
        width: 31.3%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;

        margin-left: 1%;
        margin-right: 1%;
        height: 158px;
        align-items: center;
        cursor:pointer;
    }

    .project a{
        position: absolute;
        max-width: calc(33% - 80px);
        z-index:100;
        transition:0.5s;
        transform:scale(1.1);
    }

    .project-background{
        width: 100%;
        height: 100%;
        background-size: cover;
        border-radius: 16px;
        box-shadow: 0px 2px 20px 0 #ffffff1f;
        opacity:0;
        transition:0.5s;
        transform:scale(0.9);
    }
    .project:hover .project-background{
        opacity:1;
        transform:scale(1);
    }
    .project:hover a{

        transform:scale(0.98);
    }

    .background-degrade{
        background-image: linear-gradient(0deg, #00000091, #00000000);
        height: inherit;
        border-radius: 16px;
    }

    .main-projects h2 {
        margin: 0;
        padding: 0;
        font-weight: 500;
        font-size: 30px;
        letter-spacing: -0.86px;
        line-height: 45px;
    }

    .main-projects h3 {
        font-weight: 100;
        font-size: 17px;
        letter-spacing: 0;
        line-height: 45px;
        margin: -17px 0 0 0;
        padding: 0;
        color: #AFAFAF;
    }






</style>

<div id="boxed-wrapper">
    <div class="fusion-sides-frame"></div>
    <div id="wrapper" class="<?php echo esc_attr( $wrapper_class ); ?>">
        <div id="home" style="position:relative;top:-1px;"></div>

        <header class="fusion-header-wrapper fusion-header-shadow">
            <section id="navbarmagma"  class="navbarmagma eng">
                <a href="javascript:void(0)" id="magma-cross" class="magma-cross" onclick="VisibilityNav()">+</a>
                <a href="javascript:void(0)" id="magma-minus" class="magma-minus" onclick="VisibilityNav()" style="display:none;">_</a>
                <div id="navbarinsidemagma" class="navbarinsidemagma" >

                    <div class="menus"  onclick="VisibilityContact()">

                        <div id="magma-contact" class="magma-submenu">
                            <div class="magma-mini-title-red">LAU VILA</div>
                            <div class="magma-mini-subtitle-white">697 612 798</div>
                            <div class="magma-mini-title-red">MARC ALGORA</div>
                            <div class="magma-mini-subtitle-white">699 109 703</div>
                            <div class="magma-mini-title-red">CORREU</div>
                            <div class="magma-mini-subtitle-white">magmavisualstudio@gmail.com</div>
                        </div>
                        <div class="magma-menus-title magma-contact-btn hide-cast" style="font-weight:500;">
                            CONTACTO
                        </div>
                        <div class="magma-menus-title magma-contact-btn hide-cat" style="font-weight:500;">
                            CONTACTE
                        </div>
                        <div class="magma-menus-title magma-contact-btn  hide-eng" style="font-weight:500;">
                            CONTACT
                        </div>
                    </div>

                    <div class="menus" onclick="VisibilityAboutUs()">


                        <div  id="magma-aboutus" class="magma-submenu">
                            <div class="magma-mini-title-red">LAU VILA</div>
                            <div class="magma-mini-subtitle-white">DOP</div>
                            <div class="magma-mini-title-red">MARC ALGORA</div>
                            <div class="magma-mini-subtitle-white">DIRECTOR</div>

                        </div>
                        <div class="magma-menus-title magma-aboutus-btn  hide-cast">
                            NOSOTROS
                        </div>
                        <div class="magma-menus-title magma-aboutus-btn hide-cat">
                            NOSALTRES
                        </div>
                        <div class="magma-menus-title magma-aboutus-btn hide-eng">
                            ABOUT US
                        </div>
                    </div>

                    <div class="menus">
                        <a href="https://magmavs.com/collections/" style="color:white" >

                            <div class="magma-menus-title hide-cast">
                                PROYECTOS
                            </div>
                            <div class="magma-menus-title hide-cat">
                                PROJECTES
                            </div>
                            <div class="magma-menus-title hide-eng">
                                WORK
                            </div>
                        </a>
                    </div>


                    <a href="https://www.instagram.com/magma.vs/"   style="margin-top:10px;">
                        <div class="icon-menu-magma">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="white" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></div>
                    </a>

                    <a href="https://vimeo.com/user106245085" >
                        <div class="icon-menu-magma">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="white" d="M447.8 153.6c-2 43.6-32.4 103.3-91.4 179.1-60.9 79.2-112.4 118.8-154.6 118.8-26.1 0-48.2-24.1-66.3-72.3C100.3 250 85.3 174.3 56.2 174.3c-3.4 0-15.1 7.1-35.2 21.1L0 168.2c51.6-45.3 100.9-95.7 131.8-98.5 34.9-3.4 56.3 20.5 64.4 71.5 28.7 181.5 41.4 208.9 93.6 126.7 18.7-29.6 28.8-52.1 30.2-67.6 4.8-45.9-35.8-42.8-63.3-31 22-72.1 64.1-107.1 126.2-105.1 45.8 1.2 67.5 31.1 64.9 89.4z"/></svg></div>
                    </a>

                    <div class="menus"  onclick="ChangeLang(1)" style="margin-top:25px;">
                        <div  class="magma-lang-title active-cast " >
                            CAST
                        </div>
                    </div>
                    <div class="menus" onclick="ChangeLang(2)">
                        <div  class="magma-lang-title active-cat " >
                            CAT
                        </div>
                    </div>
                    <div class="menus" onclick="ChangeLang(3)">
                        <div  class="magma-lang-title active-eng " >
                            ENG
                        </div>
                    </div>



                </div>

            </section>


            <div class="fusion-logo fusion-main-menu" data-margin-top="31px" data-margin-bottom="31px" data-margin-left="0px" data-margin-right="0px" style="box-shadow:none;">
                <a class="fusion-logo-link" href="https://magmavs.com/" style="
    margin-top: 27px;
    margin-right: -14px;     height: 70px;
    ">

                    <svg fill="white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="600 400 800 600" style="enable-background:new 0 0 1920 1080;width: 251px;" xml:space="preserve">
<style type="text/css">
    .st0{clip-path:url(#SVGID_2_);}
</style>
                        <g>
                            <defs>
                                <rect id="SVGID_1_" x="721.71" y="492.06" width="476.94" height="96.38"></rect>
                            </defs>
                            <clipPath id="SVGID_2_">
                                <use xlink:href="#SVGID_1_" style="overflow:visible;"></use>
                            </clipPath>
                            <path class="st0" d="M942.76,566.84h-18.79c1.5,4.62,3.81,8.54,6.93,11.77c3.12,3.22,6.95,5.67,11.48,7.33
		c4.54,1.66,10.13,2.5,16.79,2.5c12.48,0,21.82-3.66,28.02-10.98c4.62-5.41,6.93-13.86,6.93-25.34v-28.88
		c-5.66-1.39-11.4-2.44-17.09-2.76c0.65,2.05,0.99,4.29,0.99,6.73c0,5.74-1.72,10.38-5.15,13.92c-3.43,3.54-7.79,5.31-13.08,5.31
		c-5.41,0-9.9-1.81-13.48-5.43c-2.61-2.64-4.26-5.83-4.96-9.56c-2.71,1.84-5.4,3.8-8.12,5.81c-2.15,1.58-4.33,3-6.54,4.3
		c1.57,3.86,3.82,7.35,6.77,10.44c6.28,6.57,13.98,9.86,23.09,9.86c4.16,0,7.89-0.66,11.17-1.97c3.29-1.31,6.43-3.46,9.42-6.46
		c0,5.49-0.57,9.36-1.72,11.61c-1.15,2.25-3.11,4.08-5.9,5.49c-2.79,1.41-6.47,2.12-11.05,2.12c-3.58,0-6.68-0.49-9.3-1.47
		C946.56,570.2,944.42,568.75,942.76,566.84 M994.12,516.3v-22.36h-16.98v7.49c-3.49-3.29-6.98-5.65-10.45-7.08
		c-3.47-1.44-7.17-2.15-11.08-2.15c-8.36,0-15.56,2.96-21.6,8.86c-0.96,0.94-1.85,1.94-2.67,2.97c0.58-0.09,1.16-0.18,1.76-0.24
		c16.12-1.76,33.14,4.25,48.3,8.98C985.71,514.11,989.94,515.29,994.12,516.3"></path>
                            <path class="st0" d="M841.7,541.48c1.6,4.41,4.05,8.38,7.36,11.91c6.4,6.8,13.98,10.21,22.75,10.21c3.91,0,7.53-0.7,10.88-2.09
		c3.34-1.39,6.68-3.67,10.01-6.83v7.18h17.04v-12.98c-13.35,3.8-27.54,3.61-42.26,0.26C858.98,547.19,850.38,544.3,841.7,541.48
		 M909.74,512.67v-18.73H892.7v7.49c-3.04-3.08-6.34-5.39-9.91-6.93c-3.57-1.54-7.4-2.31-11.47-2.31c-8.85,0-16.38,3.35-22.57,10.05
		c-6.19,6.7-9.29,15.29-9.29,25.78c0,1.9,0.11,3.74,0.34,5.52c5.98,0.97,11.85,1.38,17.61,1.18c-0.64-2.11-0.97-4.4-0.97-6.89
		c0-5.83,1.74-10.6,5.23-14.32c3.48-3.72,7.86-5.59,13.12-5.59c5.39,0,9.85,1.83,13.37,5.49c2.75,2.86,4.41,6.41,5.02,10.64
		c1.87-1.15,3.73-2.36,5.56-3.7C902.43,517.64,906.04,515.01,909.74,512.67"></path>
                            <path class="st0" d="M809.19,533.35v28.5h17.16v-25.02C820.66,535.28,814.94,534.03,809.19,533.35 M765.88,539.22v22.63h17.16
		v-26.97C777.3,536.16,771.61,537.81,765.88,539.22 M722.31,539.5v22.35h17.04v-19.9C733.62,541.51,727.97,540.52,722.31,539.5
		 M826.36,530.55v-8.52c0-8.16-0.8-14.04-2.41-17.66c-1.6-3.62-4.24-6.55-7.9-8.8c-3.66-2.25-7.91-3.37-12.74-3.37
		c-4.66,0-8.96,1.04-12.9,3.12c-3.93,2.08-7.26,5.12-9.96,9.11c-2.08-3.99-4.83-7.03-8.24-9.11c-3.41-2.08-7.24-3.12-11.49-3.12
		c-4.21,0-8.09,0.79-11.65,2.37c-3.56,1.58-6.8,3.97-9.71,7.18v-7.8h-17.04v30.31c6.05-1.02,12.01-2.66,17.98-4.23
		c0.22-1.03,0.48-1.95,0.78-2.74c1.15-3.04,2.88-5.4,5.19-7.08c2.32-1.69,4.89-2.53,7.73-2.53c2.54,0,4.71,0.67,6.51,2
		c1.79,1.33,3.14,3.36,4.03,6.09c0.02,0.04,0.03,0.1,0.04,0.14c6.63-0.09,13.24,0.79,19.81,2.2c0.11-0.36,0.22-0.71,0.35-1.03
		c1.12-2.93,2.84-5.23,5.15-6.9c2.31-1.66,4.92-2.5,7.83-2.5c3.83,0,6.7,1.36,8.61,4.09c1.73,2.46,2.67,6.96,2.84,13.46
		C814.93,527.1,820.66,528.97,826.36,530.55"></path>
                            <path class="st0" d="M1098.1,529.36v32.49h17.16V522.7C1109.49,524.68,1103.85,527.12,1098.1,529.36 M1054.79,536.97v24.88h17.16
		v-25.64C1066.21,536.95,1060.5,537.18,1054.79,536.97 M1011.22,528.19v33.65h17.04v-28.74c-4.07-0.99-8.19-2.14-12.37-3.44
		C1014.36,529.18,1012.8,528.69,1011.22,528.19 M1112.24,503.09c-1.63-3.04-4.05-5.55-7.28-7.53c-3.66-2.25-7.91-3.37-12.74-3.37
		c-4.66,0-8.96,1.04-12.9,3.12c-3.93,2.08-7.26,5.12-9.96,9.11c-2.08-3.99-4.83-7.03-8.24-9.11c-3.42-2.08-7.25-3.12-11.49-3.12
		c-4.21,0-8.09,0.79-11.65,2.37c-3.56,1.58-6.8,3.97-9.71,7.18v-7.8h-17.04v25.44c6.01,0.69,11.99,0.94,17.98,0.66
		c0.22-1.04,0.48-1.96,0.78-2.76c1.15-3.04,2.88-5.4,5.19-7.08c2.32-1.68,4.89-2.53,7.73-2.53c2.54,0,4.71,0.67,6.51,2
		c1.79,1.33,3.14,3.36,4.04,6.08c0.02,0.06,0.04,0.13,0.05,0.19c2.93-0.86,5.88-1.84,8.86-2.99c11.49-4.4,22.51-9.8,34.94-10.92
		C1102.26,501.59,1107.28,502.13,1112.24,503.09"></path>
                            <path class="st0" d="M1129.19,519.23c-0.54,2.77-0.82,5.69-0.82,8.79c0,10.11,3.2,18.57,9.6,25.37c6.4,6.8,13.99,10.21,22.76,10.21
		c3.91,0,7.53-0.7,10.88-2.09c3.34-1.39,6.68-3.67,10.01-6.83v7.18h17.04V532.7c-5.52-0.98-11.01-2.24-16.34-3.59
		c-0.25,5.41-1.98,9.85-5.24,13.29c-3.52,3.72-7.96,5.59-13.31,5.59c-5.18,0-9.55-1.89-13.09-5.68c-3.55-3.79-5.32-8.61-5.32-14.48
		c0-2.88,0.43-5.5,1.28-7.86c-4.93-0.95-9.92-1.48-14.85-1.04C1130.91,519,1130.05,519.11,1129.19,519.23 M1198.65,516.17v-22.23
		h-17.04v7.49c-3.03-3.08-6.34-5.39-9.91-6.93c-3.57-1.54-7.4-2.31-11.47-2.31c-8.85,0-16.38,3.35-22.57,10.05
		c-1.73,1.88-3.21,3.9-4.46,6.08c5.65,1.54,11.67,3.2,17.87,4.71c3.4-3.39,7.6-5.1,12.63-5.1c5.39,0,9.85,1.83,13.37,5.49
		c1.22,1.27,2.22,2.69,3.02,4.23C1186.48,517.92,1192.74,517.54,1198.65,516.17"></path>
                            <path class="st0" d="M841.1,541.35c1.6,4.41,4.05,8.38,7.36,11.91c6.4,6.8,13.99,10.21,22.76,10.21c3.91,0,7.53-0.7,10.88-2.09
		c3.34-1.39,6.68-3.67,10.01-6.83v7.18h17.04v-12.98c-13.35,3.8-27.54,3.61-42.26,0.26C858.38,547.06,849.78,544.17,841.1,541.35
		 M909.14,512.53v-18.73H892.1v7.49c-3.03-3.08-6.34-5.39-9.91-6.93c-3.57-1.54-7.4-2.31-11.47-2.31c-8.85,0-16.38,3.35-22.57,10.05
		c-6.19,6.7-9.29,15.29-9.29,25.78c0,1.9,0.11,3.74,0.34,5.52c5.98,0.97,11.85,1.38,17.61,1.18c-0.64-2.11-0.97-4.4-0.97-6.89
		c0-5.83,1.74-10.6,5.22-14.32c3.48-3.72,7.86-5.59,13.12-5.59c5.39,0,9.85,1.83,13.37,5.49c2.75,2.86,4.41,6.41,5.02,10.64
		c1.87-1.15,3.73-2.36,5.56-3.7C901.83,517.51,905.44,514.88,909.14,512.53"></path>
                            <path class="st0" d="M808.59,533.22v28.5h17.16v-25.02C820.06,535.15,814.34,533.9,808.59,533.22 M765.28,539.09v22.63h17.16
		v-26.97C776.7,536.03,771,537.68,765.28,539.09 M721.71,539.36v22.35h17.04v-19.9C733.02,541.37,727.37,540.39,721.71,539.36
		 M825.75,530.41v-8.52c0-8.15-0.8-14.04-2.41-17.66c-1.6-3.62-4.24-6.55-7.9-8.8c-3.66-2.25-7.91-3.37-12.74-3.37
		c-4.66,0-8.96,1.04-12.9,3.12c-3.93,2.08-7.26,5.12-9.96,9.11c-2.08-3.99-4.83-7.03-8.24-9.11c-3.42-2.08-7.25-3.12-11.49-3.12
		c-4.21,0-8.09,0.79-11.65,2.37c-3.56,1.58-6.8,3.97-9.71,7.18v-7.8h-17.04v30.31c6.05-1.02,12.01-2.66,17.98-4.23
		c0.22-1.03,0.48-1.95,0.78-2.74c1.15-3.04,2.88-5.4,5.19-7.08c2.32-1.68,4.89-2.53,7.73-2.53c2.55,0,4.71,0.67,6.51,2
		c1.79,1.33,3.14,3.36,4.04,6.09c0.01,0.04,0.03,0.09,0.04,0.14c6.63-0.09,13.24,0.79,19.81,2.2c0.11-0.36,0.22-0.71,0.34-1.03
		c1.12-2.93,2.84-5.23,5.15-6.9c2.31-1.66,4.92-2.5,7.83-2.5c3.83,0,6.7,1.36,8.61,4.09c1.73,2.46,2.67,6.96,2.84,13.46
		C814.33,526.96,820.06,528.84,825.75,530.41"></path>
                            <path class="st0" d="M1097.5,529.22v32.49h17.16v-39.14C1108.89,524.55,1103.24,526.98,1097.5,529.22 M1054.19,536.84v24.88h17.16
		v-25.64C1065.6,536.81,1059.9,537.05,1054.19,536.84 M1010.62,528.06v33.65h17.04v-28.74c-4.07-0.99-8.19-2.14-12.37-3.44
		C1013.76,529.05,1012.2,528.55,1010.62,528.06 M1111.64,502.96c-1.63-3.04-4.05-5.55-7.28-7.53c-3.67-2.25-7.91-3.37-12.74-3.37
		c-4.66,0-8.96,1.04-12.9,3.12c-3.94,2.08-7.26,5.12-9.96,9.11c-2.08-3.99-4.83-7.03-8.24-9.11c-3.41-2.08-7.25-3.12-11.49-3.12
		c-4.21,0-8.09,0.79-11.65,2.37c-3.56,1.58-6.8,3.97-9.71,7.18v-7.8h-17.04v25.44c6.01,0.69,11.99,0.94,17.98,0.66
		c0.22-1.04,0.48-1.96,0.78-2.76c1.15-3.04,2.88-5.4,5.19-7.08c2.31-1.68,4.89-2.53,7.73-2.53c2.54,0,4.71,0.67,6.51,2
		c1.79,1.33,3.14,3.36,4.03,6.08c0.02,0.06,0.04,0.13,0.05,0.19c2.93-0.86,5.88-1.84,8.86-2.99c11.49-4.4,22.51-9.8,34.93-10.92
		C1101.66,501.45,1106.68,502,1111.64,502.96"></path>
                            <path class="st0" d="M1128.59,519.09c-0.54,2.77-0.82,5.69-0.82,8.79c0,10.11,3.2,18.57,9.6,25.37c6.4,6.8,13.99,10.2,22.76,10.2
		c3.91,0,7.53-0.7,10.88-2.09c3.34-1.39,6.68-3.67,10.01-6.83v7.18h17.04v-29.15c-5.52-0.98-11.01-2.24-16.34-3.59
		c-0.25,5.41-1.98,9.85-5.24,13.3c-3.52,3.72-7.96,5.59-13.31,5.59c-5.18,0-9.55-1.89-13.09-5.68c-3.55-3.79-5.32-8.61-5.32-14.48
		c0-2.88,0.43-5.5,1.28-7.86c-4.93-0.95-9.91-1.48-14.85-1.04C1130.31,518.87,1129.45,518.98,1128.59,519.09 M1198.05,516.03v-22.23
		h-17.04v7.49c-3.04-3.08-6.34-5.39-9.91-6.93c-3.57-1.54-7.4-2.31-11.47-2.31c-8.85,0-16.38,3.35-22.57,10.05
		c-1.73,1.88-3.21,3.9-4.46,6.08c5.65,1.54,11.67,3.2,17.87,4.71c3.4-3.39,7.6-5.1,12.63-5.1c5.39,0,9.85,1.83,13.37,5.49
		c1.22,1.27,2.22,2.69,3.02,4.23C1185.88,517.79,1192.13,517.4,1198.05,516.03"></path>
                        </g>
</svg>
                </a>
            </div>



            <script>
                let navcollapsed=true;
                let contactcollapsed=true;
                let aboutuscollapsed=true;
                function VisibilityNav() {
                    if(navcollapsed){
                        document.getElementById("navbarinsidemagma").style.height = "800px";
                        document.getElementById("magma-cross").style.display = "none";
                        document.getElementById("magma-minus").style.display = "initial";
                        navcollapsed=false;
                    }else{
                        document.getElementById("navbarinsidemagma").style.height = "0px";
                        document.getElementById("magma-cross").style.display = "initial";
                        document.getElementById("magma-minus").style.display = "none";
                        navcollapsed=true;
                        console.log('colapsed');
                    }
                }


                function VisibilityContact() {
                    if(contactcollapsed){
                        document.getElementById("navbarinsidemagma").className="navbarinsidemagma show-contact";

                        contactcollapsed=false;
                    }else{
                        document.getElementById("navbarinsidemagma").className="navbarinsidemagma";

                        contactcollapsed=true;
                    }
                }

                function VisibilityAboutUs() {
                    if(aboutuscollapsed){
                        document.getElementById("navbarinsidemagma").className="navbarinsidemagma show-aboutus";

                        aboutuscollapsed=false;
                    }else{
                        document.getElementById("navbarinsidemagma").className="navbarinsidemagma ";

                        aboutuscollapsed=true;
                    }
                }


                function ChangeLang(i){
                    if(i===1){
                        document.getElementById("navbarmagma").className="navbarmagma cast";
                    }
                    if(i===2){
                        document.getElementById("navbarmagma").className="navbarmagma cat";
                    }
                    if(i===3){
                        document.getElementById("navbarmagma").className="navbarmagma eng";
                    }
                }


            </script>



        </header>


        <main id="main" class="clearfix <?php echo esc_attr( $main_class ); ?>">
            <div class="fusion-row" style="<?php echo esc_attr( $row_css ); ?>">
