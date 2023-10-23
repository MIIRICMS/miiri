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
                                                                                        <div class="content block-content">
                                                                                            <div class="views-element-container">
                                                                                                <div class="post-style-grid gva-view view-page js-view-dom-id-8738bde46cf1add4e6c99ab94a1497a78f27dd481cf48bda6b8798f07a4ba9c0">

                                                                                                    <div class="views-view-grid horizontal cols-3 clearfix">

                                                                                                        @foreach($publications as $publication)
                                                                                                        <div class="views-col col-2 col-lg-9 col-md-6 col-sm-6 col-xs-12">

                                                                                                            <!-- Start Display article for teaser page -->

                                                                                                            <div class="post-block">

                                                                                                                <div class="post-content text-left">
                                                                                                                    <div class="post-title"> <a href="{{asset($publication->file)}}" rel="bookmark"><span property="schema:name">{{$publication->title}}</span>
                                                                                                                        </a> </div>
                                                                                                                    <div class="post-meta">
                                                                                                                        <span class="post-categories"></span>
                                                                                                                        <span class="post-created"> {{date("d M Y", $publication->date)}} </span>
                                                                                                                    </div>
                                                                                                                    <div class="post-body">

                                                                                                                        <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                                                                            {!! $publication->body !!}
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <!-- End Display article for teaser page -->

                                                                                                        </div>
                                                                                                        @endforeach


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
