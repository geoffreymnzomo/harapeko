<?php 

class Welcome extends CI_Controller {

			public function __construct()
            {
            parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$this->load->helper('date');
			$this->load->library('session');
			$this->load->library('javascript');
			$this->config->base_url();
			$this->load->library(array('table','form_validation'));
			
			           
            }
	
	public function index()
	{
		$this->load->view('index_first');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */