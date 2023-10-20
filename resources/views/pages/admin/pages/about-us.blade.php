@extends('layout.auth')

@section('title')
    <title>MIIRI| Manage Home Page</title>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/easymde/easymde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
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

          <div class="mb-3">
            <label for="title1" class="form-label">Title #1</label>
            <input value="{{$contents->title1}}" type="text" class="form-control" name="title1" id="title1" autocomplete="off" placeholder="Username">
          </div>
          <div class="mb-3">
              <label for="tinymceExample" class="form-label">Description #1</label>
              <textarea class="form-control editor" name="description1" id="tinymceExample" rows="10">
                  {{$contents->description1}}
              </textarea>
          </div>
          <div class="mb-3">
            <label for="title2" class="form-label">Title #2</label>
            <input value="{{$contents->title2}}" type="text" class="form-control" name="title2" id="title2" autocomplete="off" placeholder="Username">
          </div>
          <div class="mb-3">
              <label for="tinymceExample" class="form-label">Description #2</label>
              <textarea class="form-control editor" name="description2" id="tinymceExample" rows="10">
                  {{$contents->description2}}
              </textarea>
          </div>
          <div class="mb-3">
            <label for="title3" class="form-label">Title #3</label>
            <input value="{{$contents->title3}}" type="text" class="form-control" name="title3" id="title3" autocomplete="off">
          </div>
          <div class="mb-3">
              <label for="tinymceExample" class="form-label">Description #3</label>
              <textarea class="form-control editor" name="description3" id="tinymceExample" rows="10">
                  {{$contents->description3}}
              </textarea>
          </div>


            <div class="mb-3">
                <label for="vision" class="form-label">Vision</label>
                <input value="{{$contents->values->vision}}" type="text" class="form-control" name="vision" id="vision" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="mission" class="form-label">Mission</label>
                <input value="{{$contents->values->mission}}" type="text" class="form-control" name="mission" id="mission" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="key_principles" class="form-label">Key Principles</label>
                <input value="{{$contents->values->key_principles}}" type="text" class="form-control" name="key_principles" id="key_principles" autocomplete="off">
            </div>

            {{--First--}}
            <div class="mb-3">
                <label for="people_and_society_title_1" class="form-label">People and Society Title #1</label>
                <input value="{{$contents->people_and_society[0]->title}}" type="text" class="form-control" name="people_and_society_title_1" id="people_and_society_title_1" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="people_and_society_body_1" class="form-label">People and Society Body #1</label>
                <input value="{{$contents->people_and_society[0]->body}}" type="text" class="form-control" name="people_and_society_body_1" id="people_and_society_body_1" autocomplete="off">
            </div>
            {{--Second--}}
            <div class="mb-3">
                <label for="people_and_society_title_2" class="form-label">People and Society Title #2</label>
                <input value="{{$contents->people_and_society[1]->title}}" type="text" class="form-control" name="people_and_society_title_2" id="people_and_society_title_2" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="people_and_society_body_2" class="form-label">People and Society Body #2</label>
                <input value="{{$contents->people_and_society[1]->body}}" type="text" class="form-control" name="people_and_society_body_2" id="people_and_society_body_2" autocomplete="off">
            </div>
            {{--Third--}}
            <div class="mb-3">
                <label for="people_and_society_title_3" class="form-label">People and Society Title #3</label>
                <input value="{{$contents->people_and_society[2]->title}}" type="text" class="form-control" name="people_and_society_title_3" id="people_and_society_title_1" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="people_and_society_body_3" class="form-label">People and Society Body #3</label>
                <input value="{{$contents->people_and_society[2]->body}}" type="text" class="form-control" name="people_and_society_body_3" id="people_and_society_body_1" autocomplete="off">
            </div>

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
