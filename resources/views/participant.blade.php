<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecofy</title>

        <!-- Fonts -->


{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <script type="text/javascript">--}}
{{--            window.csrf_token = "{{ csrf_token() }}"--}}
{{--        </script>--}}


{{--        <script defer="defer" src="/static/js/participant.js"></script>--}}
{{--        <link href="/static/css/participant.css" rel="stylesheet">--}}

        <script defer="defer" src="/static/js/main.a8d12e56.js"></script>
        <link href="/static/css/main.e48a7d08.css" rel="stylesheet">



        <!-- Styles -->


       <?php //if ( has_action( 'avada_render_header' ) ) : ?>
				<?php do_action( 'avada_render_header' ); ?>
			<?php else : ?>

				<?php avada_header_template( 'below', ( is_archive() || Avada_Helper::bbp_is_topic_tag() ) && ! ( class_exists( 'WooCommerce' ) && is_shop() ) ); ?>
				<?php if ( 'left' === fusion_get_option( 'header_position' ) || 'right' === fusion_get_option( 'header_position' ) ) : ?>
					<?php avada_side_header(); ?>
				<?php endif; ?>

				<?php avada_sliders_container(); ?>

				<?php avada_header_template( 'above', ( is_archive() || Avada_Helper::bbp_is_topic_tag() ) && ! ( class_exists( 'WooCommerce' ) && is_shop() ) ); ?>

			<?php endif; ?>

        <?php avada_current_page_title_bar( $c_page_id ); ?>

        <?php -->
 			$row_css    = '';
        $main_class = '';

        if ( apply_filters( 'fusion_is_hundred_percent_template', false, $c_page_id ) ) {
            $row_css    = 'max-width:100%;';
            $main_class = 'width-100';
        }

        if ( fusion_get_option( 'content_bg_full' ) && 'no' !== fusion_get_option( 'content_bg_full' ) ) {
            $main_class .= ' full-bg';
        }
        do_action( 'avada_before_main_container' );
        ?>












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
                    <div class="magma-menus-title hide-cast" style="font-weight:500;">
                        CONTACTO
                    </div>
                    <div class="magma-menus-title hide-cat" style="font-weight:500;">
                        CONTACTE
                    </div>
                    <div class="magma-menus-title hide-eng" style="font-weight:500;">
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
                    <div class="magma-menus-title hide-cast">
                        NOSOTROS
                    </div>
                    <div class="magma-menus-title hide-cat">
                        NOSALTRES
                    </div>
                    <div class="magma-menus-title hide-eng">
                        ABOUT US
                    </div>
                </div>

                <div class="menus">
                    <div class="magma-menus-title hide-cast">
                        PROYECTOS
                    </div>
                    <div class="magma-menus-title hide-cat">
                        PROJECTES
                    </div>
                    <div class="magma-menus-title hide-eng">
                        WORK
                    </div>

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
            <a class="fusion-logo-link" href="https://magmavs.com/" style="margin-top: 35px;
    margin-right: 45px;">
                <img src="https://magmavs.com/wp-content/uploads/2022/08/LOGO-MAGMA-BLANC-NOU-1-e1661550126328.png" srcset="https://magmavs.com/wp-content/uploads/2022/08/LOGO-MAGMA-BLANC-NOU-1-e1661550126328.png 1x" width="150" height="30" alt="Magma Visual Studio Logo" data-retina_logo_url="" class="fusion-standard-logo" style="width:180px;">
            </a>
        </div>


        <style>

            body{
                font-family: 'IBM Plex Sans', sans-serif;
            }

            .client-name{
                font-family: 'IBM Plex Sans', sans-serif;
                font-size:24px;
            }



            .navbarmagma{
                position: absolute;
                top: 20px;
                left: 45px;
                font-family: 'IBM Plex Sans', sans-serif;
            }

            .magma-cross{
                font-size: 90px;
                color: #9e3833;
                font-weight: 200;
                line-height:37px;

                position: absolute;
            }
            .magma-minus{
                font-size: 87px;
                color: #9e3833;
                font-weight: 200;
                transform: translate(3px, -95px);
                position: absolute;
            }

            .magma-menus-title{
                font-size: 27px;
                margin: 10px 4px;
                writing-mode: vertical-lr;
                rotate: 180deg;
                font-weight: 400;
            }

            .magma-mini-title-red{

                color: #9e3833;
                font-size: 17px;
                font-weight: 800;
                line-height: 24px;
            }

            .navbarinsidemagma{
                overflow-x: hidden;
                height:0px;
                transition: 0.5s;
                width: 500px;
                margin-top: 38px;
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

        </style>

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
                    document.getElementById("magma-contact").style.width = "300px";
                    contactcollapsed=false;
                }else{
                    document.getElementById("magma-contact").style.width = "0px";
                    contactcollapsed=true;
                }
            }

            function VisibilityAboutUs() {
                if(aboutuscollapsed){
                    document.getElementById("magma-aboutus").style.width = "300px";
                    aboutuscollapsed=false;
                }else{
                    document.getElementById("magma-aboutus").style.width = "0px";
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








    </head>
    <body >
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    </body>
</html>
