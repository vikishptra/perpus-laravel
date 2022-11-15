@extends('adminlte::page')
@section('title', 'List Transaksi')
@section('content_header')
    <h1 class="m-0 text-dark">List Transaksi</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                    <thead>
                <tr>
                        <th scope="col">NO</th>
                        <th scope="col">BUKU</th>
                        <th scope="col">NRP</th>
                        <th scope="col">STATUS BUKU</th>
                        <th scope="col">TANGGAL_PINJAM</th>
                        <th scope="col">TANGGAL_PENGEMBALIAN</th>
                        <th scope="col">AKSI PINJAM BUKU</th>
                        <th scope="col">AKSI KEMBALIAN BUKU</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($transaksi as $data)
                    @if($data != null)
                        <tr>
                            <td name="no">{{$no++}}</td>
                            <td name="files"><img width="120px" src="{{ url('/images_book/'.$data->getDataBuku->files) }}"></td>
                            <?php if($data->status == 0){
                                    $data->status = 'PENDING';
                                  }else if($data->status == 1){
                                    $data->status = 'BELUM KEMBALIKAN BUKU';
                                  }else if($data->status == 2){
                                    $data->status = 'PROSES KEMBALIKAN BUKU';
                                  }else if($data->status == 3){
                                    $data->status = 'SUDAH KEMBALIKAN BUKU';
                                  }
                            ;?>
                            <td style="width:100px" name="status">{{ $data->getDataUser->nrp}}</td>
                            <td style="width:140px" name="status">{{ $data->status}}</td>
                            <td style="width:50px" name="tanggal_pinjam">{{ $data->tanggal_pinjam}}</td>
                            <td style="width:50px" name="tanggal_pengembalian">{{ $data->tanggal_pengembalian}}</td>
                            <td style="width:200px">
                            <form action="{{route('post-konfirmasi-buku-user', $data->id_transaksi)}}" method="POST">
                            @csrf
                            <button type="save" class="btn btn-xl btn-primary" name="pinjam_buku" value="save">KONFIRMASI PINJAM BUKU</button>
                            </form>
                            </td>
                            <td style="width:200px">
                            <form action="{{route('post-konfirmasi-buku-user', $data->id_transaksi)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-xl btn-success" name="kembali_buku" value="submit">KONFIRMASI KEMBALI BUKU</button>
                            </td>
                        </tr>
                    @endif
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