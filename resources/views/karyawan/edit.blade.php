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
                        <form action="/staff/{{ $karyawan->id }}/edit" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <div class="form-group">

                                <input type="text" name="username" value="{{ $karyawan->username }}" class="form-control"
                                    id="email" placeholder="username">
                            </div>

                            <div class="form-group">

                                <input type="text" name="jabatan" value="{{ $karyawan->jabatan }}" class="form-control"
                                    id="email" placeholder="jabatan">
                            </div>



                            <div class="form-group">
                                <select name="hak_akses" class="form-control" id="email">

                                    <option>Pilih Hak Akses</option>
                                    <option value="admin" @if ($karyawan->hak_akses == 'admin') selected @endif>admin</option>
                                    <option value="pimpinan" @if ($karyawan->hak_akses == 'pimpinan') selected @endif>pimpinan
                                    </option>
                                    <option value="crew" @if ($karyawan->hak_akses == 'crew') selected @endif>crew
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
