@extends('adminlte::page')
@section('title', 'Edit Book')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Book</h1>
@stop
@section('content')
    <form action="{{route('post-update-buku', $row->ID_BUKU)}}" enctype="multipart/form-data" method="POST">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            <div class="form-group">
                <label>NAMA BUKU<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="NAMA_BUKU" value="{{$row->NAMA_BUKU }}" />
            </div>
            <div class="form-group">
                <label>DESKRIPSI BUKU<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="DESKRIPSI_BUKU" value="{{trim($row->DESKRIPSI_BUKU)}}">
            </div>
            <div class="form-group">
                    <label for="ID_KATEGORI">KATEGORI</label>
                    <select class="form-control" name = "ID_KATEGORI">
                        @foreach($data as $datas)
                        <option value="{{ $datas->ID_KATEGORI}}" name="ID_KATEGORI" {{ ( $datas->ID_KATEGORI == $row->ID_KATEGORI) ? 'selected' : '' }}>{{$datas->KATEGORI}}
                        </option>
                        @endforeach
                    </select>
            <div class="form-group">
                <label>NAMA PENERBIT <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="NAMA_PENERBIT" value="{{$row->NAMA_PENERBIT }}" />
            </div>
            <div class="form-group">
                <label>TAHUN TERBIT<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="TAHUN_TERBIT" value="{{ $row->TAHUN_TERBIT }}" />
            </div>
            <div class="form-group">
                <label>JUMLAH BUKU<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="JUMLAH_BUKU" value="{{ $row->JUMLAH_BUKU }}" />
            </div>
            <div class="form-group">
                <label>GAMBAR BUKU<span class="text-danger">*</span></label>
                <div><img width="300px" src="{{ url('/images_book/'.$row->files) }}" class="mb-3"></td></div>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files" value="{{ old('file') }}" >
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('index-book')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
@stop