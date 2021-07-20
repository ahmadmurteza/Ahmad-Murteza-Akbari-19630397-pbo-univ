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
        $makul = Makul::find($id);
        return view("makul.edit", compact('makul'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Data Berhasil Diperbaharui','success');
        return redirect()->route('makul');
    }

    public function destroy($id)
    {
        // dd($request->all());
        $makul = Makul::find($id);
        $makul->delete();
        toast('Data Berhasil Dihapus','warning');
        return redirect()->route('makul');
    }
}
