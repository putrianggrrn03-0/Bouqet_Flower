<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison Bloom</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">

            <!-- Logo kiri -->
            <a class="navbar-brand" href="#">Maison Bloom</a>

            <!-- Toggle (mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu tengah -->
            <div class="collapse navbar-collapse justify-content-center" id="navMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
            </div>

            <!-- Button kanan -->
            <div class="d-none d-lg-block">
                <a href="user/login.php" class="btn btn-outline-gold me-2">Login</a>
                <a href="user/register.php" class="btn btn-gold">Sign Up</a>
            </div>

        </div>
    </nav>

    <!-- HERO -->
    <section id="home" class="hero-section">

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h1>
                More <br>
                than <br>
                flowers
            </h1>

            <p>
                We create floral experiences crafted with elegance,
                passion and the finest seasonal blooms.
            </p>

            <a href="#produk" class="btn btn-gold mt-4">Explore Collection</a>
        </div>

    </section>

    <!-- PRODUCTS -->
    <section id="produk" class="collection-section">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-title">Our Collection</h2>
                <p class="section-subtitle">
                    Handcrafted bouquets curated with elegance and detail.
                </p>
            </div>

            <div class="row g-4">

                <!-- ITEM 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="collection-card">
                        <div class="collection-img">
                            <img src="https://images.unsplash.com/photo-1526047932273-341f2a7631f9" alt="bouquet">
                            <div class="collection-overlay">
                                <a href="#" class="btn btn-light">View Details</a>
                            </div>
                        </div>
                        <div class="collection-info">
                            <h6>Soft Pink Romance</h6>
                            <p>Rp 350.000</p>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="collection-card">
                        <div class="collection-img">
                            <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9" alt="bouquet">
                            <div class="collection-overlay">
                                <a href="#" class="btn btn-light">View Details</a>
                            </div>
                        </div>
                        <div class="collection-info">
                            <h6>Golden Sunset Roses</h6>
                            <p>Rp 420.000</p>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="collection-card">
                        <div class="collection-img">
                            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" alt="bouquet">
                            <div class="collection-overlay">
                                <a href="#" class="btn btn-light">View Details</a>
                            </div>
                        </div>
                        <div class="collection-info">
                            <h6>White Elegance</h6>
                            <p>Rp 390.000</p>
                        </div>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="collection-card">
                        <div class="collection-img">
                            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2" alt="bouquet">
                            <div class="collection-overlay">
                                <a href="#" class="btn btn-light">View Details</a>
                            </div>
                        </div>
                        <div class="collection-info">
                            <h6>Luxury Blush Bloom</h6>
                            <p>Rp 450.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-collection d-flex justify-content-center mt-5">
                <a href="user/register.php" class="btn btn-gold" >More Collection</a>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
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

    <footer class="text-center py-4">
        © 2026 Maison Bloom. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>