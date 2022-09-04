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
                        <form action="{{ route('experience.update', $Experience->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div> -->

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Tempat Kerja</label>
                                <input type="text" class="form-control @error('NamaTempatKerja') is-invalid @enderror" name="NamaTempatKerja" value="{{ old('NamaTempatKerja', $Experience->NamaTempatKerja) }}" placeholder="Masukkan Nama Tempat Kerja">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Lama Kerja</label>
                                <input type="text" class="form-control @error('LamaKerja') is-invalid @enderror" name="LamaKerja" value="{{ old('LamaKerja', $Experience->LamaKerja) }}" placeholder="Masukkan Lama Kerja">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('Profesi') is-invalid @enderror" name="Profesi" value="{{ old('Profesi', $Experience->Profesi) }}" placeholder="Masukkan Profesi">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('Deskripsi') is-invalid @enderror" name="Deskripsi" rows="5" placeholder="Masukkan Konten Deskripsi">{{ old('Deskripsi', $Experience->Deskripsi) }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
        @stop