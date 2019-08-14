<?php

class Usuario extends CI_Controller
{

  /*function __construct(argument)
  {
    // code...
  }*/

  public function index()
  {

    $this->load->model('usuario_model');
    $usuarios = $this->usuario_model->obtener_usuarios();
    $datos = array(
      'titulo' => 'Vista Usuarios',
      'usuarios' => $usuarios
    );

    $this->load->view('usuarios', $datos);
  }
}
