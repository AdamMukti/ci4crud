<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
  protected $table = 'tbl_product';
  protected $primaryKey = 'id';
  protected $allowedFields = ['name', 'price', 'stock'];
}