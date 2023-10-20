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


                                                        <div data-drupal-views-infinite-scroll-content-wrapper
                                                             class="views-infinite-scroll-content-wrapper clearfix">


                                                            <div class="views-view-grid horizontal cols-3 clearfix">

                                                                <div class="views-row row clearfix row-1">


                                                                    <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12  mx-auto">

                                                                        <!-- Start Display article for teaser page -->

                                                                        <div data-history-node-id="59" role="article" about="/drupal/gito/node/59"
                                                                             class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                            <div class="team-block">
                                                                                <div class="team-image">
                                                                                    <div
                                                                                        class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                        <img src="{{asset('assets/images/team-1.png')}}" alt loading="lazy" typeof="foaf:Image">

                                                                                    </div>

                                                                                    <div class="socials-team">
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-facebook"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-twitter"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-linkedin-square"></span>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <div class="team-name">
                                                                                        <a href="team-modal.html" class="team-link">Proffesor David Dalison
                                                                                            Mkwambisi</a>
                                                                                    </div>
                                                                                    <div class="team-body">
                                                                                        <div
                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                            <p>Director of MIIRI</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- End Display article for teaser page -->


                                                                    </div>
                                                                    <div class="views-col col-2 col-lg-4 col-md-4 col-sm-4 col-xs-12  mx-auto">

                                                                        <!-- Start Display article for teaser page -->

                                                                        <div data-history-node-id="58" role="article" about="/drupal/gito/node/58"
                                                                             class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                            <div class="team-block">
                                                                                <div class="team-image">
                                                                                    <div
                                                                                        class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                        <img src="{{asset('assets/images/team-2.png')}}" alt loading="lazy" typeof="foaf:Image">

                                                                                    </div>

                                                                                    <div class="socials-team">
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-facebook"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-twitter"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-linkedin-square"></span>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <div class="team-name"><a id="modal-link" href="modal-2.css"
                                                                                                              class="team-link">Dr. Tabitha Nindi</a></div>
                                                                                    <div class="team-body">
                                                                                        <div
                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                            <p> Rsearch Fellow and Science Tech </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- End Display article for teaser page -->


                                                                    </div>
                                                                    <div class="views-col col-3 col-lg-4 col-md-4 col-sm-4 col-xs-12  mx-auto">

                                                                        <!-- Start Display article for teaser page -->

                                                                        <div data-history-node-id="64" role="article" about="/drupal/gito/node/64"
                                                                             class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                            <div class="team-block">
                                                                                <div class="team-image">
                                                                                    <div
                                                                                        class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                        <img src="{{asset('assets/images/team-3.png')}}" alt loading="lazy" typeof="foaf:Image">

                                                                                    </div>

                                                                                    <div class="socials-team">
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-facebook"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-twitter"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-linkedin-square"></span>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <div class="team-name"><a href="">Dr. Edda Lungu</a></div>
                                                                                    <div class="team-body">
                                                                                        <div
                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                            <p> Post Doc. Fellow - Food and Nutrition </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- End Display article for teaser page -->


                                                                    </div>

                                                                </div>



                                                                <div class="views-row row clearfix row-2">


                                                                    <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                                        <!-- Start Display article for teaser page -->

                                                                        <div data-history-node-id="63" role="article" about="/drupal/gito/node/63"
                                                                             class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                            <div class="team-block">
                                                                                <div class="team-image">
                                                                                    <div
                                                                                        class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                        <img src="{{asset('assets/images/team-4.png')}}" alt loading="lazy" typeof="foaf:Image">

                                                                                    </div>

                                                                                    <div class="socials-team">

                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-linkedin-square"></span>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <div class="team-name"><a href="/drupal/gito/node/63">Dr. Joseph Issa
                                                                                        </a></div>
                                                                                    <div class="team-body">
                                                                                        <div
                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                            <p>Rsearch Fellow and Science Tech</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- End Display article for teaser page -->


                                                                    </div>
                                                                    <div class="views-col col-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                                        <!-- Start Display article for teaser page -->

                                                                        <div data-history-node-id="62" role="article" about="/drupal/gito/node/62"
                                                                             class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                            <div class="team-block">
                                                                                <div class="team-image">
                                                                                    <div
                                                                                        class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                        <img src="{{asset('assets/images/team-5.png')}}" alt loading="lazy" typeof="foaf:Image">

                                                                                    </div>

                                                                                    <div class="socials-team">
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-facebook"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-twitter"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-linkedin-square"></span>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <div class="team-name"><a href="/drupal/gito/node/62">Wongani Langa</a>
                                                                                    </div>
                                                                                    <div class="team-body">
                                                                                        <div
                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                            <p>Research Fellow - Technology and Innovations</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- End Display article for teaser page -->


                                                                    </div>
                                                                    <div class="views-col col-3 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                                        <!-- Start Display article for teaser page -->

                                                                        <div data-history-node-id="61" role="article" about="/drupal/gito/node/61"
                                                                             class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                            <div class="team-block">
                                                                                <div class="team-image">
                                                                                    <div
                                                                                        class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                        <img src="{{asset('assets/images/team-6.png')}}" alt loading="lazy" typeof="foaf:Image">

                                                                                    </div>

                                                                                    <div class="socials-team">
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-facebook"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-twitter"></span>
                                                                                        </a>
                                                                                        <a class="gva-social" href="#">
                                                                                            <span class="fa fa-linkedin-square"></span>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <div class="team-name"><a href="/drupal/gito/node/61">Zalerapi
                                                                                            Mhango</a></div>
                                                                                    <div class="team-body">
                                                                                        <div
                                                                                            class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                            <p>Research Fellow - Technology and Innovations</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- End Display article for teaser page -->


                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>




                                                        <div class="views-row row clearfix row-2">


                                                            <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                                <!-- Start Display article for teaser page -->

                                                                <div data-history-node-id="63" role="article" about="/drupal/gito/node/63"
                                                                     class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                    <div class="team-block">
                                                                        <div class="team-image">
                                                                            <div
                                                                                class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                <img src="{{asset('assets/images/team-7.jpg')}}" alt loading="lazy" typeof="foaf:Image">

                                                                            </div>

                                                                            <div class="socials-team">
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-facebook"></span>
                                                                                </a>
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-twitter"></span>
                                                                                </a>
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-linkedin-square"></span>
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="team-content">
                                                                            <div class="team-name"><a href="/drupal/gito/node/63">Emmanuel Likoya</a>
                                                                            </div>
                                                                            <div class="team-body">
                                                                                <div
                                                                                    class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                    <p> Post Doc. Fellow - Food and Nutrition
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- End Display article for teaser page -->


                                                            </div>
                                                            <div class="views-col col-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                                <!-- Start Display article for teaser page -->

                                                                <div data-history-node-id="62" role="article" about="/drupal/gito/node/62"
                                                                     class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                    <div class="team-block">
                                                                        <div class="team-image">
                                                                            <div
                                                                                class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                <img src="{{asset('assets/images/team-8.png')}}" alt loading="lazy" typeof="foaf:Image">

                                                                            </div>

                                                                            <div class="socials-team">
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-facebook"></span>
                                                                                </a>
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-twitter"></span>
                                                                                </a>
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-linkedin-square"></span>
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="team-content">
                                                                            <div class="team-name"><a href="/drupal/gito/node/62">Patrick Chimsewu</a>
                                                                            </div>
                                                                            <div class="team-body">
                                                                                <div
                                                                                    class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                    <p>Projects Officer</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- End Display article for teaser page -->


                                                            </div>
                                                            <div class="views-col col-3 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                                <!-- Start Display article for teaser page -->

                                                                <div data-history-node-id="61" role="article" about="/drupal/gito/node/61"
                                                                     class="node node-detail node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                    <div class="team-block">
                                                                        <div class="team-image">
                                                                            <div
                                                                                class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                <img src="{{asset('assets/images/team-9.jpg')}}" alt loading="lazy" typeof="foaf:Image">

                                                                            </div>

                                                                            <div class="socials-team">
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-facebook"></span>
                                                                                </a>
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-twitter"></span>
                                                                                </a>
                                                                                <a class="gva-social" href="#">
                                                                                    <span class="fa fa-linkedin-square"></span>
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="team-content">
                                                                            <div class="team-name"><a href="/drupal/gito/node/61">Esther Chole</a></div>
                                                                            <div class="team-body">
                                                                                <div
                                                                                    class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                    <p>Secretary</p>
                                                                                </div>
                                                                            </div>
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
