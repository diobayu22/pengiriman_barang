@extends('layouts.header1')

@section('content')
    @if ($pengiriman == [])
        <div class="container p-1">
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                data-bs-target="#feedbackModal">
                <span class="d-flex align-items-center">
                    <i class="bi-chat-text-fill me-2"></i>
                    <span class="small">Lacak Barang</span>
                </span>
            </button>
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div>
                </div>
            </div>
        </div>
    @else
        <div class="container p-1">

            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div>
                    <!-- OVERVIEW -->

                    <div class="row">
                        <div class="col-md-12">
                            <!-- TABLE STRIPED -->
                            <div class="panel">

                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Kurir</th>
                                                <th>Customer</th>
                                                <th>Barang</th>
                                                <th>Biaya Kirim</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($pengiriman as $peng)
                                                <tr>

                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $peng->created_at }}</td>
                                                    <td>{{ $peng->supir->nama }}</td>
                                                    <td>{{ $peng->pelanggan->nama }}</td>
                                                    <td>{{ $peng->barang }}</td>
                                                    <td>{{ $peng->biaya_kirim }}</td>
                                                    <td>{{ $peng->status }}</td>

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
    @endif

@endsection
