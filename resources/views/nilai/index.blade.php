@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Mahasiswa
                    <a href="{{ Route('tambah.nilai') }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            <?php $i=1; ?>
                            @foreach ($nilai as $n)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $n->mahasiswa->npm }}</td>
                                <td>{{ $n->mahasiswa->user->name }}</td>
                                <td>{{ $n->makul->nama_makul }}</td>
                                <td>{{ $n->makul->sks }}</td>
                                <td>{{ $n->nilai }}</td>
                                <td>
                                    <a href="{{ Route('edit.nilai', $n->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ Route('hapus.nilai', $n->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
