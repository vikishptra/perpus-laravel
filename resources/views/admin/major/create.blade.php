@extends('adminlte::page')
@section('title', 'Tambah Jurusan')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Jurusan</h1>
@stop
@section('content')
    <form action="{{route('create-major')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            <div class="form-group">
                <label>NAMA JURUSAN<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_jurusan" value="{{ old('NAMA_PENERBIT') }}" />
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('index-major')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
