<?php
class Columnista_controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('columnista_model');
    }
    
    public function columnista($titulo, $id_columna){
        
        $data['columnista']=$this->columnista_model->columnista($id_columna);
        $data['columnista_mas']=$this->columnista_model->mas_columnista($id_columna);
        $data['comentario']=  $this->columnista_model->comentarios($id_columna);
        $this->load->view('noticia_columna',$data);
       
    }
    
     public function insertar(){
       
       $data['id']= $this->input->post('id_columna');
       $data['nombre'] =  $this->input->post('nombre'); 
       $data['email'] =  $this->input->post('email');
       $data['comentario'] =  $this->input->post('comentario');
       
       $comentario=$this->columnista_model->inserta($data);
       
       //$this->load->view('principal');
    }
}
?>
