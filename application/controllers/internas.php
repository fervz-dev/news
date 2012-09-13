<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Internas extends CI_Controller{
    
    
    public function nacional($titulo,$idNoticia){
        $this->load->model('noticia');
      
       $datos['nacional']=$this->noticia->nacional($idNoticia);
       $datos['nacionaldos']=  $this->noticia->nacionaldos($idNoticia);
       $datos['comentario'] = $this->noticia->comentarios($idNoticia);
   
        $this->load->view('nacional',$datos);
      
  }
  
  
  public function ciudad($titulo,$idNoticia){
      
  $this->load->model('noticia');
  
  $datos['ciudad']=$this->noticia->ciudad($idNoticia);
  $datos['ciudaddos']=  $this->noticia->ciudaddos($idNoticia);
  $datos['comentario'] = $this->noticia->comentarios($idNoticia);

        $this->load->view('ciudad',$datos);
      
  }
  
  
  public function otras($titulo,$idNoticia,$idRubro){
      
      $this->load->model('noticia');
      
       $datos['otras']=$this->noticia->otras($idNoticia,$idRubro);
       $datos['otrasdos']=  $this->noticia->otrasdos($idNoticia,$idRubro);
       $datos['comentario'] = $this->noticia->comentarios($idNoticia);
      
      $this->load->view('otras', $datos);
  }
  
  
  public function espectaculo($titulo,$idNoticia){
      
      $this->load->model('noticia');
      
       $datos['espectaculo']=$this->noticia->espectaculo($idNoticia);
       $datos['espectaculodos']=  $this->noticia->espectaculodos($idNoticia);
       $datos['comentario'] = $this->noticia->comentarios($idNoticia);
      
      $this->load->view('espectaculos', $datos);
  }
  

  
  
  

  public function inicio($inicio){
      
      $this->load->view('principal');
      

  }
    
}

?>
