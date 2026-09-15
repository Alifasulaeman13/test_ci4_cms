<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { width: 300px; padding: 8px; }
        .btn { padding: 8px 15px; background-color: #4CAF50; color: white; border: none; cursor: pointer; border-radius: 3px; }
        .btn-cancel { background-color: #999; text-decoration: none; color: white; padding: 8px 15px; border-radius: 3px; }
    </style>
</head>
<body>

    <h2>Tambah Produk Baru</h2>
    <form action="/product/store" method="post">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="product_name" required>
        </div>
        <div class="form-group">
            <label>Jumlah Stok</label>
            <input type="number" name="qty_in_stock" required>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" name="price" required>
        </div>
        <button type="submit" class="btn">Simpan</button>
        <a href="/product" class="btn-cancel">Batal</a>
    </form>

</body>
</html>
