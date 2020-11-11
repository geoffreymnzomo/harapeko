<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Pertho Admin Panel</title>

		<!-- Foundation framework -->
			<link rel="stylesheet" href="foundation/stylesheets/foundation.css" />
		<!-- jquery UI -->
			<link rel="stylesheet" href="lib/jQueryUI/css/Aristo/Aristo.css" media="all" />
		<!-- fancybox -->
			<link rel="stylesheet" href="lib/fancybox/jquery.fancybox-1.3.4.css" media="all" />
		<!-- plupload -->
			<link rel="stylesheet" href="lib/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css" media="all" />
		<!-- file manager -->
			<link rel="stylesheet" href="lib/elfinder/css/elfinder.min.css" media="all" />
		<!-- chosen (select element extended) -->
			<link rel="stylesheet" href="lib/chosen/chosen.css" media="all" />
		<!-- ibuttons -->
			<link rel="stylesheet" href="lib/ibutton/css/jquery.ibutton.css" media="all" />
		<!-- tag handler -->
			<link rel="stylesheet" href="lib/tagHandler/css/jquery.taghandler.css" media="all" />
		<!-- main styles -->
			<link rel="stylesheet" href="css/style.css" />

		<!-- Google fonts -->
			<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' />
			<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' />

		<!-- Favicons and the like (avoid using transparent .png) -->
			<link rel="shortcut icon" href="favicon.ico" />
			<link rel="apple-touch-icon-precomposed" href="icon.png" />

		<!--[if lt IE 9]>
			<link rel="stylesheet" href="foundation/stylesheets/ie.css" />
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="ptrn_a grdnt_a mhover_a">
		<div class="three columns">
											<label class="sepH_b">Datepicker & Timepicker</label>
										    <input type="text" class="input-text small" name="timepicker" id="timepicker">
									  </div>

		<script src="js/jquery.min.js"></script>
		<script src="lib/jQueryUI/jquery-ui-1.8.18.custom.min.js"></script>
		<script src="js/s_scripts.js"></script>
		<script src="js/jquery.ui.extend.js"></script>
		<script src="lib/qtip2/jquery.qtip.min.js"></script>
        <script src="lib/tiny_mce/jquery.tinymce.js"></script>
		<script src="lib/plupload/js/plupload.full.js"></script>
		<script src="lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		<script src="lib/chosen/chosen.jquery.min.js"></script>
		<script src="lib/timepicker/jquery-ui-timepicker-addon.js"></script>
		<script src="lib/ibutton/jquery.ibutton.min.js"></script>
		<script src="js/ui.spinner.js"></script>
		<script src="lib/raty/jquery.raty.min.js"></script>
		<script src="js/jquery.inputmask.js"></script>
		<script src="js/jquery.inputmask.extentions.js"></script>
		<script src="lib/tagHandler/js/jquery.taghandler.min.js"></script>
		<script src="js/pertho.js"></script>
		<script>
			$(document).ready(function() {
				//* common functions
				prth_common.init();

				//* autosize textareas
				prth_textarea_auto.init();
				prth_limiter.init();
				//* input spinners
                prth_spinner.init();
				if(!is_touch_device){
					//wysiwyg editor

					prth_editor.html();
					//fileuplaod
					prth_fileUpload.init();
				}
				//* extended select elements
				prth_chosen_select.init();
				//* datepicker & timepicker
				prth_dp_tp.init();
				//* animated progressbar
				prth_progressbar.init();
				//* ui sliders
				prth_sliders.init();
				//* rating
				prth_rating.init();
				//* iOS style checkboxes
				prth_ios_checkboxes.init();
				// masked inputs
				prth_mask_input.init();
				//* tag handler
				prth_tag_handler.init();
			});
		</script>
	</body>
</html>
