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

        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        <h1>Edit Data Pengiriman Barang</h1>
                                    </div>

                                </div>


                                <form action="/pengiriman/{{ $pengiriman->id }}/edit" method="post"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <div class="form-group">

                                        <input type="text" name="no_pengiriman" value="{{ $pengiriman->no_pengiriman }}"
                                            class="form-control" id="email" placeholder="No Pengiriman">
                                    </div>

                                    <div class="form-group">
                                        <select name="pelanggan_id" class="form-control" id="email">
                                            <option value="">pilih Customer</option>
                                            @foreach ($pelanggan as $pel)
                                                <option value="{{ $pel->id }}"
                                                    {{ $pengiriman->pelanggan_id == $pel->id ? 'selected' : '' }}>
                                                    {{ $pel->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>







                                    <div class="form-group">

                                        <input type="text" name="barang" value="{{ $pengiriman->barang }}"
                                            class="form-control" id="email" placeholder="Barang">
                                    </div>

                                    <div class="form-group">

                                        <input type="text" name="biaya_kirim" value="{{ $pengiriman->biaya_kirim }}"
                                            class="form-control" id="email" placeholder="Biaya Kirim">
                                    </div>



                                    <div class="form-group">
                                        <select name="status" class="form-control" id="email">

                                            <option>Pilih Status</option>
                                            <option value="terkirim" @if ($pengiriman->status == 'Terkirim') selected @endif>
                                                Terkirim
                                            </option>
                                            <option value="belum terkirim"
                                                @if ($pengiriman->status == 'Belum Terkirim') selected @endif>Belum
                                                Terkirim
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="supir_id" class="form-control" id="email">
                                            <option value="">pilih kurir</option>
                                            @foreach ($supir as $sup)
                                                <option value="{{ $sup->id }}"
                                                    {{ $pengiriman->supir_id == $sup->id ? 'selected' : '' }}>
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
            </div>
        </div>
    @endsection
