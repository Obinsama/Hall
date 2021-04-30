<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:11:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>NobleUI Laravel Admin Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="leLFmCYSqJrAlCtKdYLa1JVDIqNJp4xsva8rWEKS">
  
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
  <link media="all" type="text/css" rel="stylesheet" href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css">
  <!-- end plugin css -->

  
  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="../css/app.css">
  <!-- end common css -->

  </head>
<body data-base-url="https://www.nobleui.com/laravel/template/light">

  <script src="../assets/js/spinner.js"></script>

  <div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url(../assets/images/carousel/img6.jpg)">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
              <h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
              <form class="forms-sample"  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="exampleInputUsername1"  placeholder="Username">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email id="exampleInputEmail1" placeholder="Email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="new-password" placeholder="Password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                  <div >
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
                  </div>
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                  </label>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                  </button>
                  {{--<a href="https://www.nobleui.com/laravel/template/light" class="btn btn-primary mr-2 mb-2 mb-md-0">Sing up</a>--}}
                  <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="twitter"></i>
                    Sign up with twitter
                  </button>
                </div>
                <a href="login.html" class="d-block mt-3 text-muted">Already a user? Sign in</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
    </div>
  </div>

    <!-- base js -->
    <script src="../js/app.js"></script>
    <script src="../assets/plugins/feather-icons/feather.min.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    <!-- common js -->
    <script src="../assets/js/template.js"></script>
    <!-- end common js -->

    </body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:11:14 GMT -->
</html>