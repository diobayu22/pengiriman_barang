@extends('layouts.header')

@section('content')
    @php
        $complete = App\Models\Pengiriman::where('status', 'terkirim')->get();
        $notcomplete = App\Models\Pengiriman::where('status', 'belum terkirim')->get();
        $allstatus = App\Models\Pengiriman::whereIn('status', ['terkirim', 'belum terkirim'])->get();
        $jmlh_sales = App\Models\Pengiriman::sum('biaya_kirim');
        
    @endphp
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Month Overview</h3>
                    <p class="panel-subtitle">Period: , 27 juny - 7 july, 2023</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                <p>
                                    <span class="number">952</span>
                                    <span class="title">Target/Produk</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-upload"></i></span>
                                <p>
                                    <span class="number">{{ count($complete) }}</span>
                                    <span class="title">terkirim</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                <p>
                                    <span class="number">{{ count($notcomplete) }}</span>
                                    <span class="title">Belum terkirim</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-line-chart"></i></span>
                                <p>
                                    <span class="number">{{ count($allstatus) }}</span>
                                    <span class="title">Total</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div id="headline-chart" class="ct-chart"><svg
                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300"
                                    class="ct-chart-line" style="width: 100%; height: 300;">
                                    <g class="ct-grids">
                                        <line y1="265" y2="265" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                        <line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                        <line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                        <line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                        <line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                        <line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                        <line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                        <line y1="15" y2="15" x1="50" x2="812.25"
                                            class="ct-grid ct-vertical"></line>
                                    </g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <path
                                                d="M50,265L50,172.143L177.042,129.286L304.083,165L431.125,50.714L558.167,157.857L685.208,165L812.25,86.429L812.25,265Z"
                                                class="ct-area"></path>
                                        </g>
                                        <g class="ct-series ct-series-b">
                                            <path
                                                d="M50,265L50,236.429L177.042,157.857L304.083,207.857L431.125,93.571L558.167,129.286L685.208,65L812.25,22.143L812.25,265Z"
                                                class="ct-area"></path>
                                        </g>
                                    </g>
                                    <g class="ct-labels">
                                        <foreignObject style="overflow: visible;" x="50" y="270"
                                            width="127.04166666666667" height="20"><span
                                                class="ct-label ct-horizontal ct-end" style="width: 127px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="177.04166666666669" y="270"
                                            width="127.04166666666667" height="20"><span
                                                class="ct-label ct-horizontal ct-end" style="width: 127px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="304.08333333333337" y="270"
                                            width="127.04166666666666" height="20"><span
                                                class="ct-label ct-horizontal ct-end" style="width: 127px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="431.125" y="270"
                                            width="127.04166666666669" height="20"><span
                                                class="ct-label ct-horizontal ct-end" style="width: 127px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="558.1666666666667" y="270"
                                            width="127.04166666666669" height="20"><span
                                                class="ct-label ct-horizontal ct-end" style="width: 127px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="685.2083333333334" y="270"
                                            width="127.04166666666663" height="20"><span
                                                class="ct-label ct-horizontal ct-end" style="width: 127px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="812.25" y="270"
                                            width="30" height="20"><span class="ct-label ct-horizontal ct-end"
                                                style="width: 30px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="229.28571428571428" x="10"
                                            height="35.714285714285715" width="30"><span
                                                class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="193.57142857142856" x="10"
                                            height="35.714285714285715" width="30"><span
                                                class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="157.85714285714283" x="10"
                                            height="35.71428571428571" width="30"><span
                                                class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="122.14285714285714" x="10"
                                            height="35.71428571428572" width="30"><span
                                                class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="86.42857142857142" x="10"
                                            height="35.71428571428572" width="30"><span
                                                class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="50.71428571428572" x="10"
                                            height="35.714285714285694" width="30"><span
                                                class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="15" x="10"
                                            height="35.71428571428572" width="30"><span
                                                class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="-15" x="10"
                                            height="30" width="30"><span class="ct-label ct-vertical ct-start"
                                                style="height: 30px; width: 30px"
                                                xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject>
                                    </g>
                                </svg></div>
                        </div>
                        <div class="col-md-3">
                            <div class="weekly-summary text-right">
                                <span class="number">952</span> <span class="percentage"><i
                                        class="fa fa-caret-up text-success"></i> 12%</span>
                                <span class="info-label">Target/Produk</span>
                            </div>
                            <div class="weekly-summary text-right">
                                <span class="number">Rp 30.000.000</span> <span class="percentage"><i
                                        class="fa fa-caret-up text-success"></i> 23%</span>
                                <span class="info-label">Target Sales</span>
                            </div>
                            <div class="weekly-summary text-right">
                                <span class="number">Rp {{ $jmlh_sales }}</span> <span class="percentage"><i
                                        class="fa fa-caret-down text-danger"></i> 8%</span>
                                <span class="info-label">Pendapatan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OVERVIEW -->
        @endsection
