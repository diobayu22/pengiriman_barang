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
                                    <h2>Data Pengirim</h2>
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
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($pengirim as $peng)
                                    <tr>



                                        <td>{{ $no++ }}</td>
                                        <td>{{ $peng->nama }}</td>
                                        <td>{{ $peng->alamat }}</td>
                                        <td>{{ $peng->no_hp }}</td>

                                        <td><a href="/pengirim/{{ $peng->id }}/edit"><i
                                                    class="lnr lnr-file-empty"></i></a>
                                            <a href="/pengirim/{{ $peng->id }}/delete"><i
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
                        <h4 class="modal-title">Tambah Pengirim</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/pengirim/create" method="post">
                            @csrf


                            <div class="form-group">

                                <input type="text" name="nama" class="form-control" id="email" placeholder="Nama">
                            </div>




                            <div class="form-group">
                                {{-- <select name="agama" class="form-control" id="email">
                                <option value="">pilih agama</option>
                                @foreach ($siswa as $s)
                                    <option value="">{{ $s->agama }}</option>
                                @endforeach
                            </select> --}}
                                <input type="text" name="alamat" class="form-control" id="email"
                                    placeholder="Alamat">
                            </div>

                            <div class="form-group">

                                <input type="text" name="no_hp" class="form-control" id="email"
                                    placeholder="No HP">
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
