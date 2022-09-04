@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah User</h1>
@stop
@section('content')
    <form action="{{ route('employees.update', $employees->id) }}" method="post">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('NamaPegawai') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="name" value="{{old('NamaPegawai')}}">
                        @error('NamaPegawai') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Address</label>
                        <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{old('Alamat')}}">
                        @error('Alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Role Pekerjaan</label>
                        <input type="text" class="form-control @error('RolePekerjaan') is-invalid @enderror" id="exampleInputPassword" placeholder="Role Pekerjaan" name="RolePekerjaan">
                        @error('RolePekerjaan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('employees.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop