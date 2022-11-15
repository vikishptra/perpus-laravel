@extends('adminlte::page')
@section('title', 'List Book')
@section('content_header')
    <h1 class="m-0 text-dark">List Book</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('create-index-book')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                    <thead>
                <tr>
                    <th>No</th>
                    <th>NAMA BUKU</th>
                    <th>DESKRIPSI BUKU</th>
                    <th>NAMA PENERBIT</th>
                    <th>JUMLAH BUKU</th>
                    <th>GAMBAR BUKU</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td style="width:200px">{{ $row->NAMA_BUKU}}</td>
                <td style="width:300px">{{ $row->DESKRIPSI_BUKU}}</td>
                <td style="width:150px">{{ $row->NAMA_PENERBIT}}</td>
                <td style="width:150px">{{ $row->JUMLAH_BUKU}}</td>
                <td><img width="200px" src="{{ url('/images_book/'.$row->files) }}"></td>
                <td style="width:150px">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');"action="{{route('delete-book', $row->ID_BUKU)}}" method="POST">
                        <a href="{{route('get-update-buku', $row->ID_BUKU)}}"class="btn btn-xxl btn-primary">EDIT</a>
                        @csrf
                        @method('delete')
                       <button type="submit" class="btn btn-xxl btn-danger">HAPUS</button>
                 </form>
                </td>
            </tr>
            @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush