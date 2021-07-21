<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Makul;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa', 'makul'])->get();
        return view("nilai.index", compact('nilai'));
    }

    public function create()
    {  
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        return view("nilai.create", compact('makul', 'mahasiswa'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Nilai::create($request->all());
        toast('Data Berhasil Ditambahkan','success');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        // dd($request->all());
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view("nilai.edit", compact('mahasiswa', 'makul', 'nilai'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil Diperbaharui','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        // dd($request->all());
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Data Berhasil Dihapus','warning');
        return redirect()->route('nilai');
    }
}
