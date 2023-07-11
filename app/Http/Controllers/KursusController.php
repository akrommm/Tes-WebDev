<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    function index()
    {
        $data['list_kursus'] = Kursus::all();
        return view('kursus.index', $data);
    }

    public function create()
    {
        return view('kursus.create');
    }

    public function store()
    {
        $kursus = new Kursus();
        $kursus->judul = request('judul');
        $kursus->durasi = request('durasi');
        $kursus->deskripsi = request('deskripsi');
        $kursus->save();

        return redirect('admin/kursus')->with('success', 'Data Kursus Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $materi = Materi::all();
        $kursus = Kursus::findOrFail($id);
        return view('kursus.show', compact('materi', 'kursus'));
    }

    public function edit($id)
    {
        return view('kursus.edit', [
            'kursus' => Kursus::findOrFail($id)
        ]);
    }

    public function update($id)
    {
        $kursus = Kursus::find($id);
        if (request('judul')) $kursus->judul = request('judul');
        if (request('durasi')) $kursus->durasi = request('durasi');
        if (request('deskripsi')) $kursus->deskripsi = request('deskripsi');
        $kursus->save();

        return redirect('admin/kursus')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $kursus = Kursus::find($id);
        $kursus->delete();
        return redirect('admin/kursus')->with('danger', 'Data Berhasil Dihapus');
    }
}
