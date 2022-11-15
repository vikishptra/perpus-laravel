@extends('adminlte::page')
@section('title', 'Tambah Buku')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Buku</h1>
@stop
@section('content')
    <form action="{{route('create-book')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            <div class="form-group">
                <label>NAMA BUKU<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_buku" value="{{ old('NAMA_BUKU') }}" />
            </div>
            <div class="form-group">
                <label>DESKRIPSI BUKU<span class="text-danger">*</span></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="deskripsi_buku" value="{{ old('DESKRIPSI_BUKU') }}" row="3"></textarea>
            </div>
            <div class="form-group">
                <label>NAMA PENERBIT <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_penerbit" value="{{ old('NAMA_PENERBIT') }}" />
            </div>
            <div class="form-group">
            <label for="exampleInputName">JURUSAN<span class="text-danger">*</span></label>
                    <select class="form-control" name = "id_kategori">
                    <option value=""> - Pilih Kategori Buku Anda - </option>
                        @foreach($data as $row)
                        <option value="{{ $row->ID_KATEGORI}}" name="id_kategori">{{$row->KATEGORI}}
                        </option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label>TAHUN TERBIT<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="tahun_terbit" value="{{ old('TAHUN_TERBIT') }}" />
            </div>
            <div class="form-group">
                <label>JUMLAH BUKU<span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="jumlah_buku" value="{{ old('jumlah_halaman') }}" />
            </div>
            <div class="form-group">
                <label>GAMBAR BUKU<span class="text-danger">*</span></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" value="{{ old('file') }}" >
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
@stop
