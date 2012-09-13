<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Comentarios extends CI_Controller{
    
    
    
    public function insertar(){
       $this->load->model('comentarios_model');
       
       $data['id']= $this->input->post('id_noticia');
       $data['nombre'] =  $this->input->post('nombre'); 
       $data['email'] =  $this->input->post('email');
       $data['comentario'] =  $this->input->post('comentario');
       
       $comentario=$this->comentarios_model->inserta($data);
       
       $this->load->view('principal');
    }
    
}
?>
