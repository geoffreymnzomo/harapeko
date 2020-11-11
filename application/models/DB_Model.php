<?php

class DB_Model extends CI_Model{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		
    }
	function getRestDetails($foodimagename=NULL){
		$data=array();
		//$query=$this->db->get_where('contract_details',array('custid'=>$custid));
		$query1="SELECT * FROM foods LEFT JOIN restaurant ON foods.restaurant_id=restaurant.rest_id where foodimage_name='$foodimagename' ";
		$query=$this->db->query($query1);
		if($query->num_rows()>0){
			foreach($query->result_array() as $row){
				$data[]=$row;
			}
		}
		//$this->lockRecord($custid);
		$query->free_result();
		return $data;
		
	}
	
	function CheckCreditCard($creditcard=NULL,$secretcode=NULL){
	
	
	 $query1="SELECT * FROM credit_cards  where cardnumber='$creditcard' and expirydate > CURDATE() and secret_code='$secretcode' ";
		$query=$this->db->query($query1);
		
		if($query->num_rows()==1){
		
		 $result=true;
			
		}else{
		
		 $result=false;
		
		}
	
	 return $result;
	
	}

   function SaveCouponPurchase($fullname,$phonenumber,$cardnumber,$secretcode,$emailaddress,$nocoupons,$amount,$restid){
		//$data2=array();
		$data4=array();
	    $data2 = array(
				'fullname'=>$fullname,
				'phonenumber'=>$phonenumber,
				'creditcard'=>$cardnumber,
				'securitycode'=>$secretcode,
				'no_coupons'=>$nocoupons,
				'amount'=>$amount
         );
		
		$this->db->insert('coupon_purchases', $data2);
		
		$query1="SELECT * FROM coupon_purchases order by id desc limit 1 ";
		$query=$this->db->query($query1);
		
		foreach($query->result_array() as $row){
				$coupon_purchase_id=$row['id'];
			}
		
		$query2="SELECT * FROM redemption_codes where restaurant_id='$restid' and status=0 order by code_id desc limit 1 ";
		$queryresult2=$this->db->query($query2);
		
		foreach($queryresult2->result_array() as $row){
				$code=$row['redemption_code'];
			}
				
		$expirydate=date('Y-m-d', strtotime("+60 days"));
		$query3="update redemption_codes set coupon_purchase_id='$coupon_purchase_id',expiry_date='$expirydate', status=1 where redemption_code='$code'";
		$this->db->query($query3);
		
		$query4="SELECT * FROM redemption_codes LEFT JOIN coupon_purchases ON redemption_codes.coupon_purchase_id=coupon_purchases.id LEFT JOIN restaurant ON restaurant.rest_id=redemption_codes.restaurant_id WHERE redemption_codes.redemption_code='$code' ";
		
		$queryresult4=$this->db->query($query4);
		/*if($queryresult4->num_rows()>0){
			foreach($queryresult4->result_array() as $row){
				$data4[]=$row;
			}
		}*/
		//$this->lockRecord($custid);
		//$query->free_result();
		return $queryresult4;
    }
	
	
	
	
}


?>