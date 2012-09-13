<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Videos_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('videos_model');
    }
    public function videos($id){
       
       $datos['ver_video']=$this->videos_model->video($id);
       //$vid=$this->videos->video($id);
       $datos['ver_videodos']=  $this->videos_model->videodos($id);
       //var_dump($vid);
        $this->load->view('ver_video',$datos);
      
  }
    
  
    
}

?>
