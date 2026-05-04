<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda User</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* =========================
   THEME COLOR
========================= */
        :root {
            --bg-main: #F8F3E1;
            --primary: #d6b85a;
            --dark: #2d2d2d;
            --soft: #fffaf0;
            --radius: 14px;
        }

        /* =========================
   GLOBAL
========================= */
        body {
            background: var(--bg-main);
            font-family: 'Segoe UI', sans-serif;
            color: var(--dark);
        }

        /* =========================
   NAVBAR
========================= */
        .navbar {
            background: white;
            padding: 15px 40px;
            border-bottom: 1px solid #eee;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--primary);
        }

        .nav-link {
            color: var(--dark);
            font-weight: 500;
            margin-right: 10px;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        /* =========================
   COROUSEL
========================= */
        .carousel-wrapper {
            max-width: 90%;
            /* ubah sesuai selera (600–900 bagus) */
            width: 200%;
        }

        .carousel-inner img {
            height: 500px;
            /* biar nggak terlalu tinggi */
            object-fit: cover;
            /* biar gambar tetap rapi */
        }

        .carousel-inner {
            border-radius: 20px;
            overflow: hidden;
            /* WAJIB supaya gambar ikut melengkung */
        }

    /* =========================
   STAT CARD   
========================= */
.card {
    border-radius: 15px;
    overflow: hidden;
}

.card img {
    height: 220px;
    object-fit: cover;
}

.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}

        /* =========================
   HERO
========================= */
        .hero {
            background: linear-gradient(135deg, #f5e6b5, #e6d39b);
            padding: 50px;
            border-radius: var(--radius);
            margin-top: 20px;
        }

        .hero h3 {
            font-weight: 700;
        }

        /* =========================
   CARD
========================= */
        .card-custom {
            border: none;
            border-radius: var(--radius);
            background: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        /* =========================
   ICON
========================= */
        .icon {
            font-size: 28px;
            color: var(--primary);
        }

        /* =========================================
   ABOUT SECTION
========================================= */


        .about-section {
            padding: 120px 0;
            background-color: #f9f6f3;
        }

        .section-title {
            font-size: 45px;
            font-weight: 400;
        }

        .section-subtitle {
            color: #777;
            margin-top: 15px;
        }

        .about-heading {
            font-size: 26px;
            margin-bottom: 20px;
        }

        .about-section p {
            line-height: 1.8;
            color: #555;
        }

        .info-box {
            background: #ffffff;

            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
        }


        /* =========================================
   FOOTER
========================================= */

        footer {
            background-color: #8E977D;
            padding: 30px 0;
            font-size: 14px;
            text-align: center;
            color: #edeaea;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <!-- LOGO -->
            <a class="navbar-brand" href="#">MyApp</a>

            <!-- MENU -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="beranda.php"><i class="bi bi-house"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produk.php"><i class="bi bi-box"></i> Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat.php"><i class="bi bi-clock-history"></i> Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php"><i class="bi bi-cart"></i> Keranjang</a>
                    </li>
                </ul>
            </div>

            <!-- USER -->
            <div class="d-flex align-items-center gap-3">
                <span class="fw-semibold">Hai, Yaya 👋</span>
            </div>

        </div>
    </nav>

    <!-- COROUSEL -->
    <div class="d-flex justify-content-center mt-4">
        <div class="carousel-wrapper">

            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../image/flower2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../image/flower2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn btn-outline-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon btn btn-outline-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Block level -->
            <div class="row mt-4 fs-1">
                <div class="col-2 text-truncate">
                    This text is quite long, and will be truncated once displayed.
                </div>
            </div>

            <!-- Inline level -->
            <span class="d-inline-block text-truncate" style="max-width: 150px;">
                This text is quite long, and will be truncated once displayed.
            </span>

        </div>
    </div>


    <!-- PLACEHOLDER -->
    <div class="card mt-5 px-4">
        <!-- Block level -->
            <div class="row mt-4 fs-1">
                <div class="col-2 text-truncate">
                    This text is quite long, and will be truncated once displayed.
                </div>
            </div>

        <!-- Wrapper Card -->
        <div class="row g-4 justify-content-start ms-3">

            <!-- CARD 1 -->
            <div class="col-md-3">
                <div class="card shadow-sm h-100">
                    <img src="../../image/flower2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bouquet Mawar</h5>
                        <p class="card-text text-truncate">
                            Bouquet cantik dengan bunga mawar segar, cocok untuk hadiah spesial.
                        </p>
                        <a href="#" class="btn btn-dark">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-3">
                <div class="card shadow-sm h-100">
                    <img src="../../image/flower2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bouquet Tulip</h5>
                        <p class="card-text text-truncate">
                            Desain elegan dengan bunga tulip pilihan terbaik.
                        </p>
                        <a href="#" class="btn btn-dark">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-3">
                <div class="card shadow-sm h-100">
                    <img src="../../image/flower2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bouquet Mix</h5>
                        <p class="card-text text-truncate">
                            Kombinasi berbagai bunga cantik dengan warna menarik.
                        </p>
                        <a href="#" class="btn btn-dark">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-3">
                <div class="card shadow-sm h-100">
                    <img src="../../image/flower2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bouquet Mix</h5>
                        <p class="card-text text-truncate">
                            Kombinasi berbagai bunga cantik dengan warna menarik.
                        </p>
                        <a href="#" class="btn btn-dark">Lihat Detail</a>
                    </div>
                </div>
            </div>

            

        </div>
    </div>

    <!-- ABOUT -->
    <div class="about mt-5">
    <section id="about" class="about-section">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-title">About Our Studio</h2>
                <p class="section-subtitle">
                    Premium floral arrangements crafted with passion and elegance.
                </p>
            </div>

            <div class="row gy-5">

                <!-- Tentang Kami -->
                <div class="col-lg-6">
                    <h4 class="about-heading">Who We Are</h4>
                    <p>
                        FF Bouquet Medan is a professional floral studio specializing in
                        custom flower bouquets designed according to your personal request.
                        Every arrangement is carefully handcrafted to reflect beauty,
                        emotion, and unforgettable moments.
                    </p>

                    <p>
                        We believe flowers are not just gifts — they are expressions of love,
                        appreciation, celebration, and sincerity.
                    </p>
                </div>

                <!-- Informasi Detail -->
                <div class="col-lg-6">
                    <div class="info-box">

                        <p><strong>Services:</strong><br>
                            Custom flower bouquets (by request)</p>

                        <p><strong>Location:</strong><br>
                            📍 Jl. Pembangunan No.7, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20131</p>

                        <p><strong>Contact:</strong><br>
                            💌 Admin 1: 0812 6944 5811<br>
                            💌 Admin 2: 0813 2201 181</p>

                        <p><strong>Opening Hours:</strong><br>
                            🕐 09.00 – 18.00 WIB</p>

                        <p><strong>Instagram:</strong><br>
                            @ffbouquetmedan</p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    </div>

    <footer class="text-center py-4">
        © 2026 Maison Bloom. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>