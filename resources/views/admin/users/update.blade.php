@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')
    <form action="{{route('post-update-user', $row->id)}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputName">NAMA</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nama lengkap ..." name="name" value="{{$row->name}}">
                       </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">NRP</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="NRP ..." name="nrp" value="{{$row->nrp}}">
                       </span>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputName">ROLE</label>
                    <select class="form-control" name = "role">
                    <option value="{{$row->role}}">{{$row->role}}</option>
                        <option value="admin">admin</option>
                        <option value="mahasiswa">mahasiswa</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleInputName">STATUS</label>
                    <select class="form-control" name = "status">
                    <option value="{{$row->status}}"> {{$row->status}} </option>
                        <option value="active">active</option>
                        <option value="deactive">deactive</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="id_jurusan">JURUSAN</label>
                    <select class="form-control" name = "id_jurusan">
                        @foreach($data_jurusan as $datas)
                        <option value="{{ $datas->ID_JURUSAN}}" name="id_jurusan" {{ ( $datas->ID_JURUSAN == $row->id_jurusan) ? 'selected' : '' }}>{{$datas->NAMA_JURUSAN}}
                        </option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">EMAIL</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Masukkan Email ..." name="email" value="{{$row->email}}">
                       
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
@stop