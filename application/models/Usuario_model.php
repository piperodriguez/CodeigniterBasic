<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

   public function __construct() {
      $this->load->database();
   }

    public function obtener_usuarios(){
      $query = $this->db->get('user');

      return $query->result_array();
    }
  /* public function listaUsuarios()
   {
     $this->db->select('id, username');
     $this->db->from('user');
     $consulta = $this->db->get();
     $resultado = $consulta->result();
     return $resultado;
   }*/

}
