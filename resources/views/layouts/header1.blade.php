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
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top"> BATAM Carg</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Blog</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Tentang Kami</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                    data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Lacak Barang</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Solusi Terpercaya untuk Pengiriman Barang Anda</h1>
                        <p class="lead fw-normal text-muted mb-5">Kemudahan dalam Mengirim, Keamanan dalam Pengiriman,
                            Kurir Terpercaya untuk Segala Kebutuhan Pengiriman Anda"</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                                <img src="{{ asset('admin2/assets/img/batam_carg.png') }}" width="100%">
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>

                            {{-- <div class="device-wrapper">

                            <div class="screen bg-black"> --}}
                            <!-- PUT CONTENTS HERE:-->
                            <!-- * * This can be a video, image, or just about anything else.-->
                            <!-- * * Set the max width of your media to 100% and the height to-->
                            <!-- * * 100% like the demo example below.-->

                            {{-- </div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    {{-- <form action="/action_page.php"> --}}
                    <div class="form-floating mb-3">
                        <h1>Informasi Barang Kamu</h1>


                        <div class="card">
                            <div class="card-body p=1">
                                <div class="main m-1 cetak">
                                    @yield('content')
                                    <!-- END MAIN -->
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
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">

                                    <h3 class="font-alt">Speed</h3>
                                    <p class="text-muted mb-0">kami mengutamakan kecepatan pengiriman bagi pelanggan
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">

                                    <h3 class="font-alt">Acccuracy</h3>
                                    <p class="text-muted mb-0">ketepatan dalam pengiriman adalah indikator keberhasilan
                                        perusahaan kami</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">

                                    <h3 class="font-alt">Experience</h3>
                                    <p class="text-muted mb-0">kami sangat berpengalaman dalam jasa pengiriman barang
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">

                                    <h3 class="font-alt">All In One</h3>
                                    <p class="text-muted mb-0">satu tempat untuk semua pengiriman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                                <img src="{{ asset('admin2/assets/img/batam_carg.png') }}" width="100%">
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section-->

    <!-- Call to action section-->

    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">PT Carg Batam</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <h3>Pengiriman Barang</h3>
            </div>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <h4>Alamat Ruko Tiban Center No 12,Tiban,Sekupang,Batam</h4>
            </div>
            {{-- <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a> --}}

        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Batam Carg 2023. All Rights Reserved.</div>
                {{-- <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a> --}}
            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Lacak Barang</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form method="get" action="/lacak_barang" name="cari" id="contactForm"
                        data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="cari" id="cari" type="text"
                                placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="cari">No Pengirim</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->

                        <!-- Phone number input-->

                        <!-- Message input-->

                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        {{-- <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>

                                <br />

                            </div>
                        </div> --}}
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg " id="submitButton"
                                type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('admin2/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>

</html>
