<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('backend.pages.gejala.index', compact('gejalas'));
    }

    public function create()
    {
        return view('backend.pages.gejala.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|unique:gejalas',
            'nama_gejala' => 'required',
        ]);

        Gejala::create($request->all());

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil ditambahkan.');
    }

    public function show(Gejala $gejala)
    {
        return view('backend.pages.gejala.show', compact('gejala'));
    }

    public function edit(Gejala $gejala)
    {
        return view('backend.pages.gejala.edit', compact('gejala'));
    }

    public function update(Request $request, Gejala $gejala)
    {
        $request->validate([
            'kode_gejala' => 'required|unique:gejalas,kode_gejala,' . $gejala->id,
            'nama_gejala' => 'required',
        ]);

        $gejala->update($request->all());

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil diperbarui.');
    }

    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil dihapus.');
    }
}
