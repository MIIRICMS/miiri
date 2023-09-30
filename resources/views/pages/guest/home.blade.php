@extends('layout.master3')

@section('title')
    <title>MIIRI| Home Page</title>
@endsection

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" />
  <style class="customize"></style>
  <style>
      .nav-tabs {
          display: flex;
          justify-content: center;
          background-color: #f7f7f7;
          border-radius: 5px;
          overflow: hidden;
          margin: 0;
          padding: 0;
      }

      .nav-tabs li {
          list-style: none;
      }

      .nav-tabs a {
          display: inline-block;
          padding: 10px 20px;
          text-decoration: none;
          color: #480376;
          font-weight: bold;
          transition: background-color 0.3s, color 0.3s;
      }

      .nav-tabs a:hover {
          background-color: #333;
          color: #fff;
      }

      /* Optional: Add a border to the active tab */
      .nav-tabs a.active {
          background-color: #333;
          color: #fff;
          border-bottom: 2px solid #ff9800;
      }
  </style>

  <style>
      /* Define styles for the section */
      .opportunities-section {
          background-color: #f2f2f2;
          /* Light grey background */
          padding: 20px;
          text-align: center;
      }

      /* Style the h1 */
      .opportunities-title {
          font-size: 24px;
      }

      /* Style the buttons */
      .opportunity-button {
          display: inline-block;
          padding: 10px 20px;
          margin: 10px;
          border-radius: 25px;
          /* Rounded borders */
          background-color: #00A651;
          /* Purple background color */
          color: white;
          /* White text color */
          text-decoration: none;
          /* Remove underline */
      }
  </style>
@endpush

@section('content')
    <a href="#main-content" class="visually-hidden focusable">
        Skip to main content
    </a>

    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

        <div class="body-page gva-body-page">
            <div id="jpreContent">
                <div id="jprecontent-inner">
                    <div class="preloader-wrapper hidden active">
                        <img src="images/preloader-7.gif" alt>
                    </div>
                </div>
            </div>
            <header id="header" class="header-v1">




                <div class="header-main gv-sticky-menu">
                    <div class="container header-content-layout">
                        <div class="header-main-inner p-relative">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-8 branding">
                                    <div>

                                        <a href="/drupal/gito/" title="Home" rel="home" class="site-branding-logo">
                                            <img src="{{asset('assets/images/logo.png')}}" alt="Home">

                                        </a>

                                    </div>

                                </div>

                                <div class="col-md-9 col-sm-6 col-xs-4 p-static">
                                    <div class="header-inner clearfix">
                                        <div class="main-menu">
                                            <div class="area-main-menu">
                                                <div class="area-inner">
                                                    <div class="gva-offcanvas-mobile">
                                                        <div class="close-offcanvas hidden"><i class="fa fa-times"></i></div>
                                                        <div>
                                                            <nav role="navigation" aria-labelledby="block-gavias-gito-mainnavigation-menu"
                                                                 id="block-gavias-gito-mainnavigation" class="block block-menu navigation menu--main">


                                                                <h2 class="visually-hidden block-title" id="block-gavias-gito-mainnavigation-menu">
                                                                    <span>Main navigation</span></h2>

                                                                <div class="block-content">

                                                                    <div class="gva-navigation">

                                                                        <ul class="clearfix gva_menu gva_menu_main">


                                                                            <li class="menu-item menu-item--active-trail ">
                                                                                <a href="index.html">
                                                                                    Home
                                                                                    <!--<span class="icaret nav-plus fa fa-angle-down"></span>-->

                                                                                </a>



                                                                            </li>

                                                                            <li class="menu-item menu-item--expanded ">
                                                                                <a href="about.html">
                                                                                    About
                                                                                    <span class="icaret nav-plus fa fa-angle-down"></span>

                                                                                </a>

                                                                                <ul class="menu sub-menu">

                                                                                    <li class="menu-item">
                                                                                        <a href="team.html">
                                                                                            Team

                                                                                        </a>

                                                                                    </li>

                                                                                    <li class="menu-item">
                                                                                        <a href="partners.html">
                                                                                            Partners

                                                                                        </a>

                                                                                    </li>




                                                                                </ul>

                                                                            </li>

                                                                            <li class="menu-item ">
                                                                                <a href="Research and Innovations.html">

                                                                                    Research & Innovations
                                                                                </a>

                                                                            </li>

                                                                            <li class="menu-item ">
                                                                                <a href="Programmes_Projects.html">
                                                                                    Programmes & Projects

                                                                                </a>

                                                                            </li>

                                                                            <li class="menu-item ">
                                                                                <a href="publications.html">
                                                                                    Publications

                                                                                </a>

                                                                            </li>
                                                                            <li class="menu-item ">
                                                                                <a href="news _ events.html">
                                                                                    News

                                                                                </a>

                                                                            </li>
                                                                            <li class="menu-item ">
                                                                                <a href="contact.html">
                                                                                    Contact Us



                                                                                </a>

                                                                            </li>
{{--                                                                            <li class="menu-item ">--}}
{{--                                                                                <a href="{{ route('login')}}">Login</a>--}}
{{--                                                                            </li>--}}
                                                                        </ul>

                                                                    </div>


                                                                </div>
                                                            </nav>

                                                        </div>




                                                    </div>

                                                    <div id="menu-bar" class="menu-bar hidden-lg hidden-md">
                                                        <span class="one"></span>
                                                        <span class="two"></span>
                                                        <span class="three"></span>
                                                    </div>

                                                    <div class="gva-search-region search-region">
                                                        <span class="icon"><i class="gv-icon-52"></i></span>
                                                        <div class="search-content">
                                                            <div>
                                                                <div class="search-block-form block block-search container-inline"
                                                                     data-drupal-selector="search-block-form" id="block-gavias-gito-searchform"
                                                                     role="search">


                                                                    <form action="/drupal/gito/search/node" method="get" id="search-block-form"
                                                                          accept-charset="UTF-8" class="search-form search-block-form">
                                                                        <div
                                                                            class="js-form-item form-item js-form-type-search form-item-keys js-form-item-keys form-no-label">
                                                                            <label for="edit-keys" class="visually-hidden">Search</label>
                                                                            <input title="Enter the terms you wish to search for."
                                                                                   data-drupal-selector="edit-keys" type="search" id="edit-keys" name="keys" value
                                                                                   size="15" maxlength="128" class="form-search">

                                                                        </div>
                                                                        <div data-drupal-selector="edit-actions"
                                                                             class="form-actions js-form-wrapper form-wrapper" id="edit-actions--2"><input
                                                                                class="search-form__submit button js-form-submit form-submit"
                                                                                data-drupal-selector="edit-submit" type="submit" id="edit-submit--2"
                                                                                value="Search">
                                                                        </div>

                                                                    </form>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <div role="main" class="main main-page">

                <div class="clearfix"></div>


                <div class="help gav-help-region">
                    <div class="container">
                        <div class="content-inner">
                            <div>
                                <div data-drupal-messages-fallback class="hidden"></div>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>

                <div class="clearfix"></div>

                <div id="content" class="content content-full">
                    <div class="container-full">
                        <div class="content-main-inner">
                            <div id="page-main-content" class="main-content">
                                <div class="main-content-inner">

                                    <div class="content-main">
                                        <div>
                                            <div id="block-gavias-gito-mainpagecontent"
                                                 class="block block-system block-system-main-block no-title">


                                                <div class="content block-content">
                                                    <!-- Start Display article for detail page -->

                                                    <article data-history-node-id="1" role="article" typeof="schema:WebPage"
                                                             class="node node--type-page node--view-mode-full">
                                                        <header>
                                                            <div class="container">
                                                                <div class="widget gsc-heading align-left style-1 padding-bottom-20">
                                                                    <h2 class="node__title title">
                                    <span><span property="schema:name">Home 1</span>
                                    </span><span class="heading-line"></span>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </header>
                                                        <div class="node__content clearfix">

                                                            <div
                                                                class="field field--name-field-block-builder field--type-blockbuilder field--label-hidden field__item">
                                                                <div class="gavias-blockbuilder-content">

                                                                    <div class="gavias-blockbuilder-content">
                                                                        <div class="gbb-row-wrapper">
                                                                            <div class=" gbb-row bg-size-cover" style>
                                                                                <div class="bb-inner remove_margin remove_padding remove_padding_col">
                                                                                    <div class="bb-container container-fw">
                                                                                        <div class="row">
                                                                                            <div class="row-wrapper clearfix">
                                                                                                <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                                        <div class="column-content-inner">
                                                                                                            <div
                                                                                                                class="widget gsc-block-drupal title-align-left  hidden-title-on remove-margin-on text-dark">
                                                                                                                <div id="block-gavias-gito-gaviassliderlayerslider1"
                                                                                                                     class="block block-gavias-sliderlayer block-gavias-sliderlayer-blockgavias-sliderlayer-block____1 no-title">


                                                                                                                    <div class="content block-content">
                                                                                                                        <div
                                                                                                                            class="gavias_sliderlayer rev_slider_wrapper fullwidthbanner-container"
                                                                                                                            style="height:900px">
                                                                                                                            <div id="cf6pq" class="rev_slider fullwidthabanner"
                                                                                                                                 data-version="5.4.1">
                                                                                                                                <ul>
                                                                                                                                    <li data-transition="random"
                                                                                                                                        data-easein="Power0.easeIn"
                                                                                                                                        data-easeout="Power1.easeOut" data-slotamount="7"
                                                                                                                                        data-kenburns="off" data-masterspeed="default"
                                                                                                                                        data-index="rs-1">
                                                                                                                                        <img class="rev-slidebg" src="{{asset($page->image_1)}}"
                                                                                                                                             alt data-duration="300" data-bgparallax="8"
                                                                                                                                             data-scalestart="120" data-scaleend="100"
                                                                                                                                             data-kenburns="on" data-bgrepeat="no-repeat"
                                                                                                                                             style="background-color:#f2f2f2"
                                                                                                                                             data-bgfit="cover" data-bgposition="center top">

                                                                                                                                        <h2 class="tp-caption text slide-style-1 "
                                                                                                                                            data-x="center" data-y="325" data-start="1000.00"
                                                                                                                                            data-transform_idle="o:1;"
                                                                                                                                            data-transform_in="x:inherit;y:inherit;z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;"
                                                                                                                                            style="z-index:4">
                                                                                                                                            {{$contents->title1}}</h2>
                                                                                                                                        <h5 class="tp-caption text slide-style-2 "
                                                                                                                                            style="font-size: 40px;" data-x="center"
                                                                                                                                            data-y="415" data-start="1500.00"
                                                                                                                                            data-transform_idle="o:1;"
                                                                                                                                            data-transform_in="x:inherit;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;"
                                                                                                                                            style="z-index:3">
                                                                                                                                            <b></b>    {!! $contents->description1  !!}
                                                                                                                                        </h5>


                                                                                                                                        <!--<div class="tp-caption text btn-slide-line " data-x="center" data-y="495" data-start="2000.00" data-transform_idle="o:1;" data-transform_in="x:inherit;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:2">
  <a href="#online-booking">Reservation Now</a></div></li>

