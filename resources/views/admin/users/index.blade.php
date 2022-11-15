@extends('adminlte::page')
@section('title', 'List User')
@section('content_header')
    <h1 class="m-0 text-dark">List User</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data_user as $key => $user)
                            <tr>
                                <td>{{$user->nrp}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->status}}</td>     
                                <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"action="{{ route('delete-user', $user->id) }}" method="POST">
                                 <a href="{{ route('get-update-user', $user->id) }}"class="btn btn-primary btn-xxl">Edit</a>
                                  @csrf
                                  @method('delete')
                                <button type="submit" class="btn btn-danger btn-xxl">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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