@extends('layout.master3')

@section('title')
    <title>MIIRI| Team</title>
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
                    <div id="block-gavias-gito-breadcrumbs"
                         class="text-white block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                        <div class="breadcrumb-style gva-parallax-background"
                             style="background-color: #CEF0EA;background-image: url({{asset('assets/images/bg-team.jpg')}});background-position: center center;background-repeat: no-repeat;">
                            <div class="container">
                                <div class="breadcrumb-content-main">
                                    <h2 class="page-title">Team </h2>


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
        <div class="container">
            <div class="content-main-inner">
                <div class="row">
                    <div class="col-xs-12 col-md-12 sb-r mx-auto">

                        <div class="main-content-inner">


                            <div class="content-main">
                                <div>
                                    <div id="block-gavias-gito-mainpagecontent"
                                         class="block block-system block-system-main-block no-title">


                                        <div class="content block-content">
                                            <div class="views-element-container">
                                                <div
                                                    class="team-grid-2 gva-view view-page js-view-dom-id-8fc0a9ad183ad16729910cf468140db06ab14df1a87bbe039f318fb715f17a8b">


                                                    <div class="centered-container">


                                                        <header>

                                                            <div class="widget  gsc-heading  align-center style-1">
                                                                <h2 class="title"><span>Meet Our Team</span><span class="heading-line"></span>
                                                                </h2>

                                                            </div>

                                                        </header>


                                                        <div class="views-infinite-scroll-content-wrapper clearfix">


                                                            <div class="views-view-grid horizontal cols-3 clearfix">

                                                                <div class="views-row row clearfix row-1">

                                                                    @foreach($contents as $team)
                                                                    <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12  mx-auto">

                                                                        <!-- Start Display article for teaser page -->

                                                                        <div data-history-node-id="59" role="article"
                                                                             class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                            <div class="team-block">
                                                                                <div class="team-image">
                                                                                    <div
                                                                                        class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                        <img src="{{asset($team->image)}}" alt loading="lazy" typeof="foaf:Image">

                                                                                    </div>

{{--                                                                                    <div class="socials-team">--}}
{{--                                                                                        <a class="gva-social" href="#">--}}
{{--                                                                                            <span class="fa fa-facebook"></span>--}}
{{--                                                                                        </a>--}}
{{--                                                                                        <a class="gva-social" href="#">--}}
{{--                                                                                            <span class="fa fa-twitter"></span>--}}
{{--                                                                                        </a>--}}
{{--                                                                                        <a class="gva-social" href="#">--}}
{{--                                                                                            <span class="fa fa-linkedin-square"></span>--}}
{{--                                                                                        </a>--}}
{{--                                                                                    </div>--}}
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <div class="team-name">
                                                                                        <a href="#" class="team-link">{{$team->name}}</a>
                                                                                    </div>
                                                                                    <div class="team-body">
                                                                                        <div
                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                            <p>{{$team->title}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- End Display article for teaser page -->


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
