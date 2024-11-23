<?php 
	include('db/koneksi.php');

	if (isset($_POST['kirim'])) {
		$nama = $_POST['username'];
		$password = $_POST['password'];

		$sumber = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$nama'");
		$data = mysqli_fetch_assoc($sumber);
		$cek = mysqli_num_rows($sumber);

		if ($cek > 0) {
			if ($password == $data['password']) {
				session_start();
				$_SESSION['user_id'] = $data['id_user'];
				$_SESSION['username'] = $data['username'];
				$_SESSION['role'] = $data['role'];

				if ($_SESSION['role'] == 'admin') {
					echo "<script> window.location.href='admin/index_admin.php'; </script>";
				} else if ($_SESSION['role'] == 'dosen') {
					echo "<script> window.location.href='dosen/index_dosen.php'; </script>";
				} else if ($_SESSION['role'] == 'mahasiswa') {
					echo "<script> window.location.href='mahasiswa/index_mahasiswa.php'; </script>";
				}
			} else {
				echo "<script> alert('Password salah!'); window.location.href='login.php'; </script>";
			}
		} else {
			echo "<script> alert('Username tidak ditemukan!'); window.location.href='login.php'; </script>";
		}
	}
?>
