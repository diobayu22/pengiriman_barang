<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lacak Barang | BatamCarg</title>



    <link rel="icon" type="image/x-icon" href="{{ asset('admin2/assets/favicon.ico ') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('admin2/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    {{-- <form action="/action_page.php"> --}}
                    <div class="form-floating mb-3">
                        <h1>Pesanan Kamu</h1>
                        <input type="button" value="click" onclick="printDiv()">
                        <div class="card " id="cetak">
                            <div class="card-body p=1">
                                <div class="main m-1 ">
                                    <div class="card-body mx-4">
                                        <div class="container">
                                            <p class="my-5 mx-5" style="font-size: 30px;">BATAM Carg</p>
                                            <div class="row">
                                                <ul class="list-unstyled">
                                                    <li class="text-black">{{ $pengiriman->pelanggan->nama }}</li>
                                                    <li class="text-muted mt-1"><span class="text-black">Invoice</span>
                                                        #{{ $pengiriman->no_pengiriman }}</li>
                                                    <li class="text-black mt-1">{{ $pengiriman->created_at }}</li>
                                                </ul>
                                                <hr>
                                                <div class="col-xl-10">
                                                    <p>Nama barang</p>
                                                </div>
                                                <div class="col-xl-2">
                                                    <p class="float-end">Harga
                                                    </p>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="row text-black">
                                                <div class="col-xl-10">
                                                    <p>{{ $pengiriman->barang }}</p>
                                                </div>

                                                <div class="col-xl-2">
                                                    <p class="float-end fw-bold"> {{ $pengiriman->biaya_kirim }}
                                                    </p>
                                                </div>
                                                <hr style="border: 2px solid black;">
                                            </div>
                                            <div class="text-center" style="margin-top: 90px;">
                                                <h4 class="text-info">Status : {{ $pengiriman->status }}</h4>
                                                <p>Terimakasi Telah Mengunakan jasa Kami </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- </form> --}}


            </div>
        </div>
        </div>
    </aside>

</body>
<script>
    function printDiv() {
        var divContents = document.getElementById("cetak").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html>');
        a.document.write('<body > <h1>Div contents are <br>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>

</html>
