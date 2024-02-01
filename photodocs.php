<?php
    require_once("inside-template.php");
	//require_once("rss/rsslib.php");
	//include_once('inc/checkDoW.php');

	$page = new Template();
	$page->setTitle('Photo Docs | Archives | Special Collection | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>

	<div class="right-content inside-page">
		<div class="important-info content-item">
			<h2>Photographs</h2>
			<div>
				<p>
					The archives staff is working to digitize significant portions of its  existing photographic collections, but this project is ongoing. The  word files below correspond to physical drawers of filing cabinets  containing the files and folders that house our photographs. Our working list is presented here to provide a sense of the scope of this  collection. Please contact the archivist if you would like to view the  contents of a folder.
				</p>
				<ul>
					<li><a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Bard Buildings A-K.docx">Bard Buildings A-K</a></li>
					<li><a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Bard Buildings L-Z.docx">Bard Buildings L-Z</a></li>
					<li><a href="https://www.bard.edu/archives/findingaids/PhotoFiles-ConferenceLecturesEvents.docx">Conferences, Lectures and Special Events</a></li>
					<li><a href="https://www.bard.edu/archives/findingaids/PhotoFiles-FacultyAlumniAETrustees.docx">Faculty, Alumni/ae, Trustees</a></li>
					<li><a href="https://www.bard.edu/archives/findingaids/PhotoFiles-StudentsSports.docx">Students &amp; Sports</a></li>
					<li><a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Theater.docx">Theater</a></li>
					<li><a href="https://www.bard.edu/archives/findingaids/PhotoFiles-Unique Files.docx">Miscellaneous</a></li>
				</ul>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>