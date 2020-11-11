<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Harapeko</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="<?php echo base_url();?>Web/layout/styles/layout.css" type="text/css" />
<link href="<?php echo base_url();?>Web/jquery_template/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>engine1/jquery.js"></script>
<script src="<?php echo base_url();?>/ui/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.mouse.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.button.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.draggable.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.position.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.resizable.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.button.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.dialog.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.effect.js"></script>
<script src="<?php echo base_url();?>/ui/jquery.ui.datepicker.js"></script>

<script>
$(function(){
  
  $('#datepicker').datepicker();
});
</script>


  <style>
				body { font-size: 62.5%; }
				input.text { margin-bottom:12px; width:95%; padding: .4em; }
				fieldset { padding:0; border:0; margin-top:25px; }
				h1 { font-size: 1.2em; margin: .6em 0; }
				div#users-contain { width: 350px; margin: 20px 0; }
				div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
				div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
				.ui-dialog .ui-state-error { padding: .3em; }
				.validateTips { border: 1px solid transparent; padding: 0.3em; }
				
	       </style>
			
	<script>
	$(function() {
		var name = $( "#name" ),
			email = $( "#email" ),
			password = $( "#password" ),
			allFields = $( [] ).add( name ).add( email ).add( password ),
			tips = $( ".validateTips" );

		function updateTips( t ) {
			tips
				.text( t )
				.addClass( "ui-state-highlight" );
			setTimeout(function() {
				tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
		}

		function checkLength( o, n, min, max ) {
			if ( o.val().length > max || o.val().length < min ) {
				o.addClass( "ui-state-error" );
				updateTips( "Length of " + n + " must be between " +
					min + " and " + max + "." );
				return false;
			} else {
				return true;
			}
		}

		function checkRegexp( o, regexp, n ) {
			if ( !( regexp.test( o.val() ) ) ) {
				o.addClass( "ui-state-error" );
				updateTips( n );
				return false;
			} else {
				return true;
			}
		}

		
		$( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 420,
			width: 350,
			position: {my: "top middle",
                            at: "top middle",
                            of: "#top"},
			modal: true,
			buttons: {
				"Buy Coupon": function() {
					var bValid = true;
					//allFields.removeClass( "ui-state-error" );
             
			 
			 	     var fullname=$("#fullname").val();
					 var phonenumber=$("#phonenumber").val();
					 var emailaddress=$("#emailaddress").val();
					 var securitycode=$("#securitycode").val();
					 var no_coupons=$("#no_coupons").val();
					 var creditcard=$("#creditcard").val();
					 var restid=$("#restid").val();
					 var amt=$("#amt").val();

					 if(fullname.length===0){
					 alert("Please enter your full names");
				 //alert("Comments are Mandatory");
				     }
					 else if (phonenumber.length===0) {
                 
				     alert("Please enter your Phone number");
                
				     }
					 else if (emailaddress.length===0) {
                 
				     alert("Please enter your Email address");
                
				     }
					 else if (securitycode.length===0) {
                 
				     alert("Please enter Security Code");
                
				     }
					 else if (creditcard.length===0) {
                 
				     alert("Please enter your Credit Card Details");
                
				     }					 
					 
					 else{			 
					if ( bValid ) {
						
				    
				
				 var form_data={
		            'ajax':1,
					'fullname':fullname,
					'phonenumber':phonenumber,
					'emailaddress':emailaddress,
					'securitycode':securitycode,
					'no_coupons':no_coupons,
					'amount':amt,
					'creditcard':creditcard,
					'restid':restid
								
		          } ; 
				  
				 // alert(restid);				  
				  $.ajax({
                url: "<?php echo base_url();?>index.php/restaurant/SaveCoupon",  
				traditional: true, 
				type: "POST",
				async:false,
                data:form_data,
                success: function(msg) 
                {
				  
				  $('#coupon_header').html('Coupon Details');
				  $('#coupon_details').html(msg.response); 
				  //alert(msg.response);
				
	           }
                
			
               });        					
	
						$( this ).dialog( "close" );
					}
					}
					
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});

		$( "#create-user" )
			.button()
			.click(function() {
				$( "#dialog-form" ).dialog( "open" );
			});
	});
	
	
	</script>
    <script>
	function reply_click()
        { 
		
		//alert("testing");
		$( "#dialog-form" ).dialog( "open" );
       
	    }
	function computepayment()
        { 
		
		 var coupon_amt=$("#coupon_price").val();
		 var no_coupons=$("#no_coupons").val();
		 var paymentamt=coupon_amt * no_coupons;
		 $('#amt').val( paymentamt);
			
       
	    }
	</script>
    

<style>
.labelsrest{
color:#860F0F; 
font-weight:500;
font-size:12px;

}
.button {
 background-color:#D60D0F;
 float:left
 }
.textrest{
color:#860F0F; 
font-weight:500;
font-size:12px;
color:#000000

}
.titlerest{
color:#860F0F; 
font-weight:bold;
}

</style>
</head>
<body id="top">

<div class="wrapper col1">

</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="<?php echo base_url();?>/index.php/welcome">Home</a></li>
       <!-- <li><a href="#">Coupons</a>
          <ul>
            <li><a href="#">500-1000 Yen</a></li>
            <li><a href="#">1000-1500 Yen</a></li>
            <li><a href="#">1500-2000 Yen</a></li>
            <li><a href="#">2000-2500 Yen</a></li>
            <li><a href="#">2000-Above Yen</a></li>
          </ul>
        </li>-->
       <!--  <li><a href="#">Location</a>
          <ul>
            <li><a href="#">Muikamachi</a></li>
            <li><a href="#">Muikamachi</a></li>
            <li><a href="#">Yamato</a></li>
            <li><a href="#">Echigo Yuzawa</a></li>
          </ul>
        </li>
        <li><a href="#">Menu</a>
          <ul>
            <li><a href="#">Breakfast</a></li>
            <li><a href="#">Lunch</a></li>
            <li><a href="#">Dinner</a></li>
          </ul>
        </li>
        <li class="last"><a href="#">Login </a></li>-->
        <li class="last"><a href="#">Minami Uonuma </a></li>
		
      </ul>
    </div>
     <div id="search">
     
    </div> 
    <br class="clear" />
  </div>
</div>

<div class="wrapper col5">
  <div id="container">
    <div id="content">
    
      <h1 style="color:#860F0F; font-weight:500; font-size:24px"><?php 
	foreach($restaurant_det as $row){
	$restname=$row['rest_name'];
		echo $restname. ' restaurant';
	}	
	?>	</h1>
    
    <div id="services">
    <ul>

         <li style="height:185px;margin-bottom:10px;">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:210px; padding-top:0px; padding-left:0px; ">
          <?php 
			foreach($restaurant_det as $row){
			$restimage1=$row['rest_image1'];
				}	
			?>	
          <img src="
		  <?php echo base_url();?>Web/images/<?php 
		   if(isset($restimage1))
		    echo $restimage1?>" alt="" />
        </div>
        </li>
        <li style="height: 185px; margin-bottom:10px; ">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
         <?php 
			foreach($restaurant_det as $row){
			$restimage2=$row['rest_image2'];
				}	
			?>	
          <img src="
		  <?php echo base_url();?>Web/images/<?php 
		  if(isset($restimage2))
		  echo $restimage2
		  ?>" alt="" />
        </div>
        </li>
        </ul>
      </div>
      </br>
     <!-- <h2 class="labelsrest">Restaurant Information</h2>-->
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
       
        <tbody>
          <tr class="light">
            <td class="labelsrest">Contact Details</td>
            <td colspan="3" class="textrest"><?php 
				foreach($restaurant_det as $row){
				$restcontact=$row['Contact_details'];
					echo $restcontact;
				}	
				?>
            </td>
          </tr>
          <tr class="dark">
            <td class="labelsrest">Location</td>
            <td colspan="3" class="textrest"><?php 
				foreach($restaurant_det as $row){
				$restlocation=$row['location'];
					echo $restlocation;
				}	
				?>
            </td>
          </tr>
          <tr class="light">
            <td class="labelsrest">Menu Description</td>
             <td colspan="3" class="textrest"><?php 
				foreach($restaurant_det as $row){
				$restmenu=$row['menu_description'];
					echo $restmenu;
				}	
				?>
            </td>
          </tr>
          <tr class="dark">
            <td class="labelsrest">Operating Hours</td>
             <td colspan="3" class="textrest"><?php 
				foreach($restaurant_det as $row){
				$restoperating=$row['rest_operating_hrs'];
					echo $restoperating;
				}	
				?>
            </td>
          </tr>
            <tr class="light">
            <td class="labelsrest">Capacity</td>
             <td colspan="3" class="textrest"><?php 
				foreach($restaurant_det as $row){
				$restcapacity=$row['capacity'];
					echo $restcapacity;
				}	
				?>
            </td>
          </tr>
          <tr class="dark">
            <td class="labelsrest">Website</td>
            <td colspan="3" class="textrest"><?php 
				foreach($restaurant_det as $row){
				$restwebsite=$row['rest_website'];
					echo $restwebsite;
				}	
				?>
            </td>
          </tr>
        </tbody>
      </table>
      <h2 id="coupon_header"></h2>
      <div id="coupon_details">
      </div>
     
 
    </div>
    <div id="column">
      <div class="subnav" style="margin:0">
        <h2 style="color:#860F0F; font-weight:500; font-size:20px" >Buy Coupon Now</h2>
        <ul>
          <?php 
			foreach($restaurant_det as $row){
			 $foodimage=$row['foodimage_name'].'.jpg';
			 $foodlabel=$row['food_title'].' '.$row['food_coupon_price'].'Yen';
			 			  
			}	
		  ?>	
        <li>
            <img src="<?php echo base_url();?>Web/images/<?php echo $foodimage?>" alt="" width="100%" height="100%" />
             
      </li>
      </ul>
      <p class="readmore" style="background-color:#FF0000"><a href="<?php echo base_url()?>index.php/restaurant/index/sushi_nigiri-assort_1000yen" onclick="reply_click();"><?php echo $foodlabel?> </a></p>
      <button  onClick="reply_click();" style="margin-top:4px; margin-left:4px;">Buy Coupon</button>
      </div>
      <br /> 
            
      <div class="holder">
        <h2>Terms and Conditions</h2>
        <p>All coupons will be sold by Harapeko but managed by restaurant owners</p>
        <ul>
          <li><a href="#">Once coupons have been bought are not refundable</a></li>
          <li>Coupons cannot be redeemed after expiry date</li>
          <li><a href="#">Coupons are only redeemable at restaurant of purchase</a></li>
        </ul>
        
        <p class="readmore"><a href="#">Contact us &raquo;</a></p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper col7">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved </p>
    <p class="fl_right">Website designed by IUJ-Group 5<a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
    <br class="clear" />
  </div>
</div>
<div id="dialog-form" title="Coupon Purchase Details">
 
  <form>
    <fieldset style="margin:0px;">
      <label for="name" style="color:#000000; font-weight:bold">Full Name</label>
      <input type="text" name="name" id="fullname" value="" style="margin-top:5px;" class="text ui-widget-content ui-corner-all">
      <label for="name" style="color:#000000; font-weight:bold">Phone Number</label>
      <input type="text" name="name" id="phonenumber" value="" style="margin-top:5px;" class="text ui-widget-content ui-corner-all">
      <label for="name" style="color:#000000; font-weight:bold">Email Address</label>
      <input type="text" name="name" id="emailaddress" value="" style="margin-top:5px;" class="text ui-widget-content ui-corner-all">
      <!--<label for="name" style="color:#000000; margin-bottom:10px; font-weight:bold">Date of Redemption</label>
      </br>
     <input id="datepicker" type="text" / style="margin-bottom:10px; margin-top:5px;"></br>-->
      
      
     <label for="name" style="color:#000000; font-weight:bold">Number of Coupons</label>
      <select id="no_coupons" class="text ui-widget-content ui-corner-all" style="margin-bottom:20px;" onchange="computepayment();">
	  <option value="1" selected>1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
	  </select></br>
      <label for="name" style="color:#000000; font-weight:bold">Payment Amount</label></br>
      <input type="text" name="amt" id="amt" value="amount" style="margin-top:5px;" readonly="readonly" class="text ui-widget-content ui-corner-all">
     
      <label for="name" style="color:#000000; font-weight:bold">Credit Card Number</label>
      <input type="text" name="creditcard" id="creditcard" value="" style="margin-top:5px;"  class="text ui-widget-content ui-corner-all">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
      <label for="name" style="color:#000000; font-weight:bold">Security Code</label>
      <input type="text" name="securitycode" id="securitycode" value="" style="margin-top:5px;" class="text ui-widget-content ui-corner-all">
    </fieldset>
  </form>
  <?php 
	foreach($restaurant_det as $row){
	$coupon_price=$row['food_coupon_price'];
	$restid=$row['restaurant_id'];
	  ?>
      <input type="hidden" name="coupon_price" id="coupon_price" value="<?php echo $coupon_price  ?>"/>
      <input type="hidden" name="restid" id="restid" value="<?php echo $restid  ?>"/>  
  <?php
	}	
  ?>	
</div>
</body>
</html>