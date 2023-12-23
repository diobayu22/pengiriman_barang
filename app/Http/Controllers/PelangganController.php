<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('pelanggan.index', compact(['pelanggan']));
    }

    public function create(Request $request)
    {
        $pelanggan = pelanggan::all();
        pelanggan::create($request->except(['_token']));
        return redirect('/pelanggan')->with('sukses', 'Data berhasil diinput');
        // return $request->all();
    }

    public function edit($id)
    {
        $pelanggan = pelanggan::find($id);
        return view('pelanggan.edit', ['pelanggan' => $pelanggan]);
    }

    public function update($id, Request $request)
    {
        $pelanggan = pelanggan::find($id);
        // dd($request->all());
        $pelanggan->update($request->all());
        return redirect('/pelanggan');
    }

    public function delete($id)
    {
        $pelanggan = pelanggan::find($id);
        $pelanggan->delete($pelanggan);
        return redirect('/pelanggan')->with('sukses', 'data berhasil di hapus');
    }
}
