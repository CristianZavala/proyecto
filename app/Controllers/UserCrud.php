<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
use TCPDF;
 
class UserCrud extends BaseController
{
    /* función para obtener en la vista de usuario 
    la lista de todos los usuarios registrados
    ordenados por id descendentemente*/
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
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
            'email' => $this->request->getVar('email'),
            'cell' => $this->request->getVar('cell'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }
 
    // Función para buscar un usuario en la tabla de usuarios
    public function singleUser($cell = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('cell', $cell)->first();
        return view('edit_user', $data);
    }
 
    // Función para modificar la información de un usuario de la tabla de usuarios
    // TODO hay que validar que no exista el numero de celular al modificarlo
    public function update(){
        $userModel = new UserModel();
        $cell = $this->request->getVar('cell');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->update($cell, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
  
    // Función para eliminar un usuario de la tabla de usuarios
    public function delete($cell = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('cell', $cell)->delete($cell);
        return $this->response->redirect(site_url('/users-list'));
    }    

    // Función para generar y descragra el reporte en PDF
    public function downloadPdf(){
        require_once(APPPATH.'Helpers/tcpdf/tcpdf.php');
        $userModel = new UserModel();
        $users = $userModel->findAll();
        // Sea crea una instancia de TCPDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setTitle('Usuarios');
        // Sea grega una pagina al PDF
        $pdf->AddPage();
        // Se agregan los titulos de las columnas
        $html = '<h1>USUARIOS REGISTRADOS</h1>';
        $html .= '<table border="1" cellpadding="4">
                    <thead>
                        <tr>
                            <th>Número celular</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>';
            // Se llena la tabla con los usuarios registrados
            foreach($users as $user){
                $html .= ' <tr>
                    <td>'.$user["cell"].'</td>
                    <td>'.$user["name"].'</td>
                    <td>'.$user["email"].'</td>
                </tr>';
            }

        $html .= '</tbody>
                    </table>';

        $pdf->writeHTML($html);
        $pdf->Output('reporte.pdf', 'I');
        exit();
    }
}
