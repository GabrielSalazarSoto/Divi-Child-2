<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34552774-1"></script>
<script type="text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-34552774-1');


  <?php if (!is_user_logged_in()) { ?>
    
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/service-worker.js');
      });
    }
    
  <?php } ?>
    
</script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Patua+One" type="text/css" />

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php
if(ICL_LANGUAGE_CODE=="en"){
    $titulo = "Carey Lawyers in Chile, the largest law firm in Chile";
}else{
    $titulo = "Carey Abogados Chile, Estudio Jurídico, Abogados en Santiago";
} ?>

<?php if (is_front_page()) { ?>
  <title><?php echo $titulo; ?></title>
<?php } else { ?>
  <title><?php echo get_the_title(); ?> / Carey </title>
<?php } ?>

  <!--[if lt IE 9]>
	<script src="https://www.carey.cl/wp-content/themes/Divi-Child-2/js/html5.js" type="text/javascript"></script>
	<![endif]-->

<?php if (is_singular('cv')) { ?>
    <!-- CV -->
    <link rel="stylesheet" href="https://www.carey.cl/wp-content/themes/Divi-Child-2/includes/jquery.mCustomScrollbar.css" type="text/css" />
    <link rel="stylesheet" href="https://www.carey.cl/wp-content/themes/Divi-Child-2/print.css" type="text/css" media="print" />
<?php } ?>

<?php if(is_page(array('16489','16499'))){ ?>
    <!-- CONACTO -->
    <link rel='stylesheet' id='wpcloudy-css' href='https://www.carey.cl/wp-content/plugins/wp-cloudy/css/wpcloudy.min.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://www.carey.cl/wp-content/themes/Divi-Child-2/includes/reloj.css" type="text/css">
<?php } ?>

<?php if ('areas' == get_post_type() or is_page(array('17129','17693'))){ ?>

<?php } ?>

<?php if(is_page_child('21248')) { ?>
    <link rel="stylesheet" href="https://www.carey.cl/wp-content/themes/Divi-Child-2/includes/probono.css" type="text/css" />
<?php } ?>

<?php include('style.txt'); ?>

<!-- MANUAL HEADER -->
<style>
/* Basic Styles */
@font-face {
	font-family: "ETmodules";
	src: url("/wp-content/themes/Divi-Child-2/fonts/modules.eot");
	src: url("/wp-content/themes/Divi-Child-2/fonts/modules.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/Divi-Child-2/fonts/modules.ttf") format("truetype"), url("/wp-content/themes/Divi-Child-2/fonts/modules.woff") format("woff"), url("/wp-content/themes/Divi-Child-2/fonts/modules.svg#ETmodules") format("svg");
	font-weight: normal;
	font-style: normal;
}


/************ Menu Slide-In ************/


/* Hide submenu */
.et_mobile_menu .menu-item-has-children>a {
    background-color: transparent;
}

#main-header .et_mobile_menu li ul.sub-menu.hide {
    display: none !important;
    visibility: hidden !important;
    /* -webkit-transition: .7s ease-in-out;
    transition: .7s ease-in-out;*/
}

#main-header .et_mobile_menu li ul.sub-menu.visible {
    display: block !important;
    visibility: visible !important;
}

.et_mobile_menu .menu-item-has-children>a:after {
    font-family: "ETmodules";
    font-size: 18px;
    font-weight: 800;
    content: "3";
    position: absolute;
    right: 50px;
}

    #page-container,
    .et_fixed_nav.et_show_nav #page-container,
    .et_fixed_nav.et_show_nav.et_secondary_nav_enabled #page-container,
    .et_non_fixed_nav.et_transparent_nav.et_show_nav #page-container,
    .et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled #page-container{padding-top:130px!important;}
    
    .et_fixed_nav.et_show_nav #page-container,
    .et_non_fixed_nav.et_transparent_nav.et_show_nav #page-container{padding-top:130px!important;}
    
/* Font Awesome */

.fa {
    margin-right: 15px;
}

#wp-admin-bar-et-use-visual-builder a:before {
    width: 28px;
    margin-top: -3px;
    color: #974df3!important;
    font-family: ETmodules!important;
    font-size: 30px!important;
    content: "\e625";
}

#wp-admin-bar-et-use-visual-builder:hover a:before {
    color: #fff!important
}

#wp-admin-bar-et-use-visual-builder a:hover,
#wp-admin-bar-et-use-visual-builder:hover a {
    color: #fff!important;
    background-color: #7e3bd0!important;
    -webkit-transition: background-color .5s ease;
    transition: background-color .5s ease
}
    .video-responsive {
        height: 60vh;
        position: relative;
        width: 100%;
    }

    .canvas,.video {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        /* background: #000; */
    }
    .video{width:100%;height:auto;max-height:1920px;position:absolute;top: -150px;}
    #over_video{
        position: absolute;
        width: 100%;
        height: 100%;
        bottom: 0px;
        z-index: 10;
    }
    .home .bandaazul{
      background-color:#0078A7;
      width: 100%;
      padding:30px 0px 50px 0px;
      position:relative;
      z-index:1;
    }
    .home .bandaazul .contenido {
      max-width: 1000px;
      margin: 0px auto;
    }
    .home .bandaazul .contenido h1{
      color:#fff;
      font-size: 25px;
      font-weight: bold;
    }
    .home .bandaazul .contenido p {
      color:#fff;
      font-weight: normal;
      font-size: 18px;
    }

    .home .bandaazul .bajar {
        position: absolute;
        left:0px;
        right:3px;
        bottom: 0px;
        margin-left:auto;
        margin-right:auto;
        display:block;
        width:58px;
        height:39px;
        margin:0px auto;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -537px 2px;
    }
    /* Boton Bajar */
    #portada .et_pb_fullwidth_header_scroll {
        bottom: 0px;
        padding-bottom: 0px;
    }
    #portada .et_pb_fullwidth_header_scroll a {
        display: inline-block;
        border-top-left-radius: 100px;
        border-top-right-radius: 100px;
        background: #fff;
        padding: 0px 11px 0px 8px;
    }

    .home #contenido {
        /* background-image: url('/wp-content/themes/Divi-Child-2/img/fondo_mkc3m9.jpg'); */
        background-image: url('https://res.cloudinary.com/gsalazar/image/upload/v1508774790/fondo_mkc3m9.jpg');
        background-position: top;
        background-repeat: repeat;
        background-size: auto;
    }
    #contenido{padding: 0px;}

