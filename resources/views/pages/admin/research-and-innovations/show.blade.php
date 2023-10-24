@extends('layout.auth')

@section('title')
    <title>MIIRI| Manage Research and Innovations | {{$research->title}}</title>
@endsection

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{route('research-and-innovations.index')}}">Research and Innovations</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$research->title}}</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">{{$research->title}}</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">

        <a href="{{route("research-and-innovations.edit",['slug'=>$research->slug])}}" class="btn btn-secondary btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download"></i>
            Edit
        </a>
        <a href="{{route("research-and-innovations.trash",['slug'=>$research->slug])}}" class="btn btn-danger btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download"></i>
            Delete
        </a>
    </div>
</div>

<div class="">
  <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <img src="{{ asset($research->image) }}" class="mb-3" alt="user">
{{--          <div class="mb-3">--}}
{{--              <a href="{{asset($research->file)}}" target="_blank" class="btn btn-primary btn-icon-text mb-2 mb-md-0">--}}
{{--                  <i class="btn-icon-prepend" data-feather="download"></i>--}}
{{--                  View File--}}
{{--              </a>--}}
{{--          </div>--}}
          <div class="">{{$research->type == 0 ? "Research" : "Innovation"}}</div>
          <div class="text-muted tx-13">{{$research->first_name}} {{$research->last_name}}</div>
          <div class="text-muted tx-13">{{$research->position}}</div>
          <div class="">
              {!! $research->description !!}
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
