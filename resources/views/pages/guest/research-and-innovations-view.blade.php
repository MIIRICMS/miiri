@extends('layout.master3')

@section('title')
    <title>MIIRI| {{$research->title}}</title>
@endsection

@push('plugin-styles')
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        section {
            margin: 100px 1px;
        }

        /* First Section Styles */
        .first-section {
            position: relative;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: left;
        }

        .researcher-heading {


            position: absolute;
            top: 10px;
            left: 10px;
            margin-bottom: 10px;
        }

        .rectangle {
            border: 2px solid #00a651;
            border-radius: 10px;
            box-shadow: 4px 4px 6px #888888;
            padding: 20px;
            text-align: center;
        }

        .research-title {
            color: #00a651;
        }

        /* Second Section Styles */
        .second-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .column {

            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        /* Third Section Styles */
        .third-section {
            background-color: #00a651;
            color: black;
            text-align: center;
            padding: 0;

        }

        .scrolling-text {
            animation: scroll 20s linear infinite;
            font-size: 50px;
            color: #fff;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Media Queries for Mobile Responsiveness */
        @media (max-width: 768px) {
            .first-section {
                padding: 10px;
            }

            .rectangle {
                padding: 10px;
            }

            .column {
                flex-basis: calc(50% - 20px);
            }
        }
    </style>
@endpush

@section('content')
    <div class="breadcrumbs">
        <div>

            <div class="breadcrumb-content-inner">
                <div class="gva-breadcrumb-content">
                    <div id="block-gavias-gito-breadcrumbs"
                         class="text-white block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                        <div class="breadcrumb-style gva-parallax-background"
                             style="background-color: #CEF0EA;background-image: url({{asset($research->image)}});background-position: center center;background-repeat: no-repeat;">
                            <div class="container">
                                <div class="breadcrumb-content-main">
{{--                                    <h2 class="page-title">Team </h2>--}}


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
    <div>
        <div class="container">
            <div class="content-main-inner">
                <div class="row">
                    <div id="page-main-content" class="main-content col-xs-12 col-md-12 sb-r mx-auto">

                        <div class="main-content-inner">


                            <div class="content-main">
                                <div>
                                    <div
                                         class="block block-system block-system-main-block no-title">


                                        <div class="content block-content">
                                            <p>
                                                <!-- First Section -->
                                            <section class="first-section">

                                                <h2 class="researcher-heading">Lead Person: {{$research->first_name}} {{$research->last_name}}</h2><br /><br />

                                                <p>{{$research->position}}</p>

                                                <div class="rectangle">

                                                    <h2 class="research-title">{{$research->title}}</h2>
                                                    <p style="font-size: small;">Posted Date: {{date("d M Y",$research->date)}}</p>
                                                    <p style="text-align:left;"> {!! $research->description !!}</p>

                                                </div>

                                            </section>
                                            <section>
                                                <p>




                                            </section>


                                            <!-- Second Section -->

                                            <section class="second-section">
                                                <div class="column">
                                                    <img src="{{asset('assets/images/nyemba.webp')}}" alt="Description of the image" width="300" height="200" title="Image Title">
                                                    <h3>beans type of legumes</h3>
                                                </div>
                                                <div class="column">
                                                    <img src="{{asset('assets/images/zitheba.avif')}}" alt="Description of the image" width="300" height="200" title="Image Title">
                                                    <h3>zitheba type of legumes</h3>
                                                </div>
                                                <div class="column">
                                                    <img src="{{asset('assets/images/matumba.webp')}}" alt="Description of the image" width="300" height="200" title="Image Title">
                                                    <h3>bumber harvest of legumes</h3>
                                                </div>
                                            </section>

                                            <!-- Third Section -->
                                            <section class="third-section">


                                                <p class="scrolling-text">Partner with us</p>

                                            </section>
                                        </div>




                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Sidebar Left -->
        <!-- End Sidebar Left -->

    </div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/fullcalendar/index.global.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
