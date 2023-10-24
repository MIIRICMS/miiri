@extends('layout.auth')

@section('title')
    <title>MIIRI| Edit Publications</title>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/easymde/easymde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{route('publications.index')}}">Publications</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Edit Publication</h4>
    </div>
</div>

<div class="">
  <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

{{--        <h6 class="card-title">Create publication</h6>--}}

        <form class="forms-sample" method="post" action="{{route('publications.update',['slug'=>$publication->slug])}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <a href="{{asset($publication->file)}}" target="_blank" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="download"></i>
                    View File
                </a>
            </div>
            <div class="mb-3">
                <label class="form-label" for="file">File</label>
                <input class="form-control" type="file" id="file" name="file">
            </div>

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{$publication->title}}" type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Enter title" required>
          </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input value="{{date('Y-m-d',$publication->date)}}" type="date" class="form-control" name="date" id="date" autocomplete="off" placeholder="Enter Date" required>
            </div>
          <div class="mb-3">
              <label for="tinymceExample" class="form-label">Body</label>
              <textarea class="form-control editor" name="body" id="tinymceExample" rows="10" required>
                  {{$publication->body}}
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
