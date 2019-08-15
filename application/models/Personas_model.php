<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
               //extendemos CI_Model
class Personas_model extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();

        //cargamos la base de datos
        $this->load->database();
    }

    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM persona");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }

    public function insertar($email,$password,$nombre,$apellido,$id){
        $consulta=$this->db->query("SELECT email FROM persona WHERE email LIKE '$email'");
        if($consulta->num_rows()==0){
            $consulta=$this->db->query("INSERT INTO persona VALUES(NULL,'$email','$password','$nombre','$apellido','$id');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function actualizar($id_persona,$modificar="NULL",$email="NULL",$password="NULL",$nombre="NULL",$apellido="NULL",$id="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM persona WHERE id_persona=$id_persona");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE persona SET email='$email', password='$password',
              nombre='$nombre', apellido='$apellido', id='$id' WHERE id_persona=$id_persona;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }

    public function eliminar($id_persona){
       $consulta=$this->db->query("DELETE FROM persona WHERE id_persona=$id_persona");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
}
