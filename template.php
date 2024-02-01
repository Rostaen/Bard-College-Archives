<?php

class Template {

  var $title = 'Untitled';
  var $subheading = 'Untitled';
  var $script = '';

  function setTitle($title) {
	$this->title = $title;
  }

  function setScript($script) {
	$this->script = $script;
  }

  function setSubHeading($subHead){
	$this->subheading = $subHead;
  }

  function open() {
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><? echo $this->title; ?></title>
		<meta name="keywords" content="voices of bard college, bard family paper, poetry at bard, bard archives, special collections">
		<meta name="description" content="Bard College Archives &amp; Special Collections website.">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- 		<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 -->		<link rel="stylesheet" type="text/css" href="css/contentslider.css" />
		<link rel="icon" type="image/x-icon" href="http://www.bard.edu/images/favicon.ico">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script>
			<!--
			!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
			-->
		</script>
		<!-- <script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script> -->
		
		<script type="text/javascript">
		<!--
			/*$(document).ready(function() {
				$("a.example").fancybox({
					'overlayShow'	: true,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'elastic',
					'titlePosition'		: 'outside',
					'overlayColor'		: '#000',
					'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
						return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
					},
					'overlayOpacity'	: 0.9
				});
			});*/
			-->
		</script>
		<!doctype html>


		<script type="text/javascript" src="js/contentslider.js">
			/***********************************************
			* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
			* This notice MUST stay intact for legal use
			* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
			***********************************************/
		</script>
		
		<script type="text/JavaScript">
		<!--
		function MM_preloadImages() { //v3.0
		  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}
		function MM_openBrWindow(theURL,winName,features) { //v2.0
		  window.open(theURL,winName,features);
		}
		//-->
		</script>
	</head>
	<body bgcolor="#FFFFFF">
		<div class="container">
			<div class="header">
				<img src="images/header-img.jpg" alt="Archives image for top of website" />
				<div class="header-top-text">
					Bard College Archives &amp; Special Collections
				</div>
				<h1 class="header-bot-text" style="margin:0px;">
					<? echo $this->subheading; ?>
				</h1>
			</div>
			<div class="sidebar">
				<? include_once('sidebar.php'); ?>
			</div>
			<div class="content">
	<?php }

	function close() { ?>
			</div>
			<div class="clear"></div>
			<div class="footer">
				&copy;2013 Bard College Archives - <a href="http://www.bard.edu/library/">Stevenson Library</a> - Annandale-on-Hudson, NY 12504 . 845.758.7396
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-10462029-3");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
	</body>
</html>
<?php
  }

}

?>