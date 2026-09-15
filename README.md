# Solusi Soal 3: CodeIgniter 4 CMS (Product Management)

Aplikasi ini adalah sistem *Content Management System (CMS)* sederhana yang dibangun menggunakan **CodeIgniter 4** untuk mensimulasikan proses pembelian produk sesuai dengan persyaratan tes.

## 🚀 Fitur Utama
1. **CRUD Produk Lengkap** (Manajemen Data)
   - Tambah produk dengan input nama, stok, dan harga
   - Edit detail produk
   - Hapus produk (dilengkapi validasi modern SweetAlert2)
   - Tampilan *Modern Dark Mode* yang responsif.
2. **Simulasi Proses Pembelian Produk**
   - Dilengkapi tombol khusus **"🛒 Beli"** di setiap baris produk.
   - Saat ditekan, sistem akan mengkonfirmasi pembelian dan secara otomatis **mengurangi stok (qty) produk sebanyak 1 unit**.
   - Ini adalah bentuk simulasi langsung (transaksional sederhana) untuk memenuhi syarat "mensimulasikan proses pembelian produk" tanpa memerlukan sistem *Cart* (keranjang) atau otentikasi User yang kompleks.
3. **Database Migrations**
   - Skema database (tabel `Product`) dibuat menggunakan sistem Migration bawaan CI4, sehingga mudah di-*deploy* di mesin manapun.

## 💻 Persyaratan Teknis
- **PHP** ^8.1
- **Database** MySQL (atau MariaDB)

## 🛠️ Cara Instalasi & Menjalankan

1. **Clone repository ini**
   ```bash
   git clone https://github.com/Alifasulaeman13/test_ci4_cms.git
   cd test_ci4_cms
   ```

2. **Buat Database**
   Buka *phpMyAdmin* (atau tool sejenis) dan buat database baru bernama **`cmd_db`** (atau sesuaikan dengan `.env`).

3. **Install Dependencies & Jalankan Migration**
   ```bash
   composer install
   php spark migrate
   ```
   *Perintah `spark migrate` akan otomatis membuat tabel `products` beserta struktur strukturnya di database Anda.*

4. **Jalankan Development Server**
   ```bash
   php spark serve
   ```

5. **Akses Aplikasi**
   Buka browser dan akses: **[http://localhost:8080/product](http://localhost:8080/product)**

## 🎨 Tentang UI/UX
Tampilan dibangun sepenuhnya dari awal (tanpa *template/framework CSS* eksternal seperti Bootstrap) untuk membuktikan kemampuan modifikasi dan *styling* mandiri. UI ini mengadopsi tren **Modern Dark Mode** dengan sentuhan *Glassmorphism*, palet warna yang kontras, dan Auto-Formatter angka (Ribuan) secara *real-time* berbasis JavaScript murni. Notifikasi dan konfirmasi aksi menggunakan *SweetAlert2* untuk *user experience* terbaik.
