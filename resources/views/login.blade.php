@extends('layout.app')
@section('content')

@if(Session::has('fail')) -->
{{Session::get('fail')}}
<div class="alert alert-danger" role="alert">
  {{Session::get('fail')}}
</div>
@endif
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11 mt-30">
        <div class="card text-black mt-30" style="border-radius:0;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                <form action="{{route('loginUser')}}" method="POST" class="mx-1 mx-md-4">
                  @csrf


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="form3Example3c" class="form-control  @error('email') is-invalid @enderror" />
                      @error('email')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                      <label class="form-label" for="form3Example3c">Your Email</label>
                      
                    </div>
                  </div>

              <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                  <input type="password" name="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" />
                  <label class="form-label" for="form3Example4c">Password</label>
                  @error('password')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>

            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>
            <p class="text-center text-muted mt-3 mb-3">Don't have an account? <a href="{{route('register')}}" class="fw-bold text-body"><u>Register here</u></a></p>

            </form>

          </div>
          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>


@endsection