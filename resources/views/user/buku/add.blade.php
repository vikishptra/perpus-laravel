
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Peminjaman Buku</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-user-home.css') }}" />
        <script type="text/javascript" src="{{ asset('js/app-user-home.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Hi {{Auth::user()->name}}</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/user">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/history/buku">History Buku</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('logout') }}" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Website Peminjaman Buku </a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                <div class="container mt-5">
                <form action="{{route('post-add-buku-user', $row->ID_BUKU)}}" enctype="multipart/form-data" method="POST">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            <div class="form-group">
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
                <label>NAMA BUKU<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="NAMA_BUKU" value="{{$row->NAMA_BUKU }}" disabled/>
            </div>
            <input class="form-control" type="hidden" name="ID_BUKU" value="{{$row->ID_BUKU}}"/>
                <input class="form-control" type="hidden" name="id_user" value="{{Auth::user()->id}}"/>
                <input class="form-control" type="hidden" name="status" value="0"/>
                <input class="form-control" type="hidden" name="jumlah" value="1"/>
                <input class="form-control" type="hidden" name="jumlah_buku" value="{{$row->JUMLAH_BUKU}}"/>
            <div class="form-group">
                    <label for="ID_KATEGORI">KATEGORI</label>
                    <select class="form-control" name ="ID_KATEGORI">
                        @foreach($data as $datas)
                        <option value="{{ $datas->ID_KATEGORI}}" name="ID_KATEGORI"{{ ( $datas->ID_KATEGORI == $row->ID_KATEGORI) ? 'selected' : '' }}>{{$datas->KATEGORI}}
                        </option>
                        @endforeach
                    </select>
            <div class="form-group">
                <label>NAMA PENERBIT <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="NAMA_PENERBIT" value="{{$row->NAMA_PENERBIT }}" disabled/>
            </div>
            <div class="form-group">
                <label>TAHUN TERBIT<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="TAHUN_TERBIT" value="{{ $row->TAHUN_TERBIT }}"disabled />
            </div>
            <div class="form-group">
                <label>TANGGAL_PINJAM<span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="tanggal_pinjam" value="{{ date('Y-m-d') }}"/>
            </div>
            <div class="form-group">
                <label>TANGGAL_PENGEMBALIAN<span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="tanggal_pengembalian" required=""/>
            </div>
            <div class="form-group">
                <label>GAMBAR BUKU<span class="text-danger">*</span></label>
                <div><img width="300px" src="{{ url('/images_book/'.$row->files) }}" class="mb-3" disabled></td></div>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Pinjam Buku</button>
                    <a href="{{route('get-index-home-user')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
           
        </div>
                </div>
            </div>
        </div>
    </body>
   
</html>