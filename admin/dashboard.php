<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ICON -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>

/* =========================
   ROOT VARIABLES
========================= */
:root {
  --primary: #4e73df;
  --secondary: #858796;
  --success: #1cc88a;
  --warning: #f6c23e;
  --danger: #e74a3b;
  --dark: #1f2937;
  --light: #f8f9fc;
  --white: #ffffff;

  --sidebar-width: 250px;
  --radius: 12px;
  --transition: all 0.3s ease;
}

/* GLOBAL */
body {
  font-family: 'Segoe UI', sans-serif;
  background-color: var(--light);
  margin: 0;
}

/* SIDEBAR */
.sidebar {
  width: var(--sidebar-width);
  height: 100vh;
  position: fixed;
  background: linear-gradient(180deg, var(--dark), #111827);
  color: var(--white);
  padding: 20px;
  transition: var(--transition);
}

.sidebar.hide {
  left: -250px;
}

.sidebar h4 {
  margin-bottom: 30px;
}

.sidebar a {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--white);
  padding: 12px;
  border-radius: var(--radius);
  margin-bottom: 10px;
  transition: var(--transition);
}

.sidebar a:hover {
  background: rgba(255,255,255,0.1);
  transform: translateX(5px);
}

.sidebar a.active {
  background: var(--primary);
}

/* MAIN */
.main-content {
  margin-left: var(--sidebar-width);
  padding: 30px;
  transition: var(--transition);
}

.main-content.full {
  margin-left: 0;
}

/* NAVBAR */
.navbar {
  background: var(--white);
  border-radius: var(--radius);
  padding: 15px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

/* CARD */
.card {
  border: none;
  border-radius: var(--radius);
  box-shadow: 0 6px 18px rgba(0,0,0,0.06);
  transition: var(--transition);
}

.card:hover {
  transform: translateY(-5px);
}

.card-primary { background: var(--primary); color: white; }
.card-success { background: var(--success); color: white; }
.card-warning { background: var(--warning); color: white; }
.card-danger { background: var(--danger); color: white; }

/* TABLE */
.table thead {
  background: var(--primary);
  color: white;
}

.table tbody tr:hover {
  background: rgba(0,0,0,0.03);
}

/* RESPONSIVE */
@media(max-width:768px){
  .sidebar {
    left: -250px;
  }
  .main-content {
    margin-left: 0;
  }
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">
  <h4>Admin Panel</h4>
  <a href="dashboard.php" class="active"><i class="bi bi-house"></i> Dashboard</a>
  <a href="user.php"><i class="bi bi-people"></i> User</a>
  <a href="product.php"><i class="bi bi-box"></i> Produk</a>
  <a href="transaction.php"><i class="bi bi-cart"></i> Transaksi</a>
  <a href="report.php"><i class="bi bi-file-earmark"></i> Laporan</a>
  <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<!-- MAIN -->
<div class="main-content" id="main">

  <!-- NAVBAR -->
  <div class="navbar d-flex justify-content-between">
    <button class="btn btn-light" onclick="toggleSidebar()">
      <i class="bi bi-list"></i>
    </button>
    <h5 class="mb-0">Dashboard</h5>
  </div>

  <!-- CARDS -->
  <div class="row mt-4">
    <div class="col-md-3">
      <div class="card card-primary p-3">
        <h6>Total User</h6>
        <h3>150</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card card-success p-3">
        <h6>Total Produk</h6>
        <h3>80</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card card-warning p-3">
        <h6>Transaksi</h6>
        <h3>320</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card card-danger p-3">
        <h6>Pendapatan</h6>
        <h3>Rp 25JT</h3>
      </div>
    </div>
  </div>

  <!-- TABLE -->
  <div class="card mt-4">
    <div class="card-header">
      Data Terbaru
    </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Putri</td>
            <td>putri@mail.com</td>
            <td><span class="badge bg-success">Aktif</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Budi</td>
            <td>budi@mail.com</td>
            <td><span class="badge bg-danger">Nonaktif</span></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Sinta</td>
            <td>sinta@mail.com</td>
            <td><span class="badge bg-success">Aktif</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- SCRIPT -->
<script>
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("hide");
  document.getElementById("main").classList.toggle("full");
}
</script>

</body>
</html>