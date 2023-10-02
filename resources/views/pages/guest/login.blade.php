@extends('layout.guest')

@section('title')
    <title>MIIRI| Login</title>
@endsection

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="">
          <div class="">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">MIIRI Login</a>
              <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
              <form class="forms-sample" method="post" action="{{route('login.post')}}">
                  @csrf

                  <div class="mb-3">
                      @if($errors->has('email'))
                          <div class="error" style="color: red">{{ $errors->first('email') }}</div>
                      @endif
                          @if($errors->has('password'))
                              <div class="error" style="color: red">{{ $errors->first('password') }}</div>
                          @endif
                  </div>
                <div class="mb-3">
                  <label for="userEmail" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="userEmail" placeholder="Email">

                </div>
                <div class="mb-3">
                  <label for="userPassword" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">

                </div>
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="authCheck">
                  <label class="form-check-label" for="authCheck">
                    Remember me
                  </label>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
