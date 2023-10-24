@extends('layout.auth')

@section('title')
    <title>MIIRI| Create User</title>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/easymde/easymde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create User</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Create User</h4>
    </div>
</div>

<div class="">
  <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="forms-sample" method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
            @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Enter Name" required>
              @if($errors->has('name'))
                  <div class="error" style="color: red">{{ $errors->first('name') }}</div>
              @endif
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" autocomplete="off" placeholder="Enter Email" required>
              @if($errors->has('email'))
                  <div class="error" style="color: red">{{ $errors->first('email') }}</div>
              @endif
          </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="Enter Password" required>
                @if($errors->has('password'))
                    <div class="error" style="color: red">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" autocomplete="off" placeholder="Enter Password Confirmation" required>
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
