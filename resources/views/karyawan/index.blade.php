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
                                    <h2>Data Staff</h2>
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
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Hak Akses</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($karyawan as $kar)
                                        <tr>

                                            <td>{{ $no++ }}</td>
                                            <td>{{ $kar->username }}</td>
                                            <td>{{ $kar->jabatan }}</td>
                                            <td>{{ $kar->hak_akses }}</td>


                                            <td><a href="/staff/{{ $kar->id }}/edit"><i
                                                        class="lnr lnr-file-empty"></i></a>
                                                <a href="/staff/{{ $kar->id }}/delete"><i
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
                            <h4 class="modal-title">Tambah Pengguna</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="/staff/create" method="post">
                                @csrf



                                <div class="form-group">

                                    <input type="text" name="username" class="form-control" id="email"
                                        placeholder="Nama">
                                </div>

                                <div class="form-group">

                                    <input type="text" name="jabatan" class="form-control" id="email"
                                        placeholder="Jabatan">
                                </div>

                                <div class="form-group">
                                    <select name="hak_akses" class="form-control" id="email">
                                        <option value="">Pilih Hak Akses</option>
                                        <option value="pimpinan">Pimpinan</option>
                                        <option value="admin">Admin</option>
                                        <option value="crew">Crew</option>
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
