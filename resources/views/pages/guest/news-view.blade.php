@extends('layout.master3')

@section('title')
    <title>MIIRI| {{$news->title}}</title>
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
                        <div class="breadcrumb-style"
                             style="background-color: #CEF0EA;background-image: url({{asset($news->image)}});background-position: center center;background-repeat: no-repeat; background-size: cover">
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Background color */

        }

        h1 {
            color: #007848; /* Header text color (#00a651) */
            text-align: center;
        }

        p {
            font-size: 18px; /* Font size for the paragraph */
            line-height: 1.6; /* Line spacing for better readability */
            color: #080808; /* Text color (Dark gray) */
            text-align: center;
        }
    </style>
    <div>
        <div class="container">
            <div class="content-main-inner">
                <div class="row">
                    <div class="col-xs-12 col-md-12 sb-r mx-auto">

                        <div class="main-content-inner">


                            <div class="content-main" style="padding: 60px 0">
                                <div>
                                    <h1>{{$news->title}}</h1>
                                    <div class="content-inner" style="text-align: justify; font-size: 12px; margin: 0 auto; max-width: 800px;">
                                        {!! $news->body !!}
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
