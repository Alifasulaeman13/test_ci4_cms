<!DOCTYPE html>
<html>
<head>
    <title>Product List - CMS</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; border-radius: 3px; }
        .btn-add { background-color: #4CAF50; }
        .btn-edit { background-color: #2196F3; }
        .btn-delete { background-color: #f44336; }
    </style>
</head>
<body>

    <h2>Manajemen Produk (CMS Sederhana)</h2>
    <a href="/product/create" class="btn btn-add">+ Tambah Produk</a>

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
            <?php if(!empty($products)): ?>
                <?php foreach($products as $prod): ?>
                <tr>
                    <td><?= $prod['product_id'] ?></td>
                    <td><?= $prod['product_name'] ?></td>
                    <td><?= $prod['qty_in_stock'] ?></td>
                    <td>Rp <?= number_format($prod['price'], 0, ',', '.') ?></td>
                    <td>
                        <a href="/product/edit/<?= $prod['product_id'] ?>" class="btn btn-edit">Edit</a>
                        <a href="/product/delete/<?= $prod['product_id'] ?>" class="btn btn-delete" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5" style="text-align: center;">Tidak ada data produk.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
