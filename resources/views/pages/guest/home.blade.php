@extends('layout.master3')

@section('title')
    <title>MIIRI| Home Page</title>
@endsection

@push('plugin-styles')

@endpush

@section('content')
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
                                                                    <a href="#" class="opportunity-button">Innovation
                                                                        Challenges</a>
                                                                    <a href="#" class="opportunity-button">Internships</a>
                                                                    <a href="#" class="opportunity-button">Vacancy</a>
                                                                    <a href="#" class="opportunity-button">Donations</a>
                                                                </div>
                                                            </section>


                                                            <div class="gbb-row-wrapper">

                                                                <div class=" gbb-row gva-parallax-background  bg-size-default"
                                                                     style="padding-bottom:30px; background-image:url({{asset($page->image_3)}}); background-repeat:repeat; background-position:center bottom;">
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

                                                                                                                    @foreach($programs as $program)
                                                                                                                        <div class="item">
                                                                                                                            <div>
                                                                                                                                <!-- Start Display article for teaser page -->

                                                                                                                                <div class="service-block grid">
                                                                                                                                    <div class="service-images lightGallery">
                                                                                                                                        <div>
                                                                                                                                            <div class="image-item">
                                                                                                                                                <a href="#"
                                                                                                                                                   class="zoomGallery" title
                                                                                                                                                   data-rel="lightGallery">
                                                                                                                                                    <span class="icon-expand"><i class="fa fa-expand"></i></span>
                                                                                                                                                    <img src="{{asset($program->image)}}" class="hidden" alt>
                                                                                                                                                </a>
                                                                                                                                                <a href="#" hreflang="en"><img src="{{asset($program->image)}}" alt loading="lazy" typeof="foaf:Image"></a>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                    </div>
                                                                                                                                    <div class="service-content">
                                                                                                                                        <div class="content-inner">
                                                                                                                                            <h3 class="title"><a href="#" rel="bookmark"><span>{{$program->title}}</span></a></h3>
                                                                                                                                            <div class="desc">
                                                                                                                                                <div
                                                                                                                                                    class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                                                                                    <p>
                                                                                                                                                        {!! $program->body !!}
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <!-- End Display article for teaser page -->

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    @endforeach

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
                                                                        <li><a href="#" data-panel="#tab-item-5cu962"
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


                                                                                                                    @foreach($news as $_news)
                                                                                                                        <div class="item">
                                                                                                                            <div>
                                                                                                                                <div class="views-field views-field-nothing">
                                                                                                                                    <div class="field-content">
                                                                                                                                        <div class="post-block">
                                                                                                                                            <div class="post-image"> <a
                                                                                                                                                    href="#"
                                                                                                                                                    hreflang="en"><img
                                                                                                                                                        src="{{asset($_news->image)}}" alt loading="lazy" typeof="Image">

                                                                                                                                                </a>
                                                                                                                                            </div>
                                                                                                                                            <div class="post-content">
                                                                                                                                                <div class="post-categories"><a
                                                                                                                                                        href="#"
                                                                                                                                                        hreflang="en">{{$_news->category->name}}</a> </div>
                                                                                                                                                <div class="post-title"> <a
                                                                                                                                                        href="#"
                                                                                                                                                        hreflang="en">{{$_news->title}}</a> </div>
                                                                                                                                                <div class="post-meta"><span
                                                                                                                                                        class="post-created">{{date("d M Y",$_news->date)}}
                                                                              </span> - <span
                                                                                                                                                        class="post-comment"></span></div>
                                                                                                                                                <div class="post-body">
                                                                                                                                                    {!! $_news->body !!}

                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    @endforeach
                                                                                                                    {{--  <div class="item">
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
                                                                                                                      </div>--}}

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

                                                                                                                        @foreach($albums as $album)
                                                                                                                            @foreach(json_decode($album->images) as $image)
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
                                                                                                                                                            <a href="#"
                                                                                                                                                               class="zoomGallery" title
                                                                                                                                                               data-rel="lightGallery">
                                                                                      <span class="icon-expand"><i
                                                                                              class="fa fa-expand"></i></span>
                                                                                                                                                                <img src="{{asset($image)}}" alt
                                                                                                                                                                     class="hidden">
                                                                                                                                                            </a>
                                                                                                                                                            <img src="{{asset($image)}}" alt
                                                                                                                                                                 loading="lazy" typeof="foaf:Image">



                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </article>
                                                                                                                                        <!-- End Display article for teaser page -->
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            @endforeach
                                                                                                                        @endforeach
                                                                                                                        {{--                                                                                                                                   {{-- <div class="item-columns">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- Start Display article for teaser page -->--}}{{--

                                                                                                                        --}}{{--                                                                                                                                            <article data-history-node-id="49" role="article"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                     about="/drupal/gito/node/49">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                <div--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    class="gallery-post text-center margin-bottom-30">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    <div class="images lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                            <div class="image-item">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-11.jpg"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   class="zoomGallery" title--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   data-rel="lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                  <span class="icon-expand"><i--}}{{--
                                                                                                                        --}}{{--                                                                                          class="fa fa-expand"></i></span>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                    <img src="{{asset('assets/images/homegallery4.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                         class="hidden">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                </a>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <img src="{{asset('assets/images/homegallery4.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                     loading="lazy" typeof="foaf:Image">--}}{{--



                                                                                                                        --}}{{--                                                                                                                                                            </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        </div>--}}{{--

                                                                                                                        --}}{{--                                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            </article>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- End Display article for teaser page -->--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    <div class="item-columns">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- Start Display article for teaser page -->--}}{{--

                                                                                                                        --}}{{--                                                                                                                                            <article data-history-node-id="48" role="article"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                     about="/drupal/gito/node/48">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                <div--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    class="gallery-post text-center margin-bottom-30">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    <div class="images lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                            <div class="image-item">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-10.jpg"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   class="zoomGallery" title--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   data-rel="lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                  <span class="icon-expand"><i--}}{{--
                                                                                                                        --}}{{--                                                                                          class="fa fa-expand"></i></span>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                    <img src="{{asset('assets/images/gallery3.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                         class="hidden">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                </a>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <img src="{{asset('assets/images/homegallery3.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                     loading="lazy" typeof="foaf:Image">--}}{{--



                                                                                                                        --}}{{--                                                                                                                                                            </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        </div>--}}{{--

                                                                                                                        --}}{{--                                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            </article>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- End Display article for teaser page -->--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    <div class="item-columns">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- Start Display article for teaser page -->--}}{{--

                                                                                                                        --}}{{--                                                                                                                                            <article data-history-node-id="39" role="article"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                     about="/drupal/gito/node/39">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                <div--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    class="gallery-post text-center margin-bottom-30">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    <div class="images lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                            <div class="image-item">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-1.jpg"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   class="zoomGallery" title--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   data-rel="lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                  <span class="icon-expand"><i--}}{{--
                                                                                                                        --}}{{--                                                                                          class="fa fa-expand"></i></span>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                    <img src="{{asset('assets/images/homegallery2.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                         class="hidden">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                </a>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <img src="{{asset('assets/images/homegallery2.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                     loading="lazy" typeof="foaf:Image">--}}{{--



                                                                                                                        --}}{{--                                                                                                                                                            </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        </div>--}}{{--

                                                                                                                        --}}{{--                                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            </article>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- End Display article for teaser page -->--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    <div class="item-columns">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- Start Display article for teaser page -->--}}{{--

                                                                                                                        --}}{{--                                                                                                                                            <article data-history-node-id="47" role="article"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                     about="/drupal/gito/node/47">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                <div--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    class="gallery-post text-center margin-bottom-30">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    <div class="images lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                            <div class="image-item">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-9.jpg"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   class="zoomGallery" title--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   data-rel="lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                  <span class="icon-expand"><i--}}{{--
                                                                                                                        --}}{{--                                                                                          class="fa fa-expand"></i></span>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                    <img src="{{asset('assets/images/gallery1.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                         class="hidden">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                </a>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <img src="{{asset('assets/images/homegallery1.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                     loading="lazy" typeof="foaf:Image">--}}{{--



                                                                                                                        --}}{{--                                                                                                                                                            </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        </div>--}}{{--

                                                                                                                        --}}{{--                                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            </article>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- End Display article for teaser page -->--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    <div class="item-columns">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- Start Display article for teaser page -->--}}{{--

                                                                                                                        --}}{{--                                                                                                                                            <article data-history-node-id="46" role="article"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                     about="/drupal/gito/node/46">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                <div--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    class="gallery-post text-center margin-bottom-30">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                    <div class="images lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        <div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                            <div class="image-item">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <a href="/drupal/gito/sites/default/files/gallery/gallery-8.jpg"--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   class="zoomGallery" title--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                   data-rel="lightGallery">--}}{{--
                                                                                                                        --}}{{--                                                                                  <span class="icon-expand"><i--}}{{--
                                                                                                                        --}}{{--                                                                                          class="fa fa-expand"></i></span>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                    <img src="{{asset('assets/images/gallery5.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                         class="hidden">--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                </a>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                <img src="{{asset('assets/images/homegallery5.jpg')}}" alt--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                                     loading="lazy" typeof="foaf:Image">--}}{{--



                                                                                                                        --}}{{--                                                                                                                                                            </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                        </div>--}}{{--

                                                                                                                        --}}{{--                                                                                                                                                    </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                                </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            </article>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                            <!-- End Display article for teaser page -->--}}{{--
                                                                                                                        --}}{{--                                                                                                                                        </div>--}}{{--
                                                                                                                        --}}{{--                                                                                                                                    </div>--}}
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
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/fullcalendar/index.global.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