.busqueda .entry-title{font-family:'Patua One',cursive}
    .titulos h2, .filosofia h2, .prensa h2, .historia h2, .premios h2, .tituloscv, .titulos_al{display: block; color: #AFAFAF; border-bottom: dashed 1px #AFAFAF; text-align: left; padding-bottom: 10px; margin: 30px 0px 50px 0px; font-size: 22px; font-family: Open Sans; font-size: 30px; font-weight: bold; width: 100%!important; }


    .et_header_style_left #et-top-navigation, .et_header_style_split #et-top-navigation {
        padding-top: 33px;
        float: right;
    }

    .et_header_style_fullscreen #et_top_search,
    .et_header_style_fullscreen #top-header,
    .et_header_style_fullscreen .et_slide_menu_top .clear,
    .et_header_style_fullscreen div#et_mobile_nav_menu,
    .et_header_style_slide #et_top_search,
    .et_header_style_slide #top-header,
    .et_header_style_slide div#et_mobile_nav_menu,
    .et_slide_in_menu_container #mobile_menu_slide .et_mobile_menu li ul {
        display: none!important
    }

    .et_header_style_fullscreen div#et_mobile_nav_menu,
    .et_header_style_fullscreen.et_fullwidth_nav .et-search-form,
    .et_header_style_slide div#et_mobile_nav_menu,
    .et_header_style_slide.et_fullwidth_nav .et-search-form {
        right: 0!important
    }

    .atenuar {
        opacity: 0.5;
        filter: alpha(opacity=50);
    }


    /*
        Colorbox Core Style:
        The following CSS is consistent between example themes and should not be altered.
    */
        .iframe-r{font-weight: bold;}
    #colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:999999; overflow:hidden; -webkit-transform: translate3d(0,0,0);}
    #cboxWrapper {max-width:none;}
    #cboxOverlay{position:fixed; width:100%; height:100%;}
    #cboxMiddleLeft, #cboxBottomLeft{clear:left;}
    #cboxContent{position:relative;}
    #cboxLoadedContent{overflow:auto; -webkit-overflow-scrolling: touch;}
    #cboxTitle{margin:0;}
    #cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
    #cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
    .cboxPhoto{float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic;}
    .cboxIframe{width:100%; height:100%; display:block; border:0; padding:0; margin:0;}
    #colorbox, #cboxContent, #cboxLoadedContent{box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box;}

    /*
        User Style:
        Change the following styles to modify the appearance of Colorbox.  They are
        ordered & tabbed in a way that represents the nesting of the generated HTML.
    */
    #cboxOverlay{background:#000; opacity: 0.9; filter: alpha(opacity = 90);}
    #colorbox{outline:0;}
    #cboxContent{margin-top:20px;background:#000;}
    .cboxIframe{background:#fff;}
    #cboxError{padding:50px; border:1px solid #ccc;}
    #cboxLoadedContent{border:5px solid #000; background:#fff;}
    #cboxTitle{position:absolute; top:-20px; left:0; color:#ccc;}
    #cboxCurrent{position:absolute; top:-20px; right:0px; color:#ccc;}
    #cboxLoadingGraphic{background:url(/wp-content/themes/Divi-Child-2/img/loading.gif) no-repeat center center;}
    /* these elements are buttons, and may need to have additional styles reset to avoid unwanted base styles */
    #cboxPrevious, #cboxNext, #cboxSlideshow, #cboxClose {border:0; padding:0; margin:0; overflow:visible; width:auto; background:none; }
    /* avoid outlines on :active (mouseclick), but preserve outlines on :focus (tabbed navigating) */
    #cboxPrevious:active, #cboxNext:active, #cboxSlideshow:active, #cboxClose:active {outline:0;}
    #cboxSlideshow{position:absolute; top:-20px; right:90px; color:#fff;}
    #cboxPrevious{display: none;position:absolute; top:50%; left:5px; margin-top:-32px; background:url('/wp-content/themes/Divi-Child-2/img/controls.png') no-repeat top left; width:28px; height:65px; text-indent:-9999px;}
    #cboxPrevious:hover{background-position:bottom left;}
    #cboxNext{display: none;position:absolute; top:50%; right:5px; margin-top:-32px; background:url('/wp-content/themes/Divi-Child-2/img/controls.png') no-repeat top right; width:28px; height:65px; text-indent:-9999px;}
    #cboxNext:hover{background-position:bottom right;}

    #cboxClose{position:absolute; top:5px; right:20px; display:block; background:url('/wp-content/themes/Divi-Child-2/img/close.png') no-repeat top center; width:35px; height:35px; text-indent:-9999px;}
    #cboxClose:hover{background-position:bottom center;}

    #cboxPrevious,#cboxNext{display: none!important;}


    .admin-bar .navbar-fixed-top {
    top: 32px;
    }

    .escondido_cel {
        display: none!important;
    }

    #main-content .container {
        padding-top: 0px;
    }

    #main-content .container:before {
        display: none;
    }

    .et_fixed_nav #main-header,
    .et_fixed_nav #top-header {
        padding: 10px 20px;
    }

    #descripcion strong {
        color: #FFF!important;
    }

    .detalle-area-practica {
        position: absolute;
        bottom: 110px;
        font-size: 24px;
        color: #fff;
        padding: 0px 0px 10px 150px!important;
        border-bottom: 3px solid #fff;
        width: auto;
        text-align: right;
        text-transform: uppercase;
        font-weight: bold;
    }

    .izquierda {
        float: left;
    }

    .derecha {
        float: right;
    }

    .text_izquierda {
        text-align: left;
    }

    .text_derecha {
        text-align: right;
    }

    .text_centro {
        text-align: center;
    }

    .patua {
        font-family: 'Patua One', cursive;
    }

    .escondido {
        display: none;
    }

    .mostrar {
        display: block;
    }

    a:hover,
    .et_pb_post h2 a:hover,
    .et_pb_portfolio_item h3 a:hover,
    .et_pb_blurb h4 a:hover {
        text-decoration: underline;
    }

    .azul {
        color: #2180A8;
    }
    .bgazul{background: #2180A8;height: 83px}

    body .scroll::-webkit-scrollbar {
        width: 0.1em;
    }

    body .scroll::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    body .scroll::-webkit-scrollbar-thumb {
        background-color: #333;
        outline: 1px solid #000;
    }

    .et_pb_row_3 {
        background: transparent!important;
    }


    /*
    |--------------------------------------------------------------------------
    | BOTONES
    |--------------------------------------------------------------------------
    */


    .et_pb_button {
        padding: unset;
    }

    .areas-template-default a{color:#0078A7;font-weight:bold;}
    
    .btn {
        font-family: Arial;
        color: #ffffff;
        background: #3498db;
        padding: 3px 20px 3px 20px;
        text-decoration: none;
        cursor: pointer;
    }

    .btn:hover {
        background: #3cb0fd;
        text-decoration: none;
    }

    .btn_azul {
        display: block;
        width:32%;
        text-align: center;
        -webkit-border-radius: 8;
        -moz-border-radius: 8;
        border-radius: 8px;
        font-family: Arial;
        color: #ffffff!important;
        font-size:20px;
        background: url('/wp-content/themes/Divi-Child-2/img/mail-32.png') no-repeat 10px 5px #0078A7;
        padding:10px 25px 10px 50px;
        text-decoration: none;
        cursor: pointer;
        margin-top:2px;
        float: left;
    }
    .postid-17640 .btn_azul{width:229px;font-size: 16px;}
    .single-post .btn_azul{width:100%;font-size:16px;background: url(/wp-content/themes/Divi-Child-2/img/mail-32.png) no-repeat 20px 18px #0078A7;padding:10px 50px;}
    .news-alert-en .btn_azul{width:100%;font-size:16px;background: url(/wp-content/themes/Divi-Child-2/img/mail-32.png) no-repeat 20px 18px #0078A7;padding:10px 67px;}

    .btn_azul:hover {
      background:url(/wp-content/themes/Divi-Child-2/img/mail-32.png) no-repeat 10px 5px #3cb0fd;
      text-decoration: none;
    }
    
    .single-post .btn_azul:hover{background: url(/wp-content/themes/Divi-Child-2/img/mail-32.png) no-repeat 20px 18px #3cb0fd;padding:10px 50px;}
    .news-alert-en .btn_azul:hover{background: url(/wp-content/themes/Divi-Child-2/img/mail-32.png) no-repeat 20px 18px #3cb0fd;padding:10px 67px;}
    
    et_pb_bg_layout_light.et_pb_button:hover {
        background: transparent;
    }

    .home .boton_circular {
        text-align: center;
        line-height: 1em!important;
        height: 200px;
        width: 200px;
        transition: none!important;
        -webkit-transition: none!important;
        -moz-transition: none;
        color: #575756!important;
    }

    .boton_circular {
        text-align: center;
        float: left;
        margin-right:44px;
        height:170px;
        width:170px;
        line-height:10em!important;
        font-size: 1.2em!important;
        font-family: 'Patua One', cursive;
        color: #575756;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 100px!important;
        border: 0px!important;
        text-transform: uppercase;
        padding:5px 0px 0px 0px!important;
        transition-all: none!important;
        -webkit-transition-all: none!important;
        -moz-transition-all: none;
    }
    .oficinaslider{padding: 70px 40px 0px 40px!important;}
    /* .selected_honors {line-height:1em!important;padding-top:54px!important;} */

    .boton_circular:hover {
        color: #ffffff!important;
        background-color: #3391c4!important;
    }

    .et_pb_tab_active {
        background-color: #3391c4!important;
        color: #fff!important;
    }

    .aguas {
        padding: 130px 15px 0px 15px!important;
        /* background: url(https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png) no-repeat 0px 25px rgba(255, 255, 255, 0.5)!important; */
        /* background: url('/wp-content/themes/Divi-Child-2/img/spite-carey_vmw15e.png') no-repeat 0px -36px rgba(255, 255, 255, 0.5)!important; */
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat 0px -36px rgba(255, 255, 255, 0.5)!important;

    }

    .aguas:hover {
        /* background: url(https://res.cloudinary.com/gsalazar/image/upload/v1508774781/sprite-sitios-carey_diwpnq.png) no-repeat -200px 25px #3391c4!important; */
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -200px -36px #3391c4!important;
    }

    .tributaria {
        padding: 130px 15px 0px 15px!important;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -1200px -36px rgba(255, 255, 255, 0.5)!important;
    }

    .tributaria:hover {
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -1400px -36px #3391c4!important;
    }

    .hipervinculos {
        padding: 130px 15px 0px 15px!important;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -400px -36px rgba(255, 255, 255, 0.5)!important;
    }

    .hipervinculos:hover {
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -600px -36px #3391c4!important;
    }

    .laboral {
        padding: 130px 15px 0px 15px!important;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -800px -36px rgba(255, 255, 255, 0.5)!important;
    }

    .laboral:hover {
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -1000px -36px #3391c4!important;
    }

    #et-main-area, .home .container {
        background-image: url('https://res.cloudinary.com/gsalazar/image/upload/v1508774790/fondo_mkc3m9.jpg');
        background-position: top;
        background-repeat: repeat;
        background-size: auto;
    }
    #post-15166,#post-15208{background-color: rgba(255, 255, 255, 0.4);}
    .et_menu_container{background-image:none!important;background-color:#fff!important;}

    body #page-container .et_pb_button_0:before,
    body #page-container .et_pb_button_0:after {
        display: block!important;
    }


    .et_pb_post {
        margin-bottom: 0px!important;
    }

    .et_pb_section_0 {
        border-bottom: 3px solid #fff;
    }

    .entry-content table,
    body.et-pb-preview #main-content .container table {
        border: 0px;
    }


    /*
    |--------------------------------------------------------------------------
    | CABECERA PAGINAS
    |--------------------------------------------------------------------------
    */

    .latin-lawyer .nav .menu-item-16652 a,.latin-lawyer-en .nav .menu-item-18156 a{color:#2180A8;}

    /* NAV */

    .f-nav {
        z-index: 9999;
        position: fixed;
        left: 0;
        top: 100px;
        width: 100%;
        text-transform: uppercase;
    }

    .f-nav .current-menu-item a {
        font-weight: bold;
        color: #2180A8!important;
    }
        #menu-item-18158 a {font-weight: normal;color: #fff!important;}

    .admin-bar .f-nav {
        top:132px;
    }
    .admin-bar #sidebar {
        top: 200px;
    }

    .wpml-ls-display {
        font-weight: bold;
        color: #000;
    }

    .wpml-ls-display::before {
        content: "> ";
        font-weight: bold;
        color: #000;
    }

    .et_pb_fullwidth_menu .fullwidth-menu-nav>ul {
        padding: 0px!important;
    }


    .nav li {
        float: left;
        margin-bottom: 18px;
    }

    .nav li a {
        font-size: 14px;
        border-right: 1px solid #fff;
        height: 30px;
        margin-top: 20px;
        display: block;
        vertical-align: top;
        text-align: left;
    }


    /*media all*/

    .nav .et_pb_menu_page_id-home {
        width:41px;
        background: url(https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png) no-repeat -595px 14px;
        float: left;
        padding-right: 0px;
        margin-right: 35px;
    }

    .nav .current-menu-item a {
        color:#2180A8;
        font-weight: bold;
    }

    /*media all*/
    #menu-item-17351 a{color:#fff!important;font-weight:normal;}


    .nav .et_pb_menu_page_id-home a {
        text-indent: 99999px;
        word-wrap: normal !important;
        padding-right: 60px;
    }


    .nav li#menu-item-15178 a{
        width: 90px;
        padding-right: 20px;
    }

    .nav li#menu-item-16651 a {
        width: 110px;
    }
    .nav li#menu-item-17352 a,.nav li#menu-item-17351 a {
        width: 125px;
    }

    .nav li a {
        padding-top: 0px;
        height: 30px;
        padding-right: 20px;
        padding-bottom: 0px;
    }

    .nav li#menu-item-17910 a, .nav li#menu-item-18159 a {
        border-right: none;
    }

    .nav li.carey_out {
        float: right;
        padding-right: 0px;
        width: 225px;
    }

    .nav li.carey_out a {
        border-right: 0px;
        background: #2180A8;
        padding: 9px 26px;
        border-radius: 8px;
        text-align: center;
    }

    .nav li.carey_out a::after {
        display: none;
    }

    .nav li.carey_out .sub-menu {
        padding: 0px;
        margin: 0px;
        right:210px;
        top:20px;
        background-color: #2180A8!important;
        border-top: 0px;
        width: auto
    }

    .nav li.carey_out .sub-menu li {
        padding: 0px 0px;
        margin: 0px;
        width: 220px;
        float: left;
    }

    .nav li.carey_out .sub-menu li a {
        padding:2px 10px 0px 0px;
        text-align: right;
        width:auto;
        display: block;
        margin-top: 0px;
        border-radius: 0px;
    }
    .nav li.carey_out .sub-menu li a:hover {color:#FFF!important;}

    /* Titulos */

    #portada, #portada section {
        height:45vh;
        padding: 0px;
    }

    .transparencia {
        background-color: rgba(255, 255, 255, 0.4);
    }

    .home #contenido {
        margin-top: 0px;
        padding: 0px;
        background-image: none;
    }

    .home .over_video {
        display: none;
        position: absolute;
        top: 20px;
        right: 30px;
        width: 500px;
        font-size: 1.8em!important;
        font-weight: bold;
        text-align: right;
    }

    #portada .et_pb_fullwidth_header_container {
        width: 100%;
        float: left
    }

    #portada .header-content {
        max-width: 100%;
        width: 100%;
        z-index: 9999;
    }

    #portada .header-content h1 {
        width: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        padding: 0px 20px!important;
        line-height: 56px;
        color: #fff;
        font-size: 19px;
        text-align: left;
        background: rgba(0,0,0,0.2);
        width: calc(100% - 125px);
    }

    #portada .et_pb_fullwidth_header_0.et_pb_fullwidth_header p {
        width: 800px;
        margin: 145px auto;
        display: block;
    }

    #portada .et_pb_fullwidth_header .et_pb_fullwidth_header_container {
        max-width: 100%;
    }

    /*
    |--------------------------------------------------------------------------
    | Sidebar Todos / Home
    |--------------------------------------------------------------------------
    */

    #sidebar {
        width: 150px;
        position: fixed;
        right: 0px;
        top: 168px;
        height: auto;
        z-index: 99999;
        padding: 0px!important;
        background-color: rgba(0, 0, 0, 0.5);
    }

    #sidebar .box {
        float: none;
        width: 100%;
        margin-bottom:0px
    }

    #sidebar .box a{color: #fff!important;font-size:14px;width:100%;}

    #sidebar img,#sidebar a{-webkit-transition:opacity 500ms ease-in-out;transition:opacity 500ms ease-in-out;}


    .page-id-15850 #sidebar .equipo img,.page-id-15850 #sidebar .equipo a{opacity: 0.5;}
    .page-id-17129 #sidebar .equipo img,.page-id-17129 #sidebar .equipo a{opacity: 0.5;}
    .page-id-17693 #sidebar .equipo img,.page-id-17693 #sidebar .equipo a{opacity: 0.5;}
    .page-id-15853 #sidebar .equipo img,.page-id-15853 #sidebar .equipo a{opacity: 0.5;}
    .news-alert #sidebar .equipo img,.news-alert #sidebar .equipo a{opacity: 0.5;}
    .single-areas #sidebar .equipo img,.single-areas #sidebar .equipo a{opacity: 0.5;}

    .page-id-15850 #sidebar .areas img,.page-id-15850 #sidebar .areas a{opacity: 0.5;}
    .page-id-15172 #sidebar .areas img,.page-id-15172 #sidebar .areas a{opacity: 0.5;}
    .page-id-15853 #sidebar .areas img,.page-id-15853 #sidebar .areas a{opacity: 0.5;}
    .page-id-20396 #sidebar .areas img,.page-id-20396 #sidebar .areas a{opacity: 0.5;}
    .news-alert #sidebar .areas img,.news-alert #sidebar .areas a{opacity: 0.5;}
    .single-cv #sidebar .areas img,.single-cv #sidebar .areas a{opacity: 0.5;}

    .page-id-17129 #sidebar .alertas-legales img,.page-id-17129 #sidebar .alertas-legales a{opacity: 0.5;}
    .page-id-15172 #sidebar .alertas-legales img,.page-id-15172 #sidebar .alertas-legales a{opacity: 0.5;}
    .page-id-17693 #sidebar .alertas-legales img,.page-id-17693 #sidebar .alertas-legales a{opacity: 0.5;}
    .page-id-20396 #sidebar .alertas-legales img,.page-id-20396 #sidebar .alertas-legales a{opacity: 0.5;}
    .single-areas #sidebar .alertas-legales img,.single-areas #sidebar .alertas-legales a{opacity: 0.5;}
    .single-cv #sidebar .alertas-legales img,.single-cv #sidebar .alertas-legales a{opacity: 0.5;}

    #sidebar .equipo:hover img,#sidebar .equipo:hover a{opacity: 100;}
    #sidebar .areas:hover img,#sidebar .areas:hover a {opacity: 100;}
    #sidebar .alertas-legales:hover img,#sidebar .alertas-legales:hover a{opacity: 100;}

    .page-id-15172 #sidebar .equipo .et_pb_blurb_container h4 a,
    .page-id-20396 #sidebar .equipo .et_pb_blurb_container h4 a,
    .page-id-17129 #sidebar .areas .et_pb_blurb_container h4 a,
    .page-id-17693 #sidebar .areas .et_pb_blurb_container h4 a,
    .page-id-15850 #sidebar .alertas-legales .et_pb_blurb_container h4 a,
    .page-id-15853 #sidebar .alertas-legales .et_pb_blurb_container h4 a,
    .news-alert #sidebar .alertas-legales .et_pb_blurb_container h4 a {color:#FFFFFF;font-weight: bold;}

    #sidebar .box a{display:block;margin:10px auto;text-align: center;color: #fff; font-weight: bold; font-size: 13px;}
    .home #sidebar .box a{font-size: 18px;}
    #sidebar .box span{width:60px;height:60px;margin:0px auto 10px auto;display: block;}
    #sidebar .a{background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') 0 -238px no-repeat;}
    #sidebar .b{background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') -60px -238px no-repeat;}
    #sidebar .c{background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') -120px -238px no-repeat;}

    .home #sidebar{
        width:100%;
        position: absolute;
        top: inherit;
        bottom: 0px;
        height: auto;
        z-index: 500;
        padding:10px 0px 0px 0px!important;
        background-color: rgba(0, 0, 0, 0.5);
        -khtml-opacity: 0.5;
    }
    .home #sidebar .contenedor {max-width: 1200px; margin: 0px auto;display:grid;grid-auto-columns: 100px;grid-template-columns:33.3% 33.3% 33.3%;grid-gap:0px;}
    .home #sidebar .box{text-align:center;}
    :root .home #sidebar .box{width:33%\0/IE9;}

    @media all and (-ms-high-contrast:none)
         {
         .home #sidebar .box{float: left; width: 33%;} /* IE10 */
         *::-ms-backdrop, .home #sidebar .box{float: left; width:32.3%;} /* IE11 */
         }


    /* Footer */

    .iframe-d,.iframe-p{color:#fff!important;}
    #main-footer a {
        color: #bbb;
    }

    .home .volver{display:none;}
    .home .col_volver{width: 400px;}
    .volver {
        background: url(/wp-content/themes/Divi-Child-2/img/flecha-leerl-mas_c3lnej.png) -38px 0px no-repeat;
        padding: 0 0 0 30px;
        line-height: 37px;
        display: block;
        height: 40px;
        font-weight: bold;
        cursor: pointer;
        font-size: 18px;
    }

    #main-footer .current-menu-item a {
        color: #FFF!important;
    }

    #footer-bottom {
        margin: 0px auto;
        width: 730px;
        background-color: rgba(0, 0, 0, 0)!important;
    }

    p#footer-info {
        width: 100%;
        display: block;
    }

    #et-footer-nav .container,
    #footer-info {
        text-align: center!important;
    }

    #redes_sociales{width:1080px;margin:50px auto 50px auto;}
    .home #redes_sociales .volverr, .home #redes_sociales .siguenos{width:100%;float:left;}
    #redes_sociales .volverr, #redes_sociales .siguenos{width:50%;float:left;}
    #redes_sociales div table td {color:#2180ac!important;font-weight:bold;font-size:18px;}
    #redes_sociales .twitter,#redes_sociales .linkedinf{float:right;width: 42px;height: 42px;display: block;margin-left: 7px;}

        /*
    #redes_sociales .twitter{background: url(https://res.cloudinary.com/gsalazar/image/upload/v1508774781/redes_sociales_jwf3ff.png) 0 0 no-repeat;}
    #redes_sociales .linkedinf{background: url(https://res.cloudinary.com/gsalazar/image/upload/v1508774781/redes_sociales_jwf3ff.png) -42px 0 no-repeat;}
        */
    #redes_sociales .twitter{background: url(https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png) -181px -237px no-repeat;}
    #redes_sociales .linkedinf{background: url(https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png) -224px -237px no-repeat;}

    #piepagina{
        margin-top: 40px;
        background-color: #3b3b3b!important;
        padding:50px 0px;

        }
    #piepagina table {
        width: 70%;
        margin: 0px auto;
    }

    #piepagina table td {
        padding: 10px 0px!important;
    }

    nav#top-menu-nav {
        float: left;
    }

    nav.menu-secundario-container {
        float: right!important;
    }

    .et_pb_slide_description {
        padding: 0px;
        width: 100%;
        max-width: 100%;
    }

    .et_pb_slider .et_pb_container {
        max-width: 100%;
        width: 100%;
    }

    .et_pb_slider .et_pb_slide_0 {
        padding: 0px;
        margin: 0px;
    }

    .et_pb_slide_content {
        padding: 0px 20px!important;
        text-align: left;
        line-height: 49px;
        border-top: 3px solid #FFF;
    }


    /*
    |--------------------------------------------------------------------------
    | Documentos relacionados
    |--------------------------------------------------------------------------
    */
    .documentos_relacionado {list-style:disc;margin-left:32px!important;padding-bottom:0px!important;}
    .documentos_relacionado li {margin:12px 0px 3px 0px;}
    .documentos_relacionado li a{color:#666;font-size:14px;}
    .vermas{color:#2180A8;font-weight: bold;}

    .areas_relacionadas h3,.documentos h3 {
        color: #2180ac;
        text-transform: uppercase;
        font-size: 18px;
    }
    .areas_relacionadas ul li {line-height: normal;}

    /*
    |--------------------------------------------------------------------------
    | EQUIPO
    |--------------------------------------------------------------------------
    */


    /* BUSCADOR */

    .radio-wrap {
        width: auto;
        float: left;
        padding: 5px 10px 5px 0px;
    }

    .listado_equipo {
        width: 100%;
        margin-top: 20px;
        float: left;
        padding: 0 0 23px 0!important;
    }

    .listado_equipo li {
        list-style: none!important;
        min-width: 133px;
        width: 133px;
        float: left;
        margin-bottom: 15px;
        margin-right: 18px;
        background-color: rgba(255, 255, 255, 0.7);
        line-height: 20px;
        height:auto;
    }

    .listado_equipo li div {
        float: left;
    }

    .listado_equipo li a {
        color: #666;
        text-transform: uppercase;
    }

    .listado_equipo li:hover {
        background-color: #4c96ba;
        color: #fff;
    }

    .listado_equipo li:hover a {
        color: #FFF;
    }

    .listado_equipo li img {
        float: left;
    }

    .listado_equipo div.click-to-top {
        display: inline-block;
        position: relative;
        max-width: 150px;
        cursor: pointer;
    }

    .listado_equipo div.click-to-top:hover {
        z-index: 10;
    }

    .listado_equipo div.click-to-top div {
        display: none;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        color: #fff;
        height: 100%;
        background-color: rgba(33, 128, 172, 0.7);
        padding: 10px;
    }
    /* .admin-bar .listado_equipo div.click-to-top div{display: block;} */

    .listado_equipo div.click-to-top:hover div {
        display: inline-block;
    }

    .listado_equipo div.click-to-top:hover div span {
        position: absolute;
        bottom: 5px;
        width: 100%;
        left: 0px;
        text-align: right;
        padding:0px 5px;
    }

    .listado_equipo div.click-to-top:hover div span a {
        color: #fff;
        font-weight: bold;
    }

    .white-wrap {}

    #searchform {
        width:100%;
        margin: 30px auto 5px auto;
        display: block;
    }

    #searchform input[type=text] {
        min-width: 600px;
        padding: 10px 10px 10px 60px;
        font-size: 22px;
        border: 1px solid #ccc;
        background: url('/wp-content/themes/Divi-Child-2/img/lupa.png') no-repeat 10px 4px #fff;
    }

    #searchform input[type=button] {
        display: none;
        background-color: rgba(255, 255, 255, 0.3);
        padding: 10px;
        border: 0px;
        color: #FFF;
        font-weight: bold;
        cursor: pointer;
    }

    #searchform p {
        margin: 0px;
        padding: 0px;
    }

    #searchform .letritas {
        font-size: 19px;
        letter-spacing: 3px;
        margin: 20px 0px 15px 0px;
    }

    #searchform .letritas span {
        cursor: pointer;
    }

    #searchform .letritas span:hover {
        text-decoration: underline;
    }

    .search label {
        cursor: pointer;
        font-style: italic;
        font-weight: bold;
    }

    .boton_listado{
        font-family: "Open Sans",Arial,sans-serif;
        background: rgba(33,128,168,1);
        border: none;
        color: #fff;
        font-weight: bold;
        height:28px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 13px;
        width: 250px;
        display: inline-block;
        padding: 3px 20px;
    }
    .boton_listado:hover{
        background: rgba(33,128,168,0.3);
        color:#3b3b3b;
    }
    .cv_letters_list {
        list-style: none!important;
        width: 600px;
        margin: 0px auto;
    }

    .cv_letters_list li {
        width: 20px!important;
        text-align: center;
        float: left;
    }
    #cv_busqueda {margin-top:23px; padding:0px;background:#2180a8;}
    #cv_busqueda .et_pb_module {padding: 10px 0px; max-width: 1080px;margin: 0px auto;font-size: 14px!important;}
    #cv_busqueda .et_pb_module span{color: #FFF;}
    #cv_busqueda form {padding: 0px;margin: 0px;}

    #cv_busqueda form input[type=text] {
        background: url(/wp-content/themes/Divi-Child-2/img/lupa-w.png) no-repeat 10px 4px #2180A8;
        border: 0px;
        color: #FFFFFF;
    }

    .cv_tabla td {padding:5px 0px;}


    .subir{position: fixed;right: calc(50% - 600px);bottom:10px;border-radius: 50px;width: 50px;height: 50px;text-align: center;z-index: 99;display: none;cursor:pointer;}
    .subir a{font-weight: bold; line-height: 50px;}


    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #ffffff;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #ffffff;
    }

    :-ms-input-placeholder {
        /* IE 10+ */
        color: #ffffff;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #ffffff;
    }

    .listado_letras {
        margin: 30px 0px;
        float: left;
        width: 100%;
        padding: 30px;
        background: rgba(255, 255, 255, 0.7);
    }

    .listado_letras ul{
        -webkit-column-count: 3;
        column-count: 3;
    }
    .listado_letras ul li{text-align: left; list-style: none;}

    .container {
        width: 100%;
        max-width: 100%;
    }

    .entry-content tr td,
    body.et-pb-preview #main-content .container tr td {
        border: 0px;
        padding: 0px!important;
        line-height: 25px!important;
    }





    /* RESULTADOS BSUQUEDA */

 .resultado_busqueda { width: 49%; float: left; margin-bottom: 40px; } .resultado_busqueda article a {color:#2180a8;} .resultado_busqueda img { float: left; width: 133px; } .resultado_busqueda article { border-left: 3px solid #3391C4; width: 61%; float: left; margin-left: 20px; padding-left: 20px; height:166px; } .resultado_busqueda article h2 {font-size: 21px;font-weight: bold;padding-bottom: 2px;} .resultado_busqueda article .cargo{font-weight: normal;color:#333;font-size: 15px;} .resultado_busqueda article .emaillink{font-weight: normal;font-size: 14px;text-decoration: underline;} .resultado_busqueda article .vermaslink{font-weight: bold;font-size: 14px;} .resultado_busqueda article .telefonotxt{font-weight:normal;font-size:14px;color: #333;}


    /*
    |--------------------------------------------------------------------------
    | PAGINACION
    |--------------------------------------------------------------------------
    */

    .wp-pagenavi {
        width: 98%;
    }

    .wp-pagenavi span.current,
    .wp-pagenavi a:hover {
        color: #2180A8!important;
        font-weight: bold;
    }

    .pagination {
        width: 60px;
        float: right;
        margin-bottom: 20px;
        margin-top: 10px
    }

    .pagination .alignleft,
    .pagination .alignright {
        font-size: 5em
    }

    .pagination .alignright {
        padding-right: 10px
    }


    /*
    |--------------------------------------------------------------------------
    | Fade in Javascript
    |--------------------------------------------------------------------------
    */

    @-webkit-keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .fade-in {
        opacity: 0;
        -webkit-animation: fadeIn .5s ease-in 1 forwards;
        animation: fadeIn .5s ease-in 1 forwards;
    }

    .is-paused {
        -webkit-animation-play-state: paused;
        animation-play-state: paused;
    }

    .mejs__offscreen{display: none;}
    .flecha{cursor: pointer;}


    <?php if(is_front_page()){ ?>
    /*
    |--------------------------------------------------------------------------
    | HOME
    |--------------------------------------------------------------------------
    */

    #noticias_home article,
    #newsalert_home article {
        height: 200px;
        padding: 35px;
        position: relative;
    }

    #noticias_home .column {
        width: 100%;
    }

    #noticias_home .post-content p,
    #newsalert_home .post-content p {
        display: none;
    }

    #noticias_home .post-content .more-link,
    #newsalert_home .post-content .more-link {
        display: block;
        text-indent: -99999px;
        width: 20px;
        float: right;
        position: absolute;
        bottom:23px;
        right:44px;
    }

    #noticias_home .post-content .more-link {
        background: url(https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png) no-repeat -671px 0px;
    }

    #newsalert_home .post-content .more-link {
        background: url(https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png) no-repeat -690px 0px;
    }

    #noticias_home .et_pb_post .post-meta,
    #newsalert_home .et_pb_post .post-meta {
        position: absolute;
        bottom: 10px;
        display: none;
        width: 90%;
        text-align: center;
        font-size: 12px;
    }

    #noticias_home .et_pb_post {
        padding: 15px;
        border-radius: 10px;
        background: #CCCCCC;
    }

    #noticias_home .et_pb_post .entry-title,
    #noticias .et_pb_post .post-meta,
    #noticias .et_pb_post .post-meta a {
        color: #333;
    }

    #noticias_home .et_pb_post .post-meta {
        border-top: 1px solid #666;
    }

    #newsalert_home .et_pb_post {
        padding: 15px;
        border-radius: 10px;
        background: #3395C8;
    }

    #newsalert_home .et_pb_post .entry-title,
    #newsalert_home .et_pb_post .post-meta,
    #newsalert_home .et_pb_post .post-meta a {
        color: #FFFFFF;
    }

    #newsalert_home .et_pb_post .post-meta {
        border-top: 1px solid #fff;
    }
    .et_pb_button_0:hover{color:#ffffff!important;border-radius:0px;}.et_pb_button_0,.et_pb_button_0:hover{padding:0.3em 1em!important}body #page-container .et_pb_button_0:before,body #page-container .et_pb_button_0:after{display:none!important}.et_pb_button_0.et_pb_button.et_pb_module{padding:130px 20px 0px 20px!important}

    .et_pb_text_1{font-size:32px;padding-left:10px!important}.et_pb_column_10{float:left;width:300px}.et_pb_text_2{width:500px}.et_pb_column_11{float:right!important}.et_pb_text_0.et_pb_text{color:#2180a8!important}.et_pb_text_0{font-weight:bold;font-size:32px;padding-top:0px!important;padding-right:0px!important;padding-bottom:0px!important;padding-left:0px!important;margin-top:0px!important;margin-right:0px!important;margin-bottom:0px!important;margin-left:0px!important}.et_pb_blog_0 .et_pb_post .entry-title{font-size:26px!important;line-height:1.2em!important}.et_pb_blog_0 .entry-title{font-family:'Patua One',cursive;position:absolute;top:27%;width:95%}.et_pb_blog_1 .et_pb_post .entry-title{font-size:26px!important;line-height:1.2em!important}.et_pb_blog_1 .entry-title{font-family:'Patua One',cursive;position:absolute;top:27%;width:95%}


<?php } ?>

<?php if(in_category(array('25','51','32','55','49','54','26','52'))){ ?>
    /*
    |--------------------------------------------------------------------------
    | NEWS ALERT
    |--------------------------------------------------------------------------
    */
#contenido .titulo,#contenido .titulo_na {
    line-height: 1.3em;
    color: #2180AC;
    font-weight: bold;
    font-size: 1.8em;
    padding-top: 20px;
    padding-right:100px;
    width: 730px;
}

#contenido .titulo::before,#contenido .titulo_na::before {
    content: url('img/news_alert_titulo.png');
    position: absolute;
    left: 19px;
    font-size: 1em;
}

