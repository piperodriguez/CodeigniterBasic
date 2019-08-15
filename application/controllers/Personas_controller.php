<?php
                        //extendemos CI_Controller
class Personas_controller extends CI_Controller{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();

        //llamo al helper url
        $this->load->helper("url");

        //llamo o incluyo el modelo
        $this->load->model("Personas_model");

        //cargo la libreria de sesiones
        $this->load->library("session");
    }

    //controlador por defecto
    public function index(){

        //array asociativo con la llamada al metodo
        //del modelo
        $personas["ver"]=$this->Personas_model->ver();

        //cargo la vista y le paso los datos
        $this->load->view("personas_view",$personas);
    }

    //controlador para añadir
    public function add(){

        //compruebo si se a enviado submit
        if($this->input->post("submit")){

        //llamo al metodo add
        $add=$this->Personas_model->insertar(
                $this->input->post("email"),
                $this->input->post("password"),
                $this->input->post("nombre"),
                $this->input->post("apellido"),
                $this->input->post("id")
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto', 'Persona añadido correctamente');
        }else{
            $this->session->set_flashdata('incorrecto', 'Persona añadido correctamente');
        }

        //redirecciono la pagina a la url por defecto
        redirect('/personas_controller/index');
    }

    //controlador para modificar al que
    //le paso por la url un parametro
    public function mod($id_persona){
        if(is_numeric($id_persona)){
          $datos["mod"]=$this->Personas_model->actualizar($id_persona);
          $this->load->view("modificar_view",$datos);
          if($this->input->post("submit")){
                $mod=$this->Personas_model->actualizar(
                        $id_persona,
                        $this->input->post("submit"),
                        $this->input->post("email"),
                        $this->input->post("password"),
                        $this->input->post("nombre"),
                        $this->input->post("apellido"),
                        $this->input->post("id")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Persona modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Persona modificado correctamente');
                }
                redirect(base_url());
            }
        }else{
            redirect(base_url());
        }
    }

    //Controlador para eliminar
    public function eliminar($id_persona){
        if(is_numeric($id_persona)){
          $eliminar=$this->Personas_model->eliminar($id_persona);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Persona eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Persona eliminado correctamente');
          }
          redirect(base_url());
        }else{
          redirect(base_url());
        }
    }
}