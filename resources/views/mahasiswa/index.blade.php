@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Mahasiswa
                    <a href="{{ Route('tambah.mahasiswa') }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>TELEPON</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>
                            <?php $i=1; ?>
                            @foreach ($mahasiswa as $mh)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $mh->npm }}</td>
                                <td>{{ $mh->user->name }}</td>
                                <td>{{ $mh->tempat_lahir.', '. $mh->tanggal_lahir}}</td>
                                <td>{{ $mh->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                <td>{{ $mh->telepon }}</td>
                                <td>{{ $mh->alamat }}</td>
                                <td>
                                    <a href="{{ Route('edit.mahasiswa', $mh->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ Route('hapus.mahasiswa', $mh->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
