<?php

namespace App\Http\Controllers;

use App\Models\Makul;
Use Alert;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();
        return view("makul.index", compact('makul'));
    }

    public function create()
    {
        return view("makul.create");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Makul::create($request->all());
        toast('Data Berhasil Ditambahkan','success');
        return redirect()->route('makul');
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
