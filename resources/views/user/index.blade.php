
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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
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
                <table class="table table-hover table-bordered table-stripped" id="example2">
              <thead>
                    <tr class="table-primary"> 
                        <th scope="col">NO</th>
                        <th scope="col">GAMBAR BUKU</th>
                        <th scope="col">NAMA PENERBIT</th>
                        <th scope="col">DESKRIPSI BUKU</th>
                        <th scope="col">KATEGORI</th>
                        <th scope="col">STOCK BUKU</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = ($buku->currentpage()-1)* $buku->perpage() + 1;?>
                    @foreach($buku as $data)

                    @if($data->JUMLAH_BUKU != 0)
                        <tr>
                            <td name="no">{{$i++}}</td>
                            <td name="files"><img width="200px" src="{{ url('/images_book/'.$data->files) }}"></td>
                            <td style="width:200px" name="NAMA_PENERBIT">{{ $data->NAMA_PENERBIT}}</td>
                            <td style="width:400px" name="DESKRIPSI_BUKU">{{ $data->DESKRIPSI_BUKU}}</td>
                            <td style="width:100px" name="KATEGORI">{{ $data->getDataKategori->KATEGORI}}</td>
                            <td style="width:150px" name="JUMLAH_BUKU">{{ $data->JUMLAH_BUKU}}</td>
                            <td><a href="{{route('get-add-buku-user', $data->ID_BUKU)}}" class="btn btn-primary mb-2">
                            Pinjam
                        </a></td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
            {{$buku->links("pagination::bootstrap-5")}}
            </div>
        </div>
                </div>
            </div>
        </div>
    </body>
   
</html>