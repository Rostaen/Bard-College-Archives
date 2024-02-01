<?php
	require_once("inside-template.php");
	//require_once("rss/rsslib.php");
	//include_once('inc/checkDoW.php');

	$page = new Template();
	$page->setTitle('Image Use &amp; Access | Archives | Special Collection | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>

	<div class="right-content">
		<div class="important-info content-item" style="position: relative; z-index: 1;">
			<h2>Image Use &amp; Access</h2>
			<div>
				<!-- <p>
					In light of the fact that the archival materials are preserved for the purpose of making them available, research requests are welcomed in the form of in-person visits, as well as telephone calls, written letters, <a href="mailto:tieger@bard.edu">email</a>, or online via the <a href="https://goo.gl/forms/6Aulkz1lnZGz6I3C2" target="_blank">Archives Request Form</a>.
				</p>
				<p>
					Researchers intending to visit are encouraged to call ahead to ensure that Archives staff will be available to assist them.  As stated above, complex research requests from individuals outside the Bard community will be handled as time and resources allow. All materials are non circulating, but duplication of materials will be allowed according to the Duplication Policy stated below
				</p> -->
				<?php include("reading-room-hours.php"); ?>
				<p>
					Rights and Usage Information for Bard College Archives and Special Collections Digital Collections: The materials on this web site are made available for use in research, teaching and private study. For those purposes the user may reproduce these materials (by download, printing, etc.) without further permission, on the condition that proper attribution of the source for all copies is provided by clearly acknowledging the name of the Library, the title of the web page or resource, and the URL at which it was located.
				</p>
				<p>
					For other uses of these materials, i.e. in commercial products, for broadcast or publication, permission must be obtained in advance from the Bard College Archives and Special Collections staff.
				</p>
				<h3>Image Requests</h3>
				<p>
					When granted, permission to use an image in a publication applies to a one time, non exclusive usage. All reprints, further editions, translations, or re-employments of the printing plates/files in another project require a new permission.
				</p>
				<p>
					In granting reproduction permission, Bard College acts as the owner of the physical materials only. Bard College takes no responsibility for any possible infringement of copyrights laws in the publication of its materials.
				</p>
				<p>
					Bard College retains exclusive permission to publish its own images and to grant permissions for reproduction. The granting of permission for reproduction shall not be construed as the surrender of those exclusive rights by Bard College.
				</p>
				<p>
					Archival staff will provide metadata for the image according to the specific needs of the request. If the copyright status of the work is known, it should be noted.
				</p>
				<p>
					All images must include the caption: Bard College Archives
				</p>
				<h3>Fee Structure</h3>
				<ul>
					<li>$30 for a high resolution tiff or jpeg file. An additional access file may be provided at no cost at the discretion of staff.</li>
					<li>$50 for new photography, or a new scan.</li>
				</ul>
				<p>
					Fee waivers will be considered for individual or educational use.
				</p>
				<p>
					Researchers should expect our process of responding, accepting, processing, and sending to take at least two weeks. Rush orders require prior permission and will be accommodated per staff availability at an additional cost.
				</p>
				<p>
					Payment must be received before images are released.
				</p>
				<p>
					<button onclick="window.location.href='https://tools.bard.edu/tools/webforms/view.php?id=574695';" style="background-color: #b90124; border: 0px; color: white; padding: 5px 10px; cursor: pointer; outline: 0;">
						Digital Reproduction Request Form
					</button>
				</p>
				<p>
					Thank you for your interest in the Bard College Archives.
				</p>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>