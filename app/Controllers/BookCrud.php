<?php 
namespace App\Controllers;
use App\Models\BookModel;
use CodeIgniter\Controller;
 
class UserCrud extends BaseController
{
    // books list
    public function index(){
        $bookModel = new BookModel();
        $data['books'] = $bookModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }
 
    // user form
    public function create(){
        return view('add_user');
    }
  
    // insert data into database
    public function store() {
        $bookModel = new BookModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'author'  => $this->request->getVar('author'),
        ];
        $bookModel->insert($data);
        return $this->response->redirect(site_url('/books-list'));
    }
 
    // view single user
    public function singleUser($id = null){
        $bookModel = new BookModel();
        $data['user_obj'] = $bookModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
 
    // update user data
    public function update(){
        $bookModel = new BookModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'author'  => $this->request->getVar('author'),
        ];
        $bookModel->update($id, $data);
        return $this->response->redirect(site_url('/books-list'));
    }
  
    // delete user
    public function delete($id = null){
        $bookModel = new BookModel();
        $data['user'] = $bookModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/books-list'));
    }    
}