<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - CMS</title>
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

        /* ---- TOP NAV ---- */
        .navbar {
            background: rgba(255,255,255,0.04);
            border-bottom: 1px solid rgba(255,255,255,0.08);
            backdrop-filter: blur(12px);
            padding: 0 2rem;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
        }
        .navbar-brand .icon {
            width: 32px; height: 32px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 16px;
        }
        .navbar-badge {
            background: rgba(99,102,241,0.15);
            color: #818cf8;
            border: 1px solid rgba(99,102,241,0.3);
            padding: 3px 10px;
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 500;
        }

        /* ---- MAIN CONTENT ---- */
        .main {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem;
        }

        /* ---- PAGE HEADER ---- */
        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .page-title h1 {
            font-size: 1.6rem;
            font-weight: 700;
            color: #f1f5f9;
        }
        .page-title p {
            font-size: 0.875rem;
            color: #64748b;
            margin-top: 4px;
        }

        /* ---- BUTTONS ---- */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 9px 18px;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .btn-primary {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #fff;
            box-shadow: 0 4px 15px rgba(99,102,241,0.3);
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(99,102,241,0.45);
        }
        .btn-edit {
            background: rgba(59,130,246,0.15);
            color: #60a5fa;
            border: 1px solid rgba(59,130,246,0.25);
        }
        .btn-edit:hover { background: rgba(59,130,246,0.25); }
        .btn-delete {
            background: rgba(239,68,68,0.12);
            color: #f87171;
            border: 1px solid rgba(239,68,68,0.2);
        }
        .btn-delete:hover { background: rgba(239,68,68,0.22); }

        /* ---- STATS CARDS ---- */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .stat-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            transition: border-color 0.2s;
        }
        .stat-card:hover { border-color: rgba(99,102,241,0.4); }
        .stat-label {
            font-size: 0.75rem;
            color: #64748b;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: #f1f5f9;
            margin-top: 6px;
        }
        .stat-value.purple { color: #a78bfa; }
        .stat-value.blue   { color: #60a5fa; }
        .stat-value.green  { color: #34d399; }

        /* ---- TABLE CARD ---- */
        .table-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 16px;
            overflow: hidden;
        }
        .table-card-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .table-card-header h3 {
            font-size: 0.9rem;
            font-weight: 600;
            color: #cbd5e1;
        }
        .dot { width: 8px; height: 8px; border-radius: 50%; display: inline-block; margin-right: 4px; }
        .dot-green { background: #34d399; box-shadow: 0 0 8px #34d399; }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead th {
            padding: 12px 16px;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 600;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        tbody tr {
            border-bottom: 1px solid rgba(255,255,255,0.04);
            transition: background 0.15s;
        }
        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background: rgba(255,255,255,0.03); }
        tbody td {
            padding: 14px 16px;
            font-size: 0.875rem;
            color: #cbd5e1;
            vertical-align: middle;
        }
        .product-name {
            font-weight: 500;
            color: #f1f5f9;
        }
        .badge-stock {
            display: inline-flex;
            align-items: center;
            padding: 3px 10px;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-stock.high  { background: rgba(52,211,153,0.12); color: #34d399; border: 1px solid rgba(52,211,153,0.2); }
        .badge-stock.med   { background: rgba(251,191,36,0.12); color: #fbbf24; border: 1px solid rgba(251,191,36,0.2); }
        .badge-stock.low   { background: rgba(239,68,68,0.12);  color: #f87171; border: 1px solid rgba(239,68,68,0.2); }
        .price { font-weight: 600; color: #a78bfa; }
        .id-badge {
            font-family: monospace;
            font-size: 0.8rem;
            background: rgba(255,255,255,0.06);
            padding: 2px 8px;
            border-radius: 4px;
            color: #64748b;
        }
        .actions { display: flex; gap: 6px; }
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #475569;
        }
        .empty-state .empty-icon { font-size: 3rem; margin-bottom: 12px; }
        .empty-state p { font-size: 0.9rem; }

        /* ---- FLASH MESSAGES ---- */
        .alert {
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .alert-success { background: rgba(52,211,153,0.1); color: #34d399; border: 1px solid rgba(52,211,153,0.2); }
        .alert-error   { background: rgba(239,68,68,0.1);  color: #f87171; border: 1px solid rgba(239,68,68,0.2); }
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

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">✅ <?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-error">❌ <?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <div class="page-header">
        <div class="page-title">
            <h1>Manajemen Produk</h1>
            <p>Kelola seluruh data produk pada sistem ini</p>
        </div>
        <a href="/product/create" class="btn btn-primary">＋ Tambah Produk</a>
    </div>

    <!-- Stats -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-label">Total Produk</div>
            <div class="stat-value purple"><?= count($products) ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Total Stok</div>
            <div class="stat-value blue"><?= array_sum(array_column($products, 'qty_in_stock')) ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Total Nilai</div>
            <div class="stat-value green">
                Rp <?= number_format(array_sum(array_map(fn($p) => $p['price'] * $p['qty_in_stock'], $products)), 0, ',', '.') ?>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="table-card">
        <div class="table-card-header">
            <h3><span class="dot dot-green"></span> Daftar Produk</h3>
            <span style="font-size:0.75rem;color:#475569;"><?= count($products) ?> item</span>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $prod): ?>
                    <?php
                        $qty = $prod['qty_in_stock'];
                        $stockClass = $qty >= 50 ? 'high' : ($qty >= 10 ? 'med' : 'low');
                    ?>
                    <tr>
                        <td><span class="id-badge">#<?= $prod['product_id'] ?></span></td>
                        <td class="product-name"><?= esc($prod['product_name']) ?></td>
                        <td><span class="badge-stock <?= $stockClass ?>"><?= $qty ?> unit</span></td>
                        <td class="price">Rp <?= number_format($prod['price'], 0, ',', '.') ?></td>
                        <td>
                            <div class="actions">
                                <a href="/product/edit/<?= $prod['product_id'] ?>" class="btn btn-edit">✏️ Edit</a>
                                <a href="/product/delete/<?= $prod['product_id'] ?>" class="btn btn-delete"
                                   onclick="return confirm('Yakin hapus produk ini?')">🗑️ Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">
                            <div class="empty-state">
                                <div class="empty-icon">📭</div>
                                <p>Belum ada produk. Klik <strong>+ Tambah Produk</strong> untuk mulai.</p>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</main>
</body>
</html>
