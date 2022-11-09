<?php 
namespace App\Models;
use CodeIgniter\Model;
class ProductModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'cell';
     
    protected $allowedFields = ['name', 'email', 'cell'];
}