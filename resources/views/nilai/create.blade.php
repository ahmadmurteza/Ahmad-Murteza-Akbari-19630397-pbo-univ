@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Form Create
                </div>

                <div class="card-body">
                    <form action="{{ Route('simpan.nilai') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Makul</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" name="makul_id">
                                <option selected disabled>-- Pilih Nama Makul --</option>
                                @foreach ($makul as $mk)
                                    <option value="{{ $mk->id }}">{{ $mk->nama_makul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" name="mahasiswa_id">
                                <option selected disabled>-- Pilih Nama --</option>
                                @foreach ($mahasiswa as $mh)
                                    <option value="{{ $mh->id }}">{{ $mh->user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input class="form-control" type="text" id="nilai" placeholder="Masukan Nilai" name="nilai">
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button class="btn btn-md btn-primary" type="submit">Simpan</button>
                                    <a href="{{ Route('nilai') }}" class="btn btn-md btn-danger">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
