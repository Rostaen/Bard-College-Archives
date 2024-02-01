<?php
    require_once("inside-template.php");
	//require_once("rss/rsslib.php");
	//include_once('inc/checkDoW.php');

	$page = new Template();
	$page->setTitle('Finding Aids | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>

	<div class="right-content ">
		<div class="important-info content-item" style="position: relative; z-index: 1;">
			<h2>Finding Aids</h2>
			<div>
				<h3>Archives &amp; Special Collections Research</h3>
				<p>
					Creating access to our collections has been, and continues to be, a long term commitment. The finding aids below are presented in a variety of formats.
				</p>

				<h3>Reading Room Hours</h3>
				<?php include_once("reading-room-hours.php"); ?>

				<p>Items marked with an '<span class="strong">*</span>' are available through the <a href="https://www.empireadc.org/empiresearch/agency/Bard%20College%20Archives" target="_blank">Empire Archival Discovery Cooperative</a>.</p>

				<!-- <h3>Request to Access Special Collections</h3>
				<p>
					To use the special collections in person, please fill out the <a href="https://goo.gl/forms/6Aulkz1lnZGz6I3C2" target="_blank">following form</a>.
				</p>
				
				<p>
					<em>For purposes of expediency, the Bard Archives has adopted the "next-best practices" approach to creating finding aids to our collections. These retrieval tools may be Word or Excel documents, or a live link to a record in <a href="http://library.bard.edu">Felix</a> (the library's catalog, named for former librarian, publisher and historian, Felix Hirsch).</em>
				</p> -->

				<h3>Guides to Archival Collections</h3>
				<ul>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_355" target="_blank">Emerald Rose Mckenzie ‘52 Collection</a>*&nbsp;<img src="images/newlogo.jpg" style="width: inherit; margin: 0px;">
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_110" target="_blank">Delafield Family Papers</a>
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_5096" target="_blank">Theodore Weiss Papers, 1939-2010, bulk 1940-1987</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0006" target="_blank">Bard Family Papers</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0007" target="_blank">Mari Lyons '57 Collection</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0011" target="_blank">Heinrich Blücher Papers</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0001" target="_blank">Stefan Hirsch / Elsa Rogo Collection</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0005#" target="_blank">Jacob Grossberg Sketchbook Collection</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0002" target="_blank">Edward Jackson Bartlett Collection</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0008" target="_blank">Stevenson Library Addition (Venturi Scott Brown) Collection</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_4712" target="_blank">Karl E. Fortess Collection, oral history interviews with artists</a>*
					</li>
					<li>
						<a href="https://www.empireadc.org/search/catalog/nanb_nanb0010" target="_blank">American Symphony Orchestra (ASO) Collection</a>*
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/Arendt_Ephemera_Files.pdf" target="_blank">Hannah Arendt Ephemera Files</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/FraternityList.pdf" target="_blank">Fraternities</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/R2RTapesHoffman.pdf" target="_blank">Events / Lectures recordered at Bard 1955-1970 (on reel to reel tape)</a>
					</li>
				</ul>

				<h3>Guides to Bard College Institutional Records</h3>
				<ul>
					<li>
						Board of Trustees minutes and correspondence
					</li>
					<ul>
						<li>
							<a href="https://www.bard.edu/archives/findingaids/BOT_FindingAid.pdf" target="_blank">Board of Trustees Finding Aid</a>
						</li>
						<li>
							<a href="https://www.bard.edu/archives/findingaids/BOT_Index.pdf" target="_blank">Board of Trustees Index</a>
						</li>
					</ul>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/HandbookList.pdf" target="_blank">Student, Faculty and Staff Handbooks</a>
					</li>
				</ul>

				<h3>Guides to College Publications</h3>
				<ul>
					<li>
						<a href="https://digitalcommons.bard.edu/stu_news/" target="_blank">Bard College Student Newspaper Archive</a> (full text in Digital Commons)
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/Alumni Magazine Index.pdf" target="_blank">Index to the Bard St. Stephen’s Alumni/ae Association Newsletter 1958-1975</a>
					</li>
					<li>
						<a href="http://library.bard.edu/search/a?searchtype=Y&searcharg=student+publications&SORT=D" target="_blank">Student Publications</a> (listed in the Library’s online catalog)
					</li>
					<li>
						<a href="http://library.bard.edu/search/t?SEARCH=bard+college+yearbooks" target="_blank">Yearbooks</a> (listed in the Library’s online catalog)
					</li>
				</ul>

				<h3>Guides to Photographs</h3>
				<ul>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Bard Buildings A-K.pdf" target="_blank">Bard Buildings A-K</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Bard Buildings L-Z.pdf" target="_blank">Bard Buildings L-Z</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-CommencementAndAcademicEvents.pdf" target="_blank">Commencements, Annual Academic Events</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-ConferenceLecturesEvents.pdf" target="_blank">Conferences, Lectures and Special Events</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-FacultyAlumniAETrustees.pdf" target="_blank">Faculty, Alumni/ae, Trustees</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Misc.pdf" target="_blank">Miscellaneous</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-StudentsSports.pdf" target="_blank">Students & Sports</a>
					</li>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Theater.pdf" target="_blank">Theater</a>
					</li>
				</ul>

				<h3>Guides to Files by Subject</h3>
				<ul>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/Subject Files.pdf" target="_blank">Subject Files</a>
					</li>
					<li>
						College History Articles: <a href="https://www.bard.edu/archives/findingaids/collegehistory1.pdf" target="_blank">Box 1</a> and <a href="https://www.bard.edu/archives/findingaids/Collegehistory2.pdf" target="_blank">Box 2</a>
					</li>
				</ul>

				<h3>Guide to Bard Recordings</h3>
				<ul>
					<li>
						<a href="https://www.bard.edu/archives/findingaids/R2RTapesHoffman.pdf">R2R Hoffman Tapes</a>
					</li>
				</ul>

			</div>
		</div>
	</div>

<?php
	$page->close();
?>
