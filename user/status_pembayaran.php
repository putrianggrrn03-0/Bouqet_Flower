<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Status Pembayaran | Bouquet Flower</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

<style>

/* ================= GLOBAL ================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    color: #702e2e;
}

/* ================= BACKGROUND ================= */
.background-flower {
    position: fixed;
    inset: 0;
    background:
        linear-gradient(rgba(248,243,225,0.9), rgba(248,243,225,0.9)),
        url("https://images.unsplash.com/photo-1490750967868-88aa4486c946");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    z-index: -1;
}

/* ================= NAVBAR ================= */
.navbar {
    background: #c6a85c;
    padding: 25px 90px;
    display: flex;
    justify-content: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.navbar-container {
    width: 100%;
    max-width: 1200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    font-size: 24px;
    font-weight: 600;
}

.navbar-nav {
    list-style: none;
    display: flex;
    gap: 45px;
}

.nav-link {
    text-decoration: none;
    font-size: 17px;
    color: #2b2b2b;
    transition: 0.3s;
}

.nav-link:hover {
    color: #c6a85c;
}

/* ================= SECTION ================= */
.payment-section {
    min-height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 0;
}

/* ================= CARD ================= */
.payment-card {
    background: rgba(255,255,255,0.97);
    padding: 50px;
    width: 600px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    text-align: center;
}

.payment-card h2 {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    margin-bottom: 25px;
}

/* ================= DETAIL ================= */
.payment-detail {
    text-align: left;
    margin-bottom: 20px;
}

.payment-detail p {
    margin-bottom: 8px;
    color: #555;
}

/* ================= STATUS ================= */
.payment-status {
    margin: 20px 0;
    padding: 12px;
    border-radius: 30px;
    font-weight: 600;
}

.success {
    background-color: #e9f7ef;
    color: #2e7d32;
}

/* ================= TRACKING ================= */
.tracking-section {
    text-align: left;
    margin-top: 35px;
}

.tracking-title {
    font-weight: 600;
    margin-bottom: 20px;
    font-size: 18px;
}

.tracking-step {
    position: relative;
    padding-left: 35px;
    margin-bottom: 25px;
    opacity: 0.6;
}

.tracking-step.active {
    opacity: 1;
}

.tracking-step::before {
    content: "";
    position: absolute;
    left: 5px;
    top: 5px;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background-color: #ddd;
}

.tracking-step.active::before {
    background-color: #c6a85c;
    box-shadow: 0 0 0 4px rgba(198,168,92,0.2);
}

.tracking-step::after {
    content: "";
    position: absolute;
    left: 11px;
    top: 20px;
    width: 2px;
    height: 40px;
    background-color: #ddd;
}

.tracking-step:last-child::after {
    display: none;
}

.tracking-step.active::after {
    background-color: #c6a85c;
}

.tracking-step span {
    display: block;
    font-size: 13px;
    color: #777;
}

/* ================= BUTTON AREA ================= */
.button-group {
    margin-top: 30px;
    display: flex;
    justify-content: center;
    gap: 15px;
}

.btn-gold {
    background-color: #c6a85c;
    color: #fff;
    border-radius: 40px;
    padding: 10px 25px;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
    text-decoration: none;
}

.btn-gold:hover {
    background-color: #b99745;
    transform: translateY(-2px);
}

/* ================= FOOTER ================= */
footer {
    background-color: #8E977D;
    padding: 20px;
    text-align: center;
    color: white;
    margin-top: 40px;
}

</style>
</head>

<body>

<div class="background-flower"></div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-brand">Bouquet Flower</div>
        <ul class="navbar-nav">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="riwayat_pesanan.php" class="nav-link">Riwayat</a></li>
            <li><a href="#" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- SECTION -->
<section class="payment-section">
    <div class="payment-card">

        <h2>Status Pembayaran</h2>

        <div class="payment-detail">
            <p><strong>Nama:</strong> Rakha Dwi Andika</p>
            <p><strong>ID Pesanan:</strong> ORD-2026-001</p>
            <p><strong>Total:</strong> Rp 350.000</p>
        </div>

        <div class="payment-status success">
            ✔ Pembayaran Berhasil
        </div>

        <div class="tracking-section">
            <div class="tracking-title">Status Lokasi Barang</div>

            <div class="tracking-step active">
                Pesanan Diproses
                <span>04 Maret 2026 - Gudang Medan</span>
            </div>

            <div class="tracking-step active">
                Paket Dikirim
                <span>05 Maret 2026 - Ekspedisi JNE Medan</span>
            </div>

            <div class="tracking-step active">
                Dalam Perjalanan
                <span>06 Maret 2026 - Menuju Alamat Tujuan</span>
            </div>

            <div class="tracking-step">
                Paket Sampai
                <span>Estimasi 07 Maret 2026</span>
            </div>
        </div>

        <!-- BUTTONS -->
        <div class="button-group">
            <a href="index.php" class="btn-gold">Kembali</a>
            <a href="riwayat_pesanan.php" class="btn-gold">Riwayat Pesanan</a>
        </div>

    </div>
</section>

<footer>
© 2026 Bouquet Flower | All Rights Reserved
</footer>

</body>
</html>