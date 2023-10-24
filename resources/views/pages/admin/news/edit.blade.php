@extends('layout.auth')

@section('title')
    <title>MIIRI| Edit News</title>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/easymde/easymde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{route('news.index')}}">News</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Edit News</h4>
    </div>
</div>

<div class="">
  <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

{{--        <h6 class="card-title">Create news</h6>--}}

        <form class="forms-sample" method="post" action="{{route('news.update',['slug'=>$news->slug])}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <img class="img-fluid" src="{{asset($news->image)}}"  alt="">
            </div>

            <div class="mb-3">
                <label class="form-label" for="image">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{$news->title}}" type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Enter title" required>
          </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input value="{{date('Y-m-d',$news->date)}}" type="date" class="form-control" name="date" id="date" autocomplete="off" placeholder="Enter Date" required>
            </div>
          <div class="mb-3">
              <label for="tinymceExample" class="form-label">Body</label>
              <textarea class="form-control editor" name="body" id="tinymceExample" rows="10" required>
                  {{$news->body}}
              </textarea>
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
