<?php 
namespace App\Controllers;
use App\Models\ProductModel;
use CodeIgniter\Controller;
use TCPDF;
 
class ProductCrud extends BaseController
{
    public function index(){
        //$productModel = new ProductModel();
        //$data['users'] = $productModel->findAll();
        return view('product_list'); //$data
    }
}