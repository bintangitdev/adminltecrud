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
                        <a href="{{ route('experience.create') }}" class="btn btn-primary mb-2">
                            TAMBAH PENGALAMAN
                        </a>
                        <table class="table table-hover table-bordered table-stripped">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Tempat Kerja</th>
                                <th scope="col">Lama Kerja</th>
                                <th scope="col">Profesi</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($Experience as $key => $Pengalaman)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $Pengalaman->NamaTempatKerja }}</td>
                                    <td>{{ $Pengalaman->LamaKerja }}</td>
                                    <td>{{ $Pengalaman->Profesi }}</td>
                                    <td>{{ $Pengalaman->Deskripsi }}</td>
                                    <td>
                                        <a href="{{route('experience.edit', $Pengalaman->id)}}" class="btn btn-primary btn-xs">
                                            Edit
                                        </a>
                                        <!-- <a href="{{ route('experience.destroy', $Pengalaman->id)}}" class="btn btn-danger btn-xs">
                                            Delete
                                        </a> -->
                                        <form action="{{ route('experience.destroy', $Pengalaman->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger btn-xs" type="submit" value="Delete" />
                                        </form>
                                    </td>
                            
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                            
                          </table>  
                    </div>
                    {{ $Experience->links() }}
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