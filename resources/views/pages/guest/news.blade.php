@extends('layout.master3')

@section('title')
    <title>MIIRI| News</title>
@endsection

@push('plugin-styles')

@endpush

@section('content')
    <div class="breadcrumbs">
        <div>

            <div class="breadcrumb-content-inner">
                <div class="gva-breadcrumb-content">
                    <div id="block-gavias-gito-breadcrumbs"
                         class="text-white block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                        <div class="breadcrumb-style gva-parallax-background"
                             style="background-color: #CEF0EA;background-image: url({{asset('assets/images/bg-team.jpg')}});background-position: center center;background-repeat: no-repeat;">
                            <div class="container">
                                <div class="breadcrumb-content-main">
                                    <h2 class="page-title">News </h2>


                                    <div class>
                                        <div class="content block-content">
                                            <div class="breadcrumb-links">
                                                <div class="content-inner">
                                                    <nav class="breadcrumb " role="navigation" aria-labelledby="system-breadcrumb">
                                                        <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gva-parallax-inner skrollable skrollable-between" data-bottom-top="top: -80%;"
                                 data-top-bottom="top: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div id="content" class="content content-full">
        <div class="container-full">
            <div class="content-main-inner">
                <div>
                    <div class="main-content-inner">

                        <div class="content-main">
                            <div>
                                <div id="block-gavias-gito-mainpagecontent"
                                     class="block block-system block-system-main-block no-title">


                                    <div class="content block-content">
                                        <!-- Start Display article for detail page -->

                                        <article data-history-node-id="106" role="article" typeof="schema:WebPage"
                                                 class="node node--type-page node--view-mode-full">
                                            <header>
                                                <div class="container">
                                                    <div class="widget gsc-heading align-left style-1 padding-bottom-20">
                                                        <h2 class="node__title title">
                                    <span><span property="schema:name">News</span>
                                    </span><span class="heading-line"></span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </header>
                                            <div class="node__content clearfix">

                                                <div
                                                    class="field field--name-field-block-builder field--type-blockbuilder field--label-hidden field__item">
                                                    <div class="gavias-blockbuilder-content">


                                                    </div>
                                                </div>

                                            </div>
                                    </div>

                                    <div class="gbb-row-wrapper">
                                        <div class="gbb-row">
                                            <div class="bb-inner default">
                                                <div class="bb-container container">
                                                    <div class="row">
                                                        <div class="row-wrapper clearfix">
                                                            <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="column-inner">
                                                                    <div class="column-content-inner">
                                                                        <div class="widget gsc-heading align-center style-1 text-light">
                                                                            <div class="sub-title"><span></span></div>
                                                                            <h2 class="title"><span style="color: black;">Latest News</span></h2>
                                                                            <div class="title-desc">
                                                                                <p></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
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
                                                                        <div class="gsc-tab-views block widget gsc-tabs-views-ajax  style-1">
                                                                            <div class="block-content">
                                                                                <div class="list-links-tabs clearfix">

                                                                                </div>
                                                                                <div class="tabs-container clearfix">
                                                                                    <div class="ajax-loading"></div>
                                                                                    <div class="tab-content tab-content-view">
                                                                                        <div data-loaded="true" data-view="menu_food-----block_6"
                                                                                             class="tab-pane clearfix fade in active" id="tab-item-llb741">
                                                                                            <div class="views-element-container">
                                                                                                <div
                                                                                                    class="menu-food-2 gva-view js-view-dom-id-fa5c738e8cf7099d6dd9dd6e1079853d5773a059cc5360241fdf22a86b7c3e78">








                                                                                                    <div class="gva-view-grid">


                                                                                                        <div
                                                                                                            class="gva-view-grid-inner lg-block-grid-3 md-block-grid-3 sm-block-grid-2 xs-block-grid-2">

                                                                                                            @foreach($news as $_news)
                                                                                                            <div class="item-columns">
                                                                                                                <div>
                                                                                                                    <!-- Start Display article for teaser page -->

                                                                                                                    <div class="menu-food-block teaser-2">

                                                                                                                        <div class="block-content">
                                                                                                                            <div class="image">
                                                                                                                                <div
                                                                                                                                    class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                    <img
                                                                                                                                        src="{{asset($_news->image)}}"
                                                                                                                                        alt loading="lazy" typeof="foaf:Image">


                                                                                                                                </div>

                                                                                                                                <div class="contact

                          -link-inner">
                                                                                                                                    <a class="use-ajax contact

                          -link" data-dialog-options="{" width":600,"dialogClass":"webform-modal"}"
                                                                                                                                    data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                    -menu-food?title=Peach%20French%20Toast">
                                                                                                                                    <i class="gv-icon-226"></i> 
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="content-inner">
                                                                                                                                <a href="{{route('news.view',['slug'=>$_news->slug])}}">
                                                                                                                                    <div class="title"><span>{{$_news->title}}</span>
                                                                                                                                    </div>
                                                                                                                                </a>

                                                                                                                                <div class="sub-menu-food">
                                                                                                                                    <div
                                                                                                                                        class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                        <p>{{\Illuminate\Support\Str::limit(strip_tags($_news->body), 300)}}</p>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="menu-food-price">{{date("d M Y",$_news->date)}}</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            @endforeach

                                                                                                            <div data-loaded="false" data-view="menu_food-----block_7"
                                                                                                                 class="tab-pane clearfix fade in " id="tab-item-llb742">
                                                                                                            </div>
                                                                                                            <div data-loaded="false" data-view="menu_food-----block_8"
                                                                                                                 class="tab-pane clearfix fade in " id="tab-item-llb743">
                                                                                                            </div>
                                                                                                            <div data-loaded="false" data-view="menu_food-----block_9"
                                                                                                                 class="tab-pane clearfix fade in " id="tab-item-llb744">
                                                                                                            </div>
                                                                                                            <div data-loaded="false" data-view="menu_food-----block_10"
                                                                                                                 class="tab-pane clearfix fade in " id="tab-item-llb745">
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
                                                    {{--    <div class="gbb-row-wrapper">
                                                            <div class=" gbb-row gva-parallax-background  bg-size-cover"
                                                                 style="background-image:url(&#x27;images/bg-6.jpg&#x27;); background-repeat:no-repeat; background-position:center top">
                                                                <div class="bb-inner default">
                                                                    <div class="bb-container container">
                                                                        <div class="row">
                                                                            <div class="row-wrapper clearfix">
                                                                                <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="column-inner  bg-size-cover ">
                                                                                        <div class="column-content-inner">
                                                                                            <div class="widget gsc-heading  align-center style-1 text-light ">
                                                                                                <div class="sub-title"><span></span></div>
                                                                                                <h2 class="title"><span>Events</span></h2>
                                                                                                <div class="title-desc">
                                                                                                    <p< /p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearfix"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="background-repeat: no-repeat;background-position:center top;"
                                                                     class="gva-parallax-inner skrollable skrollable-between bg-size-cover"
                                                                     data-bottom-top="top: -68%;" data-top-bottom="top: 0%;"></div>
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
                                                                                            <div class="gsc-tab-views ">
                                                                                                <div class="clearfix text-center">
                                                                                                    <ul class="nav nav-tabs">
                                                                                                        <li class="active"><a data-toggle="tab"
                                                                                                                              href="#tab-item-rr34f1">Recent Events</a></li>


                                                                                                        <li class><a data-toggle="tab"
                                                                                                                     href="#tab-item-rr34f5">Upcoming Events</a></li>

                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="tab-content">
                                                                                                    <div class="tab-pane fade in active" id="tab-item-rr34f1">
                                                                                                        <div class="views-element-container">
                                                                                                            <div
                                                                                                                class="menu-food-1 gva-view js-view-dom-id-4b37b28fcdd9ccda8db9e56e27d67e7d93c3045e74aea776a745477cd46c635e">











                                                                                                                <div class="views-view-grid horizontal cols-2 clearfix">

                                                                                                                    <div class="views-row row clearfix row-1">


                                                                                                                        <div
                                                                                                                            class="views-col col-1 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/courses.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Wild%20Ginger">
                                                                                                                                            <i class="gv-icon-226"></i>  contact


                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>MUST HOST SHORT
                                                                              COURSES</span>
                                                                                                                                            <div class="menu-food-price">11 August 2023
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p>Scholars under the Innovation Scholar
                                                                                                                                                    Programme (ISP) run by MUST, LUANAR and
                                                                                                                                                    Michigan State University are from
                                                                                                                                                    Tuesday, March 19, 2019 holding their
                                                                                                                                                    second workshop.</p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="views-col col-2 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/weather.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Oatmeal%20Cookie">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>MIIRI HOSTS A WEATHER
                                                                              AWARENESS HUB...</span>
                                                                                                                                            <div class="menu-food-price">11 March 2023
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p>weetyuionbvcxcvbnm,</p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>

                                                                                                                    </div>



                                                                                                                    <div class="views-row row clearfix row-2">


                                                                                                                        <div
                                                                                                                            class="views-col col-1 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/workshop.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Pork%20Chops%20Yum-Yum">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>MUST HOST SECOND ISP
                                                                              WORKSHOP</span>
                                                                                                                                            <div class="menu-food-price">07 July 2023
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p>Scholars under the Innovation Scholar
                                                                                                                                                    Programme (ISP) run by MUST, LUANAR and
                                                                                                                                                    Michigan State University are from
                                                                                                                                                    Tuesday, March 19, 2019 holding their
                                                                                                                                                    second workshop.</p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="views-col col-2 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/innovation1.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Costco%20Quinoa%20Salad">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>MIIRI HOSTS
                                                                              INNOVATION AWARDS</span>
                                                                                                                                            <div class="menu-food-price">1 June 2023
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p>local ghhjjjjkmbbsgststhyhgsfsgsgsg</p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>

                                                                                                                    </div>



                                                                                                                    <div class="views-row row clearfix row-3">


                                                                                                                        <div
                                                                                                                            class="views-col col-1 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/golf.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Quick%20Appetizers">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>THE VICE CHANCERLORS
                                                                              GOLF TOURNAMENT </span>
                                                                                                                                            <div class="menu-food-price">28 August 2022
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                ghjklzxcvbnm,.fghjklwertyuioasdfghjklzxcvbnm,asdfghjkqwertyuj
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="views-col col-2 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/scholar.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Finger%20Food%20Recipes">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>INNOVATION SCHOLAR
                                                                              AWARDS</span>
                                                                                                                                            <div class="menu-food-price">01 May 2022
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p>
                                                                                                                                                    ewrwttwywuwuioasdfghjklzxcvbnm,asdfghjasdfghj
                                                                                                                                                </p>
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
                                                                                                    <div class="tab-pane fade in " id="tab-item-rr34f2">
                                                                                                        <div class="views-element-container">
                                                                                                            <div
                                                                                                                class="menu-food-1 gva-view js-view-dom-id-0bb377e07e49327f5010882a46ce6f9e5bcd2cc7fa2cbd66dc6b2ecf24ebc2ca">











                                                                                                                <div class="views-view-grid horizontal cols-2 clearfix">

                                                                                                                    <div class="views-row row clearfix row-1">


                                                                                                                        <div
                                                                                                                            class="views-col col-1 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->



                                                                                                                            <!-- Start Display article for teaser page -->


                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/menu-9.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Wild%20Ginger">
                                                                                                                                            <i class="gv-icon-226"></i>  contact


                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>MUST HOST SECOND ISP
                                                                              WORKSHOP </span>

                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p></p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>

                                                                                                                    </div>



                                                                                                                    <div class="views-row row clearfix row-2">


                                                                                                                        <div
                                                                                                                            class="views-col col-1 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/menu-8_1.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Great%20Meatloaf">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>Must ghj</span>
                                                                                                                                            <div class="menu-food-price">11 August 2023
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p></p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="views-col col-2 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/menu-5.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Quick%20Appetizers">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>MIIRI ghh</span>
                                                                                                                                            <div class="menu-food-price">11 August 2023
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>

                                                                                                                    </div>



                                                                                                                    <div class="views-row row clearfix row-3">


                                                                                                                        <div
                                                                                                                            class="views-col col-1 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                            <div class="menu-food-block teaser-1">

                                                                                                                                <div class="block-content">
                                                                                                                                    <div class="image">

                                                                                                                                        <div
                                                                                                                                            class="field field--name-field-menu-image field--type-image field--label-hidden field__item">
                                                                                                                                            <img src="images/menu-4_1.jpg" alt
                                                                                                                                                 loading="lazy" typeof="foaf:Image">


                                                                                                                                        </div>

                                                                                                                                        <div class="contact

                          -link-inner">
                                                                                                                                            <a class="use-ajax contact

                          -link" data-dialog-options="{" width":800,"dialogClass":"webform-modal"}"
                                                                                                                                            data-dialog-type="modal" href="http://localhost/private/gito/form/contact

                                                                                                                                            -menu-food?title=Top%20Potato%20Recipes">
                                                                                                                                            <i class="gv-icon-226"></i>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="content-inner">
                                                                                                                                        <div class="title"><span>Innovation scholar
                                                                              fgggh</span>
                                                                                                                                            <div class="menu-food-price">11 february
                                                                                                                                                2022</div>
                                                                                                                                        </div>

                                                                                                                                        <div class="sub-menu-food">
                                                                                                                                            <div
                                                                                                                                                class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                                                                <p>Sesambwejgiwefuhw dvbshfewio
                                                                                                                                                    cvcbjdsbvbsvuwv cbsusu </p>
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
                                                        </div>--}}
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
