<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User Aplikasi Peminjaman Buk</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<style>
    .foot-fab .fab {
        color: white;
        font-size: 18px;
        margin-top: 10px;
        margin-right: 8px;
        margin-left: 8px;
        margin-bottom: 10px;
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
<body>
    
    <!-- baru -->
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-5 col-lg-5 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" style="margin-top: 24px; margin-left: -5px;"alt="Sample image">
            </div>
                <div class="col-md-4 col-lg-7 col-xl-4 offset-xl-1">
                    <div class="col-md-7 col-md-offset-3">
                            <h2 style="font-size: 23px; font-weight: 700; font-family: Verdana,sans-serif;" class="text-center">FORM REGISTER USER</h3>
                            <hr>
                            @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                            @endif
                            <form action="{{route('actionregister')}}" method="post">
                            @csrf
                            <!-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
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
                                <p class="text-center fw-bold mx-3 mb-0">Or Register</p>
                            </div> -->

                        <!-- iputan -->
                            <div class="form-outline mb-4">
                                <div class="form-group">
                                    <label class="form-label"><i class="fa fa-envelope"></i> Email address</label>
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required="">
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-group">
                                    <label class="form-label"><i class="fa fa-user"></i> Username</label>
                                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Username" required="">
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-group">
                                    <label class="form-label"><i class="fa fa-solid fa-hashtag"></i> Nrp</label>
                                    <input type="number" name="nrp" class="form-control form-control-lg" placeholder="Nrp" required="">
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="id_jurusan"><i class="fa fa-solid fa-graduation-cap"></i> Jurusan</label>
                                    <select class="form-control form-control-lg" name = "id_jurusan">
                                    <option value=" "> - Pilih Jurusan Anda - </option>
                                        @foreach($data as $row)
                                        <option value="{{ $row->ID_JURUSAN}}" name="id_jurusan">{{$row->NAMA_JURUSAN}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-group">
                                    <label class="form-label" ><i class="fa fa-duotone fa-key"></i> Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required="">
                                </div>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"><i class="fa fa-user"></i> Register</button>
                                <hr>
                                <p class="small fw-bold mt-2 pt-1 mb-0" style="margin-bottom: 50px;" >Sudah punya akun silahkan <a href="/login-user" class="text-primary">Login Disini!</a></p>
                            </div>
                            </form>
                    </div>
                </div>    
        </div>
    </div>
</section>



</body>
</html>
