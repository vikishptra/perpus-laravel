@extends('adminlte::page')
@section('title', 'Edit Jurusan')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Jurusan</h1>
@stop
@section('content')
    <form action="{{route('post-update-major', $row->ID_JURUSAN)}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                <label>NAMA JURUSAN<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="NAMA_JURUSAN" value="{{$row->NAMA_JURUSAN }}" />
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('index-major')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
@stop