#contenido article {
    float: left;
    padding: 30px;
}

#contenido article h3{
  margin-top: 10px;
  margin-bottom: 10px;
  color: #2180AC;
  font-style: italic;
}

#contenido article h4{
  counter-increment: listRoman;
  margin-top: 10px;
  margin-bottom: 10px;
  color: #2180AC;
  font-style: italic;
}
#contenido article h4::before{
  content: counter(listRoman, upper-roman)".";
  font-size: 31px;
  color: #2180AC;
  font-weight: bold;
  margin-right: 4px;
  font-style: normal;
}
#contenido .entry-content {
    width: 100%;
    float: left;
    padding: 0 0 0 20px;
}

#contenido .columna1 {
    width: 70%;
    float: left;
}

#contenido .et_pb_widget {
    width: 100%;
    float: right;
    padding: 0px;
    margin-bottom: 20px;
}

#contenido_news-alert small,#contenido_news-alert-en small,#contenido_propiedad-intelectual small,#contenido_intellectual-property small, #contenido_visas small,#contenido_visas-en small {
    border-bottom:dashed 1px #AFAFAF;
    padding-bottom: 15px;
    color: #434A50;
    width: 100%;
    text-align: right;
    display: block
}

#contenido_latin-lawyer small,#contenido_latin-lawyer-en small {
    font-weight: bold;
    border-bottom: 2px dotted #2180A8;
    margin-bottom: 10px;
    padding: 10px 0px;
    width: 100%;
    display: block;
}

#contenido_latin-lawyer hr,#contenido_latin-lawyer-en hr {
    border-style: dotted;
    margin: 20px 0px;
    border-width: 1px;
    border-color: #2180A8;
}

#contenido_latin-lawyer article strong,#contenido_latin-lawyer-en article strong {
    color: #2180A8;
    text-transform: uppercase;
}

.manual_section_bg {
    background-image: url('https://www.carey.cl/wp-content/uploads/2017/01/fondo.jpg');
}

#news_alert_lateral {
    border-left: 1px dashed #2180AC;
    padding-left: 30px;
    float: right;
    width: 27%;
}

#news_alert_lateral #datos_contacto a,
#news_alert_lateral #disclaimer em {
    color: #358FC2;
}

#news_alert_lateral #disclaimer {
    margin-top: 50px;
}


/*

CONTENIDO OL UL

*/

#contenido strong {
    color: #2180AC;
}

#contenido ul,#contenido ol {
    margin: 20px 0 30px 30px;
    padding: 0px;
}
#contenido ul li,#contenido ol li {
    counter-increment: listNumbering;
    width: 100%;
    position: relative;
    list-style: none;
    margin: 15px 0 0 0;
    padding-left: 30px;
    text-align: justify;
}

#contenido ul li::before,#contenido ol li::before {
    content: counter(listNumbering, decimal)".";
    font-size:1.3em!important;
    margin-left:-28px!important;
    position: absolute;
    top:-3px;
    color: #2180AC;
    font-weight: bold;
}

#contenido ol li ol,#contenido ul li ul {
    margin: 10px 0px;
    counter-reset: listNumbering;
}

#contenido ol li ol li::before,#contenido ul li ul li::before {
    content: counter(listNumbering, lower-alpha)")";
    font-size: 18px!important;
    margin-left:-28px!important;
    position: absolute;
    top:-3px!important;
    color: #2180AC;
    font-weight: bold;
}

#contenido ol li ol li ol,#contenido ul li ul li ul {
    margin: 10px 0px;
    counter-reset: listNumbering;
}

#contenido ol li ol li ol li:before,#contenido ul li ul li ul li:before {
    content: counter(listNumbering, disc);
    font-size: 1em;
    margin-left: -10px;
    position: absolute;
    top:0px;
    color: #333;
    font-weight: bold;
}

    .et_pb_section {padding: 0px!important;}
    .entry-content{position: relative;}
    .titulos_al {float: left;padding-bottom: 30px;}
    .titulos_al .izquierda {width:73%; height:25px; margin-bottom: 10px;}
    .fecha {font-size: 14px!important;width:200px;color:#666;position:absolute;right:35px;
    top: 155px;}
    .titulos_al img{float: right;}


<?php } ?>

<?php if(is_page(array('15850','15853','15639','15733')) or is_search()){ ?>


    #noticias .et_pb_post,
    #newsalert .et_pb_post {
        height: 280px;
        margin-bottom: 10px!important;
        position: relative;
        width: 32%;
        float: left;
        margin-right: 10px;
        padding: 15px;
        border-radius: 10px;
        background: #3395C8;
    }

    #newsalert .et_pb_post .entry-title,
    #newsalert .et_pb_post .post-meta,
    #newsalert .et_pb_post .post-meta a {
        color: #FFFFFF;
    }

    #newsalert .et_pb_post:nth-child(odd) {
        background: #CCCCCC;
    }

    #newsalert .et_pb_post:nth-child(odd) .entry-title,
    #newsalert .et_pb_post:nth-child(odd) .post-meta,
    #newsalert .et_pb_post:nth-child(odd) .post-meta a {
        color: #333;
    }

    #newsalert .et_pb_post .post-meta {
        position: absolute;
        bottom: 10px;
        display: block;
        width: 90%;
        text-align: center;
        border-top: 1px solid #fff;
        padding-top: 10px;
        font-size: 12px;
    }

    #newsalert .post-content {
        display: none;
    }

    .et_pb_gutters3 .et_pb_column_4_4 .et_pb_blog_grid .column.size-1of3 {
        width: 32%;
        margin-right: 1.1%;
    }
    .et_pb_section_1{padding-top:0px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content{max-width:100%}.et_pb_row_3.et_pb_row{padding-top:35px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_section_7.et_pb_section{background-color:#3b3b3b!important}.et_pb_section_7{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_text_2{font-weight:bold;font-size:18px}.et_pb_text_2.et_pb_text{color:#2180ac!important}.et_pb_column_5{float:right!important}.et_pb_column_4{float:left;width:300px}.et_pb_blog_0 .entry-title{font-family:'Patua One',cursive}.et_pb_text_0 h1{font-family:'Open Sans',Helvetica,Arial,Lucida,sans-serif;font-size:37px;color:#3b3b3b!important}.et_pb_row_1.et_pb_row{margin-top:0px!important;padding-top:30px;padding-right:20px;padding-bottom:20px;padding-left:20px}.et_pb_section_4{padding-top:0px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#000000}.et_pb_section_1.et_pb_section{background-color:#3b3b3b!important}.et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-image:url(https://www.carey.cl/wp-content/uploads/2017/02/alertas-legales.jpg)}.et_pb_blurb_2 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_2.et_pb_blurb{margin-bottom:15px!important}.et_pb_column_2{width:100%!important}.et_pb_blurb_1 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_1.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_0 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_0.et_pb_blurb{margin-bottom:15px!important}.et_pb_column_0{width:100%!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}.et_pb_row_3{max-width:100%!important}@media only screen and (max-width:980px){.et_pb_section_4{padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px}}@media only screen and (max-width:767px){.et_pb_section_7{padding-top:0px;padding-right:0px;padding-bottom:55px;padding-left:0px}}

    /*
    |--------------------------------------------------------------------------
    | PRENSA
    |--------------------------------------------------------------------------
    */

    #noticias .et_pb_post .entry-title,
    #noticias .et_pb_post .post-meta,
    #noticias .et_pb_post .post-meta a {
        color: #FFFFFF!important;
    }

    #noticias .et_pb_post:nth-child(odd) {
        background: #CCCCCC;
    }

    #noticias .et_pb_post:nth-child(odd) .entry-title,
    #noticias .et_pb_post:nth-child(odd) .post-meta,
    #noticias .et_pb_post:nth-child(odd) .post-meta a {
        color: #333!important;
    }

    #noticias .et_pb_post .post-meta {
        position: absolute;
        bottom: 10px;
        display: block;
        width: 90%;
        text-align: center;
        border-top: 1px solid #fff;
        padding-top: 10px;
        font-size: 12px;
    }

    #noticias .post-content {
        display: none;
    }

    .et_pb_gutters3 .et_pb_column_4_4 .et_pb_blog_grid .column.size-1of3 {
        width: 32%;
        margin-right: 1.1%;
    }
    .et_pb_section_1{padding-top:0px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#000000}.et_pb_row_3.et_pb_row{padding-top:35px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_section_7.et_pb_section{background-color:#3b3b3b!important}.et_pb_section_7{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_text_2{font-weight:bold;font-size:18px}.et_pb_text_2.et_pb_text{color:#2180ac!important}.et_pb_column_5{float:right!important}.et_pb_column_4{float:left;width:300px}.et_pb_blog_0 .entry-title{font-family:'Patua One',cursive}.et_pb_text_0 h1{font-family:'Open Sans',Helvetica,Arial,Lucida,sans-serif;font-size:40px;color:#3b3b3b!important}.et_pb_row_1.et_pb_row{margin-top:0px!important;padding-top:30px;padding-right:20px;padding-bottom:20px;padding-left:20px}.et_pb_section_4{padding-top:0px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content{max-width:100%}.et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-image:url(https://www.carey.cl/wp-content/uploads/2017/02/laguna-miniques.jpg)}.et_pb_section_1.et_pb_section{background-color:#3b3b3b!important}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h1{text-transform:uppercase}.et_pb_blurb_2 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_2.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_1 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_1.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_0 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_0.et_pb_blurb{margin-bottom:15px!important}.et_pb_column_0{width:100%!important}.et_pb_section_2.et_pb_section{background-color:rgba(0,0,0,0.5)!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}.et_pb_row_3{max-width:100%!important}@media only screen and (max-width:767px){.et_pb_row_1.et_pb_row{padding-top:0px!important;padding-right:0px!important;padding-bottom:0px!important;padding-left:0px!important}.et_pb_text_0{margin-bottom:0px!important}.et_pb_section_7{padding-top:0px;padding-right:0px;padding-bottom:55px;padding-left:0px}}


    .navigation{margin:20px 20px 0px 0px;padding: 0px;float:right;}
    .navigation ul{padding: 0px; margin: 0px;}

    .navigation li a,
    .navigation li a:hover,
    .navigation li.active a,
    .navigation li.disabled {
        color: #333;
        text-decoration:none;
    }

    .navigation li {
        display: inline;
    }

    .navigation li a,
    .navigation li a:hover,
    .navigation li.active a,
    .navigation li.disabled {
        background-color: #CCCCCC;
        border-radius: 3px;
        cursor: pointer;
        padding: 12px;
        padding: 0.75rem;
    }

    .navigation li a:hover,
    .navigation li.active a {
        background-color: #3395C8;
        color: #fff;
    }

<?php } ?>

