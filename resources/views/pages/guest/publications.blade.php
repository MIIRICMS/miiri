@extends('layout.master3')

@section('title')
    <title>MIIRI| Publications</title>
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
                                    <h2 class="page-title">Publications </h2>


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
                                            <div class="gbb-row-wrapper">
                                                <div class=" gbb-row bg-size-cover" style>
                                                    <div class="bb-inner default">
                                                        <div class="bb-container container">
                                                            <div class="row">
                                                                <div class="row-wrapper clearfix">
                                                                    <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="column-inner  bg-size-cover ">
                                                                            <div class="column-content-inner">
                                                                                <div class="gsc-anime clearfix  style-3 center font-style-1 color-black">



                                                                                    <div class="text-anime">
                                                                                        <div class="content-inner">

                                                                                            <h2 class="ml12 text-black">
                                                                                                Publications </h2>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>

                                                                                <div class="gsc-tab-views block widget gsc-tabs-views-ajax  style-1">
                                                                                    <div class="block-content">
                                                                                        <div class="list-links-tabs clearfix">
                                                                                            <ul class="nav nav-tabs links-ajax" data-load="ajax">


                                                                                                <li class="active"><a href="{{route('publications')}}" data-panel="#tab-item-fscxa2">All Publications</a></li>
                                                                                                <li class><a href="{{route('publications')}}" data-panel="#tab-item-fscxa2">Articles</a></li>
                                                                                                <li class><a href="{{route('publications')}}" data-panel="#tab-item-fscxa1">Books</a></li>



                                                                                            </ul>
                                                                                        </div>
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

                                                                                                    <div class="topbar hidden">
                                                                                                        <div class="topbar-inner">
                                                                                                            <div class="container">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-lg-12 col-sm-12">
                                                                                                                        <div class="topbar-content">
                                                                                                                            <div>
                                                                                                                                <div id="block-gavias-gito-topbar" class="block block-block-content block-block-contenta87cb642-bb80-4bd8-9bb0-ed5e2d4da5e0 no-title">



                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>



                                                                                                    <div class="header-main gv-sticky-menu">
                                                                                                        <div class="container header-content-layout">
                                                                                                            <div class="header-main-inner p-relative">
                                                                                                                <div class="row">


                                                                                                                    <div class="col-md-9 col-sm-6 col-xs-4 p-static">
                                                                                                                        <div class="header-inner clearfix">
                                                                                                                            <div class="main-menu">
                                                                                                                                <div class="area-main-menu">
                                                                                                                                    <div class="area-inner">
                                                                                                                                        <div class="gva-offcanvas-mobile">
                                                                                                                                            <div class="close-offcanvas hidden"><i class="fa fa-times"></i></div>
                                                                                                                                            <div>
                                                                                                                                                <nav role="navigation" aria-labelledby="block-gavias-gito-mainnavigation-menu" id="block-gavias-gito-mainnavigation" class="block block-menu navigation menu--main">


                                                                                                                                                    <h2 class="visually-hidden block-title" id="block-gavias-gito-mainnavigation-menu"><span>Main navigation</span></h2>

                                                                                                                                                    <div class="block-content">



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
                                                                                                                                                    <div class="search-block-form block block-search container-inline" data-drupal-selector="search-block-form" id="block-gavias-gito-searchform" role="search">



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

                                                                                                <div class="breadcrumbs">
                                                                                                    <div>



                                                                                                    </div>

                                                                                                </div>

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
                                                                                                        <div class="container">
                                                                                                            <div class="content-main-inner">
                                                                                                                <div class="row">



                                                                                                                    <div id="page-main-content" class="main-content col-md-12 col-xs-12">

                                                                                                                        <div class="main-content-inner">


                                                                                                                            <div class="content-main">
                                                                                                                                <div>
                                                                                                                                    <div id="block-gavias-gito-mainpagecontent" class="block block-system block-system-main-block no-title">


                                                                                                                                        <div class="content block-content">
                                                                                                                                            <div class="views-element-container">
                                                                                                                                                <div class="post-style-grid gva-view view-page js-view-dom-id-8738bde46cf1add4e6c99ab94a1497a78f27dd481cf48bda6b8798f07a4ba9c0">

                                                                                                                                                    <div class="views-view-grid horizontal cols-3 clearfix">

                                                                                                                                                        <div class="views-row row clearfix row-1">


                                                                                                                                                            <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                                                                                                                                <!-- Start Display article for teaser page -->

                                                                                                                                                                <div class="post-block">



                                                                                                                                                                </div>

                                                                                                                                                            </div>

                                                                                                                                                            <!-- End Display article for teaser page -->

                                                                                                                                                        </div>
                                                                                                                                                        <div class="views-col col-2 col-lg-9 col-md-6 col-sm-6 col-xs-12">

                                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                                            <div class="post-block">

                                                                                                                                                                <div class="post-content text-left">
                                                                                                                                                                    <div class="post-title"> <a href="publications/Implication of Sensory Evaluation.pdf" rel="bookmark"><span property="schema:name">Implication of Sensory Evaluation and Quality Assessment in Food Product Development: a Review</span>
                                                                                                                                                                        </a> </div>
                                                                                                                                                                    <div class="post-meta">
                                                                                                  <span class="post-categories">

                                                                                                  </span>
                                                                                                                                                                        <span class="post-created">11 November 2019</span>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="post-body">

                                                                                                                                                                        <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">The quality of food products is determined by physical properties, chemical composition, the level of contaminants (microbiological and toxic substances) and sensory attributes .... </div>

                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>

                                                                                                                                                            <!-- End Display article for teaser page -->

                                                                                                                                                        </div>

                                                                                                                                                        <div class="views-col col-2 col-lg-9 col-md-6 col-sm-6 col-xs-12">

                                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                                            <div class="post-block">

                                                                                                                                                                <div class="post-content text-left">
                                                                                                                                                                    <div class="post-title"> <a href="publications/Nutrients Content and Antioxidant Potential.pdf" rel="bookmark"><span property="schema:name">Nutrients Content and Antioxidant Potential of Selected Traditional Vegetables Grown in Malawi</span>
                                                                                                                                                                        </a> </div>
                                                                                                                                                                    <div class="post-meta">
                                                                                                  <span class="post-categories">

                                                                                                    <span class="post-created">14 May 2021</span>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="post-body">

                                                                                                                                                                        <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">Vegetables provide nutrients, especially minerals and vitamins, and non-nutrient phytochemicals with health benefits. Iron, zinc and vitamin A deficiencies are common in most developing countries yet traditional vegetables ....</div>

                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>

                                                                                                                                                            <!-- End Display article for teaser page -->

                                                                                                                                                        </div>

                                                                                                                                                        <div class="views-col col-2 col-lg-9 col-md-6 col-sm-6 col-xs-12">

                                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                                            <div class="post-block">

                                                                                                                                                                <div class="post-content text-left">
                                                                                                                                                                    <div class="post-title"> <a href="publications/Calcium content in vitro digestibility and bioaccessibility.pdf" rel="bookmark"><span property="schema:name">Calcium content, in vitro digestibility, and bioaccessibility in
                                                                                                      leaves of spinach (Spinacia oleracea), sweet potato (Ipomea batatas), and drumstick tree (Moringa oleifera) [version 1; peer review: 3 approved with reservations]</span>
                                                                                                                                                                        </a> </div>
                                                                                                                                                                    <div class="post-meta">
                                                                                                  <span class="post-categories">
                                                                                                  </span>
                                                                                                                                                                        <span class="post-created">27 October 2022</span>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="post-body">

                                                                                                                                                                        <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">Low calcium intake, poor calcium absorption, excessive calcium losses, or some combination of these factors contribute to calcium deficiency diseases. Calcium insufficiency .... </div>

                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>

                                                                                                                                                            <!-- End Display article for teaser page -->

                                                                                                                                                        </div>
                                                                                                                                                        <div class="views-col col-2 col-lg-9 col-md-6 col-sm-6 col-xs-12">

                                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                                            <div class="post-block">

                                                                                                                                                                <div class="post-content text-left">
                                                                                                                                                                    <div class="post-title"> <a href="publications/s13750-016-0080-9.pdf" rel="bookmark"><span property="schema:name">What is the evidence that gender affects access to and use of forest assets for food security? A systematic map protocol</span>
                                                                                                                                                                        </a> </div>
                                                                                                                                                                    <div class="post-meta">
                                                                                                  <span class="post-categories">
                                                                                                    <span class="post-created"> ?? </span>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="post-body">

                                                                                                                                                                        <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">There is increasing awareness of the importance of gender in natural resource management. Especially for communities dependent upon forests for their livelihoods, gender roles and relations can affect access to forest resources, income and food generating activities. As a consequence, gender ....</div>

                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>

                                                                                                                                                            <!-- End Display article for teaser page -->

                                                                                                                                                        </div>
                                                                                                                                                        <div class="views-col col-2 col-lg-9 col-md-6 col-sm-6 col-xs-12">

                                                                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                                                                            <div class="post-block">

                                                                                                                                                                <div class="post-content text-left">
                                                                                                                                                                    <div class="post-title"> <a href="/drupal/gito/latest-fashion-trends-2016" rel="bookmark"><span property="schema:name">The Demography of Adaptation to Climate Change</span>
                                                                                                                                                                        </a> </div>
                                                                                                                                                                    <div class="post-meta">
                                                                                                  <span class="post-categories">
                                                                                                    <div class="field field--name-field-post-category field--type-entity-reference field--label-hidden field__item"><a href="/drupal/gito/taxonomy/term/5" hreflang="en">Sport</a></div>
                                                                                                  </span> -
                                                                                                                                                                        <span class="post-created"> 2013 </span>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="post-body">

                                                                                                                                                                        <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">Growing awareness that the impacts of climate change on human populations are imminent, as well as potentially devastating, has prodded some policymakers and most of the scientific community to call for more effective action. Deepening alarm ...</div>

                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>

                                                                                                                                                            <!-- End Display article for teaser page -->

                                                                                                                                                        </div>


                                                                                                                                                    </div>




                                                                                                                                                    <nav class="pager" role="navigation" aria-labelledby="pagination-heading">
                                                                                                                                                        <h4 id="pagination-heading" class="visually-hidden">Pagination</h4>
                                                                                                                                                        <ul class="pager__items js-pager__items">
                                                                                                                                                            <li class="pager__item is-active">
                                                                                                                                                                <a href="?page=0" title="Current page">
                                                                                                <span class="visually-hidden">
                                                                                                  Current page
                                                                                                </span>1</a>
                                                                                                                                                            </li>
                                                                                                                                                            <li class="pager__item">
                                                                                                                                                                <a href="?page=1" title="Go to page 2">
                                                                                                <span class="visually-hidden">
                                                                                                  Page
                                                                                                </span>2</a>
                                                                                                                                                            </li>
                                                                                                                                                            <li class="pager__item pager__item--next">
                                                                                                                                                                <a href="?page=1" title="Go to next page" rel="next">
                                                                                                                                                                    <span class="visually-hidden">Next page</span>
                                                                                                                                                                    <span aria-hidden="true">Next ›</span>
                                                                                                                                                                </a>
                                                                                                                                                            </li>
                                                                                                                                                            <li class="pager__item pager__item--last">
                                                                                                                                                                <a href="?page=1" title="Go to last page">
                                                                                                                                                                    <span class="visually-hidden">Last page</span>
                                                                                                                                                                    <span aria-hidden="true">Last »</span>
                                                                                                                                                                </a>
                                                                                                                                                            </li>
                                                                                                                                                        </ul>
                                                                                                                                                    </nav>







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
