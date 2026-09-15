# Soal 3: CI4 CMS (Product Management)

Aplikasi CMS sederhana ini dibuat menggunakan CodeIgniter 4 untuk menjawab Soal 3 dari test Wrapstation.

## Fitur Utama
1. **CRUD Produk**: Bisa tambah, edit, dan hapus produk. UI/UX nya menggunakan dark mode, glassmorphism, dan SweetAlert2 untuk konfirmasinya.
2. **Simulasi Pembelian**: Sesuai requirement soal, ada tombol "Beli" di tiap produk. Kalau diklik, stok (qty) produk tersebut otomatis berkurang 1. Ini untuk mensimulasikan proses checkout sederhana tanpa harus membuat sistem cart yang kompleks.
3. **Database Migrations**: Struktur tabel database dibuat pakai file migration bawaan CI4, jadi gampang di-setup.

## System Specs
Sesuai dengan *Submission Guidelines*:
- OS: Windows
- CPU: Intel Core i7 Gen 14
- RAM: 16 GB
- Storage: SSD 512GB Gen4

## Cara Install & Run
Requirement minimum: PHP 8.3 & MySQL/MariaDB

1. **Clone repo ini:**
```bash
git clone https://github.com/Alifasulaeman13/test_ci4_cms.git
cd test_ci4_cms
```

2. **Setup Database:**
Buat database baru di MySQL dengan nama `cmd_db` (atau sesuaikan config di `.env` file).

3. **Install Dependencies & Migrate:**
```bash
composer install
php spark migrate
```
*(Perintah migrate akan otomatis nge-create tabel `products` di database).*

4. **Jalankan Server Lokal:**
```bash
php spark serve
```

5. Buka di browser: `http://localhost:8080/product`
