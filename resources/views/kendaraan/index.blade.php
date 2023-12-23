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
                                    <h2>Data Kendaraan</h2>
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
                                        <th>No Polisi</th>
                                        <th>Merk</th>
                                        <th>No mesin</th>
                                        <th>Tahun</th>
                                        <th>Warna</th>
                                        <th>Supir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($kendaraan as $kend)
                                        <tr>

                                            <td>{{ $no++ }}</td>
                                            <td>{{ $kend->no_polisi }}</td>
                                            <td>{{ $kend->merk }}</td>
                                            <td>{{ $kend->no_mesin }}</td>
                                            <td>{{ $kend->tahun }}</td>
                                            <td>{{ $kend->warna }}</td>
                                            <td>{{ $kend->supir->nama }}</td>

                                            {{-- <td>{{ $kend-> }}</td> --}}

                                            <td><a href="/kendaraan/{{ $kend->id }}/edit"><i
                                                        class="lnr lnr-file-empty"></i></a>
                                                <a href="/kendaraan/{{ $kend->id }}/delete"><i
                                                        class="lnr
                                                    lnr-trash"></i></a>

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
                            <h4 class="modal-title">Tambah Kendaraan</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="/kendaraan/create" method="post">
                                @csrf

                                <div class="form-group">

                                    <input type="text" name="no_polisi" class="form-control" id="email"
                                        placeholder="No Polisi">
                                </div>

                                <div class="form-group">

                                    <input type="text" name="merk" class="form-control" id="email"
                                        placeholder="Merk">
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
                                    <input type="text" name="no_mesin" class="form-control" id="email"
                                        placeholder="No Mesin">
                                </div>

                                <div class="form-group">

                                    <input type="text" name="tahun" class="form-control" id="email"
                                        placeholder="Tahun">
                                </div>

                                <div class="form-group">

                                    <input type="text" name="warna" class="form-control" id="email"
                                        placeholder="Warna">
                                </div>

                                <div class="form-group">
                                    <select name="supir_id" class="form-control" id="email">
                                        <option value="">pilih Kurir</option>
                                        @foreach ($supir as $sup)
                                            <option value="{{ $sup->id }}"> {{ $sup->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-default">Submit</button>

                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                            </form>
                        </div>

                        </form>
                    </div>

                    <!-- Modal footer -->


                </div>
            </div>
        @endsection
