<!-- resources/views/users/index.blade.php -->
@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="]/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 30%">
                        Username
                    </th>
                    <th style="width: 30%">
                        Email
                    </th>
                    <th>
                        Nama Lengkap
                    </th>
                    <th style="width: 30%">
                        Alamat
                    </th>
                    <th style="width: 30%">
                        Role
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->nama_lengkap }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>{{ $user->role }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ route('users.edit', $user->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
</section>
@endsection
