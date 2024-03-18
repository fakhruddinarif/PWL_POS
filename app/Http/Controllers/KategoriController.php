<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        Kategori::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori
        ]);

        return redirect('/kategori');
    }
    public function update($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.update', ['data' => $kategori]);
    }

    public function update_simpan($id, Request $request)
    {
        $request->validate([
            'kodeKategori' => 'required',
            'namaKategori' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();
        return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui.');
    }
    public function hapus($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }
}
