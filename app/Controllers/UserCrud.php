<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
 
class UserCrud extends BaseController
{
    /* función para obtener en la vista de usuario 
    la lista de todos los usuarios registrados
    ordenados por id descendentemente*/
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }
 
    // Función para cargar la vista add_user y agregar un nuevo usuario
    public function create(){
        return view('add_user');
    }
  
    // Función para guardar el nombre y el id del usuario en la tabla de usuarios
    public function store() {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }
 
    // Función para buscar un usuario en la tabla de usuarios
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
 
    // Función para modificar la información de un usuario de la tabla de usuarios
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
  
    // Función para eliminar un usuario de la tabla de usuarios
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }    
}