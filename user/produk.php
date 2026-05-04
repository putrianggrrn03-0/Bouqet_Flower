<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>

/* ===== THEME ===== */
:root {
  --bg-main: #F8F3E1;
  --primary: #d6b85a;
  --dark: #2d2d2d;
  --radius: 14px;
}

body {
  background: var(--bg-main);
  font-family: 'Segoe UI', sans-serif;
  color: var(--dark);
}

/* NAVBAR */
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
}

/* FILTER */
.filter-box {
  background: white;
  padding: 20px;
  border-radius: var(--radius);
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

/* CARD */
.product-card {
  background: white;
  border-radius: var(--radius);
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  transition: 0.3s;
}

.product-card:hover {
  transform: translateY(-5px);
}

.product-img {
  height: 180px;
  object-fit: cover;
  border-top-left-radius: var(--radius);
  border-top-right-radius: var(--radius);
}

/* BUTTON */
.btn-custom {
  background: var(--primary);
  color: white;
  border-radius: 10px;
}

.btn-custom:hover {
  background: #c5a94c;
}

.price {
  font-weight: bold;
  color: var(--primary);
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

  <!-- FILTER -->
  <div class="filter-box mb-4">
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Cari produk...">
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option>Semua Kategori</option>
          <option>Motor</option>
          <option>Mobil</option>
        </select>
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option>Urutkan</option>
          <option>Harga Terendah</option>
          <option>Harga Tertinggi</option>
        </select>
      </div>
      <div class="col-md-2">
        <button class="btn btn-custom w-100">Filter</button>
      </div>
    </div>
  </div>

  <!-- PRODUCT LIST -->
  <div class="row">

    <!-- CARD -->
    <div class="col-md-4 mb-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-img w-100">

        <div class="p-3">
          <h6>Motor</h6>
          <p class="text-muted">Transportasi cepat dan hemat untuk perjalanan harian</p>

          <div class="d-flex justify-content-between align-items-center">
            <span class="price">Rp 10.000</span>
            <button class="btn btn-custom btn-sm">
              <i class="bi bi-cart"></i> Tambah
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- CARD -->
    <div class="col-md-4 mb-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-img w-100">

        <div class="p-3">
          <h6>Mobil</h6>
          <p class="text-muted">Nyaman untuk perjalanan bersama keluarga</p>

          <div class="d-flex justify-content-between align-items-center">
            <span class="price">Rp 50.000</span>
            <button class="btn btn-custom btn-sm">
              <i class="bi bi-cart"></i> Tambah
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</body>
</html>