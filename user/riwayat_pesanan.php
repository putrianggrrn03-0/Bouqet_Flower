<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Riwayat Pesanan | Bouquet Flower</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

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
        linear-gradient(rgba(248,243,225,0.9), rgba(248,243,225,0.9)),
        url("https://images.unsplash.com/photo-1490750967868-88aa4486c946");
    background-size: cover;
    background-position: center;
    z-index: -1;
}

/* NAVBAR */
.navbar {
    background: white;
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
    color: #2b2b2b;
}

.nav-link:hover {
    color: #c6a85c;
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
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
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

<div class="background-flower"></div>

<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-brand">Bouquet Flower</div>
        <ul class="navbar-nav">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="riwayat_pesanan.php" class="nav-link">Riwayat</a></li>
        </ul>
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