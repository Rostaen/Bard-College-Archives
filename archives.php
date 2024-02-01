<?php
    require_once("inside-template.php");
	//require_once("rss/rsslib.php");
	//include_once('inc/checkDoW.php');

	$page = new Template();
	$page->setTitle('Bard College Archives | Archives &amp; Special Collection | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>

	<div class="right-content inside-page">
		<div class="important-info content-item">
			<h2>Bard College Archives</h2>
			<div>
				<p>
					The Archives consist of paper collections, photographs, student publications, maps, ephemera, and memorabilia that help tell the story of the College and surrounding communities. These three categories of archival materials are described below.
				</p>
				<ol>
					<li>College archives</li>
					<li>Local and Regional History Archives</li>
					<li>Delafield Family/Montgomery Place Archives</li>
				</ol>

				<h3>Access</h3>
				<p><a href="https://www.bard.edu/archives/findingaids.php">Finding aid</a> descriptions are available for many of these materials, and requests about the archives can be directed to the archivist at tieger@bard.edu.  A growing number of these finding aids are also available through the <a href="https://www.empireadc.org/">Empire Archival Discovery Cooperative</a>, with Bard’s finding aids available <a href="https://www.empireadc.org/empiresearch/agency/Bard%20College%20Archives">here</a>. Items in these collections do not leave the library.</p>

				<!-- <p>If you are interested in viewing any of these materials, please fill out a <a href="https://docs.google.com/forms/d/e/1FAIpQLSeFEmbSSY6Ak5dWSZ4tJ7_1BHmdNd8VqDIuWzaiZqrYcQpQOA/viewform?c=0&w=1">Special Collections Request Form</a>.</p> -->
				
				<?php include("reading-room-hours.php"); ?>

				<h2>1. College Archives</h2>

				<h3>Senior Projects</h3>
				<p>Hard copies of senior projects and masters theses are housed in the archives. Dating back to 1939, these are searchable in the library’s <a href="https://library.bard.edu/">catalog</a>. Many senior projects written after 2011 are available on <a href="https://digitalcommons.bard.edu/undergrad/">Digital Commons</a>.  Requests to view bound copies of senior projects can be made at the Reference Desk or through the Special Collections Request Form.</p>

				<p>Senior projects cannot leave the building.</p>
				
				<h3>Institutional History</h3>
				<p>College records in the archives include non-current (most pre 2000) documents  of selected administrators, governing bodies, and academic departments, as well as publications which document  college events. Examples include, but are not limited to: minutes of faculty and trustee meetings; commencement programs; campus master plans; college and event promotional literature; selected non-current department files;  handbooks; and directories.</p>

				<h3>Photographs</h3>
				<p>The archives houses several thousand photographs documenting college events, activities and people. Many photographs can be viewed from our <a href="https://www.bard.edu/archives/digitalcoll.php">Digital Collections</a> page, and a container list of photo files can be viewed <a href="photodocs.php">here</a>. For access to unpublished photo images, please contact the archivist at tieger@bard.edu.</p>

				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="images/image of audio files.png" target="_blank">
							<img src="images/image of audio files.png" alt="Audio collection">
						</a>
						<p class="small-font flex-center"></p>
					</div>
					<div class="exhibits-text">
						<h3>Audio Collections</h3>
						<p>The archives has several reel to reel tapes collections that are fragile. Much of the content is currently unavailable for researchers but the College hopes to eventually see all this material digitized. Reel to reel tape collections include the <a href="https://www.empireadc.org/search/catalog/nanb_4712" target="_blank">Fortess Collection</a>, a collection of 276 interviews with 20th century artists conducted by Karl Fortess (1907-1994); the <a href="https://digitalcommons.bard.edu/poetry_at_bard/" target="_blank">Towbin Poetry</a> archive, a collection of 100+ tapes of poetry readings and lectures recorded at Bard from 1982 through the 1990s, and the <a href="http://www.bard.edu/bluecher/" target="_blank">Blücher Archive</a>, recordings of Freshman Seminar philosophy lectures given at Bard in the 1960s.</p>
					</div>
				</div>

				<!-- <div class="flex-center">
					<a href="https://www.bard.edu/archives/images/collectionimages/av-col.jpg" target="_blank">
						<img src="https://www.bard.edu/archives/images/collectionimages/av-col.jpg" alt="Gatehouse to Blithewood">
					</a>
				</div>
				<p class="small-font flex-center">The "Gardener's Cottage," the gatehouse to Blithewood, Robert Donaldson's estate; later renamed Annandale by John and Margaret Bard.</p> -->

				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="https://www.bard.edu/archives/images/collectionimages/col-pub.jpg" target="_blank">
							<img src="https://www.bard.edu/archives/images/collectionimages/col-pub.jpg" alt="Summer of 97 Bardian cover">
						</a>
						<p class="small-font flex-center">"Bardian" cover, Summer 1997.</p>
					</div>
					<div class="exhibits-text">
						<h3>College Publications</h3>
						<p>Examples of college publications in the archives include college catalogs; alumni/ae newsletters and magazines; <a href="http://library.bard.edu/search/a?searchtype=Y&searcharg=student+publications&SORT=D">student publications</a>; <a href="http://library.bard.edu/search/t?SEARCH=bard+college+yearbooks" target="_blank">college yearbooks</a>; and annual reports. For online access to backfiles of student newspapers, search the <a href="https://digitalcommons.bard.edu/stu_news/">Bard College Student Newspaper Archive</a>.</p>
					</div>
				</div>

				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="https://www.bard.edu/archives/images/collectionimages/stu-rec.jpg" target="_blank">
							<img src="https://www.bard.edu/archives/images/collectionimages/stu-rec.jpg" alt="Paul Hartzell scrapbook photo">
						</a>
						<p class="small-font flex-center">A page from a photo scrapbook compiled by Paul Hartzell, class of 1915.</p>
					</div>
					<div class="exhibits-text">
						<h3>Alumni/ae Materials and Memorabilia</h3>
						<p>These items help to document student life at the College over time. Examples include: photo scrapbooks; fraternity documents including minute books, ledgers and reports; and other memorabilia including banners, class rings, and letter sweaters.</p>

						<p>Student records pertaining to grades/ transcripts are maintained by the Registrar’s Office at (845) 758-7458.</p>
					</div>
				</div>
				

				<h3><a href="https://www.bard.edu/archives/findingaids/Subject%20Folders%20A.pdf" target="_blank">Subject Files</a></h3>
				<p>The Archives also contains hundreds of files on topics relevant to the life of the college. These have been created and added to for many decades, and though they are not by any means comprehensive in any area, these files often represent an excellent starting place for research on an individual, a program, or a significant event.</p>

				<h3>Personal Papers &amp; Manuscripts</h3>
				<p>The college has not sought to collect the personal papers, given the  lack, until recently, of an established archives. As the Bard College Archives continues to grow, it is hoped that more personal papers that significantly add to the documentary history of the college will be donated to the archives. One such gift was the donation of the Bard Family Papers entrusted to Bard College in 1938-39 by J.A. Sands, Bard Family historian, and great-great-grandson of Dr. Samuel Bard.</p>
				
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="https://www.bard.edu/archives/images/collectionimages/pap-ind.jpg" target="_blank">
							<img src="https://www.bard.edu/archives/images/collectionimages/pap-ind.jpg" alt="Letter to John Bard">
						</a>
						<p class="small-font flex-center">Letter to John Bard by members of the Trinity Church vestry, Madalin, NY.</p>
					</div>
					<div class="exhibits-text">
						<h3><a href="https://www.empireadc.org/search/catalog/nanb_4719">Bard Family Papers</a></h3>
						<p>This collection includes correspondence among members of the Bard Family and their acquaintances from the 17th – 19th centuries, as well as land deeds and other legal documents. Some correspondents include: Dr. John Bard (1716-1799) of Hyde Park, the first President of the New York Medical Society;  Dr. Samuel Bard (1742-1821), one of the founders of the College of Physicians and Surgeons, (attached to Kings College, now Columbia University); William Bard (1778-1853), a lawyer and an early president of the New York Life Insurance and Trust Company; Susannah Bard Johnston (1772-1845) mother and mistress of Bellefield, in Hyde Park; and John Bard (1819-1899), a founder with his wife Margaret Johnston Bard of St. Stephen's College (now Bard College).</p>

						<p>For a brief history of the Bard Family and the early history of Bard College, read <a href="https://www.bard.edu/library/pdfs/bard_history.pdf">The Bard Family</a> by <a href="https://www.bard.edu/archives/voices/Felix/felix.php">Felix Hirsch</a>, a former librarian and professor at Bard.</p>
						
					</div>
				</div>

				<h2>2. Local and Regional History Archives: Wiles Collection</h2>

				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="images/wiles material.png" target="_blank">
							<img src="images/wiles material.png">
						</a>
					</div>
					<div class="exhibits-text">
						<h3>Wiles Collection</h3>
						<p>This unprocessed and minimally described collection contains 25 boxes of local history documents, ledgers, ephemera, newspaper clippings and photographs donated in 2018 by the estate of Richard Wiles. Professor Wiles taught economics at Bard from 1969 until his retirement in 1998.  This collection includes a wide variety of local history materials including records of apple orchards, some early St. Stephen’s correspondence, Saugerties steamboat documentation, an original Robert R. Livingston ledger, miscellaneous Tivoli documents, and more. This material will be processed as time allows, but the collection has been inventoried and is available for research.</p>
					</div>
				</div>				

				<h2>3. Delafield Family/ Montgomery Place Archives</h2>
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<a href="images/image of map.png" target="_blank">
							<img src="images/image of map.png">
						</a>
					</div>
					<div class="exhibits-text">
						<p>The Montgomery Place Archives contain extensive paper and photograph collections of John Ross Delafield (1874-1964), his wife Violetta White Delafield (1875-1949) and their family dating from the 1880s to the 1980s, the bulk of which date between the 1920s - 1960s.  These papers include personal correspondence, genealogical, military, and business records, garden documentation, and Montgomery Place Orchard and Montgomery Place Mansion files.</p>
						<p>Other archival collections at Montomery Place include some 19th century correspondence between Louise Livingston of Montgomery Place and Robert Donaldson of Blithewood;  many 18th and 19th century maps of Montgomery Place and the surrounding communities of Red Hook and Rhinebeck; extensive architectural and landscape drawings of Montgomery Place from the 1980s to ca. 2010; and selected research and conservation documentation from Historic Hudson Valley dating from 1986-2016 reflecting the years that Montgomery Place was in their care.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>