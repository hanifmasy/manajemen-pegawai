# Aplikasi Manajemen Kepegawaian

Ini adalah aplikasi Manajemen Kepegawaian sederhana dengan fitur untuk mengelola pegawai, departemen, dan proyek.

## Persiapan

1. Klon repository:
   ```bash
   git clone https://github.com/hanifmasy/manajemen-pegawai.git
   ```

2. Impor skrip SQL `data_dump.sql` ke dalam database MySQL Anda untuk menyiapkan tabel dan data dummy yang diperlukan.

3. Konfigurasi koneksi database Anda di `models/Database.php`:
   ```php
   // models/Database.php
   private $host = "nama-host-anda";
   private $username = "nama-pengguna-anda";
   private $password = "kata-sandi-anda";
   private $database = "nama-database-anda";
   ```

4. Buka proyek di direktori root server web Anda.

5. Akses proyek melalui browser web Anda.

## Struktur Folder

```plaintext
manajemen-pegawai/
|-- controllers/
|   |-- AuthController.php
|   |-- PegawaiController.php
|   |-- DepartemenController.php
|   |-- ProyekController.php
|-- models/
|   |-- Database.php
|   |-- User.php
|   |-- Pegawai.php
|   |-- Departemen.php
|   |-- Proyek.php
|-- views/
|   |-- login.php
|   |-- dashboard.php
|   |-- manage_pegawai.php
|   |-- manage_departemen.php
|   |-- manage_proyek.php
|-- .git
|-- index.php
|-- README.md
```

## Penjelasan File

- **AuthController.php:** Mengelola otentikasi pengguna (login dan logout).

- **PegawaiController.php:** Mengelola operasi CRUD untuk karyawan.

- **DepartemenController.php:** Mengelola operasi CRUD untuk departemen.

- **ProyekController.php:** Mengelola operasi CRUD untuk proyek.

- **Database.php:** Menangani koneksi database dan operasi database umum.

- **login.php**: Halaman login untuk masuk ke dalam sistem.

- **dashboard.php**: Dasbor utama setelah login, menampilkan menu dan konten terkait manajemen pegawai.

- **manage_pegawai.php:** Tampilan untuk mengelola pegawai dengan operasi CRUD.

- **manage_departemen.php:** Tampilan untuk mengelola departemen dengan operasi CRUD.

- **manage_proyek.php:** Tampilan untuk mengelola proyek dengan operasi CRUD.

- **data_dump.sql:** Skrip SQL untuk menyiapkan tabel database dan data dummy.

- **index.php:** Titik masuk utama untuk aplikasi web.
