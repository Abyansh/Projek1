<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('mahasiswa.input-form');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'jk' => 'required',
            'email' => 'required|email|unique:mahasiswas'
        ]);

        // Simpan data (contoh)
        Mahasiswa::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}