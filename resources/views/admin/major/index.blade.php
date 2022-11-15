@extends('adminlte::page')
@section('title', 'List Major')
@section('content_header')
    <h1 class="m-0 text-dark">List Major</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('create-index-major')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                    <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->NAMA_JURUSAN}}</td>
                <td>
                <form onsubmit="return confirm('Apakah Anda Yakin ?');"action="{{route('delete-major', $row->ID_JURUSAN)}}" method="POST">
                        <a href="{{route('get-update-major', $row->ID_JURUSAN)}}"class="btn btn-xxl btn-primary">EDIT</a>
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