<?php if(is_page(array('16491','16502'))){ ?>
    /*
    |--------------------------------------------------------------------------
    | POSTULACIONES
    |--------------------------------------------------------------------------
    */
    #full_slider_postulaciones_bg{background: #2180a8;padding:15px 0px 0px 0px;}
    #full_slider_postulaciones_bg ul {padding-bottom: 0px;}
    #full_slider_postulaciones_bg ul li{position: relative;}
    /* #full_slider_postulaciones_bg ul li:before{content: "\2023	";margin-right: 10px;font-size: 30px;font-weight: bold;position: absolute;left: -16px;top: -3px;} */
    #full_slider_postulaciones_bg .et_pb_fullwidth_header{padding: 0px; margin: 0px;}
    #franja_negra {background:#3b3b3b;padding:0px;}
    #franja_negra .contenido {text-align:center;padding:0px;margin:0px auto;color: #fff;}
    #franja_negra .contenido a{display:inline-block;padding:10px 0px;color:#fff;font-weight:bold;font-size:16px;margin:0px 15px;}
    #franja_negra .contenido a.activo{background:url(/wp-content/themes/Divi-Child-2/img/postulaciones_activo.png) no-repeat center 33px; color:#2180a8;}

    #franja_negra .et_pb_fullwidth_header .et_pb_fullwidth_header_container.center .header-content{width: 100%;max-width: unset; margin: 0px; padding: 0px;}

    /* .et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-position:bottom center;background-repeat:repeat-x;background-image:url(https://www.carey.cl/wp-content/uploads/2017/04/mar.jpg)} */
    .et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-position:bottom center;background-repeat:repeat-x;background-image:url(/wp-content/themes/Divi-Child-2/img/6-a-medida_bsroxt.jpg)}

    #preguntas,#talentos,#formulario{display:none;}

    .et_pb_toggle h5.et_pb_toggle_title{line-height: 22px;}

    .postulaciones .fila{position: relative; margin-bottom:0px;padding: 0px;}
    .postulaciones .fila ul li {font-weight:normal;font-size:14px;font-family: sans-serif;}
    .postulaciones .fila .et_pb_column{margin-right: 2%;width: 31.666%;}
    .postulaciones .fila .box{padding:2.5em 2.3em 2.3em 2.3em;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;font-size:1.8em;min-height:250px;cursor: pointer;line-height: 25px;}
    .postulaciones .fila .escondido:before{content: "X";font-weight: bold; font-size:1em;position: absolute; right: 20px; top: 20px;font-family: sans-serif;}

    .postulaciones #fila1 .box,.postulaciones #fila2 div:nth-child(odd) .box,.postulaciones #fila3 .box{background: #2180a8;color: #fff;}
    .postulaciones #fila1 div:nth-child(odd) .box,.postulaciones #fila2 .box,.postulaciones #fila3 div:nth-child(odd) .box{background: #ccc;color:#333;}

    .postulaciones #fila1 .box ul,.postulaciones #fila2 div:nth-child(odd) .box ul,.postulaciones #fila3 .box ul{border-left:1px solid #fff;}
    .postulaciones #fila1 div:nth-child(odd) .box ul,.postulaciones #fila2 .box ul,.postulaciones #fila3 div:nth-child(odd) .box ul{border-left:1px solid #333;}

    .postulaciones .fila .et_pb_column .escondido,
    .postulaciones .fila .et_pb_column_3 .escondido,
    .postulaciones .fila .et_pb_column_6 .escondido,
    .postulaciones .fila .et_pb_column_9 .escondido,
    .postulaciones .fila .et_pb_column_12 .escondido{position:absolute;top:0px;left:0px;width:1069px;z-index:9;}

    .postulaciones .fila .et_pb_column_1 .escondido,
    .postulaciones .fila .et_pb_column_4 .escondido,
    .postulaciones .fila .et_pb_column_7 .escondido,
    .postulaciones .fila .et_pb_column_10 .escondido,
    .postulaciones .fila .et_pb_column_13 .escondido{position:absolute;top:0px;left:-107%;width:1069px;z-index:9;background: #2180a8;color:#fff;}

    .postulaciones .fila .et_pb_column_2 .escondido,
    .postulaciones .fila .et_pb_column_5 .escondido,
    .postulaciones .fila .et_pb_column_8 .escondido,
    .postulaciones .fila .et_pb_column_11 .escondido,
    .postulaciones .fila .et_pb_column_14 .escondido{position:absolute;top:0px;left:-213%;width:1069px;z-index:9;}

    .postulaciones .fila .escondido p{width:22%; float: left;}
    .postulaciones .fila .escondido li div{width: 100%;margin-top: 25px;}
    .postulaciones .fila .escondido ul,.postulaciones .fila .escondido blockquote{width:75%;float:right;padding-left:50px;padding-bottom: 0px;}
    .postulaciones .fila .escondido blockquote{font-family: sans-serif; font-size: 14px; margin-top: 35px;margin-bottom: 10px;border-left:none;position: relative;height:auto;}

    .postulaciones .fila .escondido blockquote p{width: 100%;font-style: italic;}
    .postulaciones .fila .escondido blockquote p strong{font-style:normal;}

    .postula{
        display: block;
        background: url(/wp-content/themes/Divi-Child-2/img/boton-postula-blanco.png) no-repeat 0 5px;
        padding: 5px 0px 5px 20px;
        color: #fff;
        margin-top: 15px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
    }
    .postula:hover{
        text-decoration: underline;
    }
    .postulazul{
        background: url(/wp-content/themes/Divi-Child-2/img/boton-postular-azul.png) no-repeat 0 5px;
        color: #2180a8;
    }

    .et_pb_fullwidth_header .et_pb_fullwidth_header_scroll{display:none;}

    .et_pb_button_one.et_pb_button{color:#333333!important;background:#ffffff;border-width:0px!important;font-size:17px;padding-left:1.4em!important;padding-right:0.7em;background-color:#ffffff;}
    .et_pb_button {margin-bottom: 20px;}
    .et_pb_button_one.et_pb_button:before{
        content:"\25b6 ";
        color: #333333;
        line-height: 1.7em;
        font-size: 35px!important;
        margin-top: 2px;
        margin-left:-28px;
        opacity: 1;
        top: -17px;
        right: auto;
        display: inline-block;
    }
    .et_pb_button_one.et_pb_button:after{display:none}
    .et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content{max-width:100%}
    .et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#000000}
    .et_pb_section_3.et_pb_section{background-color:rgba(0,0,0,0.75)}
    .admin-bar .et_pb_section_3 .et_pb_section{background-color:transparent;}
    .et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}
    .et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}

    .et_pb_button:hover, .et_pb_module .et_pb_button:hover{padding:0px 0.7em 0px 1em;}

    .et_pb_accordion_0 .et_pb_toggle_close h5.et_pb_toggle_title{color:#2180a8!important;border:0px!important;background-color: transparent;}
    .et_pb_accordion_0.et_pb_accordion h5.et_pb_toggle_title,.et_pb_accordion_0.et_pb_accordion h1.et_pb_toggle_title,.et_pb_accordion_0.et_pb_accordion h2.et_pb_toggle_title,.et_pb_accordion_0.et_pb_accordion h3.et_pb_toggle_title,.et_pb_accordion_0.et_pb_accordion h4.et_pb_toggle_title,.et_pb_accordion_0.et_pb_accordion h6.et_pb_toggle_title{font-weight:700}.et_pb_accordion_0.et_pb_accordion .et_pb_toggle_content{font-family:'Open Sans',Helvetica,Arial,Lucida,sans-serif}.et_pb_section_9{display:none}.et_pb_section_8{display:none}.et_pb_section_1.et_pb_section{background-color:#3b3b3b!important}

    .et_pb_fullwidth_header_1{padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content{max-width:100%}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#000000}

    .et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}.et_pb_accordion_0 .et_pb_toggle_open h5.et_pb_toggle_title{color:#2180a8!important}

    .et_pb_toggle_title:before{display: none;}
    .et_pb_toggle_close {
        padding: 15px;
        background-color:transparent;
        border: none;
    }
    .et_pb_gutters3 .et_pb_column_4_4 .et_pb_module{margin-bottom:30px;}

    .et_pb_toggle_open {padding:15px;background:transparent;border:none;}

    .et_pb_gutters3 .et_pb_column_2_3 .et_pb_module{margin-bottom: 0px;}

    .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select{padding:4px 10px;width: 100%;}
    .gform_wrapper table.gfield_list td, .gform_wrapper table.gfield_list th {padding: 4px 3px!important;}
    .gform_wrapper .gsection {margin:28px 16px 0px 0!important;}
    .gform_wrapper .top_label .gfield_label{display:block!important;}

    .gform_fields #field_1_27,.gform_fields #field_1_29,.gform_fields #field_1_28,.gform_fields #field_1_30{width:100%; display: inline-block;}
    .gform_fields #field_1_24,.gform_fields #field_1_26 {display: inline-block; width:20%;}
    .gform_fields #field_1_25 {display: inline-block; width: 50%; padding-left:85px;}
    .gform_fields #field_1_34 {margin-top:30px;}

    #label_1_30_1,#label_12_30_1{width:160px!important;}

    #extensions_message_1_1,#extensions_message_1_18,#extensions_message_1_16,#extensions_message_1_17{display:none;}
    .gform_wrapper ul.gfield_checkbox li label {font-size: 14px;}
    .gfield_required{display: none;}

    .pescondido{display:none;}
    .btnpostulaciones{cursor:pointer;padding:10px 30px; text-align: center;width:auto;display:inline-block;color:#fff;background:#666;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;position: relative;margin-right: 15px;text-transform: uppercase;}
    .btnpostulaciones:hover{background:#2180a8; text-decoration: underline;}
    #formulario .activo {font-weight:bold;background:#2180a8;}
    #formulario .activo:after{content: "\25be";font-size: 4em;color: #2180a8;position: absolute;bottom: -14px;margin-left: auto;margin-right: auto;left: -1%;right: 0;}


<?php } ?>

<?php if ('areas' == get_post_type() or is_page(array('17129','17693'))){ ?>
    /*
    |--------------------------------------------------------------------------
    | AREAS DE PRACTICA
    |--------------------------------------------------------------------------
    */
    .single-areas #contenido .et_pb_text_inner{text-align: justify!important;}
    .et_pb_gutters3 .et_pb_column_2_3, .et_pb_gutters3.et_pb_row .et_pb_column_2_3{width: 100%;}
    .et_pb_section_1{padding-top:0px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content{max-width:100%}.et_pb_row_3.et_pb_row{padding-top:35px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_section_8{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}
    .et_pb_text_3{font-weight:bold;font-size:18px;}.et_pb_text_3.et_pb_text{color:#2180ac!important}.et_pb_column_5{float:right!important}.et_pb_column_4{float:left;width:300px}.et_pb_text_1{font-size:12px}.et_pb_row_1.et_pb_row{margin-top:0px!important}.et_pb_section_5{padding-top:0px;padding-bottom:0px}.et_pb_section_4{padding-top:0px;padding-bottom:0px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#000000}.et_pb_section_1.et_pb_section{background-color:#3b3b3b!important}.et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-image:url(https://www.carey.cl/wp-content/uploads/2017/06/areas-de-practica.jpg)}.et_pb_blurb_2 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_2.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_1 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_1.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_0 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_0.et_pb_blurb{margin-bottom:15px!important}.et_pb_column_0{width:100%!important}.et_pb_section_2.et_pb_section{background-color:rgba(0,0,0,0.5)!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}.et_pb_row_3{max-width:100%!important}@media only screen and (min-width:981px){.et_pb_row_1.et_pb_row{padding-top:0px;padding-right:20px;padding-bottom:20px;padding-left:20px}}@media only screen and (max-width:767px){.et_pb_section_8{padding-top:0px;padding-right:0px;padding-bottom:55px;padding-left:0px}}

    /* Slider */
    @charset 'UTF-8';.slick-list,.slick-slider,.slick-track{position:relative;display:block}.slick-loading .slick-slide,.slick-loading .slick-track{visibility:hidden}.slick-dots li button:before,.slick-next:before,.slick-prev:before{font-family:slick;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.slick-slider{box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-dots li,.slick-dots li button{cursor:pointer;height:20px;width:20px}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{top:0;left:0}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}.slick-dots,.slick-next,.slick-prev{position:absolute;display:block;padding:0}.slick-loading .slick-list{background:url(ajax-loader.gif) center center no-repeat #fff}@font-face{font-family:slick;font-weight:400;font-style:normal;src:url(fonts/slick.eot);src:url(fonts/slick.eot?#iefix) format('embedded-opentype'),url(fonts/slick.woff) format('woff'),url(fonts/slick.ttf) format('truetype'),url(fonts/slick.svg#slick) format('svg')}

    .slick-next,.slick-prev{
        font-size:0;
        line-height:0;
        top:50%;
        width:30px;
        height:30px;
        -webkit-transform:translate(0,-50%);
        transform:translate(0,-50%);
        cursor:pointer;
        color:transparent;
        border:none;
        outline:0;
        background:0 0
    }
    .slick-next:focus,.slick-next:hover,.slick-prev:focus,.slick-prev:hover{color:transparent;outline:0;background:0 0}.slick-next:focus:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-prev:hover:before{opacity:1}.slick-next.slick-disabled:before,.slick-prev.slick-disabled:before{opacity:.25}.slick-next:before,.slick-prev:before{font-size:20px;line-height:1;opacity:.75;color:#000}.slick-prev{left:-25px}[dir=rtl] .slick-prev{right:-25px;left:auto}.slick-prev:before{content:'â†'}.slick-next:before,[dir=rtl] .slick-prev:before{content:'â†’'}.slick-next{right:-25px}[dir=rtl] .slick-next{right:auto;left:-25px}[dir=rtl] .slick-next:before{content:'â†'}.slick-dotted.slick-slider{margin-bottom:0}.slick-dots{bottom:-50px;width:100%;margin:0;list-style:none;text-align:center}.slick-dots li{position:relative;display:inline-block;margin:0 5px;padding:0}.slick-dots li button{font-size:0;line-height:0;display:block;padding:5px;color:transparent;border:0;outline:0;background:0 0}.slick-dots li button:focus,.slick-dots li button:hover{outline:0}.slick-dots li button:focus:before,.slick-dots li button:hover:before{opacity:1}.slick-dots li button:before{font-size:6px;line-height:20px;position:absolute;top:0;left:0;width:20px;height:20px;content:'â€¢';text-align:center;opacity:.25;color:#000}.slick-dots li.slick-active button:before{opacity:.75;color:#000}.slick-slide .nombre{font-weight:700;font-size:1.3em;width:165px;margin-top:10px;display:block}

    #selector_sectores{position: relative;}
    #selector_sectores,.centrar{margin:0 auto}.abogadoslider .cargo,.sector_destacado,.sector_destacado2{font-weight:700}
    .abogadoslider .cargo{text-align:left;width:160px;display: block;
}
    .contenedor_sectores{width:1080px!important;padding:20px 0;margin:0 auto}
    #selector_sectores .abridor{width:55%;font-size:22px;color:#FFF;display:block;padding:10px;cursor:pointer;position:absolute;left:52px;}.centrar{width:1000px}
    #selector_sectores .flecha{background:url("/wp-content/themes/Divi-Child-2/img/flecha-abajo.png") center no-repeat;width:30px;height:30px;float:left;background-color:rgba(255,255,255,.2);border-radius:20px;margin-right:10px;margin-top:8px;margin-left:24px}#selector_sectores:hover .flecha{background-color:rgba(255,255,255,.4)}#selector_sectores .ssector{border-right:1px solid #FFF;width:125px;padding:5px 10px 5px 0px;color:#fff;float:left;text-align:center;height:60px;cursor:pointer;font-size:15px}#selector_sectores .ssector:hover{text-decoration:underline}#selector_sectores .ssector:last-child{border:none}#selector_sectores .chinadesk a{color:#fff!important}
    #areas_detalle #selector_sectores span{display:none}#areas_detalle #selector_sectores .ssector{width:150px}

    #selector_sectores #areas_detalle .ssector a{color:#fff;}

    .sector{list-style:none;padding:0;margin:0;-webkit-column-count:2;column-count:2;-webkit-column-width:49%;column-width:49%;-webkit-column-fill:auto;column-fill:auto;width:100%;height:auto}
    #areas_detalle .sector{height:678px}
    article.post-17129 .sector{height:auto;}.sector li{margin:5px 0;list-style:none}.sector li a{color:#323232;padding:3px 5px;font-size:1rem;display:block}.sector_destacado{background:rgba(33,128,168,.3);border-radius:6px}.sector_destacado a{color:#666}#areas_detalle{background:#2180a8;height:auto;-webkit-transition:all;transition:all;display:none;position:absolute;padding:30px;width:1080px;z-index:1;top:39px;}#areas_detalle .sector{margin:2px 0 0;font-size:12px;float:left}.slick-list,.slick-slider{margin:0 auto;width:96%}#areas_detalle .sector_destacado{font-weight:700;background:rgba(255,255,255,.3);border-radius:10px}#areas_detalle .sector a,#areas_detalle .sector span{color:#fff}#selectedArea{font-size:18px;text-transform:uppercase;color:#FFF}.single-areas #contenido{padding:2%}.abogadoslider .nombre{color:#2180A8;height:auto;text-align: left;}.slick-next::before,.slick-prev::before{background:url(https://www.carey.cl/wp-content/themes/Divi-Child-2/includes/images/flecha-slider-d.png) no-repeat;content:"";display:block;height:30px;width:30px}.slick-next::before{right:-10px}.slick-prev::before{left:-10px;-webkit-transform:scaleX(-1);transform:scaleX(-1);-webkit-filter:FlipH;filter:FlipH;-ms-filter:"FlipH"}
    .abogadoslider {display: none;}
    .slider {display:none!important;}
    .slider.slick-initialized {display:block!important;}

    .slick-slide a{display: block; height:240px;}
    .imageareas {height:35vh;background-image: url('https://www.carey.cl/wp-content/uploads/2017/06/areas-de-practica.jpg');}
    #selector_sectores .chinadesk{border-right: 0px;}
<?php } ?>

<?php if(is_single(array('22495','22496'))){ ?>
    /*
    |--------------------------------------------------------------------------
    | CHINA DESK
    |--------------------------------------------------------------------------
    */

    .imageareas {height:50vh;background-image: url('/wp-content/uploads/2017/06/foto-china-a-medida2.jpg');}

    .et_pb_column_1_3 {}
    .et_pb_column_2_3 {width: 100%!important;}
    .et_pb_text_1{font-size:1.1em}
    .et_pb_row{width: 80%;}
    .et_pb_row_1.et_pb_row{padding-left:20px; padding-right:20px;}
    .et_pb_row_8{display: none;}
    .single-areas #contenido {padding:1% 2% 2% 2%;}

    .bgazul,#areas_detalle{background:#3b3b3b;}
    .bgazul{height:77px;}
    .selectedArea{text-transform: uppercase; font-weight: bold;}

    #chinadesk {background: transparent!important;width: 100%;color:#3b3b3b;font-size:1.1em; padding-top: 0px; text-align: justify;}
    #chinadesk strong{color:#2180ac;}
    #chinadesk .et_pb_text_align_left{text-align:justify!important;font-size: 1.1em;}

    #chinadesk .asterisco{border:2px solid #666;color:#666!important;font-weight:bold!important;padding:10px 20px;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;font-weight: bold;font-size: 16px;}

    #chinadesk .datos{height: 120px;border-right: 2px solid #2180ac;font-size: 20px;color:#2180ac;}
    #chinadesk .direccion{color:#2180ac;font-size: 14px;}
    #chinadesk .direccion a{color:#2180ac;}
    #chinadesk .titulo{color:#fff;padding:13px 0px 0px 94px;font-size:24px;margin-bottom: 18px;}
    #chinadesk .areas{background: url(/wp-content/themes/Divi-Child-2/img/areas-cd.png) no-repeat 11px 0px #2180ac;}
    #chinadesk .experiencia{background: url(/wp-content/themes/Divi-Child-2/img/experiencia.png) no-repeat 11px 0px #2180ac;}
    #chinadesk .chile,#chinadesk .china{background: url(/wp-content/themes/Divi-Child-2/img/equipo.png) no-repeat 10px 15px #2180ac;}

    #chinadesk .slick-list, .slick-slider{width: 100%;}
    #chinadesk .titulos{display: none;}
    #chinadesk .et_pb_text_9,#chinadesk .et_pb_text_11{margin-bottom: 0px;}
    #chinadesk .slick-slide a {height:auto;font-size:16px;}
    #chinadesk .slick-slide .cargo{font-size: 14px;}
    #chinadesk .et_pb_column_5{float: left!important;}
    #chinadesk .et_pb_text_3{font-weight: normal;}
    .notinchina {display: none!important;}

<?php } ?>

<?php if(is_page(array('16489','16499'))){ ?>
    /*
    |--------------------------------------------------------------------------
    | CONTACTO
    |--------------------------------------------------------------------------
    */
    .hora{width:120%;}
    .et_pb_section_1{padding-top:0px}.et_pb_image_0{margin-left:0}.et_pb_column_6{margin-right:3.5%!important}.et_pb_text_3 p{line-height:1.3em}.et_pb_text_3{line-height:1.3em}.et_pb_column_7{margin-right:3.5%!important}.et_pb_text_4 p{line-height:1.3em}.et_pb_text_4{line-height:1.3em}.et_pb_row_3.et_pb_row{padding-right:20px;padding-left:20px}.et_pb_column_9{width:24%!important}.et_pb_text_2 p{line-height:1.3em}.et_pb_column_10{width:24%!important}.et_pb_column_11{float:left;width:300px}.et_pb_text_5{width:500px}.et_pb_column_12{float:right!important}.et_pb_text_6.et_pb_text{color:#2180ac!important}.et_pb_text_6{font-weight:bold;font-size:18px}.et_pb_section_7{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_section_7.et_pb_section{background-color:#3b3b3b!important}.et_pb_row_5.et_pb_row{padding-top:35px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_text_2{line-height:1.3em}.et_pb_column_5{margin-right:3.5%!important}.et_pb_section_1.et_pb_section{background-color:#3b3b3b!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}.et_pb_section_2.et_pb_section{background-color:rgba(0,0,0,0.5)!important}.et_pb_column_0{width:100%!important}.et_pb_blurb_0.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_0 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_1.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_1 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_2.et_pb_blurb{margin-bottom:15px!important}.et_pb_text_1{line-height:1.3em}.et_pb_blurb_2 .et_pb_main_blurb_image img{max-width:200px}.et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-image:url(https://www.carey.cl/wp-content/uploads/2017/04/contacto-1.jpg)}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#000000}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content{max-width:100%}.et_pb_section_4{padding-top:0px;padding-bottom:0px}.et_pb_row_1.et_pb_row{margin-bottom:0px!important;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px}.et_pb_row_2.et_pb_row{margin-top:0px!important;padding-top:0px;padding-right:20px;padding-left:20px}.et_pb_column_4{margin-right:0%!important}.et_pb_text_1 p{line-height:1.3em}.et_pb_row_5{max-width:100%!important}@media only screen and (max-width:767px){.et_pb_section_7{padding-top:0px;padding-right:0px;padding-bottom:55px;padding-left:0px}}
<?php } ?>

<?php if(is_page(array('15168','15224'))){ ?>
    /*
    |--------------------------------------------------------------------------
    | NUESTRO ESTUDIO
    |--------------------------------------------------------------------------
    */

    #portada,#portada section {
        height:50vh;
    }
    .et_pb_row_1{padding: 0px!important;}
    .link {padding:0px!important; margin-top: 0px;}

    .et_pb_blurb_4{padding-top: 0px!important;}

    .contenido_nuestro_estudio {
        padding: 0px 30px!important;
    }

    .et_pb_fullwidth_header {
        position: relative;
        padding: 0px;
        background-repeat: no-repeat;
        background-position: top center;
        background-size: cover;
    }

    #tabs_nuestro_estudio {
        margin-top: 0px;
        border: 0px;
    }

    #tabs_nuestro_estudio ul.et_pb_tabs_controls {
        background: transparent;
        border: none;
        margin-bottom: 30px;
    }

    #tabs_nuestro_estudio ul.et_pb_tabs_controls:after {
        border-top: 0px;
    }

    .centrado {
        max-width: 1080px;
        margin: 0px auto;
    }


    /* Filosofia */

    .tabcontent img {
        margin-right: 100%;
    }

    #excelencia strong,
    #clientes strong,
    #apuesta strong {
        color: #3391C4;
    }

    #liderazgo strong,
    #ambicion strong,
    #trabajando strong {
        color: #3391C4;
    }

    #filosofia .et_pb_blurb {
        min-height:400px;
        padding:30px;
    }

    #filosofia .et_pb_blurb h4 {
        font-size: 32px;
        color: #5c8fc1!important;
        width: 200px!important;
        border-bottom:2px solid #5c8fc1;
        padding-bottom:10px;
        margin-bottom:20px;
        width:auto!important;
        display:inline-block;
    }

    .filosofia strong, {
        color: #5c8fc1;
    }

    #filosofia .et_pb_main_blurb_image {
        margin-bottom: 30px;
        text-align: center;
        min-height: 180px;
    }

    #filosofia_img {
        margin-bottom: 50px;
        float: left;
    }

    #filosofia_img img {
        width: 60px;
        height: 60px;
    }

    .tab {
        padding-top: 0px;
        min-height: 600px;
    }

    .tab button {
        width: 100%;
        text-align: right;
        padding: 13px 0px;
        border: none;
        background: transparent;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
    }

    .tabcontent {
        min-height: 480px;
        font-size: 18px!important;
        line-height: 30px;
    }

    #defaultOpen span {
        color: #0FB2AD;
    }

    button#defaultOpen {
        color: #3391C4;
    }

    .tab button span {
        color: #3391C4;
    }

    .tab .noOpen span {
        color: #3391C4!important;
    }

    .tab button.active span {
        color: #0FB2AD;
    }


    /* NETWORK */

    .networks p {
        padding: 0px;
        margin: 0px;
    }

    .networks a,
    .premios #premios_ul li {
        list-style:none;
        list-style-type:none;
        list-style-image:none;
        font-size: 20px;
        display: block;
        float: left;
        width: 25%;
        margin: 30px 0px;
        border-left: 2px solid #666666;
        padding: 0px 0px 0px 20px;
        color: #666666;
        height: 80px;
    }

    .networks a:hover {
        color: #3391C4;
        border-left: 2px solid #3391C4;
    }
    
    .networks a.blank{
        border-left:0px!important;
    }

    #premios_ul {
        list-style:none;
        list-style-type:none;
        list-style-image:none;
        list-style-image:url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7);
    }
    .premios #premios_ul li {
        list-style:none;
        list-style-type:none;
        list-style-image:none;
        list-style-image:url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7);
        position: relative;
        padding-right: 20px;
    }

    .premios #premios_ul li div {
        display: none;
        position: absolute;
        left: -2px;
        padding: 0px 20px 20px 20px;
        z-index: 9999999;
    }

    .premios #premios_ul li p {
        font-size: 14px;
    }

    .premios #premios_ul li h3 {
        font-size: 20px;
        color: #666;
        text-transform: uppercase;
    }

    .premios #premios_ul li:hover {
        border-left: 2px solid #3391C4;
        background: #F7F7F7;
        cursor: pointer;
    }

    .premios #premios_ul li:hover h3 {
        color: #3391C4;
    }

    .premios #premios_ul li div {
        display: none;
    }

    .premios #premios_ul li:hover div {
        width: 100%;
        display: block;
        border-left: 2px solid #3391C4;
        background: #F7F7F7;
    }

    .et_pb_fullwidth_header .header-content{padding-top: 0px;padding: 0px;}
    .et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content{margin-right: 0px!important;}

    .et_pb_section_1{padding-top:0px}.et_pb_blurb_6.et_pb_blurb{color:#666767!important;padding-top:30px!important;padding-right:30px!important;padding-bottom:30px!important;padding-left:30px!important}body #page-container .et_pb_button_3:before,body #page-container .et_pb_button_3:after{display:none!important}.et_pb_row_2{width:100%}.et_pb_row_3{width:100%}
    .et_pb_blurb_3.et_pb_blurb h4,.et_pb_blurb_3.et_pb_blurb h4 {font-size:32px;color:#5c8fc1!important}.et_pb_blurb_3.et_pb_blurb{color:#666767!important;padding-right:30px!important;padding-bottom:30px!important;padding-left:30px!important}.et_pb_blurb_4.et_pb_blurb h4,.et_pb_blurb_4.et_pb_blurb h4 a{font-size:32px;color:#5c8fc1!important}.et_pb_blurb_4.et_pb_blurb{color:#666767!important;padding-top:0px!important;padding-right:30px!important;padding-bottom:30px!important;padding-left:30px!important}.et_pb_blurb_5.et_pb_blurb h4,.et_pb_blurb_5.et_pb_blurb h4 a{font-size:32px;color:#5c8fc1!important}.et_pb_blurb_5.et_pb_blurb{color:#666767!important;padding-top:30px!important;padding-right:30px!important;padding-bottom:30px!important;padding-left:30px!important}.et_pb_blurb_6.et_pb_blurb h4,.et_pb_blurb_6.et_pb_blurb h4 a{font-size:32px;color:#5c8fc1!important}.et_pb_blurb_7.et_pb_blurb h4,.et_pb_blurb_7.et_pb_blurb h4 a{font-size:32px;color:#5c8fc1!important}body #page-container .et_pb_button_3{border-radius:0px;letter-spacing:0px}.et_pb_blurb_7.et_pb_blurb{color:#666767!important;padding-top:30px!important;padding-right:30px!important;padding-bottom:30px!important;padding-left:30px!important}.et_pb_blurb_7.et_pb_blurb h4{padding-bottom:10px;margin-bottom:20px;width:auto!important;display:inline-block}.et_pb_column_15{float:left;width:300px}.et_pb_text_3{width:100%}.et_pb_column_16{float:right!important}.et_pb_text_4.et_pb_text{color:#2180ac!important}.et_pb_text_4{font-weight:bold;font-size:18px}.et_pb_section_10{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_section_10.et_pb_section{background-color:#3b3b3b!important}.et_pb_row_9.et_pb_row{padding-top:35px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_button_3,.et_pb_button_3:hover{padding:0.3em 1em!important}body #page-container .et_pb_button_2:before,body #page-container .et_pb_button_2:after{display:none!important}.et_pb_section_1.et_pb_section{background-color:#3b3b3b!important}.et_pb_blurb_2.et_pb_blurb{margin-bottom:15px!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}.et_pb_section_2.et_pb_section{background-color:rgba(0,0,0,0.5)!important}.et_pb_blurb_0.et_pb_blurb{margin-bottom:15px!important}
    .et_pb_blurb_1.et_pb_blurb{margin-bottom:15px!important;}

    .contenido_nuestro_estudio .et_pb_main_blurb_image img{max-width:200px; height: 170px;}
    .et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h1{text-transform:uppercase}.et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-image:url('https://www.carey.cl/wp-content/uploads/2017/01/torres-del-paine.jpg')}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#000000}.et_pb_section_4{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}body #page-container .et_pb_button_0{border-radius:0px;letter-spacing:0px}.et_pb_button_0,.et_pb_button_0:hover{padding:0.3em 1em!important}body #page-container .et_pb_button_0:before,body #page-container .et_pb_button_0:after{display:none!important}

    body #page-container .et_pb_button_1{border-radius:0px;letter-spacing:0px;<?php if(ICL_LANGUAGE_CODE=="en"){ ?>padding-top:70px;<?php } ?>}

    body #page-container .et_pb_button_1:before,body #page-container .et_pb_button_1:after{display:none!important}body #page-container .et_pb_button_2{border-radius:0px;letter-spacing:0px}.et_pb_row_9{max-width:100%!important}
    @media only screen and (max-width:767px){.et_pb_section_3{display:block;}.et_pb_blurb_3.et_pb_blurb h4,.et_pb_blurb_3.et_pb_blurb h4{font-size:22px}.et_pb_blurb_3.et_pb_blurb{padding-top:10px!important;padding-right:10px!important;padding-bottom:10px!important;padding-left:10px!important}.et_pb_blurb_4.et_pb_blurb h4,.et_pb_blurb_4.et_pb_blurb h4 a{font-size:22px}.et_pb_blurb_4.et_pb_blurb{padding:0px 10px 10px 10px;padding-top:0px!important;padding-right:10px!important;padding-bottom:10px!important;padding-left:10px!important}.et_pb_blurb_5.et_pb_blurb h4,.et_pb_blurb_5.et_pb_blurb h4 a{font-size:22px}.et_pb_blurb_5.et_pb_blurb{padding-top:0px!important;padding-right:10px!important;padding-bottom:10px!important;padding-left:10px!important}.et_pb_blurb_6.et_pb_blurb h4,.et_pb_blurb_6.et_pb_blurb h4 a{font-size:22px}.et_pb_blurb_6.et_pb_blurb{padding-top:0px!important;padding-right:10px!important;padding-bottom:10px!important;padding-left:10px!important}.et_pb_blurb_7.et_pb_blurb h4,.et_pb_blurb_7.et_pb_blurb h4 a{font-size:22px}.et_pb_blurb_7.et_pb_blurb{padding-top:0px!important;padding-right:10px!important;padding-bottom:10px!important;padding-left:10px!important}.et_pb_section_10{padding-top:0px;padding-right:0px;padding-bottom:55px;padding-left:0px}}.filosofia .et_pb_blurb h4{font-size:32px;color:#5c8fc1!important}

    .premiosbtn,.networkbtn{line-height:1em!important;padding-top:70px!important;}
    .page-id-15224 .networkbtn,.page-id-15224 .oficinaslider{line-height:1em!important;padding-top:80px!important;}

    .torrespaine{z-index:1;display:none;}
    .loading_slider{height:30vh;top:0px;display:block;z-index:99999;padding-top:150px!important;}

    /* Slider */
    .slideroficinas{visibility: hidden;display: none;}
    .slick-list,.slick-slider,.slick-track{position:relative;}
    .slick-loading .slick-slide,.slick-loading .slick-track{visibility:hidden!important;}

    .slick-dots li button:before,.slick-next:before,.slick-prev:before{font-family:slick;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
    .slick-slider{box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}
    .slick-list{overflow:hidden;margin:0;padding:0}
    .slick-list:focus{outline:0}
    .slick-list.dragging{cursor:pointer;cursor:hand}
    .slick-dots li,.slick-dots li button{cursor:pointer;height:20px;width:20px}
    .slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
    .slick-track{top:0;left:0}
    .slick-track:after,.slick-track:before{display:table;content:''}
    .slick-track:after{clear:both}
    .slick-slide{display:none;float:left;height:100%;min-height:1px}
    [dir=rtl] .slick-slide{float:right}
    .slick-slide img{display:block;width: 100%;}
    .slick-slide.slick-loading img{display:block}
    .slick-slide.dragging img{pointer-events:none}
    .slick-initialized .slick-slide{display:block;visibility: visible;}
    .slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}
    .slick-arrow.slick-hidden{display:none}
    .slick-dots,.slick-next,.slick-prev{position:absolute;display:block;padding:0}
    .slick-loading .slick-list{background:url(/wp-content/themes/Divi-Child-2/img/spinner.gif) center center no-repeat #fff;width: 100%;}
    .slick-next,.slick-prev{
        font-size:0;
        line-height:0;
        bottom:-57px;
        width:30px;
        height:30px;
        -webkit-transform:translate(0,-50%);
        transform:translate(0,-50%);
        cursor:pointer;
        color:transparent;
        border:none;
        outline:0;
        background:0 0;
        z-index: 99;
    }
    .slick-next:focus,.slick-next:hover,.slick-prev:focus,.slick-prev:hover{color:transparent;outline:0;background:0 0}.slick-next:focus:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-prev:hover:before{opacity:1}.slick-next.slick-disabled:before,.slick-prev.slick-disabled:before{opacity:.25}.slick-next:before,.slick-prev:before{font-size:20px;line-height:1;opacity:.75;color:#000}.slick-prev{left:0px}[dir=rtl] .slick-prev{right:0px;left:auto}.slick-prev:before{content:'â†'}.slick-next:before,[dir=rtl] .slick-prev:before{content:'â†’'}.slick-next{left:40px}[dir=rtl] .slick-next{right:auto;left:-25px}[dir=rtl] .slick-next:before{content:'â†'}.slick-dotted.slick-slider{margin-bottom:0}

    .slick-dots{
        bottom: -46px;
    width: 100%;
    margin: 0;
    list-style: none;
    text-align: center;
    background: #2180A8;
    padding: 10px 0 10px 0!important;
    }
    .slick-dots li{position:relative;display:inline-block;margin:0 5px;padding:0}
    .slick-dots li button{line-height:0;display:block;padding:5px;color:transparent;border:0;outline:0;background:0 0}
    .slick-dots li button:focus,.slick-dots li button:hover{outline:0}
    .slick-dots li button:focus:before,.slick-dots li button:hover:before{opacity:1;}
    .slick-dots li button:before{content:'\2022';color:#fff;font-size:2em;line-height:20px;position:absolute;top:0;left:0;width:20px;height:20px;text-align:center;opacity:.25;}
    .slick-dots li.slick-active button:before{opacity:.75;color:#fff}.slick-slide .nombre{font-weight:700;font-size:1.3em;width:160px;margin-top:10px;display:block}
    .slick-next::before,
    .slick-prev::before{background:url(/wp-content/themes/Divi-Child-2/img/boton-postula-blanco.png) no-repeat;content:"";display:block;height:30px;width:30px}
    .slick-next::before{right:0px}
    .slick-prev::before{left:0px;-webkit-transform:scaleX(-1);transform:scaleX(-1);-webkit-filter:FlipH;filter:FlipH;-ms-filter:"FlipH"}


        <?php if(ICL_LANGUAGE_CODE=="en"){ ?>
        .premiosbtn{padding-left:30px!important; padding-right: 30px!important;}
        <?php } ?>

<?php } ?>

<?php if(is_singular('cv')){ ?>
    /*
    |--------------------------------------------------------------------------
    | CV
    |--------------------------------------------------------------------------
    */
    #cabecera_cv {
        margin-top: 0px;
        padding: 0px;
    }
    #cabecera_cv .et_pb_row{padding: 0px;}

    #cabecera_cv #nombre {
        line-height: 1em;
        text-transform: uppercase;
        margin-bottom: 10px;
        color:#2180ac;
    }

    #cabecera_cv .email,
    #listado_personas .email,
    #listado_cargo .email {
        width: 23px;
        height: 27px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -444px -3px;
        float: left;
    }

    #cabecera_cv .telefono,
    #listado_personas .telefono,
    #listado_cargo .telefono {
        width: 25px;
        height: 27px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -471px -2px;
        float: left;
    }

    #cabecera_cv .vcard {
        width: 38px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -401px -1px;
        margin-bottom: 10px;
        float: left;
        margin-right: 10px;
    }

    #cabecera_cv .print {
        width: 38px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -360px -1px;
        margin-bottom: 10px;
        float: left;
        margin-right: 10px;
        cursor: pointer;
    }

    #cabecera_cv .binder {
        width: 38px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -325px -1px;
        margin-bottom: 10px;
        float: left;
        margin-right: 10px;
    }

    #cabecera_cv .linkedin {
        width: 38px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -289px -1px;
        margin-bottom: 10px;
        float: left;
        margin-right: 10px;
    }

    #cabecera_cv #experiencia strong {
        color: #2180ac;
    }
    #cabecera_cv #experiencia h3{color: #2180ac;}

    #cabecera_cv #experiencia .scroll {
        overflow:auto;
        position:relative;
        padding:0 10px 0 0;
        /* height:346px; */
        height: auto;
        max-height: 334px;
        min-height: 232px;
        text-align: justify;
    }

    #experiencia {
        margin-bottom: 0px!important;
    }

    #contenido_cv {}

    .cv_tabla a {color:#2180A8;text-decoration: underline;}
    #contenido_cv .columna1 {
        width: 60%;
        min-width: 641px;
    }

    #contenido_cv .columna2 {
        width: 30%;
        border-left: 1px #666 dashed;
        padding-left: 25px;
    }

    #contenido_cv .columna1 .contenido_cv {
        padding: 0px 0px 0px 25px;
        margin-bottom: 30px;
        position: relative;
    }

    #contenido_cv .columna1 .contenido_cv_experiencia {padding:0px;}

    #contenido_cv .columna1 strong,#contenido_cv .columna1 b {
        color: #2180ac;
    }

    #contenido_cv .columna1 h3 {
        color: #2180ac;
        padding-left: 30px;
        font-size: 18px;
        padding-bottom: 20px;
    }
    #contenido_cv .columna1 .contenido_cv_experiencia h3 {padding-left:0px;}

    #contenido_cv .columna1 ul {
        list-style: none;
        margin-left: 30px;
        font-size: 14px;
    }

    #contenido_cv .columna1 ul li:before {
        content: "\2022";
        color: #2180ac;
        font-weight: bold;
        font-size: 18px;
        position: absolute;
        left: 40px;
    }

    #contenido_cv #premios .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -147px -1px;
        position: absolute;
        top: -8px;
        left: 0px;
    }

    #contenido_cv #publicaciones .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -181px -1px;
        position: absolute;
        top: -8px;
        left: 0px;
    }

    #contenido_cv #actividades .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -214px -1px;
        position: absolute;
        top: -8px;
        left: 0px;
    }

    #contenido_cv #asesorias .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -250px -1px;
        position: absolute;
        top: -8px;
        left: 0px;
    }

    #contenido_cv #educacion .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -1px -1px;
        margin-bottom: 10px;
    }

    #contenido_cv #seminarios .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -37px -1px;
        position: absolute;
        top: -8px;
        left: 0px;
    }

    #contenido_cv #admisiones .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -73px -1px;
        margin-bottom: 10px;
    }


    #contenido_cv #idiomas,#contenido_cv #admisiones{position: relative;}
    #contenido_cv #idiomas .sprite {
        width: 35px;
        height: 35px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -109px -1px;
        margin-bottom: 10px;
    }
    #contenido_cv #idiomas p,#contenido_cv #admisiones p{padding: 0 0 0 17px;}
    #contenido_cv #idiomas p:before,#contenido_cv #admisiones p:before{
        content: "\2022 ";
        font-size: 22px;
        color: #666;
        position: absolute;
        margin: 0 0 0 -15px;
        top:75px;
    }

    .spritedoc {
        width: 36px;
        height: 36px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -635px -2px;
        margin-bottom: 10px;
    }

    .areas_relacionadas .spriteareas {
        width: 39px;
        height: 39px;
        background: url('https://res.cloudinary.com/gsalazar/image/upload/v1515082300/spite-carey_vmw15e.png') no-repeat -728px 1px;
        margin-bottom: 10px;
    }

    .contenido_cv p{padding-left: 30px;}

    #contenido_cv .columna2 .contenido_cv2 {
        margin: 0px 0px 30px 0px;
    }
    #contenido_cv .columna2 .contenido_cv2 h3{color:#2180ac;text-transform:uppercase;font-size:18px;}

    #contenido_cv .columna2 ul {
        padding: 0px;
        margin: 0px 0 0 30px;
        font-size: 14px;
        list-style-type: disc;
    }

    #contenido_cv .columna2 li {
        margin-bottom: 10px;
    }
    #contenido_cv .columna2 #idiomas li {
        margin-bottom:0px;
    }
    .et_pb_section_1{padding-top:0px}.et_pb_text_3{font-family:'Open Sans',Helvetica,Arial,Lucida,sans-serif;font-weight:bold;font-size:30px}.et_pb_text_3.et_pb_text{color:#4d4d4d!important}.et_pb_text_2{font-family:'Open Sans',Helvetica,Arial,Lucida,sans-serif;font-weight:bold;font-size:54px;margin-top:35px!important}.et_pb_text_0{max-width:1080px;margin:0px auto}.et_pb_row_1.et_pb_row{padding-top:0px;padding-bottom:0px}.et_pb_blurb_2 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_2.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_1 .et_pb_main_blurb_image img{max-width:200px}.et_pb_section_1.et_pb_section{background-color:#3b3b3b!important}.et_pb_blurb_1.et_pb_blurb{margin-bottom:15px!important}.et_pb_blurb_0 .et_pb_main_blurb_image img{max-width:200px}.et_pb_blurb_0.et_pb_blurb{margin-bottom:15px!important}.et_pb_column_0{width:100%!important}.et_pb_section_2.et_pb_section{background-color:rgba(0,0,0,0.5)!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu .nav li ul{background-color:#3b3b3b!important}.et_pb_fullwidth_menu_0.et_pb_fullwidth_menu{background-color:#3b3b3b}.et_pb_section_6{padding-top:30px}
<?php } ?>

    .post-entry{text-align: justify;}
    #franja_negra .mobile{display: none;padding:10px 0px;}
    #franja_negra .pc{display: block;}

    #cover{position:fixed;padding:0;margin:0;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,0.5);background:#F7F7F7;z-index:99999;opacity: 0.5;}
    .btnAlert{font-family:Arial;color:#fff;font-size:16px;background:#AD4C2E;padding:30px;text-decoration:none;text-align:center;position:absolute;z-index:999999;width:780px;margin-left: auto;margin-right: auto;left: 0;right: 0;top:25%;border:3px solid #fff;}
    .btnAlert a{color:#fff}


    .home .ipads{display: none;}
    /*
    |--------------------------------------------------------------------------
    | CELULARES IPADS
    |--------------------------------------------------------------------------
    */

    /* Desktops and laptops ----------- */

    @media only screen and (min-width: 1224px) {
      .home #portada, .home #portada section, .video-responsive {
        height:48vh;
        margin-top:158px;
      }
    }

    /* Large screens ----------- */

    @media only screen and (min-width: 1824px) {
      .home #portada, .home #portada section, .video-responsive {
        height: 66vh;
        margin-top: 0px;
      }
    }

    /* CELULAR */

    /* iPads (portrait and landscape) ----------- */

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {

      .home .bandaazul .contenido{
        max-width:885px;
      }
      .home #over_video {
        display: block;
        height: 146px;
      }
      .home #sidebar {
        position: relative;
        margin-bottom: 50px;
        -khtml-opacity: 0.5;
        height: 146px;
      }

      <?php if( !is_front_page()) {
        ?>#sidebar {
          display: none !important;
        }
        <?php
      }
      ?>
      .home .bandaazul .contenido {
        width: 93%;
      }
      #listado_personas {
        display: block;
        margin-top: 20px;
      }
      .et_pb_row {
        width:100%;
      }
      .listado_equipo li {
        min-width: 127px;
        width: 127px;
      }
      /* IPADMENU */
      .et_fixed_nav #main-header, .et_fixed_nav #top-header {
        padding:0px 20px;
        position:fixed;
      }
      .f-nav {
        top: 80px;
      }
      .fullwidth-menu-nav {
        display: none;
      }
      .et_pb_fullwidth_menu.et_pb_fullwidth_menu_fullwidth .et_pb_row {
        padding: 0px !important;
      }
      .mobile_menu_bar {
        background: url('/wp-content/themes/Divi-Child-2/img/hamburger.png') 10px 0 no-repeat;
        height: 35px;
      }
      .mobile_menu_bar span {
        width: 100%;
      }
      .mobile_nav.opened .mobile_menu_bar {
        background: url('/wp-content/themes/Divi-Child-2/img/hamburger-close.png') 10px 0 no-repeat;
      }
      #mobile_menu1 {
        background: #3b3b3b;
        border-top: 0px;
        padding: 0 0 0 17px !important;
        width: 350px;
        height: auto;
        min-height: auto;
      }
      .et_mobile_menu li a {
        width: 100%;
        padding: 10px 4%;
        border-bottom: 0px;
      }
      .carey_out {
        display: none;
      }
      .et_mobile_device .escondido_cel {
        display: block !important;
      }
      .et_pb_fullwidth_menu .et_mobile_nav_menu {
        float: none;
      }
      .et_mobile_nav_menu {
        display: block;
        padding: 10px 0px 10px 0px;
      }
      .et_header_style_split .mobile_menu_bar, .et_header_style_left .mobile_menu_bar {
        z-index: 9999;
      }
      .et_mobile_menu .menu-item-has-children>a:after {
        display: none;
      }
      #contenido {
        padding: 0px 20px !important;
      }
      #chinadesk .asterisco {
        margin-top: 30px;
      }
      .et_pb_section .et_pb_column .et_pb_module {
        margin-bottom: 0px;
      }
      body.news-alert #contenido_news-alert .columna1, body.news-alert-en #contenido_news-alert-en .columna1 {
        width: 70%;
      }
      #news_alert_lateral {
        width: 27%;
        margin-top: 0px;
        padding-left: 15px;
        border-left: 1px dashed #2180AC;
      }
      .et_pb_fullwidth_header .et_pb_fullwidth_header_container {
        width: 100%;
      }
      .home .boton_circular {
        margin: 10px auto;
        float: inherit;
        font-size: 16px !important;
        padding-top: 123px !important;
      }
      .et_pb_text_1 {
        padding-left: 0px !important;
      }
      #ofrecemos .et_pb_text_1 {
        padding-left: 1em !important;
      }
      .postulaciones .fila .et_pb_column .escondido, .postulaciones .fila .et_pb_column_3 .escondido, .postulaciones .fila .et_pb_column_6 .escondido, .postulaciones .fila .et_pb_column_9 .escondido, .postulaciones .fila .et_pb_column_12 .escondido{
        width:313%;
        height: auto!important;
      }
      #noticias_home .post-content .more-link, #newsalert_home .post-content .more-link {
        right: 57px;
      }
      .boton_circular {
        height: 130px;
        width: 130px;
        margin: 20px 10px 0px 5px;
        float: left;
        font-size: 12px !important;
        padding: 50px 10px 0px 10px !important;
      }
      .boton_circular:hover {
        padding: 50px 10px 0px 10px !important;
      }
      .page-id-15224 .networkbtn, .page-id-15224 .oficinaslider, .page-id-15224 .premiosbtn{
        padding-top: 62px!important;
      }
      .tabs-menu .filosofia, .tabs-menu .historia {
        padding-top:8px !important;
      }
      #cv_busqueda p {
        display: none;
        padding-bottom: 0px;
      }
      #cv_busqueda .et_pb_column {
        margin: 0px;
      }
      #redes_sociales {
        width: 100%;
        padding: 0px 30px;
      }
      #redes_sociales .volverr {
        float: left;
      }
      #redes_sociales .siguenos {
        float: right;
      }
      .slideroficina {
        height: 37vh;
        top: 0px;
        padding-top: 69px;
      }
      #contenido_news-alert article {
        padding: 0px 20px 0px 0px !important;
      }
      .fecha {
        position: relative;
        top: 0px;
        right: 0px;
        width: 70%;
        margin-bottom: 20px;
        float: left;
      }
      .titulos h2, .filosofia h2, .prensa h2, .historia h2, .premios h2, .tituloscv, .titulos_al {
        margin: 0px 0px 25px 0px;
      }
      .et_pb_ajax_pagination_container article {
        padding: 0px 20px 0px 20px !important;
      }
      #noticias article, #newsalert article {
        width: 48% !important;
        height: 240px !important;
        margin-right: 0px;
      }
      #noticias .et_pb_post, #newsalert .et_pb_post {
        margin-bottom: 20px !important;
      }
      #newsalert .et_pb_post:nth-child(odd) {
        margin-right: 25px;
      }
      #full_slider_postulaciones_bg {
        padding: 30px 0px 0px 30px;
      }
      .postulaciones .fila .et_pb_column {
        margin-bottom: 2%;
      }
      #talentos, #ofrecemos {
        padding: 40px 10px 20px 30px !important;
      }
      .postulaciones {
        padding: 70px 10px 20px 20px !important;
      }
      .boton_listado {
        width: 49%;
        padding: 7px 0px;
        margin-right: 5px;
        height: 33px;
      }

      .slick-slide a{
        height: auto;
      }
      .abogadoslider .nombre{
        width: 90%;
      }

      .punteada, .no-punteada{
        width: 24.875%!important;
      }
      .punteada, .no-punteada, .et_pb_gutters3 .et_pb_column_1_4, .et_pb_gutters3.et_pb_row .et_pb_column_1_4{
        width:33%;
      }
    }

    /* iPads (landscape) ----------- */

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {
      .home #sidebarH {
        display: none !important;
      }

      .video-responsive{
        height: 62vh;
      }
      .video {
        top: -10px;
      }

      .et_pb_row {
        width: 90%;
      }
      .listado_equipo li {
        width: 127px;
        min-width: 127px;
      }
      #contenido_cv .columna1 {
        min-width: 625px;
      }
      .boton_circular {
        margin:0px 23px 0px 23px !important
      }
      .tabs-menu .filosofia, .tabs-menu .historia {
        padding-top: 4px !important;
      }
      .boton_listado {
        width: auto;
        padding: 7px 15px;
        margin-right: 5px;
        height: 33px;
      }
      #portada, #portada section {
        height: 41vh;
      }
      .et_non_fixed_nav.et_transparent_nav.et_show_nav #page-container, .et_fixed_nav.et_show_nav #page-container {
        padding-top:113px !important;
      }
    }

    /* iPads (portrait) ----------- */

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {

      .home .bandaazul .contenido {
        max-width: 726px;
      }
      .home .video{
        top:15px;
      }
      .video-responsive {
        height:37vh;
      }
      .page-id-15168 #page-container {
        padding-top:135px!important;
      }
      #portada, #portada section {
        height:24vh;
      }
      .slick-slider{
        margin-top: 55px;
      }
      body #page-container .et_pb_button_1{
        padding-top: 56px!important;
      }
      #contenido_cv {
        padding: 0px 25px 0px 5px;
      }
      #cabecera_cv .columna1_cv {
        width: 40% !important;
      }
      #cabecera_cv .columna2_cv {
        width:55% !important;
        margin-left: 15px;
      }
      #cabecera_cv img {
        width: 100%;
      }
      #cabecera_cv #experiencia .scroll {
        height: auto!important;
      }
      #contenido_cv .et_pb_column {
        width: 100% !important;
      }
      #noticias article, #newsalert article {
        margin-right:13px !important;
      }
      #newsalert .et_pb_post:nth-child(odd) {
        margin-right:13px !important;
      }
      body.news-alert #contenido_news-alert .columna1 {
        width: 70%;
      }
      .postulaciones .fila .et_pb_column {
        width: 30% !important;
      }
      .postulaciones .fila .box {
        font-size: 18px !important;
        height: 115px !important;
      }

      #cv_busqueda{
        margin-top: 57px;
      }
      .resultado_busqueda article{
        width:53%;
      }
      .resultado_busqueda article h2{
        line-height: 1.3em;
      }
    }

    /* Smartphones (portrait and landscape) ----------- */

    @media only screen and (min-device-width: 320px) and (max-device-width: 640px) {
      #sidebar {
        display: none !important;
      }
      .navigation li:first-child {
        display: none;
      }
      .navigation li.active:first-child {
        display: inline-block;
      }
      .navigation li:last-child {
        display: none;
      }
      .navigation li.active:last-child {
        display: inline-block;
      }
      body #page-container .et_pb_button_1 {
        <?php if(ICL_LANGUAGE_CODE=="en") {
          ?>padding-top: 20px !important;
          <?php
        }
        ?>
      }
      #et-main-area, .home .container {
        margin-top: 118px;
      }
      body.home #et-main-area, .home .container {
        margin-top: 0px !important;
      }
      #full_slider_home_bg {
        margin-bottom: 0px !important;
      }
      .single-areas .et_pb_section_5 {
        padding: 0px 10px 20px 0px;
      }
      #selector_sectores .flecha {
        margin-left: 10px;
      }
      .contenedor_sectores {
        width: 100% !important;
      }
      #selector_sectores .abridor {
        padding: 10px 0px;
        width: 86%;
      }
      .single-areas #areas_detalle .ssector {
        display: none;
      }
      .single-areas #areas_detalle .centrar br {
        display: none;
      }
      #areas_detalle {
        padding: 0px 30px 30px 50px;
      }
      #newsalert {
        padding-top: 20px;
      }
      /* HOME */
      .video-responsive {
        height: auto;
        background: #2180a8;
        margin-top: 120px;
      }
      .video {
        position: relative;
        top: 0px;
      }
      video {
        background-image: url('images/preload_30x30.gif');
        background-repeat: no-repeat;
        background-size: 30px 30px;
        background-position: center;
      }
      .home .bandaazul .contenido {
        width: 90%;
      }
      .home .bandaazul .contenido h1 {
        font-size: 18px;
      }
      .home .bandaazul .contenido p {
        font-size: 16px;
      }
      /* HOME */
      /* POSTULACIONES */
      .page-id-16491 .et_pb_fullwidth_header .et_pb_fullwidth_header_container {
        width: 95%;
      }
      #franja_negra .contenido a {
        display: block;
        text-align: left;
      }
      #franja_negra .mobile {
        display: block;
      }
      #franja_negra .pc {
        display: none;
      }
      #franja_negra .et_pb_fullwidth_header p {
        color: #333;
      }
      #franja_negra .contenido a.activo {
        background: transparent;
        color: #2180a8;
      }
      .postulaciones .fila .box {
        padding: 1em;
        min-height: auto;
        width:100%!important;
      }
      .postulaciones .fila .et_pb_column_1 .escondido, .postulaciones .fila .et_pb_column_4 .escondido, .postulaciones .fila .et_pb_column_7 .escondido, .postulaciones .fila .et_pb_column_10 .escondido, .postulaciones .fila .et_pb_column_13 .escondido {
        width: auto;
        z-index: 9999;
        left:0px;
      }
      .postulaciones .fila .et_pb_column_2 .escondido, .postulaciones .fila .et_pb_column_5 .escondido, .postulaciones .fila .et_pb_column_8 .escondido, .postulaciones .fila .et_pb_column_11 .escondido, .postulaciones .fila .et_pb_column_14 .escondido {
        width: auto;
        left: 0px;
        z-index: 9999;
      }
      .postulaciones .fila .et_pb_column_3 .escondido, .postulaciones .fila .et_pb_column_6 .escondido, .postulaciones .fila .et_pb_column_9 .escondido, .postulaciones .fila .et_pb_column_12 .escondido, .postulaciones .fila .et_pb_column_15 .escondido {
        width: auto;
        left: 0px;
        z-index: 9999;
      }
      .postulaciones .fila .escondido p {
        width: 100%;
        margin-bottom: 30px;
      }
      .postulaciones #fila1 div:nth-child(odd) .box ul, .postulaciones #fila2 .box ul, .postulaciones #fila3 div:nth-child(odd) .box ul, .postulaciones #fila1 .box ul, .postulaciones #fila2 div:nth-child(odd) .box ul, .postulaciones #fila3 .box ul {
        border-left: 0px;
      }
      .postulaciones .fila .escondido ul, .postulaciones .fila .escondido blockquote {
        width: 100%;
        float: left;
        padding-left: 17px;
      }
      .postulaciones .fila ul li {
        line-height: 22px;
      }
      #talentos, #ofrecemos {
        padding: 40px 10px 20px 10px !important;
      }
      /* POSTULACIONES */
      .slick-slide a {
        height: auto;
      }
      .slick-next {
        right: 8px;
        z-index: 9999;
      }
      .slick-prev {
        left: 8px;
        z-index: 9999;
      }
      /* CONTACTO */
      .postulaciones {
        padding: 70px 10px 20px 0px !important;
      }
      .punteada {
        border: 0px;
        padding-left: 10px;
      }
      .reloj p {
        margin-bottom: 25px;
      }
      .titulos h2, .filosofia h2, .prensa h2, .historia h2, .premios h2, .tituloscv {
        margin: 10px 0px;
      }
      .contacto .direccion {
        border-left: 0px;
        padding-left: 10px;
        background-position: 10px top !important;
      }
      /* CONTACTO */
      /* CV */
      .listado_letras ul {
        -webkit-column-count: 1;
        column-count: 1;
      }
      #cabecera_cv #nombre {
        font-size: 2.5em;
        margin-top: 0px !important;
      }
      #cabecera_cv #cargo {
        font-size: 1.5em;
        margin-bottom: 0px;
      }
      #cabecera_cv #experiencia .scroll {
        height: auto!important;
        max-height:unset;
        min-height:unset;
        overflow: hidden;
      }
      #contenido_cv .columna1 .contenido_cv {
        padding: 0px;
      }
      #contenido_cv .columna1 h3 {
        padding-left: 50px;
      }
      #contenido_cv .sprite {
        left: 5px !important;
      }
      .contenido_cv p {
        padding-left: 50px;
        padding-right: 15px;
      }
      .areas_relacionadas .spriteareas, #contenido_cv #educacion .sprite, #contenido_cv #admisiones .sprite, #contenido_cv #idiomas .sprite, .spritedoc {
        float: left;
        margin-left: 5px;
      }
      #contenido_cv .columna2 {
        padding-left: 0px;
        border-left: 0px;
      }
      .areas_relacionadas h3, .documentos h3, #contenido_cv .columna2 .contenido_cv2 h3 {
        padding-left: 50px;
        margin-bottom: 20px;
      }
      .documentos_relacionado {
        margin-left: 30px !important;
      }
      #contenido_cv ul {
        margin-left: 50px !important;
      }
      #contenido_cv ul li:before {
        left: 32px !important;
      }
      .documentos .iframe-r {
        margin-left: 50px;
      }
      /* CV */
      #network a, .premios #premios_ul li {
        width: 100%;
      }
      #network a {
        margin-left: 14px;
      }
      #postulacion {
        padding-top: 0px;
      }
      .titulos h2, .filosofia h2, .prensa h2, .historia h2, .premios h2, .tituloscv {
        margin: 10px 0px 10px 0px;
      }
      #noticias, #newsalert {
        margin-top: 20px;
      }
      #noticias article, #newsalert article {
        margin-bottom: 0px !important;
        height: auto !important;
        padding: 15px 15px 75px 15px !important;
        width: 100% !important;
      }
      .resultado_busqueda {
        width: 100%;
        margin-bottom: 20px;
      }
      .boton_listado {
        float: left;
        margin-bottom: 10px;
        width: 100%;
      }
      .columna2_cv {
        padding: 15px;
      }
      #contenido_cv .columna1 {
        min-width: inherit;
      }
      #menus {
        padding-top: 0px;
      }
      .et_header_style_left .logo_container {
        width: 170px;
      }
      .et_header_style_left #logo {
        max-width: 100%;
      }
      .et_header_style_left #et-top-navigation {
        display: block;
        padding-top: 30px;
      }
      .et_header_style_left #et-top-navigation a.langmenu {
        float: right;
      }
      .et_mobile_device .escondido_cel {
        display: block !important;
      }
      .home #portada {
        margin-top: 0px;
      }
      .home #sidebar {
        padding: 10px 0px 15px 0px !important;
        height: 150px;
        display: block;
      }
      .home .et_pb_main_blurb_image {
        margin-bottom: 10px;
      }
      .et_search_outer {
        display: none;
      }
      #contenido {
        padding: 0px 15px !important;
        margin-top: 0px;
      }
      #contenido article {
        padding: 0px;
      }
      #contenido .entry-content {
        padding: 0px;
      }
      .et_fixed_nav #main-header, .et_fixed_nav #top-header {
        position: fixed !important;
        z-index: 8888;
        padding: 0px 20px;
      }
      #portada .header-content h1 {
        font-size: 15px;
        line-height: normal;
        padding: 5px !important;
        width: 100%;
      }
      #portada, #portada section {
        height: 22vh;
        background-size: cover;
      }
      #portada .et_pb_fullwidth_header_0.et_pb_fullwidth_header p {
        width: 100%;
        margin: 10px auto 0 auto;
        display: none;
      }
      #noticias_home, #newsalert_home {
        padding: 10px 4%;
      }
      #noticias_home article, #newsalert_home article {
        padding: 30px !important;
        position: inherit;
        top: inherit;
        height: auto;
      }
      #noticias_home .entry-title, #newsalert_home .entry-title {
        position: inherit;
        top: inherit;
        font-size: 22px !important;
      }
      #noticias_home .post-meta, #newsalert_home .post-meta {
        display: none !important;
      }
      #noticias_home .post-content .more-link, #newsalert_home .post-content {}
      #contenido .et_pb_row {
        padding-right: 0px;
        padding-left: 0px;
      }
      #contenido_news-alert article, #contenido_news-alert-en article {
        padding: 30px;
        float: none;
        width: auto;
      }
      body.news-alert #contenido_news-alert article, body.news-alert-en #contenido_news-alert-en article {
        padding: 0px;
      }
      body.news-alert #contenido_news-alert .entry-content, body.news-alert-en #contenido_news-alert-en .entry-content {
        padding: 0px;
      }
      body.news-alert #contenido_news-alert .columna1, body.news-alert-en #contenido_news-alert-en .columna1 {
        width: 100%;
      }
      #news_alert_lateral {
        width: 100%;
        margin-top: 20px;
        border-left: 0px;
        padding-left: 0px;
      }
      .et_mobile_nav_menu {
        padding: 10px 0px 10px 0px;
      }
      .carey_out {
        display: none;
      }
      .hhide {
        display: none !important;
      }
      .visible {
        display: block !important;
      }
      .boton_circular {
        font-family: 'Patua One', cursive;
        font-size: 1em !important;
        line-height: 1em !important;
        float: none;
        width: auto;
        height: auto;
        padding: 10px 20px !important;
        text-align: center;
        text-transform: uppercase;
        color: #575756;
        border: 0 !important;
        background-color: rgba(255, 255, 255, .5);
        transition-all: none !important;
        -webkit-transition-all: none !important;
        -moz-transition-all: none;
      }
      .boton_circular:after {
        content: "";
      }
      .home .boton_circular {
        width: 200px;
        height: 200px;
        line-height: 1em !important;
      }
      .home .boton_circular:hover {
        color: #ffffff !important;
        background-color: #3391c4 !important;
        padding: 130px 20px 10px 20px !important;
        width: 200px !important;
        height: 200px !important;
      }
      .et_pb_tab_active {
        background-color: #3391c4 !important;
        color: #fff !important;
      }
      .f-nav {
        position: fixed;
        z-index: 9999;
        margin: 0px;
        height: 50px;
        top: 75px;
      }
      .home #portada section {
        height: 60vh;
      }
      .home .et_pb_row_2.et_pb_row {
        padding-bottom: 10px;
        padding-top: 0px;
      }
      .home .et_pb_row_4.et_pb_row {
        margin-bottom: 0px !important;
      }
      .home .et_pb_section_6 {
        padding: 0px 15px 10px 15px;
      }
      .home #noticias_home article {
        padding: 30px !important;
        margin-bottom: 10px !important;
      }
      .et_pb_column {
        margin: 15px 0px;
      }
      .et_pb_section {
        padding: 0px;
      }
      .et_pb_row, .et_pb_column .et_pb_row_inner {
        width: 100%;
        padding: 0px;
      }
      .et_pb_post h2, .et_pb_blog_grid h2 {
        font-size: 22px;
        line-height: 24px;
      }
      .et_non_fixed_nav.et_transparent_nav.et_show_nav #page-container, .et_fixed_nav.et_show_nav #page-container {
        padding-top: 6px !important;
      }
      #searchform {
        width: 100%;
        margin: 0px auto 5px auto;
        display: block;
      }
      #searchform input[type=text] {
        width: 100%;
        min-width: auto;
      }
      #searchform .letritas {
        font-size: 18px;
      }
      .listado_letras {
        margin: 0px 0px;
        padding: 20px;
      }
      #cv_busqueda {
        margin-top: 0px;
      }
      #cabecera_cv .et_pb_column {
        margin-top: 0px;
      }
      #alfabetico {
        margin-top: 0px;
        padding: 0px !important;
        float: inherit;
        margin-left: 20px;
      }
      .listado_equipo li {
        margin-right: 10px;
      }
      .et_pb_section_3.et_pb_section {
        padding-top: 0px;
      }
      .resultado_busqueda {
        width: 50%;
        margin-bottom: 20px;
      }
      .resultado_busqueda article {
        border-left: none;
        width: 66%;
        float: left;
        margin-left: 15px;
        padding-left: 10px;
        height: 140px;
        font-size: 14px;
      }
      .resultado_busqueda article h2 {
        font-size: 18px;
      }
      .resultado_busqueda img {
        float: left;
        width: 100px;
        height: auto;
      }
      .listado_letras p {
        width: 100%;
      }
      #piepagina .et_pb_row_3.et_pb_row {
        padding-top: 0px;
      }
      .et_pb_section_5 {
        padding: 0px;
      }
      /* NUESTRO ESTUDIO */
      .page-id-15224 .networkbtn, .page-id-15224 .oficinaslider {
        line-height: 1em !important;
        padding-top: 20px !important;
      }
      body.home #page-container .et_pb_button_1 {
        line-height: 1em !important;
        padding-top: 130px !important;
      }
      .tabs-menu {
        background-color: transparent;
        width: 100% !important;
        max-width: 1080px !important;
        margin-top: 0px;
      }
      .contenido_nuestro_estudio {
        position: initial;
        background-color: transparent !important;
        padding: 0px !important;
      }
      #network h2, .filosofia h2, #historia h2, #premios h2 {
        padding: 10px 0;
        margin: 0 0 20px 0px;
      }
      .tabs-menu {
        width: 100%;
        float: left;
        margin-top: 0px;
      }
      #post-15168 .tabs-menu .et_pb_column {
        width: 50% !important;
        float: left;
        text-align: center;
        margin: 0 0 10px 0;
      }
      #network h2, .filosofia h2, #historia h2, #premios h2 {
        margin: 0px !important;
      }
      .filosofia .et_pb_main_blurb_image {
        min-height: auto;
      }
      #premios #premios_ul {
        padding: 0px;
      }
      #network a, #premios #premios_ul li {
        width: 50%;
      }
      #premios #premios_ul li div {
        display: none;
        position: relative;
        padding: 0px 20px 20px 0px;
        z-index: 9;
      }
      #premios #premios_ul li:hover {
        border-left: 2px solid #3391C4;
        background: #F7F7F7;
        cursor: pointer;
        height: auto;
      }
      #premios #premios_ul li div {
        display: none;
      }
      #premios #premios_ul li:hover div {
        display: block;
        background: #F7F7F7;
        border: none;
      }
      .clock {
        font-size: 60px;
        padding: 15px 0px 5px 5px;
      }
      .reloj {
        height: 165px;
      }
      #wpc-weather.small .now .time_temperature {
        font-size: 40px;
      }
      /* areas de practica */
      #areas_detalle {
        width: auto;
        left: 0px;
        z-index: 999;
      }
      #areas_detalle .sector {
        height: auto;
      }
      .centrar {
        width: auto;
      }
      #selector_sectores .ssector {
        width: 100%;
        text-align: left;
        border: 0px;
        height: 40px;
      }
      .sector {
        width: 100%;
        column-count: unset;
      }
      .sector a {
        width: 90%;
        padding: 2px 0px 0px 5px
      }
      .areas-template-default #contenido .et_pb_text_inner p {
        text-align: justify;
      }
      .single-areas #contenido {
        padding: 0 6%;
      }
      .slick-slide img, .slick-slide .nombre, .slick-slide .cargo {
        margin: 0 auto;
        width: 100%;
        display: block;
      }
      #redes_sociales {
        padding: 10px;
        width: auto;
      }
      #redes_sociales .volverr, #redes_sociales .siguenos {
        width: auto;
      }
      #redes_sociales .siguenos {
        float: right;
      }
      #piepagina table {
        width: 90%;
      }
      #chinadesk .datos {
        border-right: 0px;
        height: auto;
      }
      #chinadesk .titulo {
        margin-top: 20px;
      }
      #formulario {
        padding: 0px 10px;
      }
      .btnpostulaciones {
        width: 100%;
        margin-bottom: 10px;
      }
      #formulario .activo:after {
        display: none;
      }
      .gform_wrapper table.gfield_list tr {
        border: 0px !important;
        background: transparent !important;
      }
      .gform_wrapper table.gfield_list td {
        margin-left: 0px !important;
        margin-right: 0px !important;
      }
      #listado_personas {
        display: none;
      }
      .search-results #listado_personas {
        display: block;
      }
      .home #over_video {
        display: none;
      }
      #mobile_menu1 {
        display: none;
        min-height: 100vh;
        height: 100%;
        top: 0px;
        right: 0;
        position: fixed;
        z-index: 9998;
        overflow: hidden;
        border-top: none;
        background: #3b3b3b !important;
        padding: 0px;
      }
      .et_mobile_menu li a {
        color: #FFFFFF !important;
        width: 82%;
        float: right;
        text-align: left;
        border-bottom: 1px solid #ddd;
        margin: 5px;
        /* -webkit-transition: .2s;
        transition: .2s; */
        text-transform: uppercase;
        padding: 8px 0px 8px 8px;
      }
    
      .mobile_nav ul#mobile_menu1 .current_page_item>a {
        color: #2180A8 !important;
      }

      .mobile_menu_bar {
        background: url('/wp-content/themes/Divi-Child-2/img/hamburger.png') 10px 0 no-repeat;
        height: 35px;
      }

      .mobile_menu_bar span {
        width: 100%;
      }
      .mobile_nav.opened .mobile_menu_bar {
        background: url('/wp-content/themes/Divi-Child-2/img/hamburger-close.png') 10px 0 no-repeat;
        top:-75px!important;
      }
      #main-header .container.clearfix.et_menu_container {
        width: 100%;
      }
      .et_header_style_split .mobile_menu_bar, .et_header_style_left .mobile_menu_bar {
        z-index: 9999;
      }
      #et-top-navigation {
        padding-right: 5px;
      }
      #full_slider_home .et_pb_fullwidth_header_container {
        width: 100%;
      }
      #full_slider_home h1 {
        font-size: 20px;
      }
      #full_slider_home p {
        font-size: 15px;
      }
      #full_slider_home_bg {
        padding: 0px;
        margin-bottom: 20px;
      }
      #full_slider_home_bg .header-content {
        margin: 5px !important;
      }
      .home #over_video {
        display: none;
      }
      .titulos h2, .filosofia h2, .prensa h2, .historia h2, .premios h2, .tituloscv, .titulos_al {
        margin: 0px 0px 30px 0px;
      }
      #portada, #portada section, .imageareas {
        height: 20vh;
      }
      .home #portada {
        height: 35vh;
      }
      .home .et_pb_text_1 {
        padding-left: 0px !important;
      }
      .boton_circular {
        padding: 20px !important;
        width: 100%;
        margin-right: 0px;
        margin-bottom: 10px !important;
      }
      .boton_circular:hover {
        padding: 20px !important;
        width: 100%;
        height: 54px;
      }
      .premiosbtn {
        padding-top: 130px !important;
      }
      .home .boton_circular {
        padding: 130px 20px 0px 20px !important;
        margin-top: 30px;
      }
      .page-id-15168 .boton_circular {
        padding: 20px !important;
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        float: none;
        display: block !important;
        margin-bottom: 15px !important;
      }
      .slick-dotted.slick-slider {
        height: 93px;
      }
      .slick-dots {
        height: 45px;
      }
      .slick-dots li {
        display: none;
      }
      .et_pb_fullwidth_header .header-content {
        margin: 0px !imprtant;
      }
      #portada .header-content {
        margin: 0px;
      }
      .et_pb_blog_0 .entry-title {
        margin-bottom: 10px;
      }
      #contenido {
        padding: 20px 15px !important;
      }
      #contenido .titulo, #contenido .titulo_na {
        padding-right: 0px;
        width: auto;
      }
      #contenido .titulo, #contenido .fecha {
        top:35px;
        right: auto;
      }
      #contenido .columna1 {
        width: 100%;
        text-align: justify;
      }
      #links_legales {
        margin-top: 20px;
      }
      .et_non_fixed_nav.et_transparent_nav.et_show_nav #page-container, .et_fixed_nav.et_show_nav #page-container {
        padding-top: 6px !important;
      }
      .et_mobile_nav_menu {
        padding: 10px 0px 10px 0px;
        height: 51px;
      }
      .f-nav {
        bottom: 0px;
      }
      .escondido_cel {
        display: block !important;
      }
      #cv_busqueda .et_pb_module {
        padding: 0px;
      }
      #cv_busqueda p {
        padding: 0px;
        line-height: 0px;
      }
      #searchform {
        width: 100%;
        margin: 0px auto 5px auto;
      }
      #searchform input[type=text] {
        margin-bottom: 0px;
        float: left;
        min-width: unset;
        width: 100%;
      }
      #searchform .letritas {
        width: 300px;
      }
      .resultado_busqueda {
        width: 100%;
      }
      .resultado_busqueda article {
        width: 45%;
      }
      .et_pb_section_4 {
        padding: 0px;
      }
      .et_pb_row_1.et_pb_row {
        padding-top: 0px;
      }
      .et_pb_column {
        margin: 0px;
      }
      /* Nuestro Equipo */
      .et_pb_section_5 {
        z-index: 9;
      }
    }

