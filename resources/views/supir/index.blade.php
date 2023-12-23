@extends('layouts.header')

@section('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->

            <div class="row">
                <div class="col-md-11">
                    <!-- TABLE STRIPED -->
                    <div class="panel">
                        <div class="panel-heading text-center">

                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h2>Data Kurir</h2>
                                </div>

                            </div>

                            <div class="pull-right -bottom-3">
                                <a href="/supir/create" class="btn btn-default btm-sm ">tambah</a>
                            </div>

                        </div>




                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>No Ktp</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($supir as $sup)
                                        <tr>

                                            <td>{{ $no++ }}</td>
                                            <td>{{ $sup->no_ktp }}</td>
                                            <td>{{ $sup->nama }}</td>
                                            <td>{{ $sup->alamat }}</td>
                                            <td>{{ $sup->telp }}</td>
                                            <td><a href="/supir/{{ $sup->id }}/edit"><i
                                                        class="lnr lnr-file-empty"></i></a>
                                                <a href="/supir/{{ $sup->id }}/delete"><i
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
        @endsection
