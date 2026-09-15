<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { width: 300px; padding: 8px; }
        .btn { padding: 8px 15px; background-color: #2196F3; color: white; border: none; cursor: pointer; border-radius: 3px; }
        .btn-cancel { background-color: #999; text-decoration: none; color: white; padding: 8px 15px; border-radius: 3px; }
    </style>
</head>
<body>

    <h2>Edit Produk</h2>
    <form action="/product/update/<?= $product['product_id'] ?>" method="post">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="product_name" value="<?= $product['product_name'] ?>" required>
        </div>
        <div class="form-group">
            <label>Jumlah Stok</label>
            <input type="number" name="qty_in_stock" value="<?= $product['qty_in_stock'] ?>" required>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" name="price" value="<?= $product['price'] ?>" required>
        </div>
        <button type="submit" class="btn">Update</button>
        <a href="/product" class="btn-cancel">Batal</a>
    </form>

</body>
</html>