@media only screen and (min-device-width: 320px) and (max-device-width: 640px) and (orientation: landscape) {
    .slick-dotted.slick-slider {
      height:166px;
    }
    #contenido{
      margin-top: 126px;
    }
    .page-id-15168 .boton_circular{
      width:50%;
      float: left;
    }
    .video-responsive{
      height: 65vh;
    }
}

@media only screen and (min-width: 480px) {
  #mobile_menu1 {
    padding-top: 15px;
  }
}

@media only screen and (max-width: 340px) {
  #mobile_menu1 {
    width: 40%;
    margin-left: 0;
  }
}

</style>

<link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "42f31130-41a4-4dc3-ae52-469e8c051e34",
      autoRegister: false,
      notifyButton: {
        enable: true,
      },
    });
  });
</script>

<!-- link rel="stylesheet" href="http://www.ecarey.cl/wp-content/themes/Divi-Child-2/mobile.css?v=1" type="text/css" / -->

<?php if(is_singular('cv') or is_page(array('15172','20396','16491','16502','16489','16499'))){ ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<?php } ?>

<!-- FIN MANUAL HEADER -->

    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>

    <!-- antes de header -->
    <?php wp_head(); ?>
    <!-- despues de header -->
    <style>body.cv-template-default .et_pb_row {padding:0px;}</style>

    <?php  if(current_user_can('manage_options') == 1){
    show_admin_bar(true); ?>
    <link rel='stylesheet' id='dashicons-css'  href='https://www.carey.cl/wp-includes/css/dashicons.min.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='admin-bar-css'  href='https://www.carey.cl/wp-includes/css/admin-bar.min.css?ver=4.8.2' type='text/css' media='all' />
    <style type="text/css" media="print">
	    html { margin-top: 32px !important; }
	    * html body { margin-top: 32px !important; }
        @media screen and ( max-width: 782px ) {
    		html { margin-top: 46px !important; }
    		* html body { margin-top: 46px !important; }
    	}
    </style>
    <script type='text/javascript' src='https://www.carey.cl/wp-includes/js/admin-bar.min.js?ver=4.8.2'></script>
    <?php
    }else{
        show_admin_bar(false);
    }
    ?>
