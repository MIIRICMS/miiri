@extends('layout.auth')

@section('title')
    <title>MIIRI| Manage Programs | {{$program->title}}</title>
@endsection

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{route('programs.index')}}">Programs</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$program->title}}</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">{{$program->title}}</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{route("programs.edit",['slug'=>$program->slug])}}" class="btn btn-secondary btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download"></i>
            Edit
        </a>
        <a href="{{route("programs.trash",['slug'=>$program->slug])}}" class="btn btn-danger btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download"></i>
            Delete
        </a>
    </div>
</div>

<div class="">
  <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <img src="{{ asset($program->image) }}" class="mb-3" alt="user">
          <div class="">
              {!! $program->body !!}
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
