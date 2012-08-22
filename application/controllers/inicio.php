<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
           
            $this->load->model("rubro_model","rubro");
           
	}
        
        
    public function index()
    {
        
        $data['ciudad']=  $this->rubro->ciudad();
        $data['nacional'] = $this->rubro->nacionales();
        $data['espectaculos'] = $this->rubro->espectaculos();
        
        
    
        $this->load->view('principal', $data);
        //$this->load->view('principal');
    }
    
  
    
}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */

 ?>