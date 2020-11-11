<?php
class minamiuonuma extends CI_Controller {

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
			$this->load->model('DB_Model');
			
			           
            }
	
	public function index()
	{
	    //$data=array();
		//$data['restaurant_det'] = $this->DB_Model->getRestDetails($foodimagename);
		//$data['numrowz']
		$this->load->view('about_minami');
	}
	
	


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>