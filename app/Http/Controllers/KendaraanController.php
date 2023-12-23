<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Supir;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        $supir = Supir::all();
        return view('kendaraan.index', compact(['kendaraan', 'supir']));
    }

    public function create(Request $request)
    {
        $kendaraan = new Kendaraan();
        $kendaraan->no_polisi = $request->no_polisi;
        $kendaraan->merk = $request->merk;
        $kendaraan->no_mesin = $request->no_mesin;
        $kendaraan->tahun = $request->tahun;
        $kendaraan->warna = $request->warna;
        $kendaraan->supir_id = $request->supir_id;

        $kendaraan->save();

        return redirect('/kendaraan')->with('sukses', 'Data berhasil diinput');
        // return $request->all();
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);
        $supir = Supir::all();
        return view('kendaraan.edit', compact('kendaraan', 'supir'));
    }

    public function update($id, Request $request)
    {
        $kendaraan = Kendaraan::find($id);

        if (!$kendaraan) {
            return redirect()->back()->with('error', 'Dosen not found.');
        }



        $kendaraan->no_polisi = $request->no_polisi;
        $kendaraan->merk = $request->merk;
        $kendaraan->no_mesin = $request->no_mesin;
        $kendaraan->tahun = $request->tahun;
        $kendaraan->warna = $request->warna;
        $kendaraan->supir_id = $request->supir_id;
        $kendaraan->save();

        return redirect('/kendaraan');
    }

    public function delete($id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->delete($kendaraan);
        return redirect('/kendaraan')->with('sukses', 'data berhasil di hapus');
    }
}
