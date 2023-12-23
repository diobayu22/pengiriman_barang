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
                                <h1>Edit Data Kendaraan</h1>
                            </div>

                        </div>


                        <form action="/kendaraan/{{ $kendaraan->id }}/edit" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <div class="form-group">

                                <input type="text" name="no_polisi" value="{{ $kendaraan->no_polisi }}"
                                    class="form-control" id="email" placeholder="No Polisi">
                            </div>

                            <div class="form-group">

                                <input type="text" name="merk" value="{{ $kendaraan->merk }}" class="form-control"
                                    id="email" placeholder="Merk">
                            </div>

                            {{-- <div class="form-group">
                        <select name="jenis_kelamin" class="form-control" id="email">

                            <option>Pilih Jenis Kelamin</option>
                            <option value="L" @if ($siswa->jenis_kelamin == 'laki-laki') selected @endif>laki-laki</option>
                            <option value="P" @if ($siswa->jenis_kelamin == 'perempuan') selected @endif>Perempuan</option>
                        </select>
                    </div> --}}

                            <div class="form-group">

                                <input type="text" name="no_mesin" value="{{ $kendaraan->no_mesin }}"
                                    class="form-control" id="email" placeholder="No Mesin">
                            </div>

                            <div class="form-group">

                                <input type="text" name="tahun" value="{{ $kendaraan->tahun }}" class="form-control"
                                    id="email" placeholder="Tahun">
                            </div>

                            <div class="form-group">

                                <input type="text" name="warna" value="{{ $kendaraan->warna }}" class="form-control"
                                    id="email" placeholder="Warna">
                            </div>


                            <div class="form-group">
                                <select name="supir_id" class="form-control" id="email">
                                    <option value="">pilih kurir</option>
                                    @foreach ($supir as $sup)
                                        <option value="{{ $sup->id }}"
                                            {{ $kendaraan->supir_id == $sup->id ? 'selected' : '' }}>
                                            {{ $sup->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