</head>

<body <?php body_class(); if (is_page(array('16489','16499'))){ ?>onLoad="MakeTime(); ShowClock()" <?php } ?> >

    <!-- div id="cover">
        <img src='https://res.cloudinary.com/gsalazar/image/upload/v1508777536/logo-carey_t0vbuk.png' width="200px" height="61px" /><br><br>
        <img src="https://res.cloudinary.com/gsalazar/image/upload/v1508777475/preloader_hyfm48.gif" width="50px" height="50px" />
    </div -->

<!--[if lte IE 8]>
<div id="cover">
<div class="btnAlert">
<?php if(ICL_LANGUAGE_CODE=="es"){ ?>
<b>Su navegador no está actualizado.</b><br />Tiene fallas de seguridad y podría no mostrar todo lo incluido en éste y otros sitios web.<br />
Si desea <a href="http://outdatedbrowser.com/es" target="blank" style="text-decoration:underline;">actualizar su navegador, puede hacerlo en el siguiente link.</a>
<?php } else { ?>
<b>Your browser is outdated.</b><br />It has known security flaws and may not display all the features of this and other websites.<br /> If you wish to <a href="http://outdatedbrowser.com/en" target="blank" style="text-decoration:underline;">update your browser, you can do it in the following link.</a>
<?php } ?>
</div>
</div>
<![endif]-->

    <div id="page-container">
        <header id="main-header" data-height-onload="66">
            <div class="container clearfix et_menu_container">
                <div class="logo_container">
                    <span class="logo_helper"></span>
                    <?php if(ICL_LANGUAGE_CODE=="es"){ ?>
                      <a href="https://www.carey.cl/"><img src="https://res.cloudinary.com/gsalazar/image/upload/v1522267785/logo140_carey.png" alt="Carey Abogados" id="logo" data-height-percentage="61" /></a>
                    <?php } else { ?>
                      <a href="https://www.carey.cl/en/"><img src="https://res.cloudinary.com/gsalazar/image/upload/v1522267785/logo140_carey.png" alt="Carey Law firm" id="logo" data-height-percentage="61" /></a>
                    <?php } ?>
                </div>

				<div id="et-top-navigation" data-height="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>" data-fixed-height="<?php echo esc_attr( et_get_option( 'minimized_menu_height', '40' ) ); ?>">

				<?php echo myLangselector(); ?>

				</div> <!-- #et-top-navigation -->
        </div>
            <!-- .container -->
        </header>
        <!-- #main-header -->

        <div id="et-main-area">
        <div class="transparencia">
