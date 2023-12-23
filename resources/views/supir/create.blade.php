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
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <b>
                                                <h1 class="panel-title">Create Data Kurir</h1>
                                            </b>

                                        </div>
                                        <form action="/supir/store" method="post">
                                            <div class="panel-body">
                                                @csrf
                                                <input class="form-control input-lg" name="no_ktp" placeholder="no ktp"
                                                    type="number">
                                                <br>
                                                <input class="form-control input-lg" name="nama" placeholder="nama"
                                                    type="text">
                                                <br>
                                                <input class="form-control input-lg" name="alamat" placeholder="alamat"
                                                    type="text">
                                                <br>
                                                <input class="form-control input-lg" name="telp" placeholder="no telp"
                                                    type="number">
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
                                                <input type="submit" value="Save">
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!-- END TABLE STRIPED -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
