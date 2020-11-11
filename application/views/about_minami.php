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
					 var dateredemption=$("#datepicker").val();
					 var no_coupons=$("#no_coupons").val();
					 var creditcard=$("#creditcard").val();
					 var amt=$("#amt").val();

					 if(fullname.length===0){
					 alert("Please enter your full names");
				 //alert("Comments are Mandatory");
				     }
					 else if (phonenumber.length===0) {
                 
				     alert("Please enter your phone number");
                
				     }
					 else if (emailaddress.length===0) {
                 
				     alert("Please enter your Email address");
                
				     }
					 else if (dateredemption.length===0) {
                 
				     alert("Please select redemption date");
                
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
					'dateredemption':dateredemption,
					'no_coupons':no_coupons,
					'amount':amt,
					'creditcard':creditcard
								
		          } ; 
				  
				  				  
				  $.ajax({
                url: "<?php echo base_url();?>index.php/restaurant/SaveCoupon",  
				traditional: true, 
				type: "POST",
				async:false,
                data:form_data,
                success: function(msg) 
                {
				   
				  // $( "#dialog-message" ).dialog( "open" );			
				  // $('#maindispoid').val("");
				 //  $('#dispo_update').val("");
				 //  $('#comment_section').val("");
				   
				   alert(msg.response);
					
				   //DisplayQuestions();	
				  // window.location.reload(true);	
				  //window.location.href = "<?php echo base_url();?>index.php/call_screen/index/"+custcode;
				   //window.location.reload("index/call_screen");		  			   
				  // updateReasonDetails($('#reason').val(),$('#ascname').val());
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
        <li><a href="../index.html">Home</a></li>
        <li class="active"><a href="style-demo.html">Style Demo</a></li>
        <li><a href="full-width.html">Full Width</a></li>
        <li><a href="#">DropDown</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="last"><a href="#">A Long Link Text</a></li>
      </ul>
    </div>
    
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
      <li>&#187;</li>
      <li><a href="#">Grand Parent</a></li>
      <li>&#187;</li>
      <li><a href="#">Parent</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Child</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col5">
  <div id="container">
    <div id="content">
      <h1>&lt;h1&gt; to &lt;h6&gt; - Headline Colour and Size Are All The Same</h1>
      <img class="imgr" src="../images/demo/imgr.gif" alt="" width="125" height="125" />
      <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>
      <p>Dapiensociis <a href="#">temper donec auctortortis cumsan</a> et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
      <img class="imgl" src="../images/demo/imgl.gif" alt="" width="125" height="125" />
      <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
      <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
      <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>
      <h2>Table(s)</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
          </tr>
          <tr class="dark">
            <td>Value 5</td>
            <td>Value 6</td>
            <td>Value 7</td>
            <td>Value 8</td>
          </tr>
          <tr class="light">
            <td>Value 9</td>
            <td>Value 10</td>
            <td>Value 11</td>
            <td>Value 12</td>
          </tr>
          <tr class="dark">
            <td>Value 13</td>
            <td>Value 14</td>
            <td>Value 15</td>
            <td>Value 16</td>
          </tr>
        </tbody>
      </table>
      <div id="comments">
        <h2>Comments</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
          <li class="comment_even">
            <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
        </ul>
      </div>
      <h2>Write A Comment</h2>
      <div id="respond">
        <form action="#" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Secondary Navigation</h2>
        <ul>
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title"><img src="../images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div id="featured">
        <ul>
          <li>
            <h2>Indonectetus facilis leonib</h2>
            <p class="imgholder"><img src="../images/demo/240x90.gif" alt="" /></p>
            <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
      </div>
      <div class="holder">
        <h2>Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper col6">
  <div id="footer">
    <div id="login">
      <h2>Client Login !</h2>
      <p>Clients can Login to their accounts here.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Client Login</legend>
          <div class="fl_left">
            <input type="text" value="Enter email address&hellip;"  onfocus="this.value=(this.value=='Enter email address&hellip;')? '' : this.value ;" />
            <input type="password" value="Enter password&hellip;"  onfocus="this.value=(this.value=='Enter password&hellip;')? '' : this.value ;" />
          </div>
          <div class="fl_right">
            <input type="submit" name="login_go" id="login_go" value="&raquo;" />
          </div>
        </fieldset>
      </form>
      <p><a href="#">&raquo; Lost Your Password</a> | <a href="#">Create An Account &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col7">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>