<?php
if (myLang()<>'English'){
    echo do_shortcode('[et_pb_section global_module="18276"][/et_pb_section]'); // MENU INGLES DIVI Libreria
}else{
    echo do_shortcode('[et_pb_section global_module="16923"][/et_pb_section]'); // MENU ESPAÑOL DIVI Libreria
}

if(is_front_page())
{ ?>
  <style>video.loading {background: black url('/wp-content/themes/Divi-Child-2/img/loading.gif') center center no-repeat;}</style>
  <div class="video-responsive">
    <video class="video" muted="muted" loop="loop" autoplay="autoplay">
      <source src="https://www.carey.cl/wp-content/uploads/2017/01/maqueta-video-carey.mp4" type="video/mp4">
      <source src="https://www.carey.cl/wp-content/uploads/2017/01/maqueta-video-carey.webmhd.webm" type="video/webm">
      Your browser does not support HTML5 video.
    </video>
    <canvas class="canvas"></canvas>
    <div id="over_video">
    <?php include('includes/sidebar.php'); ?>
    </div>
  </div>

  <div class="bandaazul">
      <div class="contenido">
        <?php if(ICL_LANGUAGE_CODE<>"en"){ ?>
          <h1>COMPROMETIDOS CON LA VISIÓN DE LOS CLIENTES</h1>
          <p>Con más de 250 profesionales en su área legal, Carey es el estudio de abogados más grande de Chile. Los abogados de la firma están comprometidos con el negocio de sus clientes, sus problemas y desafíos.</p>
        <?php }else{ ?>
          <h1>COMMITTED TO THE VISION OF EACH CLIENT</h1>
          <p>With more than 250 legal professionals, Carey is the largest law firm in Chile. The firm’s attorneys are committed to understanding the clients’ business, challenges and objectives.</p>
        <?php } ?>
        <a class="bajar" href="#contenido">&nbsp;</a>
      </div>
  </div>
<?php } ?>

  <div class="ipads">
    <?php include('includes/sidebar.php'); ?>
  </div>
