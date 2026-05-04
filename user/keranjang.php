<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda User</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #E9E4D8;
        }

        /* Header */
        header {
            text-align: center;
            padding: 30px;
            font-family: 'Playfair Display', serif;
            font-size: 45px;
            color: #7B2E2F;
            letter-spacing: 2px;
        }

        .cart-container {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto 50px auto;
            display: flex;
            gap: 40px;
        }

        .cart-items {
            flex: 2;
        }

        .cart-card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .cart-card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 15px;
            border: 4px solid #C6A24A;
        }

        .product-info h3 {
            margin: 0;
            font-family: 'Playfair Display', serif;
            color: #7B2E2F;
        }

        .product-info p {
            margin: 8px 0;
            color: #6D6D6D;
        }

        .qty-btn {
            background: #AEB7A2;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .qty {
            margin: 0 10px;
            color: #6D6D6D;
            font-weight: 500;
        }

        .remove-btn {
            background: #7B2E2F;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            cursor: pointer;
        }

        .remove-btn:hover {
            opacity: 0.9;
        }

        .summary {
            flex: 1;
            background: white;
            padding: 30px;
            border-radius: 20px;
            height: fit-content;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .summary h3 {
            font-family: 'Playfair Display', serif;
            color: #7B2E2F;
        }

        .summary p {
            display: flex;
            justify-content: space-between;
            color: #6D6D6D;
        }

        .total {
            font-weight: bold;
            margin-top: 10px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .checkout-btn {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 25px;
            background: #C6A24A;
            color: white;
            font-weight: 500;
            cursor: pointer;
        }

        .checkout-btn:hover {
            opacity: 0.9;
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

    <!-- CONTENT -->
    <div class="cart-container mt-5">

        <div class="cart-items">

            <div class="cart-card" data-price="350000">
                <img src="violet.jpeg">
                <div class="product-info">
                    <h3>Violet</h3>
                    <p>Rp 350.000</p>
                </div>
                <div>
                    <button class="qty-btn minus">-</button>
                    <span class="qty">1</span>
                    <button class="qty-btn plus">+</button>
                    <br><br>
                    <button class="remove-btn">Hapus</button>
                </div>
            </div>

            <div class="cart-card" data-price="250000">
                <img src="nude.jpeg">
                <div class="product-info">
                    <h3>Nude Flower</h3>
                    <p>Rp 250.000</p>
                </div>
                <div>
                    <button class="qty-btn minus">-</button>
                    <span class="qty">1</span>
                    <button class="qty-btn plus">+</button>
                    <br><br>
                    <button class="remove-btn">Hapus</button>
                </div>
            </div>

            <div class="cart-card" data-price="450000">
                <img src="magenta.jpeg">
                <div class="product-info">
                    <h3>Magenta Lili</h3>
                    <p>Rp 450.000</p>
                </div>
                <div>
                    <button class="qty-btn minus">-</button>
                    <span class="qty">1</span>
                    <button class="qty-btn plus">+</button>
                    <br><br>
                    <button class="remove-btn">Hapus</button>
                </div>
            </div>

        </div>

        <div class="summary">
            <h3>Ringkasan Belanja</h3>
            <p><span>Subtotal</span><span id="subtotal"></span></p>
            <p><span>Ongkir</span><span>Rp 50.000</span></p>
            <p class="total"><span>Total</span><span id="total"></span></p>
            <button class="checkout-btn" onclick="checkout()">Checkout</button>
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

    <script>
        function updateTotal() {
            let subtotal = 0;
            document.querySelectorAll('.cart-card').forEach(card => {
                let price = parseInt(card.dataset.price);
                let qty = parseInt(card.querySelector('.qty').innerText);
                subtotal += price * qty;
            });

            document.getElementById('subtotal').innerText =
                "Rp " + subtotal.toLocaleString("id-ID");

            document.getElementById('total').innerText =
                "Rp " + (subtotal + 50000).toLocaleString("id-ID");
        }

        document.querySelectorAll(".plus").forEach(btn => {
            btn.addEventListener("click", function () {
                let qty = this.parentElement.querySelector(".qty");
                qty.innerText = parseInt(qty.innerText) + 1;
                updateTotal();
            });
        });

        document.querySelectorAll(".minus").forEach(btn => {
            btn.addEventListener("click", function () {
                let qty = this.parentElement.querySelector(".qty");
                if (parseInt(qty.innerText) > 1) {
                    qty.innerText = parseInt(qty.innerText) - 1;
                    updateTotal();
                }
            });
        });

        document.querySelectorAll(".remove-btn").forEach(btn => {
            btn.addEventListener("click", function () {
                this.closest(".cart-card").remove();
                updateTotal();
            });
        });

        function checkout() {
            alert("Terima kasih telah berbelanja di Maison Bloom 🌿");
        }

        updateTotal();
    </script>

</body>

</html>