<?php
    require_once("main-template.php");

	$page = new Template();
	$page->setTitle('Archives | Bard College');
	$page->setMetaKW('bard,college,archives');
	$page->setMetaDesc('Bard College Archives & Special Collections is to collect, preserve and make available materials in a variety of formats relating to the intellectual and social history of Bard College and its surrounding communities.');

	// print page header
	$page->open();
?>

	<div class="right-content ">
		<div class="important-info content-item" style="position: relative; z-index: 1;">
			<h2>Welcome!</h2>
			<div>
				<p class="quote italic bold">
					The mission of the Bard College Archives & Special Collections is to collect, preserve and make available materials in a variety of formats relating to the intellectual and social history of Bard College and its surrounding communities. By offering online and physical access to its holdings, the Archives & Special Collections seeks to support the research and work of undergraduates, the greater Bard community, public historians, private researchers, and scholars worldwide.
				</p>
				<div class="grid-4">
					<div class="grid-span-1-4">
						<p style="font-size: 18px;">
							The Bard College Archives & Special Collections documents the history of the College and the Hudson Valley through its collections, and preserves significant book collections to ensure their long term availability. This website serves to showcase some of the materials available for study, as well as to provide enhanced access to selected materials. Our collections fall into the following categories: College archives; Local and Regional History archives; Delafield Family/Montgomery Place archives; and Monographic Special Collections. Click around and be curious! Specific collections will be presented or described in the following pages.
						</p>
					</div>
					<div>
						<img src="images/archives_logo_2021.jpg">
					</div>
					<!-- <div>
						<div id="slider1" class="sliderwrapper">
							<div class="contentdiv">
								<img src="https://www.bard.edu/archives/images/archives-slider/archivesintro5.jpg" alt="Statue Slide 1">
							</div>
							<div class="contentdiv">
								<img src="https://www.bard.edu/archives/images/archives-slider/archivesintro1.jpg" alt="Statue Slide 2">
							</div>
							<div class="contentdiv">
								<img src="https://www.bard.edu/archives/images/archives-slider/archivesintro2.jpg" alt="Statue Slide 3">
							</div>
							<div class="contentdiv">
								<img src="https://www.bard.edu/archives/images/archives-slider/archivesintro3.jpg" alt="Statue Slide 4">
							</div>
							<div class="contentdiv">
								<img src="https://www.bard.edu/archives/images/archives-slider/archivesintro4.jpg" alt="Statue Slide 5">
							</div>
						</div>
						<p class="small-font" style="text-align: center;">"Seclusion" By Bob Bassler '57. Blithewood Garden Pool.</p>
					</div> -->
				</div>

				<div id="paginate-slider1" class="pagination"></div>
				<script type="text/javascript">

					featuredcontentslider.init({
						id: "slider1", //id of main slider DIV
						contentsource: ["inline", ""], //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
						toc: "markup", //Valid values: "#increment", "markup", ["label1", "label2", etc]
						nextprev: ["", ""], //labels for "prev" and "next" links. Set to "" to hide.
						enablefade: [false, 0.1], //[true/false, fadedegree]
						autorotate: [true, 3000], //[true/false, pausetime]
						onChange: function(previndex, curindex, contentdivs){ 
							//event handler fired whenever script changes slide
							//previndex holds index of last slide viewed b4 current (0=1st slide, 1=2nd etc)
							//curindex holds index of currently shown slide (0=1st slide, 1=2nd etc)
						}
					})

				</script>				
			</div>
		</div>
		<div class="content-item">
			<h2>New Digital Collection: Distinguished Scientist Lecture Series</h2>
			<div>
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="https://digitalcommons.bard.edu/dsls/" target="_blank"><img src="https://www.bard.edu/archives/images/DSLS thumbnail final.png" alt="A poster image for the Distinguished Scientist Lecture Series." style="width: 100%;"></a>
					</div>
					<div class="exhibits-text">
						<!-- <p>
							 <img src="images/newlogo.jpg" style="width: inherit; margin: 0px;">  
						</p> -->
						<p>
							The origin of the Distinguished Scientist Lecture Series goes back to the fall of 1979 when the late Nobel Laureate Physicist Paul Dirac accepted an invitation to deliver a lecture on "the Discovery of Anti-Matter."
						</p>
						<p>
							His talk combined scientific and personal reminiscences to present a view of modern science rarely seen by the general public—science as a record of personal achievement as well as a body of facts and knowledge. Professor Dirac’s lecture drew an audience from throughout the East Coast, and its success inspired the establishment of the Bard Center Distinguished Scientist Lecture Series. The first two years of the Distinguished Scientist Lecture Series were supported by the Pre-College Teacher Development in Science Program of the National Science Foundation.
						</p>
						<p>
							For all those interested in the field of science–students, teachers, researchers, professionals in scientific industries and lay people–the series provided a rare opportunity for first-hand contact with people who shaped modern science–the chance to see how they thought and worked, how they viewed their own achievements, and how they assessed the challenges that scientists faced, back then and in the respective future.
						</p>
					</div>
				</div>
			</div>
			<!-- <h2>New Digital Collection: Barrytown Explorer</h2>
			<div>
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="digitalcoll.php" target=""><img src="https://blogs.bard.edu/library/files/2022/09/barrytownexplorer.png" alt="Barrytown Explorer on HRVH." style="width: 100%;"></a>
					</div>
					<div class="exhibits-text">
						<p>
							 <img src="images/newlogo.jpg" style="width: inherit; margin: 0px;">  
						</p>
						<p>
							In our latest digitization efforts this year, we collaborated with <a href="https://www.historicredhook.org/" target="_blank">Historic Red Hook</a> to pool our holdings of the Barrytown Explorer, a local monthly newspaper published by Chanler Armstrong Chapman of Barrytown, a hamlet in the Town of Red Hook. Chapman (1901-1982) was a Livingston/Astor/Chanler family scion, a dairy farmer, a Red Hook School board member, and a witty, eccentric raconteur who delighted in flouting convention.  He launched the newspaper in June 1958 during the age of the Space Race, soon after the Soviet Union had launched Sputnik, the world’s first artificial satellite, and the U.S. had successfully countered with “Explorer,” from Cape Canaveral, in Florida. The Explorer’s inaugural issue claimed “This paper is interested in four subjects. First, the Neighbors and their families; second, good schools in good Communities; third, a fair price for milk at the barn door for Dairy Farmers; Fourth, the Truth, always the truth.” The newspaper offered lively coverage of local people and events until ceasing publication in April 1982, a month after Chapman died.
						</p>
						<p>
							We worked with <a href="https://www.senylrc.org/" target="_blank">SENYLRC</a> to upload the combined scanned newspaper run (special thanks to our student workers for their painstaking work) to <a href="https://news.hrvh.org/veridian/?a=cl&cl=CL1&sp=idadahji&e=-------en-20--1--txt-txIN-------" target="_blank">HRVH Newspapers</a> ensuring that it is widely accessible and searchable.
						</p>
						<p>
							We hope you enjoy perusing this entertaining collection!
						</p>
					</div>
				</div>
			</div> -->
		</div>
		<!--<div class="content-item">
			<h2>FOSL</h2>
			<div>
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<img src="https://www.bard.edu/library/fosl/images/FOSL%20Red%20and%20Black.png" alt="An image of the resistance and abolition image used for this exhibit." style="width: 100%;">
					</div>
					<div class="exhibits-text">
						<p style="font-size: 24px;">
							We are excited to announce the launch of Friends of Stevenson Library (FOSL). To learn more about about this program, head to the <a href="https://www.bard.edu/library/fosl/">FOSL website.</a>
						</p>
					</div>
				</div>
				
			</div>
		</div>
		 <div class="content-item">
			<h2>Abolition/Resistance</h2>
			<div>
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="images/digicoll/bard pres coll.png" target="_blank">
							<img src="images/abolition.png" alt="An image of the resistance and abolition image used for this exhibit.">
						</a>
					</div>
					<div class="exhibits-text">
						<p>
							From Europe to Africa to the Americas, the deepest story of colonial settlement is resistance to racial oppression. Guided by his discerning collector’s eye and deep commitment to civil rights, Alan Sussman amassed an unparalleled collection of works on transatlantic slavery and the struggle against subjugation.
						</p>
						<p>
							<a href="https://omekalib.bard.edu/exhibits/show/abolition-resistance--works-fr" target="_blank">Click here to vew the Abolition/Resistance exhibit.</a>
						</p>
					</div>
				</div>
				
			</div>
		</div> -->
		<div class="content-item">
			<h2>Visiting the Archives</h2>
			<div>
				<!-- <p>
					If you are interested in visiting Bard to view any of our archival or special collections, please complete the <a href="https://docs.google.com/forms/d/e/1FAIpQLSeFEmbSSY6Ak5dWSZ4tJ7_1BHmdNd8VqDIuWzaiZqrYcQpQOA/viewform?c=0&w=1" target="_blank">following form</a> to schedule a visit to our reading room.  We will follow up by email to confirm your appointment.  Our regular reading room hours are:
				</p> -->
				<?php include("reading-room-hours.php"); ?>
			</div>
		</div>
		<div class="content-item">
			<h2>Gifts to the Archives</h2>
			<div>
				<p>
					Do you have some St. Stephen’s or Bard memorabilia you would like to donate?  The Bard Archives & Special Collections Department accepts donations of archival materials or books that fit into the many of the collections listed above. However, the Department will not accept donations of materials where ownership has not been transferred to the College. Given space and staffing limitations, all gifts for the Bard Archives must be approved by the Archivist, or other appropriate staff.  We will be happy to start a discussion with you!
				</p>
				<p>
					If you are interested in supporting the work that we do in other ways, <a href="https://libweb01.bard.edu/adopt-a-book/">click here</a>.
				</p>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>
<script type="text/javascript">
	var windowSize = $(window).width();
	if(windowSize > 768){
		jQuery.fn.inlineStyle = function(prop){
			var styles = this.attr('style'), value;
			styles && styles.split(';').forEach(function(e){
				var style = e.split(':');
				if(jQuery.trim(style[0]) === prop){ value = style[1]; }
			});
			return value; // returns propery value or undefined
		};
	}
</script>