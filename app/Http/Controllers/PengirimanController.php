<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use App\Models\Supir;
use App\Models\Pengirim;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('cari')) {
            $pengiriman = Pengiriman::where('no_pengiriman', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $pengiriman = pengiriman::all();
        }
        $supir = Supir::all();
        $pengirim = pengirim::all();
        $pelanggan = pelanggan::all();
        $pengiriman = pengiriman::all();

        return view('pengiriman.index', compact(['pengiriman', 'supir', 'pelanggan', 'pengirim']));
    }




    public function create(Request $request)
    {

        $pengiriman = new Pengiriman();

        $pengiriman->no_pengiriman = $request->no_pengiriman;
        $pengiriman->created_at = $request->created_at;
        $pengiriman->supir_id = $request->supir_id;
        $pengiriman->pelanggan_id = $request->pelanggan_id;
        $pengiriman->pengirim_id = $request->pengirim_id;
        $pengiriman->barang = $request->barang;
        $pengiriman->biaya_kirim = $request->biaya_kirim;
        $pengiriman->status = $request->status;

        // 


        $pengiriman->save();

        // $supir = Supir::all();
        // Pengiriman::create($request->except(['_token']));
        return redirect('/pengiriman')->with('sukses', 'Data berhasil diinput');
        // return $request->all();
    }

    public function edit($id)
    {
        $pengiriman = Pengiriman::find($id);
        $supir = Supir::all();
        $pelanggan = pelanggan::all();
        return view('pengiriman.edit', compact('pengiriman', 'supir', 'pelanggan'));
    }



    public function update($id, Request $request)


    {
        $pengiriman = Pengiriman::find($id);

        if (!$pengiriman) {
            return redirect()->back()->with('error', 'Dosen not found.');
        }



        $pengiriman->no_pengiriman = $request->no_pengiriman;
        $pengiriman->created_at = $request->created_at;
        $pengiriman->supir_id = $request->supir_id;
        $pengiriman->pelanggan_id = $request->pelanggan_id;
        $pengiriman->barang = $request->barang;
        $pengiriman->biaya_kirim = $request->biaya_kirim;
        $pengiriman->status = $request->status;
        $pengiriman->save();
        return redirect('/pengiriman');
    }




    public function delete($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete($pengiriman);
        return redirect('/pengiriman')->with('sukses', 'data berhasil di hapus');
    }

    public function lacak(Request $request)
    {

        $query = Pengiriman::query();

        if ($request->has('cari')) {
            $query->where(function ($subquery) use ($request) {
                $subquery->where('no_pengiriman', 'LIKE', '%' . $request->cari . '%')
                    ->orWhere('barang', 'LIKE', '%' . $request->cari . '%')
                    ->orWhereHas('supir_id', function ($subquery) use ($request) {
                        $subquery->where('supir_id', 'LIKE', '%' . $request->cari . '%');
                    });
            });
        } else {
            $pengiriman = [];
        }

        $pengiriman = $query->get();
        return view('pengiriman.lacak', compact(['pengiriman']));
    }

    public function pdf($id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('pengiriman.cetak', ['pengiriman' => $pengiriman]);
    }
}
