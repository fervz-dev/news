<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}
    public function index()
    {
	$this->load->view('principal');
    }

}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */

 ?>