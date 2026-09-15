<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - CMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0f1117;
            color: #e2e8f0;
            min-height: 100vh;
        }
        .navbar {
            background: rgba(255,255,255,0.04);
            border-bottom: 1px solid rgba(255,255,255,0.08);
            backdrop-filter: blur(12px);
            padding: 0 2rem;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky; top: 0; z-index: 100;
        }
        .navbar-brand {
            display: flex; align-items: center; gap: 10px;
            font-size: 1.1rem; font-weight: 600; color: #fff; text-decoration: none;
        }
        .navbar-brand .icon {
            width: 32px; height: 32px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 16px;
        }
        .navbar-badge {
            background: rgba(99,102,241,0.15); color: #818cf8;
            border: 1px solid rgba(99,102,241,0.3);
            padding: 3px 10px; border-radius: 999px; font-size: 0.72rem; font-weight: 500;
        }
        .main { max-width: 560px; margin: 0 auto; padding: 2.5rem 1.5rem; }
        .back-link {
            display: inline-flex; align-items: center; gap: 6px;
            font-size: 0.85rem; color: #64748b; text-decoration: none; margin-bottom: 1.5rem;
            transition: color 0.2s;
        }
        .back-link:hover { color: #a78bfa; }
        .form-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 16px; overflow: hidden;
        }
        .form-card-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            background: rgba(99,102,241,0.06);
        }
        .form-card-header h1 { font-size: 1.1rem; font-weight: 700; color: #f1f5f9; }
        .form-card-header p  { font-size: 0.8rem; color: #64748b; margin-top: 4px; }
        .form-body { padding: 1.75rem 1.5rem; display: flex; flex-direction: column; gap: 1.25rem; }
        .form-group { display: flex; flex-direction: column; gap: 6px; }
        label { font-size: 0.8rem; font-weight: 600; color: #94a3b8; }
        input[type="text"], input[type="number"] {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            color: #f1f5f9;
            padding: 10px 14px;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            width: 100%;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input:focus {
            border-color: rgba(99,102,241,0.6);
            box-shadow: 0 0 0 3px rgba(99,102,241,0.15);
        }
        input::placeholder { color: #475569; }
        .form-footer {
            padding: 1.25rem 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.06);
            display: flex; gap: 10px; justify-content: flex-end;
        }
        .btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 9px 20px; border-radius: 8px; font-size: 0.875rem; font-weight: 500;
            text-decoration: none; border: none; cursor: pointer; transition: all 0.2s ease;
            font-family: 'Inter', sans-serif;
        }
        .btn-primary {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #fff; box-shadow: 0 4px 15px rgba(99,102,241,0.3);
        }
        .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(99,102,241,0.45); }
        .btn-ghost {
            background: rgba(255,255,255,0.06); color: #94a3b8;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .btn-ghost:hover { background: rgba(255,255,255,0.1); }
    </style>
</head>
<body>

<nav class="navbar">
    <a href="/product" class="navbar-brand">
        <div class="icon">📦</div>
        Product CMS
    </a>
    <span class="navbar-badge">Wrapstation Test · Task 3</span>
</nav>

<main class="main">
    <a href="/product" class="back-link">← Kembali ke Daftar Produk</a>

    <div class="form-card">
        <div class="form-card-header">
            <h1>Tambah Produk Baru</h1>
            <p>Isi semua field di bawah ini untuk menambahkan produk ke sistem</p>
        </div>

        <form action="/product/store" method="post">
            <?= csrf_field() ?>
            <div class="form-body">
                <div class="form-group">
                    <label for="product_name">Nama Produk</label>
                    <input type="text" id="product_name" name="product_name"
                           placeholder="Contoh: Laptop Gaming ASUS" required>
                </div>
                <div class="form-group">
                    <label for="qty_in_stock">Jumlah Stok</label>
                    <input type="number" id="qty_in_stock" name="qty_in_stock"
                           placeholder="Contoh: 100" min="0" required>
                </div>
                <div class="form-group">
                    <label for="price_display">Harga (Rp)</label>
                    <input type="text" id="price_display" placeholder="Contoh: 15.000.000"
                           autocomplete="off" required>
                    <input type="hidden" id="price" name="price">
                </div>
            </div>
            <div class="form-footer">
                <a href="/product" class="btn btn-ghost">Batal</a>
                <button type="submit" class="btn btn-primary">✓ Simpan Produk</button>
            </div>
        </form>
    </div>
</main>
<script>
    const display = document.getElementById('price_display');
    const hidden  = document.getElementById('price');

    display.addEventListener('input', function () {
        // Ambil hanya angka
        let raw = this.value.replace(/\D/g, '');
        // Format dengan titik ribuan
        let formatted = raw.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        this.value = formatted;
        // Simpan nilai mentah ke hidden input
        hidden.value = raw;
    });
</script>
</body>
</html>
