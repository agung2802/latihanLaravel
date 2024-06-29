<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');

    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);
        Mahasiswa::find($id)->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
