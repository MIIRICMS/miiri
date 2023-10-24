@extends('layout.auth')

@section('title')
    <title>MIIRI| Create Research and Innovations</title>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/easymde/easymde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{route('research-and-innovations.index')}}">Research and Innovations</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Create Research or Innovation</h4>
    </div>
</div>

<div class="">
  <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

{{--        <h6 class="card-title">Create publication</h6>--}}

        <form class="forms-sample" method="post" action="{{route('research-and-innovations.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="image">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Enter title" required>
          </div>
          <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" autocomplete="off" placeholder="Enter title" required>
          </div>
          <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" autocomplete="off" placeholder="Enter title" required>
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" id="position" autocomplete="off" placeholder="Enter title" required>
          </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="date" autocomplete="off" placeholder="Enter Date" required>
            </div>
            <div class="form-check mb-3">
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" name="type" id="research" value="research">
                    <label class="form-check-label" for="research">
                        Research
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" name="type" id="innovation" value="innovation">
                    <label class="form-check-label" for="innovation">
                        Innovation
                    </label>
                </div>
            </div>
          <div class="mb-3">
              <label for="tinymceExample" class="form-label">Description</label>
              <textarea class="form-control editor" name="description" id="tinymceExample" rows="10" required>
              </textarea>
          </div>

          <button type="submit" class="btn btn-primary me-2">Post</button>
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
