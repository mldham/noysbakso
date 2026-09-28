# NoysBakso - Web-Based Point of Sales & Order Management

NoysBakso adalah web *full-stack* yang dirancang untuk mendigitalisasi proses pemesanan pada bisnis F&B (Food & Beverage). Proyek ini dikembangkan sebagai **Tugas Akhir Sekolah**, yang menjadi awal ketertarikan saya dalam membangun arsitektur perangkat lunak dan mengelola sistem basis data.

Meskipun berawal dari sekolah, sistem ini dikembangkan dengan mengadopsi alur kerja nyata: memungkinkan pelanggan melihat katalog menu, melakukan pesanan, dan mencatat transaksi secara terpusat yang mencerminkan cara kerja dasar dari modul **Sales & Order Management** skala mikro.

## Proses Bisnis & Fitur Utama
- **Katalog Menu Digital:** Menampilkan daftar produk beserta harga kepada pengguna.
- **Perekaman Transaksi:** Menangkap input pesanan dari pelanggan untuk diteruskan ke sistem.
- **Penyimpanan Terpusat:** Menggunakan *relational database* untuk memastikan integritas data pesanan, memastikan pencatatan transaksi berjalan rapi tanpa data yang hilang.
- **Analisi Penjualan:** Menampilkan analisis penjualan berdasarkan data yang sudah tersimpan di database dengan login menggunakan akun admin.

## Tech Stack
- **Front-End:** HTML, CSS, JavaScript
- **Back-End:** PHP
- **Database:** MySQL

## Skema Database
- `tabel_produk` (Master): Menyimpan informasi statis seperti nama produk dan harga.
- `tabel_pemesanan` (Transaksi): Menyimpan riwayat pesanan, informasi input dari pengguna, dan total harga pesanan.
- `tabel_detail_pesanan` (Detail Transaksi): Menyimpan riwayat pesanan, informasi menu apa saja yang dipesan dan berapa jumlahnya.
- `tabel_user_acc` (Akun): Menyimpan data dari akun yang sudah dibuat oleh user.
>>>>>>> 97ac199b2c77907ed92c594890ee2b8eaa7d5fde
