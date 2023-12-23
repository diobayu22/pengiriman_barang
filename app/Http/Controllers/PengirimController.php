<?php

namespace App\Http\Controllers;

use App\Models\Pengirim;

use Illuminate\Http\Request;

class PengirimController extends Controller
{
    public function index()
    {
        $pengirim = pengirim::all();
        return view('pengirim.index', compact(['pengirim']));
    }

    public function create(Request $request)
    {
        $pengirim = pengirim::all();
        pengirim::create($request->except(['_token']));
        return redirect('/pengirim')->with('sukses', 'Data berhasil diinput');
        // return $request->all();
    }
}
