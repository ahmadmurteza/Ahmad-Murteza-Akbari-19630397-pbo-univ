<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['user'])->get();
        return view("mahasiswa.index", compact('mahasiswa'));
    }

    public function create()
    {  
        $user = User::all();
        return view("mahasiswa.create", compact('user'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Mahasiswa::create($request->all());
        toast('Data Berhasil Ditambahkan','success');
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
        // dd($request->all());
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id);
        return view("mahasiswa.edit", compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Berhasil Diperbaharui','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        // dd($request->all());
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Data Berhasil Dihapus','warning');
        return redirect()->route('mahasiswa');
    }
}
