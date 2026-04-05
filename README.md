# NoysBakso - Web-Based Point of Sales & Order Management

NoysBakso adalah aplikasi web *full-stack* yang dirancang untuk mendigitalisasi proses pemesanan pada bisnis F&B (Food & Beverage). Proyek ini dikembangkan sebagai **Tugas Akhir Sekolah**, yang sekaligus menjadi titik awal ketertarikan saya dalam membangun arsitektur perangkat lunak dan mengelola sistem basis data.

Meskipun berawal dari sekolah, sistem ini dikembangkan dengan mengadopsi alur kerja nyata: memungkinkan pelanggan melihat katalog menu, melakukan pesanan, dan mencatat transaksi secara terpusat yang mencerminkan cara kerja dasar dari modul **Sales & Order Management** skala mikro.

## 🚀 Proses Bisnis & Fitur Utama
- **Katalog Menu Digital:** Menampilkan daftar produk beserta harga kepada pengguna.
- **Perekaman Transaksi:** Menangkap input pesanan dari pelanggan untuk diteruskan ke sistem.
- **Penyimpanan Terpusat:** Menggunakan *relational database* untuk memastikan integritas data pesanan, memastikan pencatatan transaksi berjalan rapi tanpa data yang hilang.

## 🛠️ Tech Stack
- **Front-End:** HTML, CSS, JavaScript
- **Back-End:** PHP
- **Database:** MySQL

## 🗄️ Skema Database Terkait
Sistem memisahkan entitas *Master Data* dan *Transactional Data* sebagai bentuk penerapan normalisasi basis data tingkat dasar:
- `tabel_produk` (Master): Menyimpan informasi statis seperti nama produk dan harga.
- `tabel_pemesanan` (Transaksi): Menyimpan riwayat pesanan, informasi input dari pengguna, dan total harga pesanan.

## 💻 Cara Menjalankan Proyek Secara Lokal
1. Pastikan komputer sudah terinstal *local web server* seperti **XAMPP** atau **Laragon**.
2. *Clone* repository ini ke dalam direktori `htdocs` (XAMPP) atau `www` (Laragon).
   ```bash
   git clone [https://github.com/mldham/noysbakso.git](https://github.com/mldham/noysbakso.git)
