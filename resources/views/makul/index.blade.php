@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Mata Kuliah
                    <a href="{{ Route('tambah.makul') }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Kode Makul</th>
                                <th>Nama Makul</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($makul as $mk)
                            <tr>
                                <td>{{ $mk->id }}</td>
                                <td>{{ $mk->kd_makul }}</td>
                                <td>{{ $mk->nama_makul }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td>
                                    <a href="{{ Route('edit.makul', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ Route('hapus.makul', $mk->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
