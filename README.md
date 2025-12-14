<p align="center">
  <img src="public/images/logo-transparent.png" width="400" alt="MySneakers Logo">
</p>

# MySneakers 👟

**MySneakers** adalah platform marketplace inovatif yang dirancang khusus untuk para penggemar sneaker (sneakerheads). Terinspirasi oleh platform global seperti Footlocker dan Kick Avenue, MySneakers hadir untuk memberikan pengalaman jual-beli sepatu yang aman, terorganisir, dan modern.

Proyek ini dibangun menggunakan framework **Laravel** sebagai bagian dari tugas mata kuliah **Pemrograman Berbasis Platform (PBP)**.

---

## 🌟 Fitur Utama

Aplikasi ini mencakup berbagai fitur esensial untuk sebuah marketplace modern:

* **Autentikasi Pengguna:** Sistem Login, Register, dan Logout
* **Katalog Produk:** Menampilkan koleksi sepatu dengan
* **Keranjang & Transaksi:** Fitur *Add to Cart* dan simulasi checkout pembelian.
* **Transaction Log:** Fitur untuk melihat histori transaksi.

---

## 🛠️ Teknologi yang Digunakan

| Komponen | Teknologi |
| :--- | :--- |
| **Backend Framework** | Laravel 10/11 (PHP) |
| **Frontend** | Blade Templates, Tailwind CSS /  |
| **Database** | MySQL|
| **Package Manager** | Composer (PHP)|
| **Server Environment** | Docker  |

---

## 🚀 Cara Menjalankan Proyek Secara Lokal

Pastikan Anda sudah menginstal **PHP**, **Composer**, dan **Node.js** di komputer Anda sebelum memulai.

### 1. Clone Repositori
a
```bash
git clone [https://github.com/username-anda/mysneakers.git](https://github.com/username-anda/mysneakers.git)
cd mysneakers
```
### 2. Instal Depedensi PHP(Composer)
Mengunduh semua library yang dibutuhkan oleh Laravel.

```bash
composer install
```
### 3. Konfigurasi Environment .env
```bash
cp .env.example .env
```
Penting: Buka file .env tersebut dan sesuaikan konfigurasi database (DB_DATABASE, DB_USERNAME, DB_PASSWORD) dengan settingan database lokal Anda.

### 4. Generate Application Key

```bash
php artisan key:generate
```
### 5. Jalankan Migrasi Database
Membuat tabel-tabel yang diperlukan di database Anda.
```bash
php artisan migrate
```

### 6. Jalankan Server Lokal
```bash
php artisan serve
```
Aplikasi sekarang dapat diakses di http://localhost:8000.
