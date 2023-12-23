<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact(['karyawan']));
    }

    public function create(Request $request)
    {
        $karyawan = Karyawan::all();
        Karyawan::create($request->except(['_token']));
        return redirect('/staff')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    public function update($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        // dd($request->all());
        $karyawan->update($request->all());
        return redirect('/staff');
    }

    public function delete($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete($karyawan);
        return redirect('/staff')->with('sukses', 'data berhasil di hapus');
    }
}
