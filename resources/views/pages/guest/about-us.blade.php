@extends('layout.master3')

@section('title')
    <title>MIIRI| About Us</title>
@endsection

@push('plugin-styles')

@endpush

@section('content')
    <div id="content" class="content content-full">
        <div class="container-full">
            <div class="content-main-inner">
                <div>
                    <div class="main-content-inner">

                        <div class="content-main">
                            <div>
                                <div id="block-gavias-gito-mainpagecontent" class="block block-system block-system-main-block no-title">


                                    <div class="content block-content">
                                        <!-- Start Display article for detail page -->

                                        <article data-history-node-id="4" role="article" typeof="schema:WebPage" class="node node--type-page node--view-mode-full">
                                            <header>
                                                <div class="container">
                                                    <div class="widget gsc-heading align-left style-1 padding-bottom-20">
                                                        <h2 class="node__title title">
          <span><span property="schema:name">Publications</span>
</span><span class="heading-line"></span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </header>

                                            <div class="node__content clearfix">

                                                <div class="field field--name-field-block-builder field--type-blockbuilder field--label-hidden field__item"><div class="gavias-blockbuilder-content">

                                                        <div class="gavias-blockbuilder-content"><div class="gbb-row-wrapper">
                                                                <div class=" gbb-row bg-size-cover" style>
                                                                    <div class="bb-inner remove_margin remove_padding remove_padding_col">
                                                                        <div class="bb-container container-fw">
                                                                            <div class="row">
                                                                                <div class="row-wrapper clearfix">
                                                                                    <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="column-inner  bg-size-cover ">
                                                                                            <div class="column-content-inner">
                                                                                                <div class="widget gsc-block-drupal title-align-left  hidden-title-on remove-margin-on text-dark"><div id="block-gavias-gito-gaviassliderlayerslider1" class="block block-gavias-sliderlayer block-gavias-sliderlayer-blockgavias-sliderlayer-block____1 no-title">


                                                                                                        <div class="content block-content">
                                                                                                            <div class="gavias_sliderlayer rev_slider_wrapper fullwidthbanner-container" style="height:900px">
                                                                                                                <div id="3d7ld" class="rev_slider fullwidthabanner" data-version="5.4.1">
                                                                                                                    <ul>
                                                                                                                        <li data-transition="random" data-easein="Power0.easeIn" data-easeout="Power1.easeOut" data-slotamount="7" data-kenburns="off" data-masterspeed="default" data-index="rs-1">
                                                                                                                            <img class="rev-slidebg" src="{{asset('assets/images/about1.png')}}" alt data-duration="300" data-bgparallax="8" data-scalestart="120" data-scaleend="100" data-kenburns="on" data-bgrepeat="no-repeat" style="background-color:#f2f2f2" data-bgfit="cover" data-bgposition="center top"><div class="tp-caption text slide-style-1 " data-x="center" data-y="325" data-start="1000.00" data-transform_idle="o:1;" data-transform_in="x:inherit;y:inherit;z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:4">
                                                                                                                                {{$contents->title1}}</div><h4 class="tp-caption text slide-style-2" data-x="center" data-y="415" data-start="1500.00" data-transform_idle="o:1;" data-transform_in="x:inherit;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:3; font-size: 30px;">
                                                                                                                                <b>{!! $contents->description1 !!}</b>
                                                                                                                            </h4>
                                                                                                                        </li>




                                                                                                                    </ul>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <script type="text/javascript">

                                                                                                                jQuery(document).ready(function($){
                                                                                                                    jQuery('#3d7ld').show().revolution({"delay":9000,"gridheight":900,"gridwidth":1170,"minHeight":0,"autoHeight":"off","sliderType":"standard","sliderLayout":"auto","fullScreenAutoWidth":"on","fullScreenAlignForce":"off","fullScreenOffsetContainer":"","fullScreenOffset":"0","hideCaptionAtLimit":0,"hideAllCaptionAtLimit":0,"hideSliderAtLimit":0,"disableProgressBar":"off","stopAtSlide":-1,"stopAfterLoops":-1,"shadow":"0","dottedOverlay":"none","startDelay":0,"lazyType":"none","spinner":"spinner0","shuffle":"off","debugMode":0,"parallax":{"type":"mouse","origo":"slidercenter","speed":2000,"levels":[4,5,6,7,12,16,10,50,46,47,48,49,50,55]},"navigation":{"onHoverStop":"on","touch":{"touchenabled":"on"},"bullets":{"enable":true,"v_align":"bottom","h_align":"center","v_offset":20,"space":10,"tmp":""}}});
                                                                                                                });

                                                                                                            </script>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                  </div>
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


                                            <div class="gbb-row gva-parallax-background bg-size-cover" style="padding-top:30px; padding-bottom:30px; background-image:url({{asset('assets/images/about_us.png')}}); background-repeat:no-repeat; background-position:center bottom">

                                                <div class="bb-inner default">
                                                    <div class="gbb-row-wrapper">
                                                        <div class="custom-row-wrapper clearfix">
                                                            <div class="gsc-column col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                                <div class="column-inner bg-size-cover">
                                                                    <div class="custom-column-content">
                                                                        <div class="widget gsc-call-to-action button-bottom text-dark">
                                                                            <div class="custom-content text-center">
                                                                                <div class="text-anime">
                                                                                    <div class="content-inner">
                                                                                        <h2 class="title">
                                                                                            <span>{{$contents->title2}}</span>
                                                                                        </h2>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bb-container container">
                                                        <div class="row">
                                                            <div class="row-wrapper clearfix">
                                                                <!-- First Column (Image) -->
                                                                <div class="gsc-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="column-inner bg-size-cover">
                                                                        <div class="column-content-inner">
                                                                            <div class="widget gsc-video-box clearfix">
                                                                                <div class="video-inner">
                                                                                    <div class="image">
                                                                                        <!-- Replace the image source below with the correct image URL -->
                                                                                        <img src="{{asset('assets/images/bg-10.png')}}" alt="Your Image Alt Text">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Second Column (Paragraph) -->
                                                                <div class="gsc-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="column-inner bg-size-cover">
                                                                        <div class="column-content-inner">
                                                                            <div class="custom-description align-right">
                                                                                <p style="font-size: 20px; margin-top: 50px; text-align: center; font-weight: bold;">
                                                                                    {!! $contents->description2 !!}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Place your additional content here -->

                                                <style>
                                                    .custom-row {
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        padding-top: 30px;
                                                        padding-bottom: 30px;
                                                    }

                                                    .custom-row-wrapper {
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                    }

                                                    .custom-column-content {
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                    }

                                                    .custom-content {
                                                        text-align: center;
                                                    }

                                                    .custom-description {
                                                        text-align: left;
                                                        padding-left: 20px;
                                                        max-width: 600px;
                                                    }

                                                    .custom-image-box {
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                    }

                                                    .custom-image {
                                                        margin-top: 0px;
                                                        margin-left:20%;
                                                        margin-right: 0%;
                                                    }

                                                    .custom-image img {
                                                        max-width: 140%;
                                                    }


                                                    .new-image-style img {
                                                        width: 100%; /* Adjust the width as needed */
                                                        height: auto;
                                                        border-radius: 10px; /* Rounded corners */
                                                    }

                                                </style>






                                                <style>
                                                    .grey-background {
                                                        background-color: #fbfbfb;
                                                        padding: 35px;
                                                        display: flex;
                                                        justify-content: center; /* Center horizontally */
                                                        align-items: center; /* Center vertically */
                                                        text-align: justify; /* Justify the text */
                                                        margin-left: 150px;
                                                        margin-right: 150px;
                                                    }
                                                    .g-background {
                                                        backdrop-filter: blur(60px); /* Use blur instead of backdrop-filter */
                                                        border-radius: 40px;
                                                    }
                                                    .custom-paragraph {
                                                        font-weight: bold;
                                                        font-size: 24px;
                                                        text-align: center;
                                                    }

                                                    /* Media Query for Mobile Responsiveness */
                                                    @media screen and (max-width: 768px) {
                                                        .grey-background {
                                                            padding: 20px; /* Reduce padding on smaller screens */
                                                            margin: 15px; /* Reduce margin on smaller screens */
                                                        }
                                                        .custom-paragraph {
                                                            font-size: 18px; /* Reduce font size on smaller screens */
                                                            margin-bottom: 10px; /* Reduce margin below paragraph on smaller screens */
                                                        }
                                                    }

                                                </style>

                                                <div class="node__content clearfix">
                                                    <div class="field field--name-field-block-builder field--type-blockbuilder field--label-hidden field__item">
                                                        <div class="gavias-blockbuilder-content">
                                                            <div class="gavias-blockbuilder-content">
                                                                <div class="gbb-row-wrapper">


                                                                    <div class="gbb-row bg-size-cover" style="background-image: url({{asset('assets/images/about-bg.png')}}); padding-top: 30px; padding-bottom: 30px">
                                                                        <div class="bb-inner default">
                                                                            <div class="bb-container container">
                                                                                <div class="">
                                                                                    <div class=" grey-background g-background">
                                                                                        <div class="desc text-center">
                                                                                            <div class="desc text-center">
                                                                                                <p class="custom-paragraph">{{$contents->title3}}</p>

                                                                                                <style>
                                                                                                    #shortDescription p,
                                                                                                    #longDescription p {
                                                                                                        text-align: justify;
                                                                                                    }
                                                                                                </style>

                                                                                                <div id="shortDescription">
                                                                                                   {!! $contents->description3 !!}
                                                                                                </div>
                                                                                                <div id="longDescription" style="display: none;">
                                                                                                    {!! $contents->description3 !!}
                                                                                                </div>
                                                                                                <div class="button-action">
                                                                                                    <a  class="btn-theme" id="readMoreBtn">Read More</a>
                                                                                                    <a  class="btn-theme" style="display: none;" id="readLessBtn">Read Less</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <script>
                                                                                            // JavaScript to toggle between short and long descriptions
                                                                                            document.getElementById('readMoreBtn').addEventListener('click', function() {
                                                                                                document.getElementById('shortDescription').style.display = 'none';
                                                                                                document.getElementById('longDescription').style.display = 'block';
                                                                                                document.getElementById('readMoreBtn').style.display = 'none';
                                                                                                document.getElementById('readLessBtn').style.display = 'block';
                                                                                            });

                                                                                            document.getElementById('readLessBtn').addEventListener('click', function() {
                                                                                                document.getElementById('shortDescription').style.display = 'block';
                                                                                                document.getElementById('longDescription').style.display = 'none';
                                                                                                document.getElementById('readMoreBtn').style.display = 'block';
                                                                                                document.getElementById('readLessBtn').style.display = 'none';
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

                                                <div style="background-repeat: no-repeat;background-position:center center;" class="gva-parallax-inner skrollable skrollable-between bg-size-cover" data-bottom-top="top: -68%;" data-top-bottom="top: 0%;"></div>
                                            </div>
                                    </div>
                                    <div class="custom-row-wrapper clearfix">
                                        <div class="gsc-column col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                            <div class="column-inner bg-size-cover">
                                                <div class="custom-column-content">
                                                    <div class="widget gsc-call-to-action button-bottom text-dark" >
                                                        <div class="custom-content text-center">
                                                            <div class="text-anime">
                                                                <div class="content-inner">
                                                                    <h2 class="title ml2">
                                                                        <span> Values </span>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <style>
                                        .left-column {
                                            text-align: left;
                                        }

                                        .center-column {
                                            text-align: center;
                                        }

                                        .right-column {
                                            text-align: right;
                                        }
                                    </style>

                                    <div class="gbb-row-wrapper">
                                        <div class="gbb-row gva-parallax-background bg-size-cover" style="background-image:url('images/values-bg.png'); background-repeat:no-repeat; background-position:center center">
                                            <div class="bb-inner default">
                                                <div class="bb-container container">
                                                    <div class="row">
                                                        <div class="row-wrapper clearfix">
                                                            <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12 left-column">
                                                                <div class="column-inner bg-size-cover">
                                                                    <div class="column-content-inner">
                                                                        <div class="widget milestone-block position-icon-top">
                                                                            <div class="milestone-text">
                                                                                <h4 style="color: #02b802;">VISION</h4></div>
                                                                            <p style="/*color: #f0f0f0;*/">{{$contents->values->vision}}</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12 center-column">
                                                                <div class="column-inner bg-size-cover">
                                                                    <div class="column-content-inner">
                                                                        <div class="widget milestone-block position-icon-top">
                                                                            <div class="milestone-text"></div>
                                                                            <h4 style="color: #02b802;">MISSION</h4>
                                                                            <p style="/*color: #f0f0f0;*/">{{$contents->values->mission}}</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12 right-column">
                                                                <div class="column-inner bg-size-cover">
                                                                    <div class="column-content-inner">
                                                                        <div class="widget milestone-block position-icon-top">
                                                                            <div class="milestone-text">
                                                                                <h4 style="color: #02b802;">KEY PRINCIPLES</h4> </div>
                                                                            <p style="/*color: #f0f0f0;*/">{{$contents->values->key_principles}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="background-repeat: no-repeat;background-position:center center;" class="gva-parallax-inner skrollable skrollable-between bg-size-cover" data-bottom-top="top: -68%;" data-top-bottom="top: 0%;"></div>
                                        </div>
                                    </div>

                                    <div class="custom-row-wrapper clearfix">
                                        <div class="gsc-column col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                            <div class="column-inner bg-size-cover">
                                                <div class="custom-column-content">
                                                    <div class="widget gsc-call-to-action button-bottom text-dark" >
                                                        <div class="custom-content text-center">
                                                            <div class="text-anime">
                                                                <div class="content-inner">
                                                                    <h2 class="title ml2">
                                                                        <span>People &amp; Society</span>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="gbb-row-wrapper">
                                        <div class=" gbb-row gva-parallax-background  bg-size-cover" style="background-image:url(&#x27;images/values-bg.png&#x27;); background-repeat:no-repeat; background-position:center center">
                                            <div class="bb-inner default">
                                                <div class="bb-container container">
                                                    <div class="row">
                                                        <div class="row-wrapper clearfix">
                                                            <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="column-inner  bg-size-cover ">
                                                                    <div class="column-content-inner">
                                                                        <div class="gsc-anime clearfix  style-4 center font-style-1 color-white">
                                                                        </div>

                                                                        <div><div class="widget block gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off"><div class="views-element-container"><div class="events-2 gva-view js-view-dom-id-9f4adcfb7bdee42ef6cb981d256733c66aae5a383403afafd9d6285a7e0725a4">








                                                                                        <div class="owl-carousel init-carousel-owl" data-items="3" data-items_lg="3" data-items_md="3" data-items_sm="2" data-items_xs="2" data-loop="1" data-speed="200" data-auto_play="0" data-auto_play_speed="1000" data-auto_play_timeout="3000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">

                                                                                            @foreach($contents->people_and_society as $item)
                                                                                            <div class="item">
                                                                                                <div>
                                                                                                    <!-- Start Display article for teaser page -->

                                                                                                    <div data-history-node-id="95" role="article"  class="node node--type-event node--promoted node--view-mode-teaser clearfix">
                                                                                                        <div class="event-block">
                                                                                                            {{--<div class="event-image">
                                                                                                                <div class="field field--name-field-event-image field--type-image field--label-hidden field__item">
                                                                                                                    <a href="#" hreflang="en">
                                                                                                                        <img src="{{asset('assets/images/homebg.png')}}" alt loading="lazy" typeof="foaf:Image">
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>--}}
                                                                                                            <div class="content-inner">
                                                                                                                <div class="event-content">
                                                                                                                    <h3 class="post-title"><a href="#" rel="bookmark"><span>{{$item->title}}</span>
                                                                                                                        </a></h3>

                                                                                                                    <div class="event-line"></div>
                                                                                                                    <div class="event-description">

                                                                                                                        <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item"><p>{{$item->body}}</p></div>

                                                                                                                    </div>
                                                                                                                    <div class="event-time">
                                                                                                                        <div class="gva-countdown clearfix" data-countdown="countdown" data-date="08-21-2018-08-00-00">
                                                                                                                        </div>
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
                                                                            </div></div>                  </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="background-repeat: no-repeat;background-position:center center;" class="gva-parallax-inner skrollable skrollable-between bg-size-cover" data-bottom-top="top: -68%;" data-top-bottom="top: 0%;"></div>
                                        </div>
                                    </div>



                                    <div class="gbb-row-wrapper">
                                        <div class="gbb-row bg-size-cover" style>
                                            <div class="bb-inner default">
                                                <div class="bb-container container">
                                                    <div class="row">
                                                        <div class="row-wrapper clearfix">
                                                            <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="column-inner  bg-size-cover">
                                                                    <div class="column-content-inner text-center">

                                                                        <div class="widget gsc-heading align-center style-1 text-dark button-action">
                                                                            <h2 class="title"><span class="meet-team">Meet Our Team</span></h2>
                                                                        </div>

                                                                        <div class="button-action">
                                                                            <a href="team.php" class="btn-theme">Team</a>
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
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/fullcalendar/index.global.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
