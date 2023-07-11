<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $data['list_user'] = User::all();
        return view('user.index', $data);
    }

    public function show($id)
    {
        return view('user.show', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('user.edit', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store()
    {
        $user = new User();
        $user->nama = request('nama');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();

        $user->handleUploadFoto();

        return redirect('admin/user')->with('success', 'Data user Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $user = User::find($id);
        if (request('nama')) $user->nama = request('nama');
        if (request('username')) $user->username = request('username');
        if (request('email')) $user->email = request('email');
        if (request('jenis_kelamin')) $user->jenis_kelamin = request('jenis_kelamin');
        if (request('password')) $user->password = request('password');
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
