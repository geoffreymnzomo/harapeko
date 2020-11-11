<?php
class restaurant extends CI_Controller {

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
	
	public function index($foodimagename=NULL)
	{
	    $data=array();
		$data['restaurant_det'] = $this->DB_Model->getRestDetails($foodimagename);
		//$data['numrowz']
		$this->load->view('restaurant_page',$data);
	}
	
	function SaveCoupon(){
		if($this->input->post('ajax')=='1'){
		  
		  $fullname=$this->input->post('fullname');
		  $phonenumber=$this->input->post('phonenumber');
		  $emailaddress=$this->input->post('emailaddress');
		  $securitycode=$this->input->post('securitycode');
		  $no_coupons=$this->input->post('no_coupons');
		  $creditcard=$this->input->post('creditcard');  
		  $amount=$this->input->post('amount');
		  $restid=$this->input->post('restid'); 			

		  $checkstatus=$this->DB_Model->CheckCreditCard($creditcard,$securitycode);
		  
		  if($checkstatus){		  
		  
		 $coupondetails=$this->DB_Model->SaveCouponPurchase($fullname,$phonenumber,$creditcard,$securitycode,$emailaddress,$no_coupons,$amount,$restid)->result();	
		  
		  
		  $tmpl = array ( 'table_open'  => '<table border="0" cellpadding="0" cellspacing="0">');
          //$this->table->set_template($tmpl);
	      foreach ($coupondetails as $tickets){
		  
		  $cell1 = array('data'=> $tickets->rest_name,'style'=>'background-color:#F9F9F9');
	      $cell2 = array('data' => $tickets->fullname, 'style'=>'background-color:#CCCCCC');
	      $cell3 = array('data' => $tickets->no_coupons, 'style'=>'background-color:#F9F9F9');
	      $cell4 = array('data' => $tickets->amount, 'style'=>'background-color:#CCCCCC');
	      $cell5 = array('data' => $tickets->expiry_date, 'style'=>'background-color:#F9F9F9');
	      $cell6 = array('data' => $tickets->redemption_code, 'style'=>'background-color:#CCCCCC');
		 
		  	     	  
		  }
		  
		   $this->table->add_row(
	      'Promotion by:',
	      'Harapeko'
	       );
		   $this->table->add_row(
	      'Redemption Code:',
	      $cell6
	       );
		  $this->table->add_row(
	      'Restaurant Name:',
	      $cell1
	       );
		   $this->table->add_row(
	      'Full Name::',
	      $cell2
	       );
		   $this->table->add_row(
	      'No of Coupons:',
	      $cell3
	       );
		   $this->table->add_row(
	      'Amount:',
	      $cell4
	       );
		   $this->table->add_row(
	      'Expiry Date:',
	       $cell5
	       );
		  
		   $this->table->set_template($tmpl);
	       $response = $this->table->generate();
		  
		   //$response='testing';	  
		  
		  }else{
		  
		   $response='Coupon details are incorrect';	  		   
		  
		  }
		  
		  
		  $msg=array(
				'response'=>$response,
				'blank'=>""				 
														
		  );
			header('Content-Type: application/x-json; charset=utf-8');
			echo(json_encode($msg));
		}
     }





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>