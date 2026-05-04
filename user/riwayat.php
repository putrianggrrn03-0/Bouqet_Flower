<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat Pesanan | Bouquet Flower</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@400;600&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #702e2e;
        }

        /* BACKGROUND */
        .background-flower {
            position: fixed;
            inset: 0;
            background:
                linear-gradient(rgba(248, 243, 225, 0.9), rgba(248, 243, 225, 0.9)),
                url("https://images.unsplash.com/photo-1490750967868-88aa4486c946");
            background-size: cover;
            background-position: center;
            z-index: -1;
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

        /* SECTION */
        .section {
            padding: 80px 0;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 800px;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 30px;
            text-align: center;
        }

        /* ORDER CARD */
        .order-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .order-info p {
            margin-bottom: 5px;
        }

        .status {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .success {
            background: #e9f7ef;
            color: #2e7d32;
        }

        .process {
            background: #fff3cd;
            color: #856404;
        }

        .shipped {
            background: #e3f2fd;
            color: #1565c0;
        }

        .btn-detail {
            background: #c6a85c;
            color: white;
            padding: 8px 18px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-detail:hover {
            background: #b99745;
        }

        footer {
            background-color: #8E977D;
            padding: 20px;
            text-align: center;
            color: white;
            margin-top: 50px;
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


    <section class="section">
        <div class="container">

            <h2>Riwayat Pesanan</h2>

            <!-- PESANAN 1 -->
            <div class="order-card">
                <div class="order-info">
                    <p><strong>ID:</strong> ORD-2026-001</p>
                    <p>Total: Rp 350.000</p>
                    <p>Tanggal: 04 Maret 2026</p>
                </div>
                <div>
                    <div class="status shipped">Sedang Dikirim</div><br>
                    <a href="status_pembayaran.php" class="btn-detail">Lihat Detail</a>
                </div>
            </div>

            <!-- PESANAN 2 -->
            <div class="order-card">
                <div class="order-info">
                    <p><strong>ID:</strong> ORD-2026-002</p>
                    <p>Total: Rp 420.000</p>
                    <p>Tanggal: 20 Februari 2026</p>
                </div>
                <div>
                    <div class="status success">Selesai</div><br>
                    <a href="status_pembayaran.php" class="btn-detail">Lihat Detail</a>
                </div>
            </div>

            <!-- PESANAN 3 -->
            <div class="order-card">
                <div class="order-info">
                    <p><strong>ID:</strong> ORD-2026-003</p>
                    <p>Total: Rp 275.000</p>
                    <p>Tanggal: 10 Februari 2026</p>
                </div>
                <div>
                    <div class="status process">Diproses</div><br>
                    <a href="status_pembayaran.php" class="btn-detail">Lihat Detail</a>
                </div>
            </div>

        </div>
    </section>

    <footer>
        © 2026 Bouquet Flower | All Rights Reserved
    </footer>

</body>

</html>