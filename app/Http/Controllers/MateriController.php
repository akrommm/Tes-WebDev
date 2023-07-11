<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    function index()
    {
        $data['list_materi'] = Materi::all();
        return view('materi.index', $data);
    }

    public function create()
    {
        return view('materi.create');
    }

    public function store()
    {
        $materi = new Materi();
        $materi->judul = request('judul');
        $materi->id_kursus = request('id_kursus');
        $materi->deskripsi = request('deskripsi');
        $materi->link = request('link');
        $materi->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        return view('materi.show', [
            'materi' => Materi::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('materi.edit', [
            'materi' => Materi::findOrFail($id)
        ]);
    }

    public function update($id)
    {
        $materi = Materi::find($id);
        if (request('judul')) $materi->judul = request('judul');
        if (request('deskripsi')) $materi->deskripsi = request('deskripsi');
        if (request('link')) $materi->link = request('link');
        $materi->save();

        return redirect()->to('admin/kursus/' . $materi->id_kursus)->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $materi = Materi::find($id);
        $materi->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
