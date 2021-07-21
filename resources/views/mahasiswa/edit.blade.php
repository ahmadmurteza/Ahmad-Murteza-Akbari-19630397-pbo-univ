@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Form Edit
                </div>

                <div class="card-body">
                    <form action="{{ Route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" name="user_id">
                                        <option selected disabled>-- Pilih Nama --</option>
                                        @foreach ($user as $u)
                                            <option value="{{ $u->id }}"{{ $mahasiswa->user_id == $u->id ? ' selected' : ' ' }}>{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Tambahkan NPM" maxlength="8" 
                                    value="{{ is_null($mahasiswa) ? '' : $mahasiswa->npm }}">
                                </div>
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir" 
                                    value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir"
                                    value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tanggal_lahir }}">
                                </div>
                                <div class="col">
                                    <label for="">Gender</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" name="gender">
                                        <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                        <option value="L"{{ $mahasiswa->gender == "L" ? ' selected' : ' ' }}>Laki-laki</option>
                                        <option value="P"{{ $mahasiswa->gender == "P" ? ' selected' : ' ' }}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Telepon" 
                                    value="{{ is_null($mahasiswa) ? '' : $mahasiswa->telepon }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ is_null($mahasiswa) ? '' : $mahasiswa->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button class="btn btn-md btn-primary" type="submit">Simpan</button>
                                    <a href="{{ Route('mahasiswa') }}" class="btn btn-md btn-danger">Batal</a>
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
