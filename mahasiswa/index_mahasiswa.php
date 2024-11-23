<?php
session_start();

// Validasi role pengguna
if ($_SESSION['role'] !== 'mahasiswa') {
    echo "<script>
            alert('Akses ditolak! hanya mahasiswa yang bisa masuk di halaman ini.');
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
    <title>Mahasiswa Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mahasiswa Dashboard</a>
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
            <h1>Selamat datang, <?= htmlspecialchars($username) ?>!</h1>
            <p>You are logged in as <strong><?= htmlspecialchars($role) ?></strong>.</p>
        </div>

        <div class="row">
            <!-- Card 1: Jadwal Kuliah -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jadwal Kuliah</h5>
                        <p class="card-text">Lihat jadwal mata kuliah yang terdaftar.</p>
                        <a href="jadwal_kuliah.php" class="btn btn-primary">Go to Jadwal</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Lihat Nilai -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lihat Nilai</h5>
                        <p class="card-text">Cek nilai dari mata kuliah yang diikuti.</p>
                        <a href="lihat_nilai.php" class="btn btn-primary">Go to Nilai</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Profil -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Profil</h5>
                        <p class="card-text">Lihat atau edit informasi profil Anda.</p>
                        <a href="profil.php" class="btn btn-primary">Go to Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
