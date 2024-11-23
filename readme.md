# Student Management System

Sebuah aplikasi sederhana untuk mengelola data mahasiswa, dosen, dan admin. Aplikasi ini mencakup fitur seperti pendaftaran siswa ke mata kuliah, pengelolaan nilai oleh dosen, serta akses berbasis peran (role-based access).

---

## Panduan Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Buat Database
1. Buka aplikasi manajemen database (seperti phpMyAdmin atau MySQL CLI).
2. Buat database baru dengan nama `student_management_db`:
   ```sql
   CREATE DATABASE student_management_db;
3. Impor file student_management_db.sql yang disediakan ke database Anda.

### 2. Konfigurasi Koneksi Database
1. Buka file db/koneksi.php di dalam proyek.
2. Sesuaikan konfigurasi dengan kredensial MySQL Anda:
```
$host = 'localhost';
$user = 'root';  // Ganti jika username MySQL Anda berbeda
$pass = '';      // Isi password MySQL Anda
$db   = 'student_management_db';

```
### 3. Jalankan Proyek di Localhost
1. Pindahkan folder proyek ini ke dalam direktori htdocs (untuk XAMPP) atau direktori root server web Anda.
2. Pastikan server web (XAMPP, WAMP, atau lainnya) dan database server sedang berjalan.
3. Akses proyek melalui browser: http://localhost/aas/login.php

## Fitur Utama

### Akses Berbasis Peran:
1. Admin: Mengelola data mahasiswa, dosen, dan mata kuliah.
2. Dosen: Mengelola nilai mahasiswa.
3. Mahasiswa: Melihat mata kuliah yang diambil dan progres.
4. Tampilan Dinamis: Setiap role memiliki dashboard khusus.
5. Keamanan Login: Validasi login dengan username, password, dan role.

## Kalau Mau Ngetes Kodenya Sendiri 
### Gunakan akun berikut untuk mencoba masing-masing peran:

### Admin:
```
Username: admin
Password: admin
```
### Dosen:
```
Username: dosen
Password: dosen
```
### Mahasiswa:
```
Username: mhs
Password: mhs
```

# KALAU ADA YANG MAU DI TANYAIN CHAT AJA, TANYAIN H-8 SEBELUM DEADLINE ATAU AKU GA BAKAL URUS!!!