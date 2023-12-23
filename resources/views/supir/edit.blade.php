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



                            <h1>Edit Data Kurir</h1>
                        </div>
                    </div>

                    <div class="panel">

                        <form action="/supir/{{ $supir->id }}/edit" method="post">
                            <div class="panel-body">
                                @method('put')
                                @csrf
                                <input class="form-control input-lg" name="no_ktp" value="{{ $supir->no_ktp }}"
                                    placeholder="no ktp" type="number">
                                <br>
                                <input class="form-control input-lg" name="nama"value="{{ $supir->nama }}"
                                    placeholder="nama" type="text">
                                <br>
                                <input class="form-control input-lg" name="alamat" value="{{ $supir->alamat }}"
                                    placeholder="alamat" type="text">
                                <br>
                                <input class="form-control input-lg" name="telp" value="{{ $supir->telp }}"
                                    placeholder="no telp" type="number">
                                <br>
                                {{-- <select class="form-control input-lg">
                                        <option value="cheese">Cheese</option>
                                        <option value="tomatoes">Tomatoes</option>
                                        <option value="mozarella">Mozzarella</option>
                                        <option value="mushrooms">Mushrooms</option>
                                        <option value="pepperoni">Pepperoni</option>
                                        <option value="onions">Onions</option>
                                    </select> --}}
                                <br>

                                <input type="submit" value="Update">
                        </form>
                    </div>
                    </form>
                </div>
            </div>
            <!-- END TABLE STRIPED -->
        </div>

    </div>
@endsection
