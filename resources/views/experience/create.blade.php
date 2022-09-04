@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah User</h1>
@stop
@section('content')
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Tempat Kerja</label>
                                <input type="text" class="form-control @error('NamaTempatKerja') is-invalid @enderror" id="NamaTempatKerja" name="NamaTempatKerja" value="{{ old('NamaTempatKerja') }}" placeholder="Masukkan Nama Tempat Kerja">
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Lama Kerja</label>
                                <input type="text" class="form-control @error('LamaKerja') is-invalid @enderror" id="LamaKerja" name="LamaKerja" value="{{ old('LamaKerja') }}" placeholder="Masukkan LamaKerja">
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('Profesi') is-invalid @enderror" id="Profesi" name="Profesi" value="{{ old('Profesi') }}" placeholder="Masukkan Profesi">              
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>
                                <input type="text" class="form-control @error('Deskripsi') is-invalid @enderror" id="Deskripsi" name="Deskripsi" value="{{ old('Deskripsi') }}" placeholder="Masukkan Deskripsi">
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@stop