<li data-transition="random" data-easein="Power0.easeIn" data-easeout="Power1.easeOut" data-slotamount="7" data-kenburns="off" data-masterspeed="default" data-index="rs-2">
   	<img class="rev-slidebg" src="images/MIIRI home bg pic.png" alt data-duration="300" data-bgparallax="8" data-scalestart="0" data-scaleend="0" data-kenburns="off" data-bgrepeat="no-repeat" style="background-color:#f2f2f2" data-bgfit="cover" data-bgposition="center top"><div class="tp-caption text slide-style-1 " data-x="center" data-y="305" data-start="1000.00" data-transform_idle="o:1;" data-transform_in="x:inherit;y:inherit;z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:4">
  Welcome to</div><div class="tp-caption text slide-style-2 " data-x="center" data-y="405" data-start="1500.00" data-transform_idle="o:1;" data-transform_in="x:inherit;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:3">
  <b>MIIRI</b></div><div class="tp-caption text btn-slide-line " data-x="center" data-y="485" data-start="2000.00" data-transform_idle="o:1;" data-transform_in="x:inherit;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:2">-->


                                                                                                                                </ul>
                                                                                                                                <!--<div class="tp-bannertimer tp-top"></div>-->
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <script type="text/javascript">

                                                                                                                            jQuery(document).ready(function ($) {
                                                                                                                                jQuery('#cf6pq').show().revolution({ "delay": 9000, "gridheight": 900, "gridwidth": 1170, "minHeight": 0, "autoHeight": "off", "sliderType": "standard", "sliderLayout": "auto", "fullScreenAutoWidth": "on", "fullScreenAlignForce": "off", "fullScreenOffsetContainer": "", "fullScreenOffset": "0", "hideCaptionAtLimit": 0, "hideAllCaptionAtLimit": 0, "hideSliderAtLimit": 0, "disableProgressBar": "off", "stopAtSlide": -1, "stopAfterLoops": -1, "shadow": "0", "dottedOverlay": "none", "startDelay": 0, "lazyType": "none", "spinner": "spinner0", "shuffle": "off", "debugMode": 0, "parallax": { "type": "mouse", "origo": "slidercenter", "speed": 2000, "levels": [4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55] }, "navigation": { "onHoverStop": "on", "touch": { "touchenabled": "on" }, "arrows": { "enable": true, "left": { "h_align": "left", "v_align": "center", "h_offset": 20, "v_offset": 0 }, "right": { "h_align": "right", "v_align": "center", "h_offset": 20, "v_offset": 0 } }, "bullets": { "enable": true, "v_align": "bottom", "h_align": "center", "v_offset": 20, "space": 10, "tmp": "" } } });
                                                                                                                            });

                                                                                                                        </script>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>

                                                                        </div>
                                                                        <div class="gbb-row-wrapper">
                                                                            <div class=" gbb-row bg-size-cover" style="padding-top:30px; padding-bottom:30px">
                                                                                <div class="bb-inner default">
                                                                                    <div class="bb-container container">
                                                                                        <div class="row">
                                                                                            <div class="row-wrapper clearfix">
                                                                                                <div class="gsc-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                                        <div class="column-content-inner">
                                                                                                            <div class="widget gsc-call-to-action  button-bottom text-dark"
                                                                                                                 style>
                                                                                                                <div class="content-inner clearfix">
                                                                                                                    <div class="content">

                                                                                                                        <h2 class="title"><span>{{$contents->title2}}</span></h2>
                                                                                                                        <div class="desc">
                                                                                                                            <p>
                                                                                                                            </p>
                                                                                                                            <p>{!! $contents->description2  !!}
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="button-action">
                                                                                                                        <a href="about.html" class="btn-theme">Read more</a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="gsc-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                                        <div class="column-content-inner">
                                                                                                            <div class="widget gsc-video-box  clearfix">
                                                                                                                <div class="video-inner">
                                                                                                                    <div class="image"><img src="{{$page->image_2}}" alt></div>
                                                                                                                    <div class="video-body">
                                                                                                                        <a class="popup-video gsc-video-link" href>
                                                                                                                            <i class="fa icon-play space-40"></i>
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="background-repeat: no-repeat;background-position:center center;"
                                                                                     class="gva-parallax-inner skrollable skrollable-between bg-size-cover"
                                                                                     data-bottom-top="top: -68%;" data-top-bottom="top: 0%;"></div>
                                                                            </div>
                                                                        </div>

                                                                        <section class="opportunities-section" style="margin-bottom: 75px;">
                                                                            <h1 class="opportunities-title">Explore Opportunities in MIIRI</h1>
                                                                            <div>
                                                                                <a href="Participation.html" class="opportunity-button">Innovation
                                                                                    Challenges</a>
                                                                                <a href="Opportunities.html" class="opportunity-button">Internships</a>
                                                                                <a href="Opportunities.html" class="opportunity-button">Vacancy</a>
                                                                                <a href="Opportunities.html" class="opportunity-button">Donations</a>
                                                                            </div>
                                                                        </section>


                                                                        <div class="gbb-row-wrapper">

                                                                            <div class=" gbb-row gva-parallax-background  bg-size-default"
                                                                                 style="padding-bottom:30px; background-image:url(&#x27;assets/images/hsec3bg.jpg &#x27;); background-repeat:repeat; background-position:center bottom;">
                                                                                <div class="bb-inner default">
                                                                                    <div class="bb-container container">
                                                                                        <div class="row">
                                                                                            <div class="row-wrapper clearfix">
                                                                                                <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                                        <div class="column-content-inner">
                                                                                                            <div class="widget gsc-heading  align-center style-1 text-light ">
                                                                                                                <div class="title"><span>Recent Programs </span></div>
                                                                                                                <div class="title-desc">
                                                                                                                    <p>Explore some of the programs that MIIRI is engaged in</p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="clearfix"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                                        <div class="column-content-inner">
                                                                                                            <div>
                                                                                                                <div
                                                                                                                    class="widget block gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off">
                                                                                                                    <div class="views-element-container">
                                                                                                                        <div
                                                                                                                            class="gva-view js-view-dom-id-24c8b193bd1adff46887829d7d606b16a731dd9c786cd21eb9fdc2df3652b670">








                                                                                                                            <div class="owl-carousel init-carousel-owl" data-items="3"
                                                                                                                                 data-items_lg="3" data-items_md="3" data-items_sm="2"
                                                                                                                                 data-items_xs="2" data-loop="1" data-speed="200"
                                                                                                                                 data-auto_play="1" data-auto_play_speed="1000"
                                                                                                                                 data-auto_play_timeout="3000" data-auto_play_hover="1"
                                                                                                                                 data-navigation="1" data-rewind_nav="0"
                                                                                                                                 data-pagination="0" data-mouse_drag="1"
                                                                                                                                 data-touch_drag="1">


                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <!-- Start Display article for teaser page -->

                                                                                                                                        <div class="service-block grid">
                                                                                                                                            <div class="service-images lightGallery">
                                                                                                                                                <div>
                                                                                                                                                    <div class="image-item">
                                                                                                                                                        <a href="/drupal/gito/sites/default/files/services/service-6.jpg"
                                                                                                                                                           class="zoomGallery" title
                                                                                                                                                           data-rel="lightGallery">
                                                                              <span class="icon-expand"><i
                                                                                      class="fa fa-expand"></i></span>
                                                                                                                                                            <img src="{{asset('assets/images/service-4.jpg')}}"
                                                                                                                                                                 class="hidden" alt>
                                                                                                                                                        </a>
                                                                                                                                                        <a href="/drupal/gito/node/104"
                                                                                                                                                           hreflang="en"><img src="{{asset('assets/images/prog1.png')}}"
                                                                                                                                                                              alt loading="lazy" typeof="foaf:Image">

                                                                                                                                                        </a>

                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                            <div class="service-content">
                                                                                                                                                <div class="content-inner">
                                                                                                                                                    <h3 class="title"><a
                                                                                                                                                            href="/drupal/gito/node/104"
                                                                                                                                                            rel="bookmark"><span>MUST Capacity
                                                                                Building Programme</span>
                                                                                                                                                        </a></h3>
                                                                                                                                                    <div class="desc">
                                                                                                                                                        <div
                                                                                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                                                                                            <p>The Malawi University of Science and
                                                                                                                                                                Technology (MUST) is part of a
                                                                                                                                                                consortium with Land O’Lakes Venture37
                                                                                                                                                                (formerly Land O’Lakes International
                                                                                                                                                                Development), the University of
                                                                                                                                                                Minnesota and Stellenbosch University,
                                                                                                                                                                to establish the</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!-- <div class="service-action clearfix">
            <div class="service-readmore"><a href="/drupal/gito/node/104">Read more  <i class="gv-icon-165"></i></a></div>
                          <div class="service-contact

                          ">
                <a class="use-ajax" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}" data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                          -service?title=Buffet">
                  <i class=" "></i>  contact


                </a>
              </div>
                      </div>  -->
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <!-- End Display article for teaser page -->

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <!-- Start Display article for teaser page -->

                                                                                                                                        <div class="service-block grid">
                                                                                                                                            <div class="service-images lightGallery">
                                                                                                                                                <div>
                                                                                                                                                    <div class="image-item">
                                                                                                                                                        <a href="/drupal/gito/sites/default/files/services/service-4.jpg"
                                                                                                                                                           class="zoomGallery" title
                                                                                                                                                           data-rel="lightGallery">
                                                                              <span class="icon-expand"><i
                                                                                      class="fa fa-expand"></i></span>
                                                                                                                                                            <img src="{{asset('assets/images/service-3.jpg')}}"
                                                                                                                                                                 class="hidden" alt>
                                                                                                                                                        </a>
                                                                                                                                                        <a href="/drupal/gito/node/103"
                                                                                                                                                           hreflang="en"><img src="{{asset('assets/images/prog2.png')}}" alt loading="lazy" typeof="foaf:Image"></a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="image-item">
                                                                                                                                                        <a href="/drupal/gito/sites/default/files/services/service-4-1.jpg"
                                                                                                                                                           class="zoomGallery hidden" title
                                                                                                                                                           data-rel="lightGallery">
                                                                                                                                                            <img src="{{asset('assets/images/service-4-1.jpg')}}" alt class="hidden">
                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                            <div class="service-content">
                                                                                                                                                <div class="content-inner">
                                                                                                                                                    <h3 class="title"><a
                                                                                                                                                            href="/drupal/gito/node/103"
                                                                                                                                                            rel="bookmark"><span>Innovation Scholar
                                                                                Programme</span>
                                                                                                                                                        </a></h3>
                                                                                                                                                    <div class="desc">
                                                                                                                                                        <div
                                                                                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                                                                                            <p>The ISP is a USAID Funded project that
                                                                                                                                                                is being implemented by MUST in
                                                                                                                                                                partnership with Lilongwe University of
                                                                                                                                                                Science and Technology (LUANAR) and
                                                                                                                                                                Michigan State University (MSU).</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!--<div class="service-action clearfix">
            <div class="service-readmore"><a href="/drupal/gito/node/103">Read more  <i class="gv-icon-165"></i></a></div>
                          <div class="service-contact

                          ">
                <a class="use-ajax" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}" data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                          -service?title=Wedding">
                  <i class=" "></i>  contact


                </a>
              </div>
                      </div>  -->
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <!-- End Display article for teaser page -->

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <!-- Start Display article for teaser page -->

                                                                                                                                        <div class="service-block grid">
                                                                                                                                            <div class="service-images lightGallery">
                                                                                                                                                <div>
                                                                                                                                                    <div class="image-item">
                                                                                                                                                        <a href="/drupal/gito/sites/default/files/services/service-2.jpg"
                                                                                                                                                           class="zoomGallery" title
                                                                                                                                                           data-rel="lightGallery">
                                                                              <span class="icon-expand"><i
                                                                                      class="fa fa-expand"></i></span>
                                                                                                                                                            <img src="{{asset('assets/images/service-2.jpg')}}"
                                                                                                                                                                 class="hidden" alt>
                                                                                                                                                        </a>
                                                                                                                                                        <a href="/drupal/gito/node/102"
                                                                                                                                                           hreflang="en"><img src="{{asset('assets/images/prog3.png')}}"
                                                                                                                                                                              alt loading="lazy" typeof="foaf:Image">

                                                                                                                                                        </a>

                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                            <div class="service-content">
                                                                                                                                                <div class="content-inner">
                                                                                                                                                    <h3 class="title"><a
                                                                                                                                                            href="/drupal/gito/node/102"
                                                                                                                                                            rel="bookmark"><span>Junior INNV Talent
                                                                                Programme</span>
                                                                                                                                                        </a></h3>
                                                                                                                                                    <div class="desc">
                                                                                                                                                        <div
                                                                                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                                                                                            <p>This component will be jointly
                                                                                                                                                                implemented by National Commission for
                                                                                                                                                                Science and Technology (NCST), Kamuzu
                                                                                                                                                                Academy in collaboration with Press
                                                                                                                                                                Trust and Ministry of Education Science
                                                                                                                                                                and Technology (MoEST)</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!--<div class="service-action clearfix">
            <div class="service-readmore"><a href="/drupal/gito/node/102">Read more  <i class="gv-icon-165"></i></a></div>
                          <div class="service-contact

                          ">
                <a class="use-ajax" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}" data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                          -service?title=Cake">
                  <i class=" "></i>  
                </a>
              </div>
                      </div> -->
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <!-- End Display article for teaser page -->

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <!-- Start Display article for teaser page -->

                                                                                                                                        <div class="service-block grid">
                                                                                                                                            <div class="service-images lightGallery">
                                                                                                                                                <div>
                                                                                                                                                    <div class="image-item">
                                                                                                                                                        <a href="/drupal/gito/sites/default/files/services/service-5.jpg"
                                                                                                                                                           class="zoomGallery" title
                                                                                                                                                           data-rel="lightGallery">
                                                                              <span class="icon-expand"><i
                                                                                      class="fa fa-expand"></i></span>
                                                                                                                                                            <img src="{{asset('assets/images/service-5.jpg')}}"
                                                                                                                                                                 class="hidden" alt>
                                                                                                                                                        </a>
                                                                                                                                                        <a href="/drupal/gito/node/101"
                                                                                                                                                           hreflang="en"><img src="{{asset('assets/images/prog4.png')}}"
                                                                                                                                                                              alt loading="lazy" typeof="foaf:Image">

                                                                                                                                                        </a>

                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                            <div class="service-content">
                                                                                                                                                <div class="content-inner">
                                                                                                                                                    <h3 class="title"><a
                                                                                                                                                            href="/drupal/gito/node/101"
                                                                                                                                                            rel="bookmark"><span>Center for
                                                                                Agricultural Innovation Programme</span>
                                                                                                                                                        </a></h3>
                                                                                                                                                    <div class="desc">
                                                                                                                                                        <div
                                                                                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                                                                                            <p>The Malawi University of Science and
                                                                                                                                                                Technology (MUST) is part of a
                                                                                                                                                                consortium with Land O’Lakes Venture37
                                                                                                                                                                (formerly Land O’Lakes International
                                                                                                                                                                Development), the University of
                                                                                                                                                                Minnesota and Stellenbosch University,
                                                                                                                                                                to establish the</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!-- <div class="service-action clearfix">
            <div class="service-readmore"><a href="/drupal/gito/node/101">Read more  <i class="gv-icon-165"></i></a></div>
                          <div class="service-contact

                          ">
                <a class="use-ajax" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}" data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                          -service?title=Team%20Building">
                  <i class=" "></i>  contact


                </a>
              </div>
                      </div> -->
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <!-- End Display article for teaser page -->

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <!-- Start Display article for teaser page -->

                                                                                                                                        <div class="service-block grid">
                                                                                                                                            <div class="service-images lightGallery">
                                                                                                                                                <div>
                                                                                                                                                    <div class="image-item">
                                                                                                                                                        <a href="/drupal/gito/sites/default/files/services/service-3.jpg"
                                                                                                                                                           class="zoomGallery" title
                                                                                                                                                           data-rel="lightGallery">
                                                                              <span class="icon-expand"><i
                                                                                      class="fa fa-expand"></i></span>
                                                                                                                                                            <img src="{{asset('assets/images/service-3.jpg')}}"
                                                                                                                                                                 class="hidden" alt>
                                                                                                                                                        </a>
                                                                                                                                                        <a href="/drupal/gito/node/100"
                                                                                                                                                           hreflang="en"><img src="{{asset('assets/images/prog5.png')}}"
                                                                                                                                                                              alt loading="lazy" typeof="foaf:Image">

                                                                                                                                                        </a>

                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                            <div class="service-content">
                                                                                                                                                <div class="content-inner">
                                                                                                                                                    <h3 class="title"><a
                                                                                                                                                            href="/drupal/gito/node/100"
                                                                                                                                                            rel="bookmark"><span>Industrial Innovation
                                                                                Programme</span>
                                                                                                                                                        </a></h3>
                                                                                                                                                    <div class="desc">
                                                                                                                                                        <div
                                                                                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                                                                                            <p>Innovation is a means to boost economic
                                                                                                                                                                growth and social development.
                                                                                                                                                                Industrialists are interested in
                                                                                                                                                                creating innovation ecosystems that
                                                                                                                                                                connect multiple innovation actors (e.g.
                                                                                                                                                                universities, research institutes,
                                                                                                                                                                business firms, etc.)</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!-- <div class="service-action clearfix">
            <div class="service-readmore"><a href="/drupal/gito/node/100">Read more  <i class="gv-icon-165"></i></a></div>
                          <div class="service-contact

                          ">
                <a class="use-ajax" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}" data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                          -service?title=Coffee">
                  <i class=" "></i>  contact


                </a>
              </div>
                      </div>-->
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <!-- End Display article for teaser page -->

                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                            </div>








                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="background-repeat: repeat;background-position:center bottom;"
                                                                                     class="gva-parallax-inner skrollable skrollable-between bg-size-default"
                                                                                     data-bottom-top="top: -68%;" data-top-bottom="top: 0%;"></div>
                                                                                <ul class="nav nav-tabs links-ajax col text-center" data-load="ajax">
                                                                                    <li><a href="programmes.html" data-panel="#tab-item-5cu962"
                                                                                           class="active">explore our Programs</a></li>
                                                                                    <!--<li><a href="javascript:void(0);" data-panel="#tab-item-5cu963">Snacks</a></li>
        <li><a href="javascript:void(0);" data-panel="#tab-item-5cu964">Dinner</a></li>
        <li><a href="javascript:void(0);" data-panel="#tab-item-5cu965">Lunch</a></li>-->
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="gbb-row-wrapper">
                                                                            <div class=" gbb-row bg-size-cover" style="background-color:#F3F4F4">
                                                                                <div class="bb-inner default">
                                                                                    <div class="bb-container container">
                                                                                        <div class="row">
                                                                                            <div class="row-wrapper clearfix">
                                                                                                <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                                        <div class="column-content-inner">
                                                                                                            <div class="widget gsc-heading  align-center style-1 text-dark ">
                                                                                                                <div class="title" style="color: #480376;"><span>News</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div>
                                                                                                                <div
                                                                                                                    class="widget block gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off">
                                                                                                                    <div class="views-element-container">
                                                                                                                        <div
                                                                                                                            class="post-grid-1 gva-view js-view-dom-id-845f7be07a1c9ad6db1e435d806f813eab70a19e4e34da3f01da7ad4643bea2c">








                                                                                                                            <div class="owl-carousel init-carousel-owl" data-items="3"
                                                                                                                                 data-items_lg="3" data-items_md="3" data-items_sm="2"
                                                                                                                                 data-items_xs="2" data-loop="1" data-speed="200"
                                                                                                                                 data-auto_play="0" data-auto_play_speed="1000"
                                                                                                                                 data-auto_play_timeout="3000" data-auto_play_hover="1"
                                                                                                                                 data-navigation="1" data-rewind_nav="0"
                                                                                                                                 data-pagination="0" data-mouse_drag="1"
                                                                                                                                 data-touch_drag="1">


                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <div class="views-field views-field-nothing">
                                                                                                                                            <div class="field-content">
                                                                                                                                                <div class="post-block">
                                                                                                                                                    <div class="post-image"> <a
                                                                                                                                                            href="/drupal/gito/server-side-rendering"
                                                                                                                                                            hreflang="en"><img
                                                                                                                                                                src="https://www.must.ac.mw/wp-content/uploads/2023/08/Gala23-420x273.jpg"
                                                                                                                                                                alt loading="lazy" typeof="Image">

                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="post-content">
                                                                                                                                                        <div class="post-categories"><a
                                                                                                                                                                href="/drupal/gito/taxonomy/term/5"
                                                                                                                                                                hreflang="en">Academics</a> </div>
                                                                                                                                                        <div class="post-title"> <a
                                                                                                                                                                href="/drupal/gito/server-side-rendering"
                                                                                                                                                                hreflang="en">MUST graduates 410 during
                                                                                                                                                                4th Congregation</a> </div>
                                                                                                                                                        <div class="post-meta"><span
                                                                                                                                                                class="post-created">11 August 2023
                                                                              </span> - <span
                                                                                                                                                                class="post-comment"></span></div>
                                                                                                                                                        <div class="post-body">
                                                                                                                                                            <p>The Malawi University of Science and
                                                                                                                                                                Technology (MUST) on August 11, 2023
                                                                                                                                                                awarded 410 students with certificates,
                                                                                                                                                                diplomas and degrees </p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <div class="views-field views-field-nothing">
                                                                                                                                            <div class="field-content">
                                                                                                                                                <div class="post-block">
                                                                                                                                                    <div class="post-image"> <a
                                                                                                                                                            href="/drupal/gito/latest-fashion-trends-2016"
                                                                                                                                                            hreflang="en"><img
                                                                                                                                                                src="https://www.must.ac.mw/wp-content/uploads/2023/08/Owen-420x273.png"
                                                                                                                                                                alt loading="lazy" typeof="Image">

                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="post-content">
                                                                                                                                                        <div class="post-categories"><a
                                                                                                                                                                href="/drupal/gito/taxonomy/term/5"
                                                                                                                                                                hreflang="en">Entertainment</a> </div>
                                                                                                                                                        <div class="post-title"> <a
                                                                                                                                                                href="/drupal/gito/server-side-rendering"
                                                                                                                                                                hreflang="en">MUST student releases
                                                                                                                                                                gospel album</a> </div>
                                                                                                                                                        <div class="post-meta"><span
                                                                                                                                                                class="post-created">06 August 2023
                                                                              </span> - <span
                                                                                                                                                                class="post-comment"></span></div>
                                                                                                                                                        <div class="post-body">
                                                                                                                                                            <p>One of the fastest rising stars in
                                                                                                                                                                Malawi and a Musicology student at the
                                                                                                                                                                Malawi University of Science and
                                                                                                                                                                Technology… </p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <div class="views-field views-field-nothing">
                                                                                                                                            <div class="field-content">
                                                                                                                                                <div class="post-block">
                                                                                                                                                    <div class="post-image"> <a
                                                                                                                                                            href="/drupal/gito/coffeeshops-continue-conquer"
                                                                                                                                                            hreflang="en"><img
                                                                                                                                                                src="https://www.must.ac.mw/wp-content/uploads/2023/08/Gala23-420x273.jpg"
                                                                                                                                                                alt loading="lazy" typeof="Image">

                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="post-content">
                                                                                                                                                        <div class="post-categories"><a
                                                                                                                                                                href="/drupal/gito/taxonomy/term/5"
                                                                                                                                                                hreflang="en">Academics</a> </div>
                                                                                                                                                        <div class="post-title"> <a
                                                                                                                                                                href="/drupal/gito/server-side-rendering"
                                                                                                                                                                hreflang="en">MUST graduates 560 during
                                                                                                                                                                3rd Congregation</a> </div>
                                                                                                                                                        <div class="post-meta"><span
                                                                                                                                                                class="post-created">11 June 2022
                                                                              </span> - <span
                                                                                                                                                                class="post-comment"></span></div>
                                                                                                                                                        <div class="post-body">
                                                                                                                                                            <p>The Malawi University of Science and
                                                                                                                                                                Technology (MUST) on June 29, 2023
                                                                                                                                                                awarded 560 students with certificates,
                                                                                                                                                                diplomas and degrees

                                                                                                                                                            </p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <div class="views-field views-field-nothing">
                                                                                                                                            <div class="field-content">
                                                                                                                                                <div class="post-block">
                                                                                                                                                    <div class="post-image"> <a
                                                                                                                                                            href="/drupal/gito/how-future-could-resemble"
                                                                                                                                                            hreflang="en"><img src="{{asset('assets/images/post-9.jpg')}}"
                                                                                                                                                                               alt loading="lazy" typeof="Image">

                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="post-content">
                                                                                                                                                        <div class="post-categories"><a
                                                                                                                                                                href="/drupal/gito/taxonomy/term/3"
                                                                                                                                                                hreflang="en">Life Style</a> </div>
                                                                                                                                                        <div class="post-title"> <a
                                                                                                                                                                href="/drupal/gito/how-future-could-resemble"
                                                                                                                                                                hreflang="en">How the future could
                                                                                                                                                                resemble</a> </div>
                                                                                                                                                        <div class="post-meta"><span
                                                                                                                                                                class="post-created">21 December, 2016
                                                                              </span> - <span class="post-comment">0
                                                                                Comments</span></div>
                                                                                                                                                        <div class="post-body">
                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                                                                                                adipiscing elit. Morbi ac neque at mi
                                                                                                                                                                elementum gravida et vitae elit.</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <div class="views-field views-field-nothing">
                                                                                                                                            <div class="field-content">
                                                                                                                                                <div class="post-block">
                                                                                                                                                    <div class="post-image"> <a
                                                                                                                                                            href="/drupal/gito/country-big-concert-report"
                                                                                                                                                            hreflang="en"><img src="{{asset('assets/images/post-8.jpg')}}"
                                                                                                                                                                               alt loading="lazy" typeof="Image">

                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="post-content">
                                                                                                                                                        <div class="post-categories"><a
                                                                                                                                                                href="/drupal/gito/taxonomy/term/1"
                                                                                                                                                                hreflang="en">Fashion</a> </div>
                                                                                                                                                        <div class="post-title"> <a
                                                                                                                                                                href="/drupal/gito/country-big-concert-report"
                                                                                                                                                                hreflang="en">Country big concert
                                                                                                                                                                report</a> </div>
                                                                                                                                                        <div class="post-meta"><span
                                                                                                                                                                class="post-created">21 December, 2016
                                                                              </span> - <span class="post-comment">0
                                                                                Comments</span></div>
                                                                                                                                                        <div class="post-body">
                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                                                                                                adipiscing elit. Morbi ac neque at mi
                                                                                                                                                                elementum gravida et vitae elit.</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">
                                                                                                                                    <div>
                                                                                                                                        <div class="views-field views-field-nothing">
                                                                                                                                            <div class="field-content">
                                                                                                                                                <div class="post-block">
                                                                                                                                                    <div class="post-image"> <a
                                                                                                                                                            href="/drupal/gito/uncovered-amazing-places"
                                                                                                                                                            hreflang="en"><img src="{{asset('assets/images/post-7.jpg')}}"
                                                                                                                                                                               alt loading="lazy" typeof="Image">

                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="post-content">
                                                                                                                                                        <div class="post-categories"><a
                                                                                                                                                                href="/drupal/gito/taxonomy/term/6"
                                                                                                                                                                hreflang="en">Traveling</a> </div>
                                                                                                                                                        <div class="post-title"> <a
                                                                                                                                                                href="/drupal/gito/uncovered-amazing-places"
                                                                                                                                                                hreflang="en">Uncovered amazing
                                                                                                                                                                places</a> </div>
                                                                                                                                                        <div class="post-meta"><span
                                                                                                                                                                class="post-created">21 December, 2016
                                                                              </span> - <span class="post-comment">0
                                                                                Comments</span></div>
                                                                                                                                                        <div class="post-body">
                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                                                                                                adipiscing elit. Morbi ac neque at mi
                                                                                                                                                                elementum gravida et vitae elit.</p>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                            </div>








                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>





                                                                        <div class="gbb-row-wrapper">
                                                                            <div class=" gbb-row bg-size-cover" style>
                                                                                <div class="bb-inner default">
                                                                                    <div class="bb-container container">
                                                                                        <div class="row">
                                                                                            <div class="row-wrapper clearfix">
                                                                                                <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                                        <div class="column-content-inner">
                                                                                                            <div
                                                                                                                class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp">
                                                                                                                <div class="sub-title"><span></span></div>
                                                                                                                <h2 class="title"><span>Our Gallery</span></h2>
                                                                                                            </div>
                                                                                                            <div class="clearfix"></div>
                                                                                                            <div>
                                                                                                                <div
                                                                                                                    class="widget block gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off">
                                                                                                                    <div class="views-element-container">
                                                                                                                        <div
                                                                                                                            class="gallery-grid-small gva-view js-view-dom-id-2424f9ce727ee8e15bd0acd7f3fa18ca566fe2deca13a776b70cb5d09c9d90e9">








                                                                                                                            <div class="gva-view-grid">


                                                                                                                                <div
                                                                                                                                    class="gva-view-grid-inner lg-block-grid-3 md-block-grid-3 sm-block-grid-2 xs-block-grid-2">

                                                                                                                                    <div class="item-columns">
                                                                                                                                        <div>
                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                            <article data-history-node-id="50" role="article"
                                                                                                                                                     about="/drupal/gito/node/50">
                                                                                                                                                <div
                                                                                                                                                    class="gallery-post text-center margin-bottom-30">
                                                                                                                                                    <div class="images lightGallery">
                                                                                                                                                        <div>
                                                                                                                                                            <div class="image-item">
                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-12.jpg"
                                                                                                                                                                   class="zoomGallery" title
                                                                                                                                                                   data-rel="lightGallery">
                                                                                  <span class="icon-expand"><i
                                                                                          class="fa fa-expand"></i></span>
                                                                                                                                                                    <img src="{{asset('assets/images/homegallery5.jpg')}}" alt
                                                                                                                                                                         class="hidden">
                                                                                                                                                                </a>
                                                                                                                                                                <img src="{{asset('assets/images/homegallery5.jpg')}}" alt
                                                                                                                                                                     loading="lazy" typeof="foaf:Image">



                                                                                                                                                            </div>
                                                                                                                                                        </div>

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </article>
                                                                                                                                            <!-- End Display article for teaser page -->
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="item-columns">
                                                                                                                                        <div>
                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                            <article data-history-node-id="49" role="article"
                                                                                                                                                     about="/drupal/gito/node/49">
                                                                                                                                                <div
                                                                                                                                                    class="gallery-post text-center margin-bottom-30">
                                                                                                                                                    <div class="images lightGallery">
                                                                                                                                                        <div>
                                                                                                                                                            <div class="image-item">
                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-11.jpg"
                                                                                                                                                                   class="zoomGallery" title
                                                                                                                                                                   data-rel="lightGallery">
                                                                                  <span class="icon-expand"><i
                                                                                          class="fa fa-expand"></i></span>
                                                                                                                                                                    <img src="{{asset('assets/images/homegallery4.jpg')}}" alt
                                                                                                                                                                         class="hidden">
                                                                                                                                                                </a>
                                                                                                                                                                <img src="{{asset('assets/images/homegallery4.jpg')}}" alt
                                                                                                                                                                     loading="lazy" typeof="foaf:Image">



                                                                                                                                                            </div>
                                                                                                                                                        </div>

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </article>
                                                                                                                                            <!-- End Display article for teaser page -->
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="item-columns">
                                                                                                                                        <div>
                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                            <article data-history-node-id="48" role="article"
                                                                                                                                                     about="/drupal/gito/node/48">
                                                                                                                                                <div
                                                                                                                                                    class="gallery-post text-center margin-bottom-30">
                                                                                                                                                    <div class="images lightGallery">
                                                                                                                                                        <div>
                                                                                                                                                            <div class="image-item">
                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-10.jpg"
                                                                                                                                                                   class="zoomGallery" title
                                                                                                                                                                   data-rel="lightGallery">
                                                                                  <span class="icon-expand"><i
                                                                                          class="fa fa-expand"></i></span>
                                                                                                                                                                    <img src="{{asset('assets/images/gallery3.jpg')}}" alt
                                                                                                                                                                         class="hidden">
                                                                                                                                                                </a>
                                                                                                                                                                <img src="{{asset('assets/images/homegallery3.jpg')}}" alt
                                                                                                                                                                     loading="lazy" typeof="foaf:Image">



                                                                                                                                                            </div>
                                                                                                                                                        </div>

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </article>
                                                                                                                                            <!-- End Display article for teaser page -->
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="item-columns">
                                                                                                                                        <div>
                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                            <article data-history-node-id="39" role="article"
                                                                                                                                                     about="/drupal/gito/node/39">
                                                                                                                                                <div
                                                                                                                                                    class="gallery-post text-center margin-bottom-30">
                                                                                                                                                    <div class="images lightGallery">
                                                                                                                                                        <div>
                                                                                                                                                            <div class="image-item">
                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-1.jpg"
                                                                                                                                                                   class="zoomGallery" title
                                                                                                                                                                   data-rel="lightGallery">
                                                                                  <span class="icon-expand"><i
                                                                                          class="fa fa-expand"></i></span>
                                                                                                                                                                    <img src="{{asset('assets/images/homegallery2.jpg')}}" alt
                                                                                                                                                                         class="hidden">
                                                                                                                                                                </a>
                                                                                                                                                                <img src="{{asset('assets/images/homegallery2.jpg')}}" alt
                                                                                                                                                                     loading="lazy" typeof="foaf:Image">



                                                                                                                                                            </div>
                                                                                                                                                        </div>

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </article>
                                                                                                                                            <!-- End Display article for teaser page -->
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="item-columns">
                                                                                                                                        <div>
                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                            <article data-history-node-id="47" role="article"
                                                                                                                                                     about="/drupal/gito/node/47">
                                                                                                                                                <div
                                                                                                                                                    class="gallery-post text-center margin-bottom-30">
                                                                                                                                                    <div class="images lightGallery">
                                                                                                                                                        <div>
                                                                                                                                                            <div class="image-item">
                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-9.jpg"
                                                                                                                                                                   class="zoomGallery" title
                                                                                                                                                                   data-rel="lightGallery">
                                                                                  <span class="icon-expand"><i
                                                                                          class="fa fa-expand"></i></span>
                                                                                                                                                                    <img src="{{asset('assets/images/gallery1.jpg')}}" alt
                                                                                                                                                                         class="hidden">
                                                                                                                                                                </a>
                                                                                                                                                                <img src="{{asset('assets/images/homegallery1.jpg')}}" alt
                                                                                                                                                                     loading="lazy" typeof="foaf:Image">



                                                                                                                                                            </div>
                                                                                                                                                        </div>

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </article>
                                                                                                                                            <!-- End Display article for teaser page -->
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="item-columns">
                                                                                                                                        <div>
                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                            <article data-history-node-id="46" role="article"
                                                                                                                                                     about="/drupal/gito/node/46">
                                                                                                                                                <div
                                                                                                                                                    class="gallery-post text-center margin-bottom-30">
                                                                                                                                                    <div class="images lightGallery">
                                                                                                                                                        <div>
                                                                                                                                                            <div class="image-item">
                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-8.jpg"
                                                                                                                                                                   class="zoomGallery" title
                                                                                                                                                                   data-rel="lightGallery">
                                                                                  <span class="icon-expand"><i
                                                                                          class="fa fa-expand"></i></span>
                                                                                                                                                                    <img src="{{asset('assets/images/gallery5.jpg')}}" alt
                                                                                                                                                                         class="hidden">
                                                                                                                                                                </a>
                                                                                                                                                                <img src="{{asset('assets/images/homegallery5.jpg')}}" alt
                                                                                                                                                                     loading="lazy" typeof="foaf:Image">



                                                                                                                                                            </div>
                                                                                                                                                        </div>

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </article>
                                                                                                                                            <!-- End Display article for teaser page -->
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                            </div>








                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="background-repeat: no-repeat;background-position:center center;"
                                                                                     class="gva-parallax-inner skrollable skrollable-between bg-size-cover"
                                                                                     data-bottom-top="top: -68%;" data-top-bottom="top: 0%;"></div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </article>


                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>




            </div>

        </div>
        <footer id="footer" class="footer">
            <div class="footer-inner">


                <div class="footer-center">
                    <div class="container">
                        <div class="row">
                            <div class="footer-first col-lg-4 col-md-4 col-sm-12 col-xs-12 column">
                                <div>
                                    <div id="block-logofooter"
                                         class="block block-block-content block-block-content76b8b2cd-66ae-4458-ab6f-4513412af68e no-title">


                                        <div class="content block-content">

                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <img alt="logo footer" data-entity-type="file"
                                                     data-entity-uuid="6681bf9a-7766-4ee6-98a1-8404fe0f8ca5"
                                                     src="https://www.must.ac.mw/wp-content/themes/mustwebsite/images/must-logo.png"
                                                     class="align-center" width="100" height="80" loading="lazy">
                                                <p> </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="block-contact

                          info2"
                                         class="block block-block-content block-block-content65d15b8c-46dc-460f-8020-d92a2a984dda no-title">


                                        <div class="content block-content">

                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <div class="contact

                          -info">
                                                    <span class="description">Malawi University of Science and Technology</span>
                                                    <ul class="contact

                          -info">
                                                        <li><span><i class="fa fa-home"></i> P.O Box 5196, Limbe.</span> </li>
                                                        <li><span><i class="fa fa-mobile-phone"></i>01 478 000</span></li>
                                                        <li><a href="mailto:info@yourstore.com"><i class="fa fa-envelope-o"></i>
                                                                miiri@must.ac.mw</a> </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="footer-second col-lg-4 col-md-4 col-sm-12 col-xs-12 column">
                                <div>
                                    <div id="block-linkfooter"
                                         class="block block-block-content block-block-contentf68ff84d-6af0-4c49-8b85-ae338addc541">

                                        <h2 class="block-title"><span>Link Footer</span></h2>

                                        <div class="content block-content">

                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul class="menu">
                                                            <li><a href="#"> About</a></li>
                                                            <li><a href="#"> Innovation</a></li>
                                                            <li><a href="#"> programmes</a></li>
                                                            <li><a href="#"> Team</a></li>
                                                            <li><a href="#"> News & Events</a></li>
                                                            <li><a href="#"> publications</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="menu">
                                                            <li><a href="#">Home</a></li>
                                                            <li><a href="#">Education and Training</a></li>
                                                            <li><a href="#">People and Society</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="footer-third col-lg-4 col-md-4 col-sm-12 col-xs-12 column">
                                <div>
                                    <div
                                        class="simplenews-subscriptions-block-4263feeb-8048-4534-9a25-3967564bc4c3 simplenews-subscriber-form block block-simplenews block-simplenews-subscription-block"
                                        data-drupal-selector="simplenews-subscriptions-block-4263feeb-8048-4534-9a25-3967564bc4c3"
                                        id="block-simplenewssubscription">

                                        <h2 class="block-title"><span>News subscription</span></h2>

                                        <div class="content block-content">
                                            <form action="/drupal/gito/" method="post"
                                                  id="simplenews-subscriptions-block-4263feeb-8048-4534-9a25-3967564bc4c3" accept-charset="UTF-8">
                                                <div
                                                    class="field--type-simplenews-subscription field--name-subscriptions field--widget-simplenews-subscription-select js-form-wrapper form-wrapper"
                                                    data-drupal-selector="edit-subscriptions-wrapper" id="edit-subscriptions-wrapper"></div>
                                                <div id="edit-message--2"
                                                     class="js-form-item form-item js-form-type-item form-item-message js-form-item-message form-no-label">
                                                    Stay informed - subscribe to our newsletter.
                                                </div>
                                                <input autocomplete="off"
                                                       data-drupal-selector="form-f18hjofk4wjezrktbr3k1oehfzkttrixod8gflzui5m" type="hidden"
                                                       name="form_build_id" value="form-F18hjOfK4WjEZRKTBR3k1OeHfzKttRixod8gfLZui5M">
                                                <input
                                                    data-drupal-selector="edit-simplenews-subscriptions-block-4263feeb-8048-4534-9a25-3967564bc4c3"
                                                    type="hidden" name="form_id"
                                                    value="simplenews_subscriptions_block_4263feeb-8048-4534-9a25-3967564bc4c3">
                                                <div
                                                    class="field--type-email field--name-mail field--widget-email-default js-form-wrapper form-wrapper"
                                                    data-drupal-selector="edit-mail-wrapper" id="edit-mail-wrapper">
                                                    <div
                                                        class="js-form-item form-item js-form-type-email form-item-mail-0-value js-form-item-mail-0-value">
                                                        <label for="edit-mail-0-value" class="js-form-required form-required">Email</label>
                                                        <input data-drupal-selector="edit-mail-0-value"
                                                               aria-describedby="edit-mail-0-value--description" type="email" id="edit-mail-0-value"
                                                               name="mail[0][value]" value size="60" maxlength="254" placeholder
                                                               class="form-email required" required="required" aria-required="true">

                                                        <div id="edit-mail-0-value--description" class="description">
                                                            The subscriber's email address.
                                                        </div>
                                                    </div>

                                                </div>
                                                <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper"
                                                     id="edit-actions--3"><input data-drupal-selector="edit-subscribe" type="submit"
                                                                                 id="edit-subscribe" name="op" value="Subscribe" class="button js-form-submit form-submit">
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                    <div id="block-socialfooter"
                                         class="text-left block block-block-content block-block-contente221b876-309a-4f07-91e7-7ca914f394ad no-title">


                                        <div class="content block-content">

                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <div class="social-inline">
                                                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="copyright">
                <div class="container">
                    <div class="copyright-inner">
                        <div>
                            <div id="block-gavias-gito-copyright"
                                 class="block block-block-content block-block-content61f17841-749f-436d-9799-1dfeefd7ad43 no-title">


                                <div class="content block-content">

                                    <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <ul class="inline">
                                                    <li><a href>Terms of Use</a></li>
                                                    <li><a href>Privacy Policy </a></li>
                                                    <li><a href>Site Map</a></li>
                                                    <li><a href>contact

                                                        </a></li>
                                                </ul>
                                            </div>
                                            <div class="pull-right text-right">©2023 <a>MIIRI</a> designed by <a
                                                    href="https://miiri.must.ac.mw/"> MIIRI Developers Team</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </footer>



    </div>


    <script type="application/json"
            data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/drupal\/gito\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/1","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxPageState":{"libraries":"core\/drupal.date,gavias_blockbuilder\/gavias_blockbuilder.assets.frontend,gavias_gito\/gavias_gito.skin.default,gavias_gito\/global-styling,gavias_sliderlayer\/gavias_sliderlayer.assets.frontend,gaviasthemer\/customize,system\/base,views\/views.ajax,views\/views.module,webform\/webform.element.details.save,webform\/webform.element.details.toggle,webform\/webform.element.message,webform\/webform.element.time,webform\/webform.form","theme":"gavias_gito","theme_token":null},"ajaxTrustedUrl":{"form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM":true,"\/drupal\/gito\/search\/node":true},"gavias_blockbuilder":{"url_edit":"\/drupal\/gito\/admin\/structure\/gavias_blockbuilder\/edit\/-----"},"views":{"ajax_path":"\/drupal\/gito\/views\/ajax","ajaxViews":{"views_dom_id:845f7be07a1c9ad6db1e435d806f813eab70a19e4e34da3f01da7ad4643bea2c":{"view_name":"post_other","view_display_id":"block_5","view_args":"","view_path":"\/node\/1","view_base_path":"blogs-grid","view_dom_id":"845f7be07a1c9ad6db1e435d806f813eab70a19e4e34da3f01da7ad4643bea2c","pager_element":0}}},"webform":{"dateFirstDay":0},"gavias_customize":{"save":"https:\/\/gaviaswp.com\/drupal\/gito\/admin\/gaviasthemer_customize\/save","preview":"https:\/\/gaviaswp.com\/drupal\/gito\/admin\/gaviasthemer_customize\/preview","json":""},"gavias_load_ajax_view":"\/drupal\/gito\/custom\/gavias_hook\/ajax_view","user":{"uid":0,"permissionsHash":"c04aabdfc6286812cfaa38beb1556aaf6acffb0f8854b82d1c96a734f0236fdf"}}</script>
    <script src="{{asset('assets/js/js_paXFNAGb5Ojq-95R041SWTkSX6h5vx-m9w_b9TifkC0.js')}}"></script>



    <div class="permission-save-hidden">
        <div class="gavias-skins-panel hidden-xs hidden-sm">
            <div class=" "><i class="fa fa-eyedropper"></i></div>
            <div class="gavias-skins-panel-inner">
                <div id="gavias_customize_form" class="gavias_customize_form">

                    <div class="form-group action">
                        <input type="button" id="gavias_customize_save" class="btn form-submit" value="Save">
                        <input type="button" id="gavias_customize_preview" class="btn form-submit" value="Preview">
                        <input type="button" id="gavias_customize_reset" class="btn form-submit" value="Reset">
                        <input type="hidden" id="gva_theme_name" name="theme_name" value="gavias_gito">
                    </div>

                    <div class="clearfix"></div>
                    <div id="customize-gavias-preivew">
                        <div class="panel-group" id="customize-accordion" role="tablist" aria-multiselectable="true">

                            <!-- Typo -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-typo"
                                           aria-expanded="true">
                                            Typography
                                        </a>
                                    </h4>
                                </div>
                                <div id="customize-typo" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Font Primary</label>
                                                <div class="input-group">
                                                    <select name="font_family_primary" class="form-control customize-option">
                                                        <option value="---">---</option>
                                                        <option value="'Arial', Helvetica, sans-serif">'Arial', Helvetica, sans-serif</option>
                                                        <option value="'Arial Black', Gadget, sans-serif">'Arial Black', Gadget, sans-serif</option>
                                                        <option value="'Bookman Old Style', serif">'Bookman Old Style', serif</option>
                                                        <option value="'Comic Sans MS', cursive">'Comic Sans MS', cursive</option>
                                                        <option value="'Courier', monospace">'Courier', monospace</option>
                                                        <option value="'Garamond', serif">'Garamond', serif</option>
                                                        <option value="'Georgia', serif">'Georgia', serif</option>
                                                        <option value="'Impact', Charcoal, sans-serif">'Impact', Charcoal, sans-serif</option>
                                                        <option value="'Lucida Console', Monaco, monospace">'Lucida Console', Monaco, monospace
                                                        </option>
                                                        <option value="'Lucida Sans Unicode', Lucida Grande, sans-serif">'Lucida Sans Unicode',
                                                            Lucida Grande, sans-serif</option>
                                                        <option value="'MS Sans Serif', Geneva, sans-serif">'MS Sans Serif', Geneva, sans-serif
                                                        </option>
                                                        <option value="'MS Serif', New York, sans-serif">'MS Serif', New York, sans-serif</option>
                                                        <option value="'Palatino Linotype', Book Antiqua, Palatino, serif">'Palatino Linotype', Book
                                                            Antiqua, Palatino, serif</option>
                                                        <option value="'Tahoma',Geneva, sans-serif">'Tahoma',Geneva, sans-serif</option>
                                                        <option value="'Times New Roman', Times, serif">'Times New Roman', Times, serif</option>
                                                        <option value="'Trebuchet MS', Helvetica, sans-serif">'Trebuchet MS', Helvetica, sans-serif
                                                        </option>
                                                        <option value="'Verdana', Geneva, sans-serif">'Verdana', Geneva, sans-serif</option>
                                                        <option value="ABeeZee">ABeeZee</option>
                                                        <option value="Abel">Abel</option>
                                                        <option value="Abril Fatface">Abril Fatface</option>
                                                        <option value="Aclonica">Aclonica</option>
                                                        <option value="Acme">Acme</option>
                                                        <option value="Actor">Actor</option>
                                                        <option value="Adamina">Adamina</option>
                                                        <option value="Advent Pro">Advent Pro</option>
                                                        <option value="Aguafina Script">Aguafina Script</option>
                                                        <option value="Akronim">Akronim</option>
                                                        <option value="Aladin">Aladin</option>
                                                        <option value="Aldrich">Aldrich</option>
                                                        <option value="Alef">Alef</option>
                                                        <option value="Alegreya">Alegreya</option>
                                                        <option value="Alegreya SC">Alegreya SC</option>
                                                        <option value="Alex Brush">Alex Brush</option>
                                                        <option value="Alfa Slab One">Alfa Slab One</option>
                                                        <option value="Alice">Alice</option>
                                                        <option value="Alike">Alike</option>
                                                        <option value="Alike Angular">Alike Angular</option>
                                                        <option value="Allan">Allan</option>
                                                        <option value="Allerta">Allerta</option>
                                                        <option value="Allerta Stencil">Allerta Stencil</option>
                                                        <option value="Allura">Allura</option>
                                                        <option value="Almendra">Almendra</option>
                                                        <option value="Almendra Display">Almendra Display</option>
                                                        <option value="Almendra SC">Almendra SC</option>
                                                        <option value="Amarante">Amarante</option>
                                                        <option value="Amaranth">Amaranth</option>
                                                        <option value="Amatic SC">Amatic SC</option>
                                                        <option value="Amethysta">Amethysta</option>
                                                        <option value="Anaheim">Anaheim</option>
                                                        <option value="Andada">Andada</option>
                                                        <option value="Andika">Andika</option>
                                                        <option value="Angkor">Angkor</option>
                                                        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
                                                        <option value="Anonymous Pro">Anonymous Pro</option>
                                                        <option value="Antic">Antic</option>
                                                        <option value="Antic Didone">Antic Didone</option>
                                                        <option value="Antic Slab">Antic Slab</option>
                                                        <option value="Anton">Anton</option>
                                                        <option value="Arapey">Arapey</option>
                                                        <option value="Arbutus">Arbutus</option>
                                                        <option value="Arbutus Slab">Arbutus Slab</option>
                                                        <option value="Architects Daughter">Architects Daughter</option>
                                                        <option value="Archivo Black">Archivo Black</option>
                                                        <option value="Archivo Narrow">Archivo Narrow</option>
                                                        <option value="Arimo">Arimo</option>
                                                        <option value="Arizonia">Arizonia</option>
                                                        <option value="Armata">Armata</option>
                                                        <option value="Artifika">Artifika</option>
                                                        <option value="Arvo">Arvo</option>
                                                        <option value="Asap">Asap</option>
                                                        <option value="Asset">Asset</option>
                                                        <option value="Astloch">Astloch</option>
                                                        <option value="Asul">Asul</option>
                                                        <option value="Atomic Age">Atomic Age</option>
                                                        <option value="Aubrey">Aubrey</option>
                                                        <option value="Audiowide">Audiowide</option>
                                                        <option value="Autour One">Autour One</option>
                                                        <option value="Average">Average</option>
                                                        <option value="Average Sans">Average Sans</option>
                                                        <option value="Averia Gruesa Libre">Averia Gruesa Libre</option>
                                                        <option value="Averia Libre">Averia Libre</option>
                                                        <option value="Averia Sans Libre">Averia Sans Libre</option>
                                                        <option value="Averia Serif Libre">Averia Serif Libre</option>
                                                        <option value="Bad Script">Bad Script</option>
                                                        <option value="Balthazar">Balthazar</option>
                                                        <option value="Bangers">Bangers</option>
                                                        <option value="Basic">Basic</option>
                                                        <option value="Battambang">Battambang</option>
                                                        <option value="Baumans">Baumans</option>
                                                        <option value="Bayon">Bayon</option>
                                                        <option value="Belgrano">Belgrano</option>
                                                        <option value="Belleza">Belleza</option>
                                                        <option value="BenchNine">BenchNine</option>
                                                        <option value="Bentham">Bentham</option>
                                                        <option value="Berkshire Swash">Berkshire Swash</option>
                                                        <option value="Bevan">Bevan</option>
                                                        <option value="Bigelow Rules">Bigelow Rules</option>
                                                        <option value="Bigshot One">Bigshot One</option>
                                                        <option value="Bilbo">Bilbo</option>
                                                        <option value="Bilbo Swash Caps">Bilbo Swash Caps</option>
                                                        <option value="Bitter">Bitter</option>
                                                        <option value="Black Ops One">Black Ops One</option>
                                                        <option value="Bokor">Bokor</option>
                                                        <option value="Bonbon">Bonbon</option>
                                                        <option value="Boogaloo">Boogaloo</option>
                                                        <option value="Bowlby One">Bowlby One</option>
                                                        <option value="Bowlby One SC">Bowlby One SC</option>
                                                        <option value="Brawler">Brawler</option>
                                                        <option value="Bree Serif">Bree Serif</option>
                                                        <option value="Bubblegum Sans">Bubblegum Sans</option>
                                                        <option value="Bubbler One">Bubbler One</option>
                                                        <option value="Buda">Buda</option>
                                                        <option value="Buenard">Buenard</option>
                                                        <option value="Butcherman">Butcherman</option>
                                                        <option value="Butterfly Kids">Butterfly Kids</option>
                                                        <option value="Cabin">Cabin</option>
                                                        <option value="Cabin Condensed">Cabin Condensed</option>
                                                        <option value="Cabin Sketch">Cabin Sketch</option>
                                                        <option value="Caesar Dressing">Caesar Dressing</option>
                                                        <option value="Cagliostro">Cagliostro</option>
                                                        <option value="Calligraffitti">Calligraffitti</option>
                                                        <option value="Cambo">Cambo</option>
                                                        <option value="Candal">Candal</option>
                                                        <option value="Cantarell">Cantarell</option>
                                                        <option value="Cantata One">Cantata One</option>
                                                        <option value="Cantora One">Cantora One</option>
                                                        <option value="Capriola">Capriola</option>
                                                        <option value="Cardo">Cardo</option>
                                                        <option value="Carme">Carme</option>
                                                        <option value="Carrois Gothic">Carrois Gothic</option>
                                                        <option value="Carrois Gothic SC">Carrois Gothic SC</option>
                                                        <option value="Carter One">Carter One</option>
                                                        <option value="Caudex">Caudex</option>
                                                        <option value="Cedarville Cursive">Cedarville Cursive</option>
                                                        <option value="Ceviche One">Ceviche One</option>
                                                        <option value="Changa One">Changa One</option>
                                                        <option value="Chango">Chango</option>
                                                        <option value="Chau Philomene One">Chau Philomene One</option>
                                                        <option value="Chela One">Chela One</option>
                                                        <option value="Chelsea Market">Chelsea Market</option>
                                                        <option value="Chenla">Chenla</option>
                                                        <option value="Cherry Cream Soda">Cherry Cream Soda</option>
                                                        <option value="Cherry Swash">Cherry Swash</option>
                                                        <option value="Chewy">Chewy</option>
                                                        <option value="Chicle">Chicle</option>
                                                        <option value="Chivo">Chivo</option>
                                                        <option value="Cinzel">Cinzel</option>
                                                        <option value="Cinzel Decorative">Cinzel Decorative</option>
                                                        <option value="Clicker Script">Clicker Script</option>
                                                        <option value="Coda">Coda</option>
                                                        <option value="Coda Caption">Coda Caption</option>
                                                        <option value="Codystar">Codystar</option>
                                                        <option value="Combo">Combo</option>
                                                        <option value="Comfortaa">Comfortaa</option>
                                                        <option value="Coming Soon">Coming Soon</option>
                                                        <option value="Concert One">Concert One</option>
                                                        <option value="Condiment">Condiment</option>
                                                        <option value="Content">Content</option>
                                                        <option value="Contrail One">Contrail One</option>
                                                        <option value="Convergence">Convergence</option>
                                                        <option value="Cookie">Cookie</option>
                                                        <option value="Copse">Copse</option>
                                                        <option value="Corben">Corben</option>
                                                        <option value="Courgette">Courgette</option>
                                                        <option value="Cousine">Cousine</option>
                                                        <option value="Coustard">Coustard</option>
                                                        <option value="Covered By Your Grace">Covered By Your Grace</option>
                                                        <option value="Crafty Girls">Crafty Girls</option>
                                                        <option value="Creepster">Creepster</option>
                                                        <option value="Crete Round">Crete Round</option>
                                                        <option value="Crimson Text">Crimson Text</option>
                                                        <option value="Croissant One">Croissant One</option>
                                                        <option value="Crushed">Crushed</option>
                                                        <option value="Cuprum">Cuprum</option>
                                                        <option value="Cutive">Cutive</option>
                                                        <option value="Cutive Mono">Cutive Mono</option>
                                                        <option value="Datico">Datico</option>
                                                        <option value="Dancing Script">Dancing Script</option>
                                                        <option value="Dangrek">Dangrek</option>
                                                        <option value="Dawning of a New Day">Dawning of a New Day</option>
                                                        <option value="Days One">Days One</option>
                                                        <option value="Delius">Delius</option>
                                                        <option value="Delius Swash Caps">Delius Swash Caps</option>
                                                        <option value="Delius Unicase">Delius Unicase</option>
                                                        <option value="Della Respira">Della Respira</option>
                                                        <option value="Denk One">Denk One</option>
                                                        <option value="Devonshire">Devonshire</option>
                                                        <option value="Didact Gothic">Didact Gothic</option>
                                                        <option value="Diplomata">Diplomata</option>
                                                        <option value="Diplomata SC">Diplomata SC</option>
                                                        <option value="Domine">Domine</option>
                                                        <option value="Donegal One">Donegal One</option>
                                                        <option value="Doppio One">Doppio One</option>
                                                        <option value="Dorsa">Dorsa</option>
                                                        <option value="Dosis">Dosis</option>
                                                        <option value="Dr Sugiyama">Dr Sugiyama</option>
                                                        <option value="Droid Sans">Droid Sans</option>
                                                        <option value="Droid Sans Mono">Droid Sans Mono</option>
                                                        <option value="Droid Serif">Droid Serif</option>
                                                        <option value="Duru Sans">Duru Sans</option>
                                                        <option value="Dynalight">Dynalight</option>
                                                        <option value="EB Garamond">EB Garamond</option>
                                                        <option value="Eagle Lake">Eagle Lake</option>
                                                        <option value="Eater">Eater</option>
                                                        <option value="Economica">Economica</option>
                                                        <option value="Electrolize">Electrolize</option>
                                                        <option value="Elsie">Elsie</option>
                                                        <option value="Elsie Swash Caps">Elsie Swash Caps</option>
                                                        <option value="Emblema One">Emblema One</option>
                                                        <option value="Emilys Candy">Emilys Candy</option>
                                                        <option value="Engagement">Engagement</option>
                                                        <option value="Englebert">Englebert</option>
                                                        <option value="Enriqueta">Enriqueta</option>
                                                        <option value="Erica One">Erica One</option>
                                                        <option value="Esteban">Esteban</option>
                                                        <option value="Euphoria Script">Euphoria Script</option>
                                                        <option value="Ewert">Ewert</option>
                                                        <option value="Exo">Exo</option>
                                                        <option value="Expletus Sans">Expletus Sans</option>
                                                        <option value="Fanwood Text">Fanwood Text</option>
                                                        <option value="Fascinate">Fascinate</option>
                                                        <option value="Fascinate Inline">Fascinate Inline</option>
                                                        <option value="Faster One">Faster One</option>
                                                        <option value="Fasthand">Fasthand</option>
                                                        <option value="Fauna One">Fauna One</option>
                                                        <option value="Federant">Federant</option>
                                                        <option value="Federo">Federo</option>
                                                        <option value="Felipa">Felipa</option>
                                                        <option value="Fenix">Fenix</option>
                                                        <option value="Finger Paint">Finger Paint</option>
                                                        <option value="Fjalla One">Fjalla One</option>
                                                        <option value="Fjord One">Fjord One</option>
                                                        <option value="Flamenco">Flamenco</option>
                                                        <option value="Flavors">Flavors</option>
                                                        <option value="Fondamento">Fondamento</option>
                                                        <option value="Fontdiner Swanky">Fontdiner Swanky</option>
                                                        <option value="Forum">Forum</option>
                                                        <option value="Francois One">Francois One</option>
                                                        <option value="Freckle Face">Freckle Face</option>
                                                        <option value="Fredericka the Great">Fredericka the Great</option>
                                                        <option value="Fredoka One">Fredoka One</option>
                                                        <option value="Freehand">Freehand</option>
                                                        <option value="Fresca">Fresca</option>
                                                        <option value="Frijole">Frijole</option>
                                                        <option value="Fruktur">Fruktur</option>
                                                        <option value="Fugaz One">Fugaz One</option>
                                                        <option value="GFS Didot">GFS Didot</option>
                                                        <option value="GFS Neohellenic">GFS Neohellenic</option>
                                                        <option value="Gabriela">Gabriela</option>
                                                        <option value="Gafata">Gafata</option>
                                                        <option value="Galdeano">Galdeano</option>
                                                        <option value="Galindo">Galindo</option>
                                                        <option value="Gentium Basic">Gentium Basic</option>
                                                        <option value="Gentium Book Basic">Gentium Book Basic</option>
                                                        <option value="Geo">Geo</option>
                                                        <option value="Geostar">Geostar</option>
                                                        <option value="Geostar Fill">Geostar Fill</option>
                                                        <option value="Germania One">Germania One</option>
                                                        <option value="Gilda Display">Gilda Display</option>
                                                        <option value="Give You Glory">Give You Glory</option>
                                                        <option value="Glass Antiqua">Glass Antiqua</option>
                                                        <option value="Glegoo">Glegoo</option>
                                                        <option value="Gloria Hallelujah">Gloria Hallelujah</option>
                                                        <option value="Goblin One">Goblin One</option>
                                                        <option value="Gochi Hand">Gochi Hand</option>
                                                        <option value="Gorditas">Gorditas</option>
                                                        <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                                        <option value="Graduate">Graduate</option>
                                                        <option value="Grand Hotel">Grand Hotel</option>
                                                        <option value="Gravitas One">Gravitas One</option>
                                                        <option value="Great Vibes">Great Vibes</option>
                                                        <option value="Griffy">Griffy</option>
                                                        <option value="Gruppo">Gruppo</option>
                                                        <option value="Gudea">Gudea</option>
                                                        <option value="Habibi">Habibi</option>
                                                        <option value="Hammersmith One">Hammersmith One</option>
                                                        <option value="Hanalei">Hanalei</option>
                                                        <option value="Hanalei Fill">Hanalei Fill</option>
                                                        <option value="Handlee">Handlee</option>
                                                        <option value="Hanuman">Hanuman</option>
                                                        <option value="Happy Monkey">Happy Monkey</option>
                                                        <option value="Headland One">Headland One</option>
                                                        <option value="Henny Penny">Henny Penny</option>
                                                        <option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>
                                                        <option value="Holtwood One SC">Holtwood One SC</option>
                                                        <option value="Homemade Apple">Homemade Apple</option>
                                                        <option value="Homenaje">Homenaje</option>
                                                        <option value="IM Fell DW Pica">IM Fell DW Pica</option>
                                                        <option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>
                                                        <option value="IM Fell Double Pica">IM Fell Double Pica</option>
                                                        <option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>
                                                        <option value="IM Fell English">IM Fell English</option>
                                                        <option value="IM Fell English SC">IM Fell English SC</option>
                                                        <option value="IM Fell French Canon">IM Fell French Canon</option>
                                                        <option value="IM Fell French Canon SC">IM Fell French Canon SC</option>
                                                        <option value="IM Fell Great Primer">IM Fell Great Primer</option>
                                                        <option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>
                                                        <option value="Iceberg">Iceberg</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="Imprima">Imprima</option>
                                                        <option value="Inconsolata">Inconsolata</option>
                                                        <option value="Inder">Inder</option>
                                                        <option value="Indie Flower">Indie Flower</option>
                                                        <option value="Inika">Inika</option>
                                                        <option value="Irish Grover">Irish Grover</option>
                                                        <option value="Istok Web">Istok Web</option>
                                                        <option value="Italiana">Italiana</option>
                                                        <option value="Italianno">Italianno</option>
                                                        <option value="Jacques Francois">Jacques Francois</option>
                                                        <option value="Jacques Francois Shadow">Jacques Francois Shadow</option>
                                                        <option value="Jim Nightshade">Jim Nightshade</option>
                                                        <option value="Jockey One">Jockey One</option>
                                                        <option value="Jolly Lodger">Jolly Lodger</option>
                                                        <option value="Josefin Sans">Josefin Sans</option>
                                                        <option value="Josefin Slab">Josefin Slab</option>
                                                        <option value="Joti One">Joti One</option>
                                                        <option value="Judson">Judson</option>
                                                        <option value="Julee">Julee</option>
                                                        <option value="Julius Sans One">Julius Sans One</option>
                                                        <option value="Junge">Junge</option>
                                                        <option value="Jura">Jura</option>
                                                        <option value="Just Another Hand">Just Another Hand</option>
                                                        <option value="Just Me Again Down Here">Just Me Again Down Here</option>
                                                        <option value="Kameron">Kameron</option>
                                                        <option value="Karla">Karla</option>
                                                        <option value="Kaushan Script">Kaushan Script</option>
                                                        <option value="Kavoon">Kavoon</option>
                                                        <option value="Keania One">Keania One</option>
                                                        <option value="Kelly Slab">Kelly Slab</option>
                                                        <option value="Kenia">Kenia</option>
                                                        <option value="Khmer">Khmer</option>
                                                        <option value="Kite One">Kite One</option>
                                                        <option value="Knewave">Knewave</option>
                                                        <option value="Kotta One">Kotta One</option>
                                                        <option value="Koulen">Koulen</option>
                                                        <option value="Kranky">Kranky</option>
                                                        <option value="Kreon">Kreon</option>
                                                        <option value="Kristi">Kristi</option>
                                                        <option value="Krona One">Krona One</option>
                                                        <option value="Laila">Laila</option>
                                                        <option value="La Belle Aurore">La Belle Aurore</option>
                                                        <option value="Lancelot">Lancelot</option>
                                                        <option value="Lato">Lato</option>
                                                        <option value="League Script">League Script</option>
                                                        <option value="Leckerli One">Leckerli One</option>
                                                        <option value="Ledger">Ledger</option>
                                                        <option value="Lekton">Lekton</option>
                                                        <option value="Lemon">Lemon</option>
                                                        <option value="Libre Baskerville">Libre Baskerville</option>
                                                        <option value="Life Savers">Life Savers</option>
                                                        <option value="Lilita One">Lilita One</option>
                                                        <option value="Lily Script One">Lily Script One</option>
                                                        <option value="Limelight">Limelight</option>
                                                        <option value="Linden Hill">Linden Hill</option>
                                                        <option value="Lobster">Lobster</option>
                                                        <option value="Lobster Two">Lobster Two</option>
                                                        <option value="Londrina Outline">Londrina Outline</option>
                                                        <option value="Londrina Shadow">Londrina Shadow</option>
                                                        <option value="Londrina Sketch">Londrina Sketch</option>
                                                        <option value="Londrina Solid">Londrina Solid</option>
                                                        <option value="Lora">Lora</option>
                                                        <option value="Love Ya Like A Sister">Love Ya Like A Sister</option>
                                                        <option value="Loved by the King">Loved by the King</option>
                                                        <option value="Lovers Quarrel">Lovers Quarrel</option>
                                                        <option value="Luckiest Guy">Luckiest Guy</option>
                                                        <option value="Lusitana">Lusitana</option>
                                                        <option value="Lustria">Lustria</option>
                                                        <option value="Macondo">Macondo</option>
                                                        <option value="Macondo Swash Caps">Macondo Swash Caps</option>
                                                        <option value="Magra">Magra</option>
                                                        <option value="Maiden Orange">Maiden Orange</option>
                                                        <option value="Mako">Mako</option>
                                                        <option value="Marcellus">Marcellus</option>
                                                        <option value="Marcellus SC">Marcellus SC</option>
                                                        <option value="Marck Script">Marck Script</option>
                                                        <option value="Margarine">Margarine</option>
                                                        <option value="Marko One">Marko One</option>
                                                        <option value="Marmelad">Marmelad</option>
                                                        <option value="Marvel">Marvel</option>
                                                        <option value="Mate">Mate</option>
                                                        <option value="Mate SC">Mate SC</option>
                                                        <option value="Maven Pro">Maven Pro</option>
                                                        <option value="McLaren">McLaren</option>
                                                        <option value="Meddon">Meddon</option>
                                                        <option value="MedievalSharp">MedievalSharp</option>
                                                        <option value="Medula One">Medula One</option>
                                                        <option value="Megrim">Megrim</option>
                                                        <option value="Meie Script">Meie Script</option>
                                                        <option value="Merienda">Merienda</option>
                                                        <option value="Merienda One">Merienda One</option>
                                                        <option value="Merriweather">Merriweather</option>
                                                        <option value="Merriweather Sans">Merriweather Sans</option>
                                                        <option value="Metal">Metal</option>
                                                        <option value="Metal Mania">Metal Mania</option>
                                                        <option value="Metamorphous">Metamorphous</option>
                                                        <option value="Metrophobic">Metrophobic</option>
                                                        <option value="Michroma">Michroma</option>
                                                        <option value="Milonga">Milonga</option>
                                                        <option value="Miltonian">Miltonian</option>
                                                        <option value="Miltonian Tattoo">Miltonian Tattoo</option>
                                                        <option value="Miniver">Miniver</option>
                                                        <option value="Miss Fajardose">Miss Fajardose</option>
                                                        <option value="Modern Antiqua">Modern Antiqua</option>
                                                        <option value="Molengo">Molengo</option>
                                                        <option value="Molle">Molle</option>
                                                        <option value="Monda">Monda</option>
                                                        <option value="Monofett">Monofett</option>
                                                        <option value="Monoton">Monoton</option>
                                                        <option value="Monsieur La Doulaise">Monsieur La Doulaise</option>
                                                        <option value="Montaga">Montaga</option>
                                                        <option value="Montez">Montez</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Montserrat Alternates">Montserrat Alternates</option>
                                                        <option value="Montserrat Subrayada">Montserrat Subrayada</option>
                                                        <option value="Moul">Moul</option>
                                                        <option value="Moulpali">Moulpali</option>
                                                        <option value="Mountains of Christmas">Mountains of Christmas</option>
                                                        <option value="Mouse Memoirs">Mouse Memoirs</option>
                                                        <option value="Mr Bedfort">Mr Bedfort</option>
                                                        <option value="Mr Dafoe">Mr Dafoe</option>
                                                        <option value="Mr De Haviland">Mr De Haviland</option>
                                                        <option value="Mrs Saint Delafield">Mrs Saint Delafield</option>
                                                        <option value="Mrs Sheppards">Mrs Sheppards</option>
                                                        <option value="Muli">Muli</option>
                                                        <option value="Mystery Quest">Mystery Quest</option>
                                                        <option value="Neucha">Neucha</option>
                                                        <option value="Neuton">Neuton</option>
                                                        <option value="New Rocker">New Rocker</option>
                                                        <option value="News Cycle">News Cycle</option>
                                                        <option value="Niconne">Niconne</option>
                                                        <option value="Nixie One">Nixie One</option>
                                                        <option value="Nobile">Nobile</option>
                                                        <option value="Nokora">Nokora</option>
                                                        <option value="Norican">Norican</option>
                                                        <option value="Nosifer">Nosifer</option>
                                                        <option value="Nothing You Could Do">Nothing You Could Do</option>
                                                        <option value="Noticia Text">Noticia Text</option>
                                                        <option value="Noto Sans">Noto Sans</option>
                                                        <option value="Noto Serif">Noto Serif</option>
                                                        <option value="Nova Cut">Nova Cut</option>
                                                        <option value="Nova Flat">Nova Flat</option>
                                                        <option value="Nova Mono">Nova Mono</option>
                                                        <option value="Nova Oval">Nova Oval</option>
                                                        <option value="Nova Round">Nova Round</option>
                                                        <option value="Nova Script">Nova Script</option>
                                                        <option value="Nova Slim">Nova Slim</option>
                                                        <option value="Nova Square">Nova Square</option>
                                                        <option value="Numans">Numans</option>
                                                        <option value="Nunito">Nunito</option>
                                                        <option value="Odor Mean Chey">Odor Mean Chey</option>
                                                        <option value="Offside">Offside</option>
                                                        <option value="Old Standard TT">Old Standard TT</option>
                                                        <option value="Oldenburg">Oldenburg</option>
                                                        <option value="Oleo Script">Oleo Script</option>
                                                        <option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>
                                                        <option value="Open Sans">Open Sans</option>
                                                        <option value="Open Sans Condensed">Open Sans Condensed</option>
                                                        <option value="Oranienbaum">Oranienbaum</option>
                                                        <option value="Orbitron">Orbitron</option>
                                                        <option value="Oregano">Oregano</option>
                                                        <option value="Orienta">Orienta</option>
                                                        <option value="Original Surfer">Original Surfer</option>
                                                        <option value="Oswald">Oswald</option>
                                                        <option value="Over the Rainbow">Over the Rainbow</option>
                                                        <option value="Overlock">Overlock</option>
                                                        <option value="Overlock SC">Overlock SC</option>
                                                        <option value="Ovo">Ovo</option>
                                                        <option value="Oxygen">Oxygen</option>
                                                        <option value="Oxygen Mono">Oxygen Mono</option>
                                                        <option value="PT Mono">PT Mono</option>
                                                        <option value="PT Sans">PT Sans</option>
                                                        <option value="PT Sans Caption">PT Sans Caption</option>
                                                        <option value="PT Sans Narrow">PT Sans Narrow</option>
                                                        <option value="PT Serif">PT Serif</option>
                                                        <option value="PT Serif Caption">PT Serif Caption</option>
                                                        <option value="Pacifico">Pacifico</option>
                                                        <option value="Paprika">Paprika</option>
                                                        <option value="Parisienne">Parisienne</option>
                                                        <option value="Passero One">Passero One</option>
                                                        <option value="Passion One">Passion One</option>
                                                        <option value="Pathway Gothic One">Pathway Gothic One</option>
                                                        <option value="Patrick Hand">Patrick Hand</option>
                                                        <option value="Patrick Hand SC">Patrick Hand SC</option>
                                                        <option value="Patua One">Patua One</option>
                                                        <option value="Paytone One">Paytone One</option>
                                                        <option value="Peralta">Peralta</option>
                                                        <option value="Permanent Marker">Permanent Marker</option>
                                                        <option value="Petit Formal Script">Petit Formal Script</option>
                                                        <option value="Petrona">Petrona</option>
                                                        <option value="Philosopher">Philosopher</option>
                                                        <option value="Piedra">Piedra</option>
                                                        <option value="Pinyon Script">Pinyon Script</option>
                                                        <option value="Pirata One">Pirata One</option>
                                                        <option value="Plaster">Plaster</option>
                                                        <option value="Play">Play</option>
                                                        <option value="Playball">Playball</option>
                                                        <option value="Playfair Display">Playfair Display</option>
                                                        <option value="Playfair Display SC">Playfair Display SC</option>
                                                        <option value="Podkova">Podkova</option>
                                                        <option value="Poiret One">Poiret One</option>
                                                        <option value="Poller One">Poller One</option>
                                                        <option value="Poly">Poly</option>
                                                        <option value="Pompiere">Pompiere</option>
                                                        <option value="Pontano Sans">Pontano Sans</option>
                                                        <option value="Port Lligat Sans">Port Lligat Sans</option>
                                                        <option value="Port Lligat Slab">Port Lligat Slab</option>
                                                        <option value="Prata">Prata</option>
                                                        <option value="Preahvihear">Preahvihear</option>
                                                        <option value="Press Start 2P">Press Start 2P</option>
                                                        <option value="Princess Sofia">Princess Sofia</option>
                                                        <option value="Prociono">Prociono</option>
                                                        <option value="Prosto One">Prosto One</option>
                                                        <option value="Puritan">Puritan</option>
                                                        <option value="Purple Purse">Purple Purse</option>
                                                        <option value="Quando">Quando</option>
                                                        <option value="Quantico">Quantico</option>
                                                        <option value="Quattrocento">Quattrocento</option>
                                                        <option value="Quattrocento Sans">Quattrocento Sans</option>
                                                        <option value="Questrial">Questrial</option>
                                                        <option value="Quicksand">Quicksand</option>
                                                        <option value="Quintessential">Quintessential</option>
                                                        <option value="Qwigley">Qwigley</option>
                                                        <option value="Racing Sans One">Racing Sans One</option>
                                                        <option value="Radley">Radley</option>
                                                        <option value="Raleway">Raleway</option>
                                                        <option value="Raleway Dots">Raleway Dots</option>
                                                        <option value="Rambla">Rambla</option>
                                                        <option value="Rammetto One">Rammetto One</option>
                                                        <option value="Ranchers">Ranchers</option>
                                                        <option value="Rancho">Rancho</option>
                                                        <option value="Rationale">Rationale</option>
                                                        <option value="Redressed">Redressed</option>
                                                        <option value="Reenie Beanie">Reenie Beanie</option>
                                                        <option value="Revalia">Revalia</option>
                                                        <option value="Ribeye">Ribeye</option>
                                                        <option value="Ribeye Marrow">Ribeye Marrow</option>
                                                        <option value="Righteous">Righteous</option>
                                                        <option value="Risque">Risque</option>
                                                        <option value="Roboto">Roboto</option>
                                                        <option value="Roboto Condensed">Roboto Condensed</option>
                                                        <option value="Roboto Slab">Roboto Slab</option>
                                                        <option value="Rochester">Rochester</option>
                                                        <option value="Rock Salt">Rock Salt</option>
                                                        <option value="Rokkitt">Rokkitt</option>
                                                        <option value="Romanesco">Romanesco</option>
                                                        <option value="Ropa Sans">Ropa Sans</option>
                                                        <option value="Rosario">Rosario</option>
                                                        <option value="Rosarivo">Rosarivo</option>
                                                        <option value="Rouge Script">Rouge Script</option>
                                                        <option value="Ruda">Ruda</option>
                                                        <option value="Rufina">Rufina</option>
                                                        <option value="Ruge Boogie">Ruge Boogie</option>
                                                        <option value="Ruluko">Ruluko</option>
                                                        <option value="Rum Raisin">Rum Raisin</option>
                                                        <option value="Ruslan Display">Ruslan Display</option>
                                                        <option value="Russo One">Russo One</option>
                                                        <option value="Ruthie">Ruthie</option>
                                                        <option value="Rye">Rye</option>
                                                        <option value="Sacramento">Sacramento</option>
                                                        <option value="Sail">Sail</option>
                                                        <option value="Salsa">Salsa</option>
                                                        <option value="Sanchez">Sanchez</option>
                                                        <option value="Sancreek">Sancreek</option>
                                                        <option value="Sansita One">Sansita One</option>
                                                        <option value="Sarina">Sarina</option>
                                                        <option value="Satisfy">Satisfy</option>
                                                        <option value="Scada">Scada</option>
                                                        <option value="Schoolbell">Schoolbell</option>
                                                        <option value="Seaweed Script">Seaweed Script</option>
                                                        <option value="Sevillana">Sevillana</option>
                                                        <option value="Seymour One">Seymour One</option>
                                                        <option value="Shadows Into Light">Shadows Into Light</option>
                                                        <option value="Shadows Into Light Two">Shadows Into Light Two</option>
                                                        <option value="Shanti">Shanti</option>
                                                        <option value="Share">Share</option>
                                                        <option value="Share Tech">Share Tech</option>
                                                        <option value="Share Tech Mono">Share Tech Mono</option>
                                                        <option value="Shojumaru">Shojumaru</option>
                                                        <option value="Short Stack">Short Stack</option>
                                                        <option value="Siemreap">Siemreap</option>
                                                        <option value="Sigmar One">Sigmar One</option>
                                                        <option value="Signika">Signika</option>
                                                        <option value="Signika Negative">Signika Negative</option>
                                                        <option value="Simonetta">Simonetta</option>
                                                        <option value="Sintony">Sintony</option>
                                                        <option value="Sirin Stencil">Sirin Stencil</option>
                                                        <option value="Six Caps">Six Caps</option>
                                                        <option value="Skranji">Skranji</option>
                                                        <option value="Slackey">Slackey</option>
                                                        <option value="Smokum">Smokum</option>
                                                        <option value="Smythe">Smythe</option>
                                                        <option value="Sniglet">Sniglet</option>
                                                        <option value="Snippet">Snippet</option>
                                                        <option value="Snowburst One">Snowburst One</option>
                                                        <option value="Sofadi One">Sofadi One</option>
                                                        <option value="Sofia">Sofia</option>
                                                        <option value="Sonsie One">Sonsie One</option>
                                                        <option value="Sorts Mill Goudy">Sorts Mill Goudy</option>
                                                        <option value="Source Code Pro">Source Code Pro</option>
                                                        <option value="Source Sans Pro">Source Sans Pro</option>
                                                        <option value="Special Elite">Special Elite</option>
                                                        <option value="Spicy Rice">Spicy Rice</option>
                                                        <option value="Spinnaker">Spinnaker</option>
                                                        <option value="Spirax">Spirax</option>
                                                        <option value="Squada One">Squada One</option>
                                                        <option value="Stalemate">Stalemate</option>
                                                        <option value="Stalinist One">Stalinist One</option>
                                                        <option value="Stardos Stencil">Stardos Stencil</option>
                                                        <option value="Stint Ultra Condensed">Stint Ultra Condensed</option>
                                                        <option value="Stint Ultra Expanded">Stint Ultra Expanded</option>
                                                        <option value="Stoke">Stoke</option>
                                                        <option value="Strait">Strait</option>
                                                        <option value="Sue Ellen Francisco">Sue Ellen Francisco</option>
                                                        <option value="Sunshiney">Sunshiney</option>
                                                        <option value="Supermercado One">Supermercado One</option>
                                                        <option value="Suwannaphum">Suwannaphum</option>
                                                        <option value="Swanky and Moo Moo">Swanky and Moo Moo</option>
                                                        <option value="Syncopate">Syncopate</option>
                                                        <option value="Tangerine">Tangerine</option>
                                                        <option value="Taprom">Taprom</option>
                                                        <option value="Tauri">Tauri</option>
                                                        <option value="Telex">Telex</option>
                                                        <option value="Tenor Sans">Tenor Sans</option>
                                                        <option value="Text Me One">Text Me One</option>
                                                        <option value="The Girl Next Door">The Girl Next Door</option>
                                                        <option value="Tienne">Tienne</option>
                                                        <option value="Tinos">Tinos</option>
                                                        <option value="Titan One">Titan One</option>
                                                        <option value="Titillium Web">Titillium Web</option>
                                                        <option value="Trade Winds">Trade Winds</option>
                                                        <option value="Trocchi">Trocchi</option>
                                                        <option value="Trochut">Trochut</option>
                                                        <option value="Trykker">Trykker</option>
                                                        <option value="Tulpen One">Tulpen One</option>
                                                        <option value="Ubuntu">Ubuntu</option>
                                                        <option value="Ubuntu Condensed">Ubuntu Condensed</option>
                                                        <option value="Ubuntu Mono">Ubuntu Mono</option>
                                                        <option value="Ultra">Ultra</option>
                                                        <option value="Uncial Antiqua">Uncial Antiqua</option>
                                                        <option value="Underdog">Underdog</option>
                                                        <option value="Unica One">Unica One</option>
                                                        <option value="UnifrakturCook">UnifrakturCook</option>
                                                        <option value="UnifrakturMaguntia">UnifrakturMaguntia</option>
                                                        <option value="Unkempt">Unkempt</option>
                                                        <option value="Unlock">Unlock</option>
                                                        <option value="Unna">Unna</option>
                                                        <option value="VT323">VT323</option>
                                                        <option value="Vampiro One">Vampiro One</option>
                                                        <option value="Varela">Varela</option>
                                                        <option value="Varela Round">Varela Round</option>
                                                        <option value="Vast Shadow">Vast Shadow</option>
                                                        <option value="Vibur">Vibur</option>
                                                        <option value="Vidaloka">Vidaloka</option>
                                                        <option value="Viga">Viga</option>
                                                        <option value="Voces">Voces</option>
                                                        <option value="Volkhov">Volkhov</option>
                                                        <option value="Vollkorn">Vollkorn</option>
                                                        <option value="Voltaire">Voltaire</option>
                                                        <option value="Waiting for the Sunrise">Waiting for the Sunrise</option>
                                                        <option value="Wallpoet">Wallpoet</option>
                                                        <option value="Walter Turncoat">Walter Turncoat</option>
                                                        <option value="Warnes">Warnes</option>
                                                        <option value="Wellfleet">Wellfleet</option>
                                                        <option value="Wendy One">Wendy One</option>
                                                        <option value="Wire One">Wire One</option>
                                                        <option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>
                                                        <option value="Yellowtail">Yellowtail</option>
                                                        <option value="Yeseva One">Yeseva One</option>
                                                        <option value="Yesteryear">Yesteryear</option>
                                                        <option value="Zeyada">Zeyada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Font Second</label>
                                                <div class="input-group">
                                                    <select name="font_family_second" class="form-control customize-option">
                                                        <option value="---">---</option>
                                                        <option value="'Arial', Helvetica, sans-serif">'Arial', Helvetica, sans-serif</option>
                                                        <option value="'Arial Black', Gadget, sans-serif">'Arial Black', Gadget, sans-serif</option>
                                                        <option value="'Bookman Old Style', serif">'Bookman Old Style', serif</option>
                                                        <option value="'Comic Sans MS', cursive">'Comic Sans MS', cursive</option>
                                                        <option value="'Courier', monospace">'Courier', monospace</option>
                                                        <option value="'Garamond', serif">'Garamond', serif</option>
                                                        <option value="'Georgia', serif">'Georgia', serif</option>
                                                        <option value="'Impact', Charcoal, sans-serif">'Impact', Charcoal, sans-serif</option>
                                                        <option value="'Lucida Console', Monaco, monospace">'Lucida Console', Monaco, monospace
                                                        </option>
                                                        <option value="'Lucida Sans Unicode', Lucida Grande, sans-serif">'Lucida Sans Unicode',
                                                            Lucida Grande, sans-serif</option>
                                                        <option value="'MS Sans Serif', Geneva, sans-serif">'MS Sans Serif', Geneva, sans-serif
                                                        </option>
                                                        <option value="'MS Serif', New York, sans-serif">'MS Serif', New York, sans-serif</option>
                                                        <option value="'Palatino Linotype', Book Antiqua, Palatino, serif">'Palatino Linotype', Book
                                                            Antiqua, Palatino, serif</option>
                                                        <option value="'Tahoma',Geneva, sans-serif">'Tahoma',Geneva, sans-serif</option>
                                                        <option value="'Times New Roman', Times, serif">'Times New Roman', Times, serif</option>
                                                        <option value="'Trebuchet MS', Helvetica, sans-serif">'Trebuchet MS', Helvetica, sans-serif
                                                        </option>
                                                        <option value="'Verdana', Geneva, sans-serif">'Verdana', Geneva, sans-serif</option>
                                                        <option value="ABeeZee">ABeeZee</option>
                                                        <option value="Abel">Abel</option>
                                                        <option value="Abril Fatface">Abril Fatface</option>
                                                        <option value="Aclonica">Aclonica</option>
                                                        <option value="Acme">Acme</option>
                                                        <option value="Actor">Actor</option>
                                                        <option value="Adamina">Adamina</option>
                                                        <option value="Advent Pro">Advent Pro</option>
                                                        <option value="Aguafina Script">Aguafina Script</option>
                                                        <option value="Akronim">Akronim</option>
                                                        <option value="Aladin">Aladin</option>
                                                        <option value="Aldrich">Aldrich</option>
                                                        <option value="Alef">Alef</option>
                                                        <option value="Alegreya">Alegreya</option>
                                                        <option value="Alegreya SC">Alegreya SC</option>
                                                        <option value="Alex Brush">Alex Brush</option>
                                                        <option value="Alfa Slab One">Alfa Slab One</option>
                                                        <option value="Alice">Alice</option>
                                                        <option value="Alike">Alike</option>
                                                        <option value="Alike Angular">Alike Angular</option>
                                                        <option value="Allan">Allan</option>
                                                        <option value="Allerta">Allerta</option>
                                                        <option value="Allerta Stencil">Allerta Stencil</option>
                                                        <option value="Allura">Allura</option>
                                                        <option value="Almendra">Almendra</option>
                                                        <option value="Almendra Display">Almendra Display</option>
                                                        <option value="Almendra SC">Almendra SC</option>
                                                        <option value="Amarante">Amarante</option>
                                                        <option value="Amaranth">Amaranth</option>
                                                        <option value="Amatic SC">Amatic SC</option>
                                                        <option value="Amethysta">Amethysta</option>
                                                        <option value="Anaheim">Anaheim</option>
                                                        <option value="Andada">Andada</option>
                                                        <option value="Andika">Andika</option>
                                                        <option value="Angkor">Angkor</option>
                                                        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
                                                        <option value="Anonymous Pro">Anonymous Pro</option>
                                                        <option value="Antic">Antic</option>
                                                        <option value="Antic Didone">Antic Didone</option>
                                                        <option value="Antic Slab">Antic Slab</option>
                                                        <option value="Anton">Anton</option>
                                                        <option value="Arapey">Arapey</option>
                                                        <option value="Arbutus">Arbutus</option>
                                                        <option value="Arbutus Slab">Arbutus Slab</option>
                                                        <option value="Architects Daughter">Architects Daughter</option>
                                                        <option value="Archivo Black">Archivo Black</option>
                                                        <option value="Archivo Narrow">Archivo Narrow</option>
                                                        <option value="Arimo">Arimo</option>
                                                        <option value="Arizonia">Arizonia</option>
                                                        <option value="Armata">Armata</option>
                                                        <option value="Artifika">Artifika</option>
                                                        <option value="Arvo">Arvo</option>
                                                        <option value="Asap">Asap</option>
                                                        <option value="Asset">Asset</option>
                                                        <option value="Astloch">Astloch</option>
                                                        <option value="Asul">Asul</option>
                                                        <option value="Atomic Age">Atomic Age</option>
                                                        <option value="Aubrey">Aubrey</option>
                                                        <option value="Audiowide">Audiowide</option>
                                                        <option value="Autour One">Autour One</option>
                                                        <option value="Average">Average</option>
                                                        <option value="Average Sans">Average Sans</option>
                                                        <option value="Averia Gruesa Libre">Averia Gruesa Libre</option>
                                                        <option value="Averia Libre">Averia Libre</option>
                                                        <option value="Averia Sans Libre">Averia Sans Libre</option>
                                                        <option value="Averia Serif Libre">Averia Serif Libre</option>
                                                        <option value="Bad Script">Bad Script</option>
                                                        <option value="Balthazar">Balthazar</option>
                                                        <option value="Bangers">Bangers</option>
                                                        <option value="Basic">Basic</option>
                                                        <option value="Battambang">Battambang</option>
                                                        <option value="Baumans">Baumans</option>
                                                        <option value="Bayon">Bayon</option>
                                                        <option value="Belgrano">Belgrano</option>
                                                        <option value="Belleza">Belleza</option>
                                                        <option value="BenchNine">BenchNine</option>
                                                        <option value="Bentham">Bentham</option>
                                                        <option value="Berkshire Swash">Berkshire Swash</option>
                                                        <option value="Bevan">Bevan</option>
                                                        <option value="Bigelow Rules">Bigelow Rules</option>
                                                        <option value="Bigshot One">Bigshot One</option>
                                                        <option value="Bilbo">Bilbo</option>
                                                        <option value="Bilbo Swash Caps">Bilbo Swash Caps</option>
                                                        <option value="Bitter">Bitter</option>
                                                        <option value="Black Ops One">Black Ops One</option>
                                                        <option value="Bokor">Bokor</option>
                                                        <option value="Bonbon">Bonbon</option>
                                                        <option value="Boogaloo">Boogaloo</option>
                                                        <option value="Bowlby One">Bowlby One</option>
                                                        <option value="Bowlby One SC">Bowlby One SC</option>
                                                        <option value="Brawler">Brawler</option>
                                                        <option value="Bree Serif">Bree Serif</option>
                                                        <option value="Bubblegum Sans">Bubblegum Sans</option>
                                                        <option value="Bubbler One">Bubbler One</option>
                                                        <option value="Buda">Buda</option>
                                                        <option value="Buenard">Buenard</option>
                                                        <option value="Butcherman">Butcherman</option>
                                                        <option value="Butterfly Kids">Butterfly Kids</option>
                                                        <option value="Cabin">Cabin</option>
                                                        <option value="Cabin Condensed">Cabin Condensed</option>
                                                        <option value="Cabin Sketch">Cabin Sketch</option>
                                                        <option value="Caesar Dressing">Caesar Dressing</option>
                                                        <option value="Cagliostro">Cagliostro</option>
                                                        <option value="Calligraffitti">Calligraffitti</option>
                                                        <option value="Cambo">Cambo</option>
                                                        <option value="Candal">Candal</option>
                                                        <option value="Cantarell">Cantarell</option>
                                                        <option value="Cantata One">Cantata One</option>
                                                        <option value="Cantora One">Cantora One</option>
                                                        <option value="Capriola">Capriola</option>
                                                        <option value="Cardo">Cardo</option>
                                                        <option value="Carme">Carme</option>
                                                        <option value="Carrois Gothic">Carrois Gothic</option>
                                                        <option value="Carrois Gothic SC">Carrois Gothic SC</option>
                                                        <option value="Carter One">Carter One</option>
                                                        <option value="Caudex">Caudex</option>
                                                        <option value="Cedarville Cursive">Cedarville Cursive</option>
                                                        <option value="Ceviche One">Ceviche One</option>
                                                        <option value="Changa One">Changa One</option>
                                                        <option value="Chango">Chango</option>
                                                        <option value="Chau Philomene One">Chau Philomene One</option>
                                                        <option value="Chela One">Chela One</option>
                                                        <option value="Chelsea Market">Chelsea Market</option>
                                                        <option value="Chenla">Chenla</option>
                                                        <option value="Cherry Cream Soda">Cherry Cream Soda</option>
                                                        <option value="Cherry Swash">Cherry Swash</option>
                                                        <option value="Chewy">Chewy</option>
                                                        <option value="Chicle">Chicle</option>
                                                        <option value="Chivo">Chivo</option>
                                                        <option value="Cinzel">Cinzel</option>
                                                        <option value="Cinzel Decorative">Cinzel Decorative</option>
                                                        <option value="Clicker Script">Clicker Script</option>
                                                        <option value="Coda">Coda</option>
                                                        <option value="Coda Caption">Coda Caption</option>
                                                        <option value="Codystar">Codystar</option>
                                                        <option value="Combo">Combo</option>
                                                        <option value="Comfortaa">Comfortaa</option>
                                                        <option value="Coming Soon">Coming Soon</option>
                                                        <option value="Concert One">Concert One</option>
                                                        <option value="Condiment">Condiment</option>
                                                        <option value="Content">Content</option>
                                                        <option value="Contrail One">Contrail One</option>
                                                        <option value="Convergence">Convergence</option>
                                                        <option value="Cookie">Cookie</option>
                                                        <option value="Copse">Copse</option>
                                                        <option value="Corben">Corben</option>
                                                        <option value="Courgette">Courgette</option>
                                                        <option value="Cousine">Cousine</option>
                                                        <option value="Coustard">Coustard</option>
                                                        <option value="Covered By Your Grace">Covered By Your Grace</option>
                                                        <option value="Crafty Girls">Crafty Girls</option>
                                                        <option value="Creepster">Creepster</option>
                                                        <option value="Crete Round">Crete Round</option>
                                                        <option value="Crimson Text">Crimson Text</option>
                                                        <option value="Croissant One">Croissant One</option>
                                                        <option value="Crushed">Crushed</option>
                                                        <option value="Cuprum">Cuprum</option>
                                                        <option value="Cutive">Cutive</option>
                                                        <option value="Cutive Mono">Cutive Mono</option>
                                                        <option value="Datico">Datico</option>
                                                        <option value="Dancing Script">Dancing Script</option>
                                                        <option value="Dangrek">Dangrek</option>
                                                        <option value="Dawning of a New Day">Dawning of a New Day</option>
                                                        <option value="Days One">Days One</option>
                                                        <option value="Delius">Delius</option>
                                                        <option value="Delius Swash Caps">Delius Swash Caps</option>
                                                        <option value="Delius Unicase">Delius Unicase</option>
                                                        <option value="Della Respira">Della Respira</option>
                                                        <option value="Denk One">Denk One</option>
                                                        <option value="Devonshire">Devonshire</option>
                                                        <option value="Didact Gothic">Didact Gothic</option>
                                                        <option value="Diplomata">Diplomata</option>
                                                        <option value="Diplomata SC">Diplomata SC</option>
                                                        <option value="Domine">Domine</option>
                                                        <option value="Donegal One">Donegal One</option>
                                                        <option value="Doppio One">Doppio One</option>
                                                        <option value="Dorsa">Dorsa</option>
                                                        <option value="Dosis">Dosis</option>
                                                        <option value="Dr Sugiyama">Dr Sugiyama</option>
                                                        <option value="Droid Sans">Droid Sans</option>
                                                        <option value="Droid Sans Mono">Droid Sans Mono</option>
                                                        <option value="Droid Serif">Droid Serif</option>
                                                        <option value="Duru Sans">Duru Sans</option>
                                                        <option value="Dynalight">Dynalight</option>
                                                        <option value="EB Garamond">EB Garamond</option>
                                                        <option value="Eagle Lake">Eagle Lake</option>
                                                        <option value="Eater">Eater</option>
                                                        <option value="Economica">Economica</option>
                                                        <option value="Electrolize">Electrolize</option>
                                                        <option value="Elsie">Elsie</option>
                                                        <option value="Elsie Swash Caps">Elsie Swash Caps</option>
                                                        <option value="Emblema One">Emblema One</option>
                                                        <option value="Emilys Candy">Emilys Candy</option>
                                                        <option value="Engagement">Engagement</option>
                                                        <option value="Englebert">Englebert</option>
                                                        <option value="Enriqueta">Enriqueta</option>
                                                        <option value="Erica One">Erica One</option>
                                                        <option value="Esteban">Esteban</option>
                                                        <option value="Euphoria Script">Euphoria Script</option>
                                                        <option value="Ewert">Ewert</option>
                                                        <option value="Exo">Exo</option>
                                                        <option value="Expletus Sans">Expletus Sans</option>
                                                        <option value="Fanwood Text">Fanwood Text</option>
                                                        <option value="Fascinate">Fascinate</option>
                                                        <option value="Fascinate Inline">Fascinate Inline</option>
                                                        <option value="Faster One">Faster One</option>
                                                        <option value="Fasthand">Fasthand</option>
                                                        <option value="Fauna One">Fauna One</option>
                                                        <option value="Federant">Federant</option>
                                                        <option value="Federo">Federo</option>
                                                        <option value="Felipa">Felipa</option>
                                                        <option value="Fenix">Fenix</option>
                                                        <option value="Finger Paint">Finger Paint</option>
                                                        <option value="Fjalla One">Fjalla One</option>
                                                        <option value="Fjord One">Fjord One</option>
                                                        <option value="Flamenco">Flamenco</option>
                                                        <option value="Flavors">Flavors</option>
                                                        <option value="Fondamento">Fondamento</option>
                                                        <option value="Fontdiner Swanky">Fontdiner Swanky</option>
                                                        <option value="Forum">Forum</option>
                                                        <option value="Francois One">Francois One</option>
                                                        <option value="Freckle Face">Freckle Face</option>
                                                        <option value="Fredericka the Great">Fredericka the Great</option>
                                                        <option value="Fredoka One">Fredoka One</option>
                                                        <option value="Freehand">Freehand</option>
                                                        <option value="Fresca">Fresca</option>
                                                        <option value="Frijole">Frijole</option>
                                                        <option value="Fruktur">Fruktur</option>
                                                        <option value="Fugaz One">Fugaz One</option>
                                                        <option value="GFS Didot">GFS Didot</option>
                                                        <option value="GFS Neohellenic">GFS Neohellenic</option>
                                                        <option value="Gabriela">Gabriela</option>
                                                        <option value="Gafata">Gafata</option>
                                                        <option value="Galdeano">Galdeano</option>
                                                        <option value="Galindo">Galindo</option>
                                                        <option value="Gentium Basic">Gentium Basic</option>
                                                        <option value="Gentium Book Basic">Gentium Book Basic</option>
                                                        <option value="Geo">Geo</option>
                                                        <option value="Geostar">Geostar</option>
                                                        <option value="Geostar Fill">Geostar Fill</option>
                                                        <option value="Germania One">Germania One</option>
                                                        <option value="Gilda Display">Gilda Display</option>
                                                        <option value="Give You Glory">Give You Glory</option>
                                                        <option value="Glass Antiqua">Glass Antiqua</option>
                                                        <option value="Glegoo">Glegoo</option>
                                                        <option value="Gloria Hallelujah">Gloria Hallelujah</option>
                                                        <option value="Goblin One">Goblin One</option>
                                                        <option value="Gochi Hand">Gochi Hand</option>
                                                        <option value="Gorditas">Gorditas</option>
                                                        <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                                        <option value="Graduate">Graduate</option>
                                                        <option value="Grand Hotel">Grand Hotel</option>
                                                        <option value="Gravitas One">Gravitas One</option>
                                                        <option value="Great Vibes">Great Vibes</option>
                                                        <option value="Griffy">Griffy</option>
                                                        <option value="Gruppo">Gruppo</option>
                                                        <option value="Gudea">Gudea</option>
                                                        <option value="Habibi">Habibi</option>
                                                        <option value="Hammersmith One">Hammersmith One</option>
                                                        <option value="Hanalei">Hanalei</option>
                                                        <option value="Hanalei Fill">Hanalei Fill</option>
                                                        <option value="Handlee">Handlee</option>
                                                        <option value="Hanuman">Hanuman</option>
                                                        <option value="Happy Monkey">Happy Monkey</option>
                                                        <option value="Headland One">Headland One</option>
                                                        <option value="Henny Penny">Henny Penny</option>
                                                        <option value="Herr Von Muellerhoff">Herr Von Muellerhoff</option>
                                                        <option value="Holtwood One SC">Holtwood One SC</option>
                                                        <option value="Homemade Apple">Homemade Apple</option>
                                                        <option value="Homenaje">Homenaje</option>
                                                        <option value="IM Fell DW Pica">IM Fell DW Pica</option>
                                                        <option value="IM Fell DW Pica SC">IM Fell DW Pica SC</option>
                                                        <option value="IM Fell Double Pica">IM Fell Double Pica</option>
                                                        <option value="IM Fell Double Pica SC">IM Fell Double Pica SC</option>
                                                        <option value="IM Fell English">IM Fell English</option>
                                                        <option value="IM Fell English SC">IM Fell English SC</option>
                                                        <option value="IM Fell French Canon">IM Fell French Canon</option>
                                                        <option value="IM Fell French Canon SC">IM Fell French Canon SC</option>
                                                        <option value="IM Fell Great Primer">IM Fell Great Primer</option>
                                                        <option value="IM Fell Great Primer SC">IM Fell Great Primer SC</option>
                                                        <option value="Iceberg">Iceberg</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="Imprima">Imprima</option>
                                                        <option value="Inconsolata">Inconsolata</option>
                                                        <option value="Inder">Inder</option>
                                                        <option value="Indie Flower">Indie Flower</option>
                                                        <option value="Inika">Inika</option>
                                                        <option value="Irish Grover">Irish Grover</option>
                                                        <option value="Istok Web">Istok Web</option>
                                                        <option value="Italiana">Italiana</option>
                                                        <option value="Italianno">Italianno</option>
                                                        <option value="Jacques Francois">Jacques Francois</option>
                                                        <option value="Jacques Francois Shadow">Jacques Francois Shadow</option>
                                                        <option value="Jim Nightshade">Jim Nightshade</option>
                                                        <option value="Jockey One">Jockey One</option>
                                                        <option value="Jolly Lodger">Jolly Lodger</option>
                                                        <option value="Josefin Sans">Josefin Sans</option>
                                                        <option value="Josefin Slab">Josefin Slab</option>
                                                        <option value="Joti One">Joti One</option>
                                                        <option value="Judson">Judson</option>
                                                        <option value="Julee">Julee</option>
                                                        <option value="Julius Sans One">Julius Sans One</option>
                                                        <option value="Junge">Junge</option>
                                                        <option value="Jura">Jura</option>
                                                        <option value="Just Another Hand">Just Another Hand</option>
                                                        <option value="Just Me Again Down Here">Just Me Again Down Here</option>
                                                        <option value="Kameron">Kameron</option>
                                                        <option value="Karla">Karla</option>
                                                        <option value="Kaushan Script">Kaushan Script</option>
                                                        <option value="Kavoon">Kavoon</option>
                                                        <option value="Keania One">Keania One</option>
                                                        <option value="Kelly Slab">Kelly Slab</option>
                                                        <option value="Kenia">Kenia</option>
                                                        <option value="Khmer">Khmer</option>
                                                        <option value="Kite One">Kite One</option>
                                                        <option value="Knewave">Knewave</option>
                                                        <option value="Kotta One">Kotta One</option>
                                                        <option value="Koulen">Koulen</option>
                                                        <option value="Kranky">Kranky</option>
                                                        <option value="Kreon">Kreon</option>
                                                        <option value="Kristi">Kristi</option>
                                                        <option value="Krona One">Krona One</option>
                                                        <option value="Laila">Laila</option>
                                                        <option value="La Belle Aurore">La Belle Aurore</option>
                                                        <option value="Lancelot">Lancelot</option>
                                                        <option value="Lato">Lato</option>
                                                        <option value="League Script">League Script</option>
                                                        <option value="Leckerli One">Leckerli One</option>
                                                        <option value="Ledger">Ledger</option>
                                                        <option value="Lekton">Lekton</option>
                                                        <option value="Lemon">Lemon</option>
                                                        <option value="Libre Baskerville">Libre Baskerville</option>
                                                        <option value="Life Savers">Life Savers</option>
                                                        <option value="Lilita One">Lilita One</option>
                                                        <option value="Lily Script One">Lily Script One</option>
                                                        <option value="Limelight">Limelight</option>
                                                        <option value="Linden Hill">Linden Hill</option>
                                                        <option value="Lobster">Lobster</option>
                                                        <option value="Lobster Two">Lobster Two</option>
                                                        <option value="Londrina Outline">Londrina Outline</option>
                                                        <option value="Londrina Shadow">Londrina Shadow</option>
                                                        <option value="Londrina Sketch">Londrina Sketch</option>
                                                        <option value="Londrina Solid">Londrina Solid</option>
                                                        <option value="Lora">Lora</option>
                                                        <option value="Love Ya Like A Sister">Love Ya Like A Sister</option>
                                                        <option value="Loved by the King">Loved by the King</option>
                                                        <option value="Lovers Quarrel">Lovers Quarrel</option>
                                                        <option value="Luckiest Guy">Luckiest Guy</option>
                                                        <option value="Lusitana">Lusitana</option>
                                                        <option value="Lustria">Lustria</option>
                                                        <option value="Macondo">Macondo</option>
                                                        <option value="Macondo Swash Caps">Macondo Swash Caps</option>
                                                        <option value="Magra">Magra</option>
                                                        <option value="Maiden Orange">Maiden Orange</option>
                                                        <option value="Mako">Mako</option>
                                                        <option value="Marcellus">Marcellus</option>
                                                        <option value="Marcellus SC">Marcellus SC</option>
                                                        <option value="Marck Script">Marck Script</option>
                                                        <option value="Margarine">Margarine</option>
                                                        <option value="Marko One">Marko One</option>
                                                        <option value="Marmelad">Marmelad</option>
                                                        <option value="Marvel">Marvel</option>
                                                        <option value="Mate">Mate</option>
                                                        <option value="Mate SC">Mate SC</option>
                                                        <option value="Maven Pro">Maven Pro</option>
                                                        <option value="McLaren">McLaren</option>
                                                        <option value="Meddon">Meddon</option>
                                                        <option value="MedievalSharp">MedievalSharp</option>
                                                        <option value="Medula One">Medula One</option>
                                                        <option value="Megrim">Megrim</option>
                                                        <option value="Meie Script">Meie Script</option>
                                                        <option value="Merienda">Merienda</option>
                                                        <option value="Merienda One">Merienda One</option>
                                                        <option value="Merriweather">Merriweather</option>
                                                        <option value="Merriweather Sans">Merriweather Sans</option>
                                                        <option value="Metal">Metal</option>
                                                        <option value="Metal Mania">Metal Mania</option>
                                                        <option value="Metamorphous">Metamorphous</option>
                                                        <option value="Metrophobic">Metrophobic</option>
                                                        <option value="Michroma">Michroma</option>
                                                        <option value="Milonga">Milonga</option>
                                                        <option value="Miltonian">Miltonian</option>
                                                        <option value="Miltonian Tattoo">Miltonian Tattoo</option>
                                                        <option value="Miniver">Miniver</option>
                                                        <option value="Miss Fajardose">Miss Fajardose</option>
                                                        <option value="Modern Antiqua">Modern Antiqua</option>
                                                        <option value="Molengo">Molengo</option>
                                                        <option value="Molle">Molle</option>
                                                        <option value="Monda">Monda</option>
                                                        <option value="Monofett">Monofett</option>
                                                        <option value="Monoton">Monoton</option>
                                                        <option value="Monsieur La Doulaise">Monsieur La Doulaise</option>
                                                        <option value="Montaga">Montaga</option>
                                                        <option value="Montez">Montez</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Montserrat Alternates">Montserrat Alternates</option>
                                                        <option value="Montserrat Subrayada">Montserrat Subrayada</option>
                                                        <option value="Moul">Moul</option>
                                                        <option value="Moulpali">Moulpali</option>
                                                        <option value="Mountains of Christmas">Mountains of Christmas</option>
                                                        <option value="Mouse Memoirs">Mouse Memoirs</option>
                                                        <option value="Mr Bedfort">Mr Bedfort</option>
                                                        <option value="Mr Dafoe">Mr Dafoe</option>
                                                        <option value="Mr De Haviland">Mr De Haviland</option>
                                                        <option value="Mrs Saint Delafield">Mrs Saint Delafield</option>
                                                        <option value="Mrs Sheppards">Mrs Sheppards</option>
                                                        <option value="Muli">Muli</option>
                                                        <option value="Mystery Quest">Mystery Quest</option>
                                                        <option value="Neucha">Neucha</option>
                                                        <option value="Neuton">Neuton</option>
                                                        <option value="New Rocker">New Rocker</option>
                                                        <option value="News Cycle">News Cycle</option>
                                                        <option value="Niconne">Niconne</option>
                                                        <option value="Nixie One">Nixie One</option>
                                                        <option value="Nobile">Nobile</option>
                                                        <option value="Nokora">Nokora</option>
                                                        <option value="Norican">Norican</option>
                                                        <option value="Nosifer">Nosifer</option>
                                                        <option value="Nothing You Could Do">Nothing You Could Do</option>
                                                        <option value="Noticia Text">Noticia Text</option>
                                                        <option value="Noto Sans">Noto Sans</option>
                                                        <option value="Noto Serif">Noto Serif</option>
                                                        <option value="Nova Cut">Nova Cut</option>
                                                        <option value="Nova Flat">Nova Flat</option>
                                                        <option value="Nova Mono">Nova Mono</option>
                                                        <option value="Nova Oval">Nova Oval</option>
                                                        <option value="Nova Round">Nova Round</option>
                                                        <option value="Nova Script">Nova Script</option>
                                                        <option value="Nova Slim">Nova Slim</option>
                                                        <option value="Nova Square">Nova Square</option>
                                                        <option value="Numans">Numans</option>
                                                        <option value="Nunito">Nunito</option>
                                                        <option value="Odor Mean Chey">Odor Mean Chey</option>
                                                        <option value="Offside">Offside</option>
                                                        <option value="Old Standard TT">Old Standard TT</option>
                                                        <option value="Oldenburg">Oldenburg</option>
                                                        <option value="Oleo Script">Oleo Script</option>
                                                        <option value="Oleo Script Swash Caps">Oleo Script Swash Caps</option>
                                                        <option value="Open Sans">Open Sans</option>
                                                        <option value="Open Sans Condensed">Open Sans Condensed</option>
                                                        <option value="Oranienbaum">Oranienbaum</option>
                                                        <option value="Orbitron">Orbitron</option>
                                                        <option value="Oregano">Oregano</option>
                                                        <option value="Orienta">Orienta</option>
                                                        <option value="Original Surfer">Original Surfer</option>
                                                        <option value="Oswald">Oswald</option>
                                                        <option value="Over the Rainbow">Over the Rainbow</option>
                                                        <option value="Overlock">Overlock</option>
                                                        <option value="Overlock SC">Overlock SC</option>
                                                        <option value="Ovo">Ovo</option>
                                                        <option value="Oxygen">Oxygen</option>
                                                        <option value="Oxygen Mono">Oxygen Mono</option>
                                                        <option value="PT Mono">PT Mono</option>
                                                        <option value="PT Sans">PT Sans</option>
                                                        <option value="PT Sans Caption">PT Sans Caption</option>
                                                        <option value="PT Sans Narrow">PT Sans Narrow</option>
                                                        <option value="PT Serif">PT Serif</option>
                                                        <option value="PT Serif Caption">PT Serif Caption</option>
                                                        <option value="Pacifico">Pacifico</option>
                                                        <option value="Paprika">Paprika</option>
                                                        <option value="Parisienne">Parisienne</option>
                                                        <option value="Passero One">Passero One</option>
                                                        <option value="Passion One">Passion One</option>
                                                        <option value="Pathway Gothic One">Pathway Gothic One</option>
                                                        <option value="Patrick Hand">Patrick Hand</option>
                                                        <option value="Patrick Hand SC">Patrick Hand SC</option>
                                                        <option value="Patua One">Patua One</option>
                                                        <option value="Paytone One">Paytone One</option>
                                                        <option value="Peralta">Peralta</option>
                                                        <option value="Permanent Marker">Permanent Marker</option>
                                                        <option value="Petit Formal Script">Petit Formal Script</option>
                                                        <option value="Petrona">Petrona</option>
                                                        <option value="Philosopher">Philosopher</option>
                                                        <option value="Piedra">Piedra</option>
                                                        <option value="Pinyon Script">Pinyon Script</option>
                                                        <option value="Pirata One">Pirata One</option>
                                                        <option value="Plaster">Plaster</option>
                                                        <option value="Play">Play</option>
                                                        <option value="Playball">Playball</option>
                                                        <option value="Playfair Display">Playfair Display</option>
                                                        <option value="Playfair Display SC">Playfair Display SC</option>
                                                        <option value="Podkova">Podkova</option>
                                                        <option value="Poiret One">Poiret One</option>
                                                        <option value="Poller One">Poller One</option>
                                                        <option value="Poly">Poly</option>
                                                        <option value="Pompiere">Pompiere</option>
                                                        <option value="Pontano Sans">Pontano Sans</option>
                                                        <option value="Port Lligat Sans">Port Lligat Sans</option>
                                                        <option value="Port Lligat Slab">Port Lligat Slab</option>
                                                        <option value="Prata">Prata</option>
                                                        <option value="Preahvihear">Preahvihear</option>
                                                        <option value="Press Start 2P">Press Start 2P</option>
                                                        <option value="Princess Sofia">Princess Sofia</option>
                                                        <option value="Prociono">Prociono</option>
                                                        <option value="Prosto One">Prosto One</option>
                                                        <option value="Puritan">Puritan</option>
                                                        <option value="Purple Purse">Purple Purse</option>
                                                        <option value="Quando">Quando</option>
                                                        <option value="Quantico">Quantico</option>
                                                        <option value="Quattrocento">Quattrocento</option>
                                                        <option value="Quattrocento Sans">Quattrocento Sans</option>
                                                        <option value="Questrial">Questrial</option>
                                                        <option value="Quicksand">Quicksand</option>
                                                        <option value="Quintessential">Quintessential</option>
                                                        <option value="Qwigley">Qwigley</option>
                                                        <option value="Racing Sans One">Racing Sans One</option>
                                                        <option value="Radley">Radley</option>
                                                        <option value="Raleway">Raleway</option>
                                                        <option value="Raleway Dots">Raleway Dots</option>
                                                        <option value="Rambla">Rambla</option>
                                                        <option value="Rammetto One">Rammetto One</option>
                                                        <option value="Ranchers">Ranchers</option>
                                                        <option value="Rancho">Rancho</option>
                                                        <option value="Rationale">Rationale</option>
                                                        <option value="Redressed">Redressed</option>
                                                        <option value="Reenie Beanie">Reenie Beanie</option>
                                                        <option value="Revalia">Revalia</option>
                                                        <option value="Ribeye">Ribeye</option>
                                                        <option value="Ribeye Marrow">Ribeye Marrow</option>
                                                        <option value="Righteous">Righteous</option>
                                                        <option value="Risque">Risque</option>
                                                        <option value="Roboto">Roboto</option>
                                                        <option value="Roboto Condensed">Roboto Condensed</option>
                                                        <option value="Roboto Slab">Roboto Slab</option>
                                                        <option value="Rochester">Rochester</option>
                                                        <option value="Rock Salt">Rock Salt</option>
                                                        <option value="Rokkitt">Rokkitt</option>
                                                        <option value="Romanesco">Romanesco</option>
                                                        <option value="Ropa Sans">Ropa Sans</option>
                                                        <option value="Rosario">Rosario</option>
                                                        <option value="Rosarivo">Rosarivo</option>
                                                        <option value="Rouge Script">Rouge Script</option>
                                                        <option value="Ruda">Ruda</option>
                                                        <option value="Rufina">Rufina</option>
                                                        <option value="Ruge Boogie">Ruge Boogie</option>
                                                        <option value="Ruluko">Ruluko</option>
                                                        <option value="Rum Raisin">Rum Raisin</option>
                                                        <option value="Ruslan Display">Ruslan Display</option>
                                                        <option value="Russo One">Russo One</option>
                                                        <option value="Ruthie">Ruthie</option>
                                                        <option value="Rye">Rye</option>
                                                        <option value="Sacramento">Sacramento</option>
                                                        <option value="Sail">Sail</option>
                                                        <option value="Salsa">Salsa</option>
                                                        <option value="Sanchez">Sanchez</option>
                                                        <option value="Sancreek">Sancreek</option>
                                                        <option value="Sansita One">Sansita One</option>
                                                        <option value="Sarina">Sarina</option>
                                                        <option value="Satisfy">Satisfy</option>
                                                        <option value="Scada">Scada</option>
                                                        <option value="Schoolbell">Schoolbell</option>
                                                        <option value="Seaweed Script">Seaweed Script</option>
                                                        <option value="Sevillana">Sevillana</option>
                                                        <option value="Seymour One">Seymour One</option>
                                                        <option value="Shadows Into Light">Shadows Into Light</option>
                                                        <option value="Shadows Into Light Two">Shadows Into Light Two</option>
                                                        <option value="Shanti">Shanti</option>
                                                        <option value="Share">Share</option>
                                                        <option value="Share Tech">Share Tech</option>
                                                        <option value="Share Tech Mono">Share Tech Mono</option>
                                                        <option value="Shojumaru">Shojumaru</option>
                                                        <option value="Short Stack">Short Stack</option>
                                                        <option value="Siemreap">Siemreap</option>
                                                        <option value="Sigmar One">Sigmar One</option>
                                                        <option value="Signika">Signika</option>
                                                        <option value="Signika Negative">Signika Negative</option>
                                                        <option value="Simonetta">Simonetta</option>
                                                        <option value="Sintony">Sintony</option>
                                                        <option value="Sirin Stencil">Sirin Stencil</option>
                                                        <option value="Six Caps">Six Caps</option>
                                                        <option value="Skranji">Skranji</option>
                                                        <option value="Slackey">Slackey</option>
                                                        <option value="Smokum">Smokum</option>
                                                        <option value="Smythe">Smythe</option>
                                                        <option value="Sniglet">Sniglet</option>
                                                        <option value="Snippet">Snippet</option>
                                                        <option value="Snowburst One">Snowburst One</option>
                                                        <option value="Sofadi One">Sofadi One</option>
                                                        <option value="Sofia">Sofia</option>
                                                        <option value="Sonsie One">Sonsie One</option>
                                                        <option value="Sorts Mill Goudy">Sorts Mill Goudy</option>
                                                        <option value="Source Code Pro">Source Code Pro</option>
                                                        <option value="Source Sans Pro">Source Sans Pro</option>
                                                        <option value="Special Elite">Special Elite</option>
                                                        <option value="Spicy Rice">Spicy Rice</option>
                                                        <option value="Spinnaker">Spinnaker</option>
                                                        <option value="Spirax">Spirax</option>
                                                        <option value="Squada One">Squada One</option>
                                                        <option value="Stalemate">Stalemate</option>
                                                        <option value="Stalinist One">Stalinist One</option>
                                                        <option value="Stardos Stencil">Stardos Stencil</option>
                                                        <option value="Stint Ultra Condensed">Stint Ultra Condensed</option>
                                                        <option value="Stint Ultra Expanded">Stint Ultra Expanded</option>
                                                        <option value="Stoke">Stoke</option>
                                                        <option value="Strait">Strait</option>
                                                        <option value="Sue Ellen Francisco">Sue Ellen Francisco</option>
                                                        <option value="Sunshiney">Sunshiney</option>
                                                        <option value="Supermercado One">Supermercado One</option>
                                                        <option value="Suwannaphum">Suwannaphum</option>
                                                        <option value="Swanky and Moo Moo">Swanky and Moo Moo</option>
                                                        <option value="Syncopate">Syncopate</option>
                                                        <option value="Tangerine">Tangerine</option>
                                                        <option value="Taprom">Taprom</option>
                                                        <option value="Tauri">Tauri</option>
                                                        <option value="Telex">Telex</option>
                                                        <option value="Tenor Sans">Tenor Sans</option>
                                                        <option value="Text Me One">Text Me One</option>
                                                        <option value="The Girl Next Door">The Girl Next Door</option>
                                                        <option value="Tienne">Tienne</option>
                                                        <option value="Tinos">Tinos</option>
                                                        <option value="Titan One">Titan One</option>
                                                        <option value="Titillium Web">Titillium Web</option>
                                                        <option value="Trade Winds">Trade Winds</option>
                                                        <option value="Trocchi">Trocchi</option>
                                                        <option value="Trochut">Trochut</option>
                                                        <option value="Trykker">Trykker</option>
                                                        <option value="Tulpen One">Tulpen One</option>
                                                        <option value="Ubuntu">Ubuntu</option>
                                                        <option value="Ubuntu Condensed">Ubuntu Condensed</option>
                                                        <option value="Ubuntu Mono">Ubuntu Mono</option>
                                                        <option value="Ultra">Ultra</option>
                                                        <option value="Uncial Antiqua">Uncial Antiqua</option>
                                                        <option value="Underdog">Underdog</option>
                                                        <option value="Unica One">Unica One</option>
                                                        <option value="UnifrakturCook">UnifrakturCook</option>
                                                        <option value="UnifrakturMaguntia">UnifrakturMaguntia</option>
                                                        <option value="Unkempt">Unkempt</option>
                                                        <option value="Unlock">Unlock</option>
                                                        <option value="Unna">Unna</option>
                                                        <option value="VT323">VT323</option>
                                                        <option value="Vampiro One">Vampiro One</option>
                                                        <option value="Varela">Varela</option>
                                                        <option value="Varela Round">Varela Round</option>
                                                        <option value="Vast Shadow">Vast Shadow</option>
                                                        <option value="Vibur">Vibur</option>
                                                        <option value="Vidaloka">Vidaloka</option>
                                                        <option value="Viga">Viga</option>
                                                        <option value="Voces">Voces</option>
                                                        <option value="Volkhov">Volkhov</option>
                                                        <option value="Vollkorn">Vollkorn</option>
                                                        <option value="Voltaire">Voltaire</option>
                                                        <option value="Waiting for the Sunrise">Waiting for the Sunrise</option>
                                                        <option value="Wallpoet">Wallpoet</option>
                                                        <option value="Walter Turncoat">Walter Turncoat</option>
                                                        <option value="Warnes">Warnes</option>
                                                        <option value="Wellfleet">Wellfleet</option>
                                                        <option value="Wendy One">Wendy One</option>
                                                        <option value="Wire One">Wire One</option>
                                                        <option value="Yanone Kaffeesatz">Yanone Kaffeesatz</option>
                                                        <option value="Yellowtail">Yellowtail</option>
                                                        <option value="Yeseva One">Yeseva One</option>
                                                        <option value="Yesteryear">Yesteryear</option>
                                                        <option value="Zeyada">Zeyada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Font Weight Body</label>
                                                <div class="input-group">
                                                    <select name="font_body_weight" class="form-control customize-option">
                                                        <option value>-- Default --</option>
                                                        <option value="100">100</option>
                                                        <option value="300">300</option>
                                                        <option value="400">400</option>
                                                        <option value="500">500</option>
                                                        <option value="600">600</option>
                                                        <option value="700">700</option>
                                                        <option value="800">800</option>
                                                        <option value="900">900</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Font size Body</label>
                                                <div class="input-group">
                                                    <select name="font_body_weight" class="form-control customize-option">
                                                        <option value>-- Default --</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-body"
                                           aria-expanded="true">
                                            Body
                                        </a>
                                    </h4>
                                </div>
                                <div id="customize-body" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="desc">Background body show when use boxed layout</div>
                                        <div class="form-wrapper">
                                            <div class="desc" style="line-height: 16px;"><b>You can upload image for
                                                    /themes/gavias_gito/images/patterns</b></div>
                                            <div class="form-group">
                                                <label>Background Image</label>
                                                <div class="input-group">
                                                    <input name="body_bg_image" type="hidden">
                                                    <div class="box-choose-image">

                                                    </div>
                                                    <select name="body_bg_image" class="form-control customize-option text-black">
                                                        <option value>--Default--</option>
                                                        <option value="grey">az_subtle.png</option>
                                                        <option value="blizzard.png">blizzard.png</option>
                                                        <option value="bright_squares.png">bright_squares.png</option>
                                                        <option value="denim.png">denim.png</option>
                                                        <option value="fancy_deboss.png">fancy_deboss.png</option>
                                                        <option value="gray_jean.png">gray_jean.png</option>
                                                        <option value="honey_im_subtle.png">honey_im_subtle.png</option>
                                                        <option value="linedpaper.png">linedpaper.png</option>
                                                        <option value="linen.png">linen.png</option>
                                                        <option value="pw_maze_white.png">pw_maze_white.png</option>
                                                        <option value="random_grey_variations.png">random_grey_variations.png</option>
                                                        <option value="skin_side_up.png">skin_side_up.png</option>
                                                        <option value="stitched_wool.png">stitched_wool.png</option>
                                                        <option value="straws.png">straws.png</option>
                                                        <option value="subtle_grunge.png">subtle_grunge.png</option>
                                                        <option value="textured_stripes.png">textured_stripes.png</option>
                                                        <option value="wild_oliva.png">wild_oliva.png</option>
                                                        <option value="worn_dots.png">worn_dots.png</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Background Color</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="body_bg_color" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Background Position</label>
                                                <div class="input-group">
                                                    <select name="body_bg_position" class="form-control customize-option">
                                                        <option value>--Default--</option>
                                                        <option value="center top">center top</option>
                                                        <option value="center right">center right</option>
                                                        <option value="center bottom">center bottom</option>
                                                        <option value="center center">center center</option>
                                                        <option value="left top">left top</option>
                                                        <option value="left center">left center</option>
                                                        <option value="left bottom">left bottom</option>
                                                        <option value="right top">right top</option>
                                                        <option value="right center">right center</option>
                                                        <option value="right bottom">right bottom</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Background Repeat</label>
                                                <div class="input-group colorselector">
                                                    <select name="body_bg_repeat" class="form-control customize-option">
                                                        <option value>--Default--</option>
                                                        <option value="no-repeat">no-repeat</option>
                                                        <option value="repeat">repeat</option>
                                                        <option value="repeat-x">repeat-x</option>
                                                        <option value="repeat-y">repeat-y</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- General -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-general"
                                           aria-expanded="true">
                                            General
                                        </a>
                                    </h4>
                                </div>
                                <div id="customize-general" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Text color</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="text_color" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Link color</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="link_color" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Link hover color</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="link_hover_color" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Header -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-header"
                                           aria-expanded="true">
                                            Header
                                        </a>
                                    </h4>
                                </div>
                                <div id="customize-header" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Background</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="header_bg" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Header Color Link</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="header_color_link" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Header Color Hover</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="header_color_link_hover" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Main menu -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#customize-accordion"
                                           href="#customize-mainmenu" aria-expanded="true">
                                            Main Menu
                                        </a>
                                    </h4>
                                </div>
                                <div id="customize-mainmenu" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Background</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="menu_bg" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Menu | Color Link</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="menu_color_link" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Menu | Color Hover</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="menu_color_link_hover" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Sub Menu | Background</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="submenu_background" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Sub Menu | Color</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="submenu_color" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Sub Menu | Color Link</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="submenu_color_link" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Sub Menu | Color Hover</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="submenu_color_link_hover"
                                                           class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-footer"
                                           aria-expanded="true">
                                            Footer
                                        </a>
                                    </h4>
                                </div>
                                <div id="customize-footer" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Background</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="footer_bg" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Text color</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="footer_color" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Color Link</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="footer_color_link" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Color Hover</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="footer_color_link_hover" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Copyright -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#customize-accordion"
                                           href="#customize-copyright" aria-expanded="true">
                                            Copyright
                                        </a>
                                    </h4>
                                </div>
                                <div id="customize-copyright" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Background</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="copyright_bg" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Text color</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="copyright_color" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Color Link</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="copyright_color_link" class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label>Color Hover</label>
                                                <div class="input-group colorselector">
                                                    <input type="text" value name="copyright_color_link_hover"
                                                           class="form-control customize-option">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <span class="remove">x</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm">
            <div class=" "><i class="fa fa-cogs"></i></div>
            <div class="panel-skins-content">
                <div class="title">Color skins</div>
                <div class="text-center">
                    <a class="item-color default" href="//gaviaswp.com/drupal/gito/?gvas"></a>
                    <a class="item-color blue" href="//gaviaswp.com/drupal/gito/?gvas=blue"></a>
                    <a class="item-color brown" href="//gaviaswp.com/drupal/gito/?gvas=brown"></a>
                    <a class="item-color green" href="//gaviaswp.com/drupal/gito/?gvas=green"></a>
                    <a class="item-color lilac" href="//gaviaswp.com/drupal/gito/?gvas=lilac"></a>
                    <a class="item-color lime_green" href="//gaviaswp.com/drupal/gito/?gvas=lime_green"></a>
                    <a class="item-color orange" href="//gaviaswp.com/drupal/gito/?gvas=orange"></a>
                    <a class="item-color pink" href="//gaviaswp.com/drupal/gito/?gvas=pink"></a>
                    <a class="item-color purple" href="//gaviaswp.com/drupal/gito/?gvas=purple"></a>
                    <a class="item-color red" href="//gaviaswp.com/drupal/gito/?gvas=red"></a>
                    <a class="item-color turquoise" href="//gaviaswp.com/drupal/gito/?gvas=turquoise"></a>
                    <a class="item-color turquoise2" href="//gaviaswp.com/drupal/gito/?gvas=turquoise2"></a>
                    <a class="item-color violet_red" href="//gaviaswp.com/drupal/gito/?gvas=violet_red"></a>
                    <a class="item-color violet_red2" href="//gaviaswp.com/drupal/gito/?gvas=violet_red2"></a>
                    <a class="item-color yellow" href="//gaviaswp.com/drupal/gito/?gvas=yellow"></a>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="panel-skins-content">
                <div class="title">Body layout</div>
                <div class="text-center">
                    <a class="layout" data-layout="boxed">Boxed</a>
                    <a class="layout" data-layout="wide">Wide</a>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/fullcalendar/index.global.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
