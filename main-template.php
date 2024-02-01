<?php
class Template {
	var $title = 'Untitled';
	var $keywords = 'keywords';
	var $description = 'description';
	var $script = '';
	function setTitle($title) { $this->title = $title; }
	function setMetaKW($keywords){ $this->keywords = $keywords; }
	function setMetaDesc($description){ $this->description = $description; }
	function setScript($script){ $this->script = $script; }
	function open() { ?>
		<!DOCTYPE HTML>
		<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1"/>
				<meta name="keywords" content="" />
				<meta name="description" content="" />

				<title><? echo $this->title; ?></title>
				
				<link rel="icon" type="image/x-icon" href="https://www.bard.edu/images/favicon.ico">
				<link rel="stylesheet" type="text/css" href="style.css" media="all" />
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
				<!-- <link rel="stylesheet" type="text/css" href="print-style.css" media="print"> -->
				<?php
					$user_agent = getenv("HTTP_USER_AGENT");
					//echo "User Agent: " . $user_agent . " --- Server Agent: " . $server_agent . "\n\n";
					if(strpos($user_agent, "Win") !== FALSE){ $os = "Windows"; }
					elseif(strpos($user_agent, "Mac") !== FALSE) $os = "Mac";
					if($os == "Mac") {?> <link rel="stylesheet" type="text/css" href="mac-style.css" /> <? }
					if($browser == "FF") { ?> <link rel="stylesheet" type="text/css" href="ff-style.css" /> <? }
					else if($browser == "IE" || $browser == "IE11"){ ?> <link rel="stylesheet" type="text/css" href="ie-style.css" /> <? }

				?>
				
				<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow'>
				<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans:400,700'>
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

				<script src="https://www.bard.edu/library/js/jquery-3.3.1.min.js"></script>
				<script src="https://www.bard.edu/library/js/jquery-ui-1.12.1/jquery-ui.js"></script>
				<!-- <script src='https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit' async defer></script> -->
				<script type="text/javascript" src="https://www.bard.edu/archives/js/contentslider.js">
					/***********************************************
					* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
					* This notice MUST stay intact for legal use
					* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
					***********************************************/
				</script>
			</head>
			
			<body>
				<!-- Site Logo -->
				<div class="logo">
					<a href="index.php">
						<div class="grid-4">
							<div class="logo-section">
								<h1 class="bard-logo">
									Bard
								</h1>
								<h1 class="archives-logo">
									Archives &amp; Special Collections
								</h1>
								<div class="clear"></div>
							</div>
						</div>
						<!-- <img src='images/header/Archives Logo 2.png' alt ='College Archives Logo'> -->
						<h1 style="display:none;">Stevenson Library Archives</h1>
					</a>
				</div>
				<div class="red-border"></div>
				<!-- <div class="featured-item">
					<div class="featured-item-text">
						<h2 class="featured-item-text-header">Past Exhibits</h2>
						<div class="featured-item-text-body">
							A new article has been added to this section of the archives site.
						</div>
					</div>
				</div> -->
				<div class="main-contents">
					<div class="container">	
						<div class="content-index grid-4 home">
							<div class="left-content">
								<div class="content-item menu">
									<!-- <h2 style="margin-bottom: 0px;">Archives Menu</h2> -->
									<a href="index.php"><div style="border-top: 5px solid #bbb;">Home</div></a>
									<a href="archives.php"><div>Bard College Archives</div></a>
									<a href="speccoll.php"><div>Special Collections</div></a>
									<a href="digitalcoll.php"><div>Digital Collections</div></a>
									<a href="onlineexhibits.php"><div>Online Exhibits</div></a>
									<a href="http://digitalcommons.bard.edu/oral_hist/" target="_blank"><div>BardCorps</div></a>
									<a href="https://digitalcommons.bard.edu/stu_news/" target="_blank"><div>Student Newspapers</div></a>
									<a href="https://blogs.bard.edu/arendtcollection/" target="_blank"><div>Hannah Arendt Collection</div></a>
									<a href="links.php"><div>Bard History &amp; Related Links</div></a>
									<a href="findingaids.php"><div>Finding Aids</div></a>
									<a href="useaccess.php"><div>Image Use &amp; Access</div></a>
									<a href="contact.php"><div>Contact</div></a>
								</div>
								<div class="content-item">
									<a href="https://www.instagram.com/bardarchives/" class="instagram" target="_blank">
										<div class="grid-8" style="padding: 0px;">
											<div style="padding: 10px 0px 10px 10px;">
												<i class="fab fa-instagram"></i>
											</div>
											<div style="grid-column: 2/9; padding: 9px 10px 10px 0px;">
												@bardarchives
											</div>
										</div>
									</a>
								</div>
								<div class="content-item">
									<h2>Search the Archives</h2>
									<div>
										<span class="small-font"><em>Powered by Google Search</em></span>
										<form method="get" action="https://www.google.com/search">
											<input id="searchArchives" type="text"   name="q" size="20" maxlength="255" value="" />
											<input type="submit" value="Search" />
											<input type="hidden"  name="sitesearch" value="www.bard.edu/archives" checked />
										</form>
									</div>
								</div>
								<div class="content-item">
									<a href="https://goo.gl/forms/6Aulkz1lnZGz6I3C2" target="_blank"><h2>Request Access to Special Collections</h2></a>
								</div>
								<div class="content-item">
									<h2>Reading Room Hours</h2>
									<?php include_once("reading-room-hours.php"); ?>
								</div>
							</div>
						<? }

function close() { ?>			
						</div><!-- End Content-index -->
					</div><!-- End Container -->
				</div><!-- End Main Contents -->
				<div class="footer-menu">
					<a href="http://www.bard.edu/library"><div class="footer-item">Bard College Stevenson Library</div></a>
					<a href="https://www.bgc.bard.edu/research/library.html"><div class="footer-item">BGC Library</div></a>
					<a href="https://www.levyinstitute.org/"><div class="footer-item">Levy Library</div></a>
					<a href="https://ccs.bard.edu/research-center/"><div class="footer-item">CCS Library</div></a>
					<a href="https://inside.bard.edu/"><div class="footer-item">Inside Bard</div></a>
					<a href="https://www.bard.edu/arendtcollection/"><div class="footer-item">Arendt Collection</div></a>
					<a href="https://inside.bard.edu/learningcommons/"><div class="footer-item">Learning Commons</div></a>
				</div>
				<div class="footer">
					<p>©2013-<?php echo date(Y); ?> Bard College Archives • 1 Library Road, Annandale-on-Hudson, NY 12504 • 845.758.7396 • <a href="contact.php">Contact Us</a></p>
				</div>
			</body>
		</html>
	<? }
} ?>