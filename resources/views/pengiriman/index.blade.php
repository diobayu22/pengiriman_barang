@extends('layouts.header')

@section('content')
    <div class="container">

        {{-- <div>

        @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}

            </div>
        @endif
    </div> --}}

        @if (session('sukses'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <i class="fa fa-check-circle"></i> Your settings have been succesfully saved
                {{ session('sukses') }}
            </div>
        @endif
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->

            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE STRIPED -->
                    <div class="panel">
                        <div class="panel-body">



                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h2>Data Pengiriman Barang</h2>
                                </div>

                            </div>
                            <div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="pull-right">
                                            <button type="button" class="btn btn-default float-end" data-toggle="modal"
                                                data-target="#myModal"><i class="fa fa-plus-square"></i> Tambah </button>
                                        </div>
                                    </div>
                                </div>


                            </div>




                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pengiriman</th>
                                        <th>Tanggal</th>
                                        <th>Pengirim</th>
                                        <th>Customer</th>
                                        <th>Barang</th>
                                        <th>Biaya Kirim</th>
                                        <th>Status</th>
                                        <th>Kurir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pengiriman as $peng)
                                        <tr>

                                            <td>{{ $no++ }}</td>
                                            <td>{{ $peng->no_pengiriman }}</td>
                                            <td>{{ $peng->created_at }}</td>
                                            <td>{{ $peng->pelanggan->nama }}</td>
                                            <td>{{ $peng->pengirim->nama }}</td>
                                            <td>{{ $peng->barang }}</td>
                                            <td>{{ $peng->biaya_kirim }}</td>
                                            <td>{{ $peng->status }}</td>
                                            <td>{{ $peng->supir->nama }}</td>

                                            <td><a href="/pengiriman/{{ $peng->id }}/edit"><i
                                                        class="lnr lnr-file-empty"></i></a>
                                                <a href="/pengiriman/{{ $peng->id }}/delete"><i
                                                        class="lnr
                                                    lnr-trash"></i></a>
                                                <a href="/pengiriman/{{ $peng->id }}/view"><i
                                                        class="
                                                    fa fa-eye"></i></a>

                                                {{-- <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i>
                                                    <span>Notifications</span></a></li> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE STRIPED -->
                </div>

            </div>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data Pengiriman</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="/pengiriman/create" method="post">
                                @csrf

                                <div class="form-group">

                                    <input type="text" name="no_pengiriman" class="form-control" id="email"
                                        placeholder="No Pengiriman">
                                </div>


                                {{-- <div class="form-group">
                                    <select name="jenis_kelamin" class="form-control" id="email">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div> --}}



                                <div class="form-group">
                                    <select name="pelanggan_id" class="form-control" id="email">
                                        <option value="">pilih Customer</option>
                                        @foreach ($pelanggan as $pel)
                                            <option value="{{ $pel->id }}"> {{ $pel->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="pengirim_id" class="form-control" id="email">
                                        <option value="">pilih Pengirim</option>
                                        @foreach ($pengirim as $peng)
                                            <option value="{{ $peng->id }}"> {{ $peng->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">

                                    <input type="text" name="barang" class="form-control" id="email"
                                        placeholder="Barang">
                                </div>

                                <div class="form-group">

                                    <input type="text" name="biaya_kirim" class="form-control" id="email"
                                        placeholder="Biaya Kirim">
                                </div>

                                <div class="form-group">

                                    <input type="text" name="status" class="form-control" id="email"
                                        placeholder="status">
                                </div>


                                <div class="form-group">
                                    <select name="supir_id" class="form-control" id="email">
                                        <option value="">pilih kurir</option>
                                        @foreach ($supir as $sup)
                                            <option value="{{ $sup->id }}"> {{ $sup->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>





                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-default">Submit</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                </div>

                            </form>


                            <!-- Modal footer -->
                            {{-- <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                </div> --}}


                        </div>
                    </div>
                @endsection
