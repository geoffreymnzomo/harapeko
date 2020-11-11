<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="Web/layout/styles/layout.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="Web/engine1/style.css" />
    <link href="../../Web/jquery_template/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="Web/engine1/jquery.js"></script>
   
    <script
    src="http://maps.googleapis.com/maps/api/js">
    </script>
    
    <script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(37.0997086,138.6173096),
     //37.0997086,138.6173096
    //center:new google.maps.LatLng(37.0667,138.8833),
	zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

	
</head>
<body id="top">

<?php echo base_url(); ?>
<div class="wrapper col1">

</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="#">Coupons</a>
          <ul>
            <li><a href="#">500-1000 Yen</a></li>
            <li><a href="#">1000-1500 Yen</a></li>
            <li><a href="#">1500-2000 Yen</a></li>
            <li><a href="#">2000-2500 Yen</a></li>
            <li><a href="#">2000-Above Yen</a></li>
          </ul>
        </li>
         <li><a href="#">Location</a>
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
        <li class="last"><a href="#">Login </a></li>
        <li class="last"><a href="#">Minami Uonuma </a></li>
		
      </ul>
    </div>
     <div id="search">
     
    </div> 
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="intro">
    <div class="fl_right">
      <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/slideshow_1.jpg" alt="Naked Man Festival" title="Naked Man Festival" id="wows1_0"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/slideshow_2.jpg" alt="wowslider" title="Rice Harvesting" id="wows1_1"/></a></li>
		<li><img src="data1/images/slideshow_3.jpg" alt="Rice Harvesting" title="Rice Harvesting" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Naked Man Festival"><span><img src="data1/tooltips/slideshow_1.jpg" alt="Naked Man Festival"/>1</span></a>
		<a href="#" title="Rice Harvesting"><span><img src="data1/tooltips/slideshow_2.jpg" alt="Rice Harvesting"/>2</span></a>
		<a href="#" title="Rice Harvesting"><span><img src="data1/tooltips/slideshow_3.jpg" alt="Rice Harvesting"/>3</span></a>
	</div></div>
    <!--<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>-->
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
    </div>
   <!--  <div class="fl_right"><img src="images/demo/380x300.gif" alt="" /></div> -->
	<div id="googleMap" class="fl_left" style="width:415px;height:300px;"></div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col4">
  <!--<div id="services">
    <ul>

      <li>
        <div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>
        <div class="fl_right">
          <h2>Indonectetus facilis</h2>
          <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </li>

      <li>
        <div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>
        <div class="fl_right">
          <h2>Indonectetus facilis</h2>
          <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </li>
      <li class="last">
        <div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>
        <div class="fl_right">
          <h2>Indonectetus facilis</h2>
          <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </li>
    </ul>
    <br class="clear" />
  </div>-->
  <div id="tabs" >
	<ul>
        <li><a href="#tabs-1">My Food Search</a></li>
		<li><a href="#tabs-2">Ramen</a></li>
		<li><a href="#tabs-3">Sushi</a></li>
		<li><a href="#tabs-4">Donburi</a></li>
	</ul>
	<div id="tabs-1">
    
    <div id="services">
    <ul>
      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_tonkotsu-ramen_800yen.jpg" alt="" />          
        </div>
         <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>
      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_spicy-ramen_900yen.jpg" alt="" />
        </div>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_jaja-men_900yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>
  <br />
  <div id="services">
    <ul>
      </li>

      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_kakuni-ramen_1000yen.jpg" alt="" />
        </div>
      </li>

      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_niigata-ramen_800yen.jpg" alt="" />
        </div>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_shoyu-ramen_800yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>  
    
    
    </div>
	<div id="tabs-2">
      
    <div id="services">
    <ul>

     <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/sushi_nigiri-assort_1000yen.jpg" alt="" />
        </div>
      </li>

     <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/sushi_temari-sushi_1200yen.jpg" alt="" />
        </div>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="last" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/sushi_nigiri-assort_500yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>
  <br />
  <div id="services">
    <ul>

     <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/sushi_california-roll_1000yen.jpg" alt="" />
        </div>
      </li>

     <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/sushi_sashimi_2000yen.jpg" alt="" />
        </div>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/sushi_sashimi_2500yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>  
    </div>
    <div id="tabs-3">
    
    <div id="services">
    <ul>
      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_tonkotsu-ramen_800yen.jpg" alt="" />          
        </div>
         <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>
      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_spicy-ramen_900yen.jpg" alt="" />
        </div>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_jaja-men_900yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>
  <br />
  <div id="services">
    <ul>
      </li>

      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_kakuni-ramen_1000yen.jpg" alt="" />
        </div>
      </li>

      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_niigata-ramen_800yen.jpg" alt="" />
        </div>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/ramen_shoyu-ramen_800yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>  
    
    
    </div>
	<div id="tabs-4">
        
    <div id="services">
    <ul>

      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/domburi_maji-don_1000yen.jpg" alt="" />
        </div>
      </li>

      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/domburi_maji-don_2500yen.jpg" alt="" />
        </div>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/domburi_natto-don_400yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>
  <br />
  <div id="services">
    <ul>
      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/domburi_gyu-don_400yen.jpg" alt="" />
        </div>
      </li>

      <li>
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/domburi_katsu-don_900yen.jpg" alt="" />
        </div>
      </li>

      <li class="last">
        <!--<div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>-->
        <div class="fl_right" style=" width:287px; height:180px; padding-top:0px; padding-left:0px; ">
          <img src="images/domburi_gyu-don_500yen.jpg" alt="" />
        </div>
      </li>

    </ul>
    <br class="clear" />
    
    
  </div>  
    
    </div>
</div>

</div>
<div class="wrapper col5">
  <div id="container">
    <!--<div id="content">
      <h2>About This Free CSS Template</h2>
      <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
      <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
      <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
      <p>Lacusenim inte trices lorem anterdum nam sente vivamus quis fauctor mauris. Wisinon vivamus wisis adipis laorem lobortis curabiturpiscingilla dui platea ipsum lacingilla.</p>
      <p>Semalique tor sempus vestibulum libero nibh pretium eget eu elit montes. Sedsemporttis sit intesque felit quis elis et cursuspenatibulum tincidunt non curabitae.</p>
    </div>-->
    <!--<div id="column">
      <div class="holder">
        <h2>Nullamlacus loborttis</h2>
        <ul id="latestnews">
          <li> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
          <li class="last"> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
        </ul>
      </div>
    </div>-->
    <br class="clear" />
  </div>
</div>
<div class="wrapper col6">
  <div id="footer">
    <div id="login">
      <h2>Advertisement 1</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Advertisement 2</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Advertisement 3</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Advertisement 4</h2>
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
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Harapeko</a></p>
    <p class="fl_right">Template by <a target="_blank" href="#" title="Harapeko">Designed by IUJ-Group 5</a></p>
    <br class="clear" />
  </div>
</div>
<script src="<?php echo base_url();?>/web/jquery_template/external/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>/web/jquery_template/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>

</body>
</html>