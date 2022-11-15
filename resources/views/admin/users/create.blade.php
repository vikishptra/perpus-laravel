@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah User</h1>
@stop
@section('content')
    <form action="{{route('createUser')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">NAMA</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap ..." name="name" value="">
                       </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">NRP</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="NRP ..." name="nrp" val>
                       </span>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputName">JURUSAN</label>
                    <select class="form-control" name = "id_jurusan">
                    <option value=""> - Pilih Jurusan Anda - </option>
                        @foreach($data_jurusan as $row)
                        <option value="{{ $row->ID_JURUSAN}}" name="id_jurusan">{{$row->NAMA_JURUSAN}}
                        </option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputName">ROLE</label>
                    <select class="form-control" name = "role">
                    <option value=""> - Pilih Jurusan Anda - </option>
                        <option value="admin">admin</option>
                        <option value="mahasiswa">mahasiswa</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputName">STATUS</label>
                    <select class="form-control" name = "status">
                    <option value=""> - Pilih Jurusan Anda - </option>
                        <option value="active">active</option>
                        <option value="deactive">deactive</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">EMAIL</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email ..." name="email" value="">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">PASSWORD</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password ..." name="password">
                    </div>
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
@stop
