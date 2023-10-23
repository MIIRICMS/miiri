@extends('layout.auth')

@section('title')
    <title>MIIRI| Manage Home</title>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/easymde/easymde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Team Page</li>
  </ol>
</nav>

<div class="">
  <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h6 class="card-title">Page Content</h6>

        <form class="forms-sample" method="post" action="{{route('pages.update')}}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="page" value="{{$page->name}}">

            @foreach($contents as $team)
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img class="img-fluid" src="{{asset($team->image)}}"  alt="">
                    </div>

                    <div class="col-sm-12 col-md-6 mb-3">
                        <label class="form-label" for="image{{$loop->index+1}}">Image {{$loop->index+1}}</label>
                        <input class="form-control mb-3" type="file" id="image{{$loop->index+1}}" name="image{{$loop->index+1}}">
                        <div class="mb-3">
                            <label for="name1" class="form-label">Name #{{$loop->index+1}}</label>
                            <input value="{{$team->name}}" type="text" class="form-control" name="title$loop->index+1" id="title1" autocomplete="off" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="title{{$loop->index+1}}" class="form-label">Title #{{$loop->index+1}}</label>
                            <input value="{{$team->title}}" type="text" class="form-control" name="title{{$loop->index+1}}" id="title{{$loop->index+1}}" autocomplete="off" placeholder="Title">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <img class="img-fluid" src="{{asset($page->image_1)}}"  alt="">
                    </div>
                    <div class="col-sm-12 col-md-4 mb-3">
                        <label class="form-label" for="image_1">Image 1</label>
                        <input class="form-control" type="file" id="image_1" name="image_1">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                 <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <img class="img-fluid" src="{{asset($page->image_2)}}"  alt="">
                    </div>
                    <div class="col-sm-12 col-md-4 mb-3">
                        <label class="form-label" for="image_2">Image 2</label>
                        <input class="form-control" type="file" id="image_2" name="image_2">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                 <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <img class="img-fluid" src="{{asset($page->image_3)}}"  alt="">
                    </div>
                    <div class="col-sm-12 col-md-4 mb-3">
                        <label class="form-label" for="image_3">Image 3</label>
                        <input class="form-control" type="file" id="image_3" name="image_3">
                    </div>
                </div>
            </div>

          <button type="submit" class="btn btn-primary me-2">Update</button>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/easymde/easymde.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ace-builds/ace.js') }}"></script>
    <script src="{{ asset('assets/plugins/ace-builds/theme-chaos.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/js/easymde.js') }}"></script>
    <script src="{{ asset('assets/js/ace.js') }}"></script>
@endpush
