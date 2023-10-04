@extends('layout.auth')

@section('title')
    <title>MIIRI| Manage Programs</title>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/easymde/easymde.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Programs</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Manage Programs</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{route("programs.create")}}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download"></i>
            Create New
        </a>
    </div>
</div>

<div class="">
  <div class="grid-margin stretch-card">
      @foreach($programs as $program)
    <div class="card">
      <div class="card-body">
          <div class="d-flex flex-column">

              <a href="{{route('programs.show',['slug'=>$program->slug])}}" class="d-flex align-items-center">
                  <div class="me-3">
                      <img src="{{ asset($program->image) }}" class="" style="max-width: 120px" alt="user">
                  </div>
                  <div class="w-100">
                      <div class="d-flex justify-content-between">
                          <h6 class="fw-normal text-body mb-1">{{$program->title}}</h6>
                      </div>
                      <p class="text-muted tx-13">{!! $program->body !!}</p>
                  </div>
              </a>
          </div>
      </div>
    </div>
      @endforeach
  </div>
</div>

@endsection
