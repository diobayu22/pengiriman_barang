@extends('layouts.header')

@section('content')
    @php
        $complete = App\Models\Pengiriman::where('status', 'terkirim')->get();
        $notcomplete = App\Models\Pengiriman::where('status', 'belum terkirim')->get();
        $allstatus = App\Models\Pengiriman::whereIn('status', ['terkirim', 'belum terkirim'])->get();
        $jmlh_sales = App\Models\Pengiriman::sum('biaya_kirim');
        
    @endphp

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
                                    <h2>Laporan</h2>
                                </div>

                            </div>
                            <div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        {{-- <div class="pull-right">
                                            <button type="button" class="btn btn-default float-end" data-toggle="modal"
                                                data-target="#myModal"><i class="fa fa-plus-square"></i> Tambah </button>
                                        </div> --}}
                                    </div>
                                </div>


                            </div>




                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Target/produk</th>
                                        <th>Sales</th>
                                        <th>Aktual</th>
                                        <th>Jumlah pengirim</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>

                                    <tr>

                                        <td>{{ $no++ }}</td>
                                        <td> 899</td>
                                        <td>Rp 30.000.000</td>
                                        <td>Rp {{ $jmlh_sales }}</td>
                                        <td>{{ count($allstatus) }}</td>


                                        <td><a href="#"><i class="lnr lnr-file-empty"></i></a>
                                            <a href="#"><i
                                                    class="lnr
                                                    lnr-trash"></i></a>

                                            {{-- <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i>
                                                    <span>Notifications</span></a></li> --}}
                                        </td>
                                    </tr>

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

                                <div class="form-group">

                                    <input type="text" name="pengirim" class="form-control" id="email"
                                        placeholder="Pengirim">
                                </div>

                                {{-- <div class="form-group">
                                    <select name="jenis_kelamin" class="form-control" id="email">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div> --}}



                                <div class="form-group">
                                    {{-- <select name="agama" class="form-control" id="email">
                                <option value="">pilih agama</option>
                                @foreach ($siswa as $s)
                                    <option value="">{{ $s->agama }}</option>
                                @endforeach
                            </select> --}}
                                    <input type="text" name="penerima" class="form-control" id="email"
                                        placeholder="Penerima">
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
                                    <select name="status" class="form-control" id="email">
                                        <option value="">Pilih Status</option>
                                        <option value="L">Terkirim</option>
                                        <option value="P">Belum Terkirim</option>
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
