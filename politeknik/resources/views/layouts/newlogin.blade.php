<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Apotik Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('majestic/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('majestic/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('majestic/css/style.css')}}">
  <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('majestic/images/apotek.png')}}" />

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4 style="text-align: center;">APOTEK</h4>
              <div class="brand-logo d-sm-flex justify-content-center">
                <img src="{{asset('majestic/images/apotek.png')}}" alt="logo">
              </div>
              <hr>
              <h6 class="font-weight-light" style="text-align: center;">Masuk Untuk Melanjutkan.</h6>
              <form class="user" method="POST" action="/postlogin">
                @csrf
                <div class="form-group">
                     <input id="email" placeholder="example@gmail.com" type="email" class="form-control form-control-user
                     @error('email') is-invalid @enderror" 
                      name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                 </div>
                 <div class="form-group">
                    <input id="password" placeholder="Masukan password" type="password" class="form-control form-control-user
                       @error('password') is-invalid @enderror" 
                      name="password" required autocomplete="current-password">
                                            @error('password')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                    @enderror
                  </div>
                  <div class="form-group">
                     <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                         <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-user btn-primary btn-block">
                      Login
                  </button>
                <hr>
             </form>
             <div class="text-center">
                <a class="small" href="#">Forgot Password?</a>
             </div>
             <div class="text-center">
                <a class="small" href="/newregister">Create an Account!</a>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('majestic/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('majestic/js/off-canvas.js')}}"></script>
  <script src="{{asset('majestic/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('majestic/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>
