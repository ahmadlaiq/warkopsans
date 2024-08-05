<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WARKOPSANS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user-assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user-assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user-assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user-assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>WARKOPSANS</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#promo-section" class="nav-item nav-link">Diskon</a>
                    </div>
                    <a href="#reservation" class="btn btn-primary py-2 px-4">Pesan Disini</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Nikmati Hidangan Lezat Kami Dengan
                                Setiap Gigitan</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Kami menyajikan hidangan lezat dengan
                                bahan berkualitas tinggi. Setiap gigitan dirancang untuk memuaskan selera Anda. Nikmati
                                kelezatan dan kenikmatan dalam setiap suapan dari hidangan kami yang dibuat dengan penuh
                                perhatian.
                            </p>
                            <a href="#reservation"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pesan
                                Disini</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="user-assets/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Chef Berkualitas</h5>
                                <p>Hidangan kami disiapkan oleh chef berpengalaman yang ahli dalam menciptakan cita rasa
                                    terbaik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Makanan Berkualitas</h5>
                                <p>Kami menggunakan bahan-bahan segar dan berkualitas tinggi untuk memastikan setiap
                                    hidangan lezat dan memuaskan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-clock text-primary mb-4"></i>
                                <h5>Jam Operasional Fleksibel</h5>
                                <p>Kami menyediakan jam operasional yang fleksibel untuk memenuhi kebutuhan Anda kapan
                                    pun Anda membutuhkannya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-certificate text-primary mb-4"></i>
                                <h5>Standar Keamanan Terjamin</h5>
                                <p>Kami menerapkan standar keamanan makanan yang ketat untuk memastikan setiap hidangan
                                    aman dan higienis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="user-assets/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="user-assets/img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="user-assets/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="user-assets/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Selamat Datang <i class="fa fa-utensils text-primary me-2"></i>Di
                            Warkopsans</h1>
                        <p class="mb-4">Kami dengan senang hati menyambut Anda di Warkopsans, tempat di mana
                            kelezatan dan kualitas menjadi prioritas utama. Nikmati hidangan istimewa yang kami sajikan
                            dengan penuh perhatian dan bahan-bahan terbaik.</p>
                        <p class="mb-4">Setiap sajian dirancang untuk memuaskan selera Anda dan memberikan pengalaman
                            makan yang tak terlupakan. Temukan berbagai pilihan menu yang menggugah selera dan rasakan
                            kehangatan dari pelayanan kami. Kami berkomitmen untuk membuat setiap kunjungan Anda menjadi
                            momen yang spesial dan menyenangkan.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Tahun</p>
                                        <h6 class="text-uppercase mb-0">Kami Buka</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Terbaik</p>
                                        <h6 class="text-uppercase mb-0">Makanan & Minuman</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu Kami</h5>
                    <h1 class="mb-5">Menu Terbaik dan Terpopuler</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                                data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Minuman</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Cemilan</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Makanan</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        {{-- Minuman --}}
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach ($minuman as $item)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="{{ $item->image }}"
                                                alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>{{ $item->name }}</span>
                                                    <span class="text-primary">{{ $item->price }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $item->description }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Cemilan --}}
                        <div id="tab-2" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach ($cemilan as $item)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="{{ $item->image }}"
                                                alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>{{ $item->name }}</span>
                                                    <span class="text-primary">{{ $item->price }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $item->description }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Makanan --}}
                        <div id="tab-3" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach ($makanan as $item)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="{{ $item->image }}"
                                                alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>{{ $item->name }}</span>
                                                    <span class="text-primary">{{ $item->price }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $item->description }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Promo Start -->
        <section id="promo-section" class="promo-section bg-light py-5">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Promo Spesial di Warkopsans</h2>
                        <p class="mb-4">Nikmati berbagai penawaran spesial dan diskon menarik di Warkopsans. Setiap
                            hidangan kami disiapkan dengan cinta dan dedikasi untuk memberikan pengalaman kuliner
                            terbaik bagi Anda.</p>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="promo-card p-4 mx-2 bg-white rounded shadow">
                                <h5>Diskon 20% untuk Menu Baru</h5>
                                <p>Rasakan sensasi baru dari menu spesial kami dan nikmati diskon 20% untuk pembelian
                                    pertama Anda!</p>
                                <small class="text-danger">*Berlaku dari 1 Agustus hingga 31 Agustus 2024.</small>
                            </div>
                            <div class="promo-card p-4 mx-2 bg-white rounded shadow">
                                <h5>Beli 1 Gratis 1</h5>
                                <p>Nikmati promo beli 1 gratis 1 untuk semua minuman spesial kami. Ajak teman dan
                                    keluarga untuk merasakan kelezatan bersama!</p>
                                <small class="text-danger">*Berlaku dari 1 Agustus hingga 31 Agustus
                                    2024.</small>
                            </div>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Lihat Semua Promo</a> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Promo End -->


        <!-- Reservation Start -->
        <div id="reservation" class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Order Yuk!</h5>
                        <h1 class="text-white mb-4">Silahkan Isi Form Berikut:</h1>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="meja_id" id="meja_id" class="form-control" required>
                                        @foreach ($mejas as $meja)
                                            <option value="{{ $meja->id }}">{{ $meja->nomor }}</option>
                                        @endforeach
                                    </select>
                                    <label for="name">Meja</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="customer_name" placeholder="Nama"
                                        name="customer_name" required>
                                    <label for="email">Nama</label>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Permintaan Khusus" id="customer_request" style="height: 100px"
                                        name="customer_request"></textarea>
                                    <label for="message">Permintaan Khusus</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="text-primary">Pesanan Kamu:</h4>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#createModal">Tambah Item</button>
                                </div>
                            </div>
                            <table id="tbl_penjualan_cash" class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody id="tbl_body_penjualan_cash">
                                </tbody>
                            </table>
                            <p class="text-white">
                                Total Harga: <span id="TotalPembayaran">Rp 0</span>
                            </p>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" onclick="submitAll()">Pesan
                                    Sekarang</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimoni</h5>
                    <h1 class="mb-5">Apa Kata Pelanggan Kami?</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Pelayanan dan kualitas makanan di sini luar biasa! Saya sangat terkesan dengan cita rasa yang
                            ditawarkan.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="user-assets/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nikola Dwi Saputra</h5>
                                <small>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Saya suka suasana di Warkopsans, tempat yang sempurna untuk bersantai dan menikmati makanan
                            lezat.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="user-assets/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Eko Septyo Nugroho</h5>
                                <small>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Menu yang ditawarkan sangat variatif dan selalu ada sesuatu yang baru untuk dicoba. Pasti
                            akan datang lagi!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="user-assets/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Bagus Dwi</h5>
                                <small>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Tempat yang nyaman dengan makanan yang enak. Pelayanan ramah dan cepat. Sangat
                            direkomendasikan!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="user-assets/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Ike Ratnasari</h5>
                                <small>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                    <i class="fa fa-star" style="color: #FFD700;"></i>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Hubungi Kami</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>WFCP+HGR Coffee Sans, Jl. Propinsi,
                            Cukanggenteng, Pasirjambu, Bandung, Jawa Barat, 40911</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>081280998123</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Jam Buka</h4>
                        <h5 class="text-light fw-normal">Senin - Sabtu</h5>
                        <p>09.00 - 21.00</p>
                        <h5 class="text-light fw-normal">Minggu</h5>
                        <p>10.00 - 20.00</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Buletin</h4>
                        <p>Dapatkan berita dan penawaran terbaru langsung di kotak masuk Anda.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Email Anda">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Daftar</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Warkopsans</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- Modal Create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="createPenjualanCash" action="#" method="post" onsubmit="">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="menuItem">Nama Menu</label>
                                <select name="menu_item_id" id="menuItem" class="form-control" required>
                                    @foreach ($menuItems as $item)
                                        <option value="{{ $item->id }}" data-price="{{ $item->price }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="itemQty">Qty</label>
                                <input type="number" name="quantity" class="form-control" id="itemQty"
                                    placeholder="Masukkan Jumlah" required min="1">
                            </div>
                            <div class="form-group mb-3">
                                <label for="itemPrice">Harga</label>
                                <input type="number" name="price" class="form-control" id="itemPrice" required
                                    readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="itemSubtotal">Subtotal</label>
                                <input type="number" name="subtotal" class="form-control" id="itemSubtotal"
                                    required readonly>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user-assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('user-assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user-assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('user-assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('user-assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user-assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('user-assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('user-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('user-assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        function formatRupiah(number) {
            var formatter = new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0,
            });

            return formatter.format(number);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuSelect = document.getElementById('menuItem');
            const qtyInput = document.getElementById('itemQty');
            const priceInput = document.getElementById('itemPrice');
            const subtotalInput = document.getElementById('itemSubtotal');

            function parsePrice(priceString) {
                // Menghapus "Rp" dan tanda titik, lalu mengubah koma menjadi titik
                return parseFloat(priceString.replace(/[Rp\s.]/g, '').replace(',', '.'));
            }

            function formatPrice(price) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(price);
            }

            function updatePriceAndSubtotal() {
                const selectedOption = menuSelect.options[menuSelect.selectedIndex];
                const price = parsePrice(selectedOption.dataset.price || '0');
                const qty = parseInt(qtyInput.value) || 0;

                priceInput.value = price; // Menyimpan harga tanpa format
                priceInput.setAttribute('data-formatted-price', formatPrice(
                    price)); // Menyimpan harga terformat sebagai atribut
                subtotalInput.value = price * qty;
                subtotalInput.setAttribute('data-formatted-subtotal', formatPrice(price * qty));
            }

            menuSelect.addEventListener('change', updatePriceAndSubtotal);
            qtyInput.addEventListener('input', updatePriceAndSubtotal);

            // Initial update
            updatePriceAndSubtotal();
        });
    </script>

    <script>
        var meja_id = '';
        var customer_name = '';
        var customer_request = '';
        var totalPembayaran = 0;
        var globalData = [];
        var data_barang = <?php echo json_encode($menuItems); ?>;

        $(`#meja_id`).change(function() {
            meja_id = $(this).val();
        });

        // MENYIMPAN CUSTOMER NAME
        $(`#customer_name`).change(function() {
            customer_name = $(this).val();
        });

        // MENYIMPAN CUSTOMER REQUEST
        $(`#customer_request`).change(function() {
            customer_request = $(this).val();
        });

        // SUBMIT ALL WITH POST
        function submitAll() {
            $.ajax({
                url: "{{ route('orders.store') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    meja_id: meja_id,
                    customer_name: customer_name,
                    customer_request: customer_request,
                    total: totalPembayaran,
                    data: globalData
                },
            }).done(function(data) {
                $('body').html(data);
            }).fail(function(data) {
                alert('Kesalahan pada website!');
            });
        }

        // MENGHAPUS ROW
        $("#tbl_penjualan_cash").on('click', '.btnDelete', function() {
            var data = $(this).closest('tr');
            var id = data.find('#no').text() - 1;
            data.remove();

            // Mendapatkan index
            let index = globalData.findIndex(function(field) {
                // Mengembalikan nilai ke data_barang
                data_barang = data_barang.map(function(obj) {
                    if (obj.name === field.name) {
                        return {
                            name: obj.name,
                            quantity: obj.quantity + parseInt(field.quantity)
                        };
                    }
                    return obj;
                });
                return field.id == id
            });

            // Hapus data pada globalData
            globalData.splice(index, 1);
            totalHarga();
        });

        // MENENTUKAN TOTAL 
        function totalHarga() {
            totalPembayaran = globalData.reduce(function(acc, obj) {
                return acc + obj.subtotal;
            }, 0);
            $('#TotalPembayaran').text(formatRupiah(totalPembayaran));
        }

        // CREATE PENJUALAN
        $('#createPenjualanCash').on("submit", function(event) {
            event.preventDefault();

            // Cek apakah nilai minus atau tidak
            var price = $("[name='price']").val();
            var quantity = $("[name='quantity']").val();
            var subtotal = 0;

            subtotal = (price * quantity);
            // subtotal = (harga * qty) - diskon;
            if (subtotal < 0) {
                alert('Subtotal tidak boleh lebih kecil dari 0')
                return false;
            }

            if (price < 1 || quantity < 1) {
                alert('Nominal qty atau harga tidak valid')
                return false;
            }

            // Menyimpan data 
            var formPenjualanCash = $('#createPenjualanCash');
            var formData = formPenjualanCash.serializeArray();

            var formValues = {};

            $.each(formData, function(index, field) {
                formValues[field.name] = field.value;
            });

            // Add subtotal
            formValues['subtotal'] = subtotal;
            formValues['id'] = globalData.length;

            // Push ke global data
            globalData.push(formValues);

            // Reset form input dan tutup modal
            formPenjualanCash.trigger("reset");
            $('#createModal').modal('hide');

            // Mendapatkan nama menu berdasarkan menu_item_id
            var namaMenu = data_barang.find(function(item) {
                return item.id == formValues.menu_item_id;
            }).name;

            // select the table body element
            var tableBody = $("#tbl_body_penjualan_cash");

            // create a new table row element and append it to the table body
            var newRow = $("<tr>").append(
                $("<td id='no'>").text(formValues.id + 1),
                $("<td>").text(namaMenu),
                $("<td>").text(formValues.price),
                $("<td>").text(formValues.quantity),
                $("<td>").text(formValues.subtotal),
                $("<td>").html(
                    '<button class="btn btn-sm btn-danger btnDelete" ><i class="fas fa-trash"></i></button>')
            );

            tableBody.append(newRow);

            // change total harga
            totalHarga();

        });
    </script>
</body>

</html>
