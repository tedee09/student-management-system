<?php
session_start();

if ($_SESSION['role'] !== 'admin') {
    echo "<script>
            alert('Akses ditolak! hanya admin yang bisa masuk di halaman ini.');
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
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="nav-link text-white">Hi, <?= htmlspecialchars($username) ?> (<?= htmlspecialchars($role) ?>)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mb-4">Welcome to Admin Dashboard!</h1>
                <p class="lead">Manage the system efficiently with the tools below.</p>
            </div>
        </div>

        <!-- Dashboard Actions -->
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Manage Users</h5>
                        <p class="card-text">Add, edit, or remove system users.</p>
                        <a href="manage_users.php" class="btn btn-primary">Go to Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Manage Courses</h5>
                        <p class="card-text">Add or edit courses for students.</p>
                        <a href="manage_courses.php" class="btn btn-primary">Go to Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Generate Reports</h5>
                        <p class="card-text">Create and download system reports.</p>
                        <a href="generate_reports.php" class="btn btn-primary">Go to Reports</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>