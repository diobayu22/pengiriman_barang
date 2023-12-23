<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    public function index()
    {
        $supir = Supir::all();
        return view('supir.index', compact(['supir']));
    }

    public function create(Request $request)
    {
        $supir = Supir::all();
        return view('supir.create', compact(['supir']));
    }

    public function store(Request $request)
    {
        // dd($request);

        Supir::create($request->except(['_token', 'submit']));
        return redirect('/supir');
    }

    public function edit($id)
    {
        $supir = Supir::find($id);
        return view('supir.edit', ['supir' => $supir]);
    }

    public function update($id, Request $request)
    {
        $supir = Supir::find($id);
        // dd($request->all());
        $supir->update($request->except(['_token', 'submit']));
        return redirect('/supir');
    }

    public function delete($id)
    {
        $supir = Supir::find($id);
        $supir->delete($supir);
        return redirect('/supir')->with('sukses', 'data berhasil di hapus');
    }
}
