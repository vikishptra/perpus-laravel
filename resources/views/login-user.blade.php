<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Aplikasi Peminjaman Buku</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style type="text/css" rel="stylesheet">
        .foot-fab .fab {
        color: white;
        font-size: 18px;
        margin-top: 10px;
        margin-right: 8px;
        margin-left: 8px;
        margin-bottom: 10px;
        }
        h2 {
            font-family: Arial;
            font-weight: 20px;
            padding: 10px;
            border: 2px;
        }
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
  <body>
    <!-- baru -->

    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div style="margin-top: 20px;" class="col-md-8 col-lg-7 col-xl-5">
            <img src="https://www.undeleteplus.com/assets/images/login.svg" style="margin-top: -20px; margin-left: -20px;" class="img-fluid" alt="Sample image">
            <!-- https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp -->
          </div>
          
          <div style="margin-top: 90px; margin-left: 20px;" class="col-md-5 col-lg-4 col-xl-3 offset-xl-2">
          <h2 style="font-size: 28px; font-weight: 700; font-family: Verdana,sans-serif;" class="text-center">Login Peminjaman Buku</h3>
                <hr>
                @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
                @endif
                <form action="{{ route('actionlogin') }}" method="post">
                @csrf  
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3 text-primary fw-bold">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <div class="form-group">
                    <label class="form-label text-primary fw-bold" for="form3Example3">Email</label>
                    <input id="form3Example3" type="email" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required="">
                </div>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <div class="form-group">
                    <label class="form-label text-primary fw-bold" for="form3Example4">Password</label>
                    <input id="form3Example4" type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required="">
                </div>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-block btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Log In</button>
              <p style="margin-top: 10px;" class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="{{ route('register-user')}}" class="link-primary">Register</a> sekarang!</p>
              </div>

            </form>
          </div>
        </div>
      </div>


      <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        
      </div>
    </section>

  </body>
</html>



