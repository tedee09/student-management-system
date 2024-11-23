<?php
session_start();

// Validasi role pengguna
if ($_SESSION['role'] !== 'dosen') {
    echo "<script>
            alert('Akses ditolak! hanya dosen yang bisa masuk di halaman ini.');
            window.location.href = '../login.php';
          </script>";
    exit;
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dosen Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>Halo, <?= htmlspecialchars($username) ?>!</h1>
            <p>You are logged in as <strong><?= htmlspecialchars($role) ?></strong>.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kelola Nilai Mahasiswa</h5>
                        <p class="card-text">Lihat, tambahkan, atau edit nilai mahasiswa.</p>
                        <a href="kelola_nilai.php" class="btn btn-success">Go to Nilai</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Daftar Mata Kuliah</h5>
                        <p class="card-text">Lihat daftar mata kuliah yang Anda ajar.</p>
                        <a href="daftar_mata_kuliah.php" class="btn btn-success">Go to Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Laporan Kinerja</h5>
                        <p class="card-text">Generate laporan kinerja pengajaran.</p>
                        <a href="laporan_kinerja.php" class="btn btn-success">Go to Laporan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
