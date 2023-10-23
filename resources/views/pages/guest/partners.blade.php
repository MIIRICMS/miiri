@extends('layout.master3')

@section('title')
    <title>MIIRI| Partners</title>
@endsection

@push('plugin-styles')
    <style>
        /* Centered container styles */
        .centered-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
@endpush

@section('content')
    <div class="breadcrumbs">
        <div>

            <div class="breadcrumb-content-inner">
                <div class="gva-breadcrumb-content">
                    <div id="block-gavias-gito-breadcrumbs" class="text-white block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                        <div class="breadcrumb-style gva-parallax-background" style="background-color: #CEF0EA;background-image: url(&#x27;assets/images/partners_bg.png&#x27;);background-position: center center;background-repeat: no-repeat;">
                            <div class="container">
                                <div class="breadcrumb-content-main">
                                    <h2 class="page-title">{{$contents->title1}} </h2>


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
                            <div class="gva-parallax-inner skrollable skrollable-between" data-bottom-top="top: -80%;" data-top-bottom="top: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="gbb-row-wrapper">
        <div class=" gbb-row bg-size-default" style="padding-bottom:10px">
            <div class="bb-inner default">
                <div class="bb-container container">
                    <div class="row">
                        <div class="row-wrapper clearfix">
                            <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="column-inner  bg-size-cover ">
                                    <div class="column-content-inner">
                                        <div class="gsc-anime clearfix  style-2 center font-style-2 color-theme">


                                            <div class="text-anime">
                                                <div class="content-inner">

                                                    <h2 class="ml9">
                                <span class="text-wrapper">
                                  <span class="letters text-theme" style="font-size: 25px">{{$contents->title2}}</span>
                                </span>
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="main-content">
                                                <div class="content-inner" style="text-align: justify;">
                                                    {!! $contents->description2 !!}
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
                                        <div class="gsc-tab-views block widget gsc-tabs-views-ajax  style-1">
                                            <div class="block-content">

                                                <div class="tabs-container clearfix">
                                                    <div class="ajax-loading"></div>
                                                    <div class="tab-content tab-content-view">
                                                        <div data-loaded="true" data-view="menu_food-----block_6" class="tab-pane clearfix fade in active" id="tab-item-sd42a1">
                                                            <div class="views-element-container">
                                                                <div class="menu-food-2 gva-view js-view-dom-id-ea76ec35625855780b3d81d38f98c8a1379b3ec492fabaf19e306fb32fc7c737">


                                                                    <div class="gva-view-grid">


                                                                        <div class="gva-view-grid-inner lg-block-grid-3 md-block-grid-3 sm-block-grid-2 xs-block-grid-2">
                                                                            @foreach($contents->partners as $partner)
                                                                            <div class="item-columns">
                                                                                <div>
                                                                                    <!-- Start Display article for teaser page -->

                                                                                    <div class="menu-food-block teaser-2">

                                                                                        <div class="block-content">
                                                                                            <div class="image">
                                                                                                <div class="field field--name-field-menu-image field--type-image field--label-hidden field__item"> <img src="{{asset($partner->image)}}" alt loading="lazy" typeof="foaf:Image">


                                                                                                </div>


                                                                                            </div>
                                                                                            <div class="content-inner">
                                                                                                <div class="title"><span>{{$partner->name}}</span>
                                                                                                </div>

                                                                                                <div class="sub-menu-food">
                                                                                                    <div class="field field--name-field-menu-sub field--type-text-long field--label-hidden field__item">
                                                                                                        <p>{{$partner->description}}</p>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="menu-food-price">Read More</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            @endforeach

                                                                        </div>

                                                                    </div>








                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-loaded="false" data-view="menu_food-----block_7" class="tab-pane clearfix fade in " id="tab-item-sd42a2"></div>
                                                        <div data-loaded="false" data-view="menu_food-----block_8" class="tab-pane clearfix fade in " id="tab-item-sd42a3"></div>
                                                        <div data-loaded="false" data-view="menu_food-----block_9" class="tab-pane clearfix fade in " id="tab-item-sd42a4"></div>
                                                        <div data-loaded="false" data-view="menu_food-----block_10" class="tab-pane clearfix fade in " id="tab-item-sd42a5"></div>
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
