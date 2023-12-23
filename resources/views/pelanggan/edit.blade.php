{{-- @extends('layouts.app') --}}
@extends('layouts.header')

@section('content')
    <div class="container">



        @if (session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{ session('sukses') }}
                data berhasil diinput
            </div>
        @endif

        <div class="row">
            <div class="col-lg-11">
                <div class="panel">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h1>Edit Data Customer</h1>
                            </div>

                        </div>



                        <form action="/pelanggan/{{ $pelanggan->id }}/edit" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <div class="form-group">

                                <input type="text" name="no_ktp" value="{{ $pelanggan->no_ktp }}" class="form-control"
                                    id="email" placeholder="No KTP">
                            </div>

                            <div class="form-group">

                                <input type="text" name="nama" value="{{ $pelanggan->nama }}" class="form-control"
                                    id="email" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <select name="jenis_kelamin" class="form-control" id="email">

                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki" @if ($pelanggan->jenis_kelamin == 'laki-laki') selected @endif>laki-laki
                                    </option>
                                    <option value="Perempuan" @if ($pelanggan->jenis_kelamin == 'perempuan') selected @endif>Perempuan
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">

                                <input type="text" name="alamat" value="{{ $pelanggan->alamat }}" class="form-control"
                                    id="email" placeholder="Alamat">
                            </div>

                            <div class="form-group">

                                <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}" class="form-control"
                                    id="email" placeholder="No HP">
                            </div>



                            <button type="submit" class="btn btn-default">update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
