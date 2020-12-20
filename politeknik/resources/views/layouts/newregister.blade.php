<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
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

</style>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('majestic/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Baru Disini?</h4>
              <h6 class="font-weight-light">Buat akun mudah , Hanya dengan beberapa langkah.</h6>
              <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control form-control-user
                                    @error('name') is-invalid @enderror" placeholder="Nama Lengkap" name="name" 
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <select id="role" type="text" name="role" class="form-control form-control-user">
                                      <option value="admin">admin</option>
                                      <option value="pegawai">pegawai</option>
                                      <option value="supplier">supplier</option>
                                    </select>
                                </div>
                                <div class="form-group">                                    
                                        <input id="email" type="email" class="form-control form-control-user
                                        @error('email') is-invalid @enderror" name="email" 
                                        value="{{ old('email') }}" placeholder="example@gmail.com" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                        <input id="password" type="password" class="form-control form-control-user
                                        @error('password') is-invalid @enderror" placeholder="Password"
                                        name="password" required autocomplete="new-password">
                                        @error('password')
                                         <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                        </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password-confirm" name="password_confirmation"
                                        placeholder="Repeat Password"  required autocomplete="new-password">
                                </div>
                             <button type="submit" class="btn btn-primary btn-user btn-block">
                                 Buat Akun
                             </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="">Lupa Kata Sandi?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/newlogin">Sudah Mempunyai Akun ? Login!</a>
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
