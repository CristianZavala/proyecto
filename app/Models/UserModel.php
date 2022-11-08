<?php 
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'cell';
     
    protected $allowedFields = ['name', 'email', 'cell'];
}