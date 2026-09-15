<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = ['product_name', 'qty_in_stock', 'price'];
}
