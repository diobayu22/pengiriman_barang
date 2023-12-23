@extends('layouts.header1')

@section('content')
    <h1>wfhwruifhi</h1>
    <div class="container">

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- TABLE STRIPED -->
                        <div class="panel">
                            <div class="panel-body">

                                <div>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-default float-end" data-toggle="modal"
                                                    data-target="#myModal"><i class="fa fa-plus-square"></i> Tambah
                                                </button>
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
                                            <th>Penerima</th>
                                            <th>Barang</th>
                                            <th>Biaya Kirim</th>
                                            <th>Status</th>
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
                                                <td>{{ $peng->pengirim }}</td>
                                                <td>{{ $peng->penerima }}</td>
                                                <td>{{ $peng->barang }}</td>
                                                <td>{{ $peng->biaya_kirim }}</td>
                                                <td>{{ $peng->status }}</td>

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

            </div>
        </div>
    </div>
@endsection
