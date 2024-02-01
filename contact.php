<?php
require_once("inside-template.php");

$page = new Template();
$page->setTitle('Contact | Archives | Special Collection | Bard College');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();

function contactCard($image, $imgAlt, $nameTitle, $contactInfo)
{
	echo "
			<div class=\"exhibits-item grid-4\">
				<div class=\"exhibits-image\">
					<img src=\"images/staff/$image\" alt=\"$imgAlt\">
				</div>
				<div class=\"exhibits-text\">
					<h3>$nameTitle</h3>
					<p>
						$contactInfo
					</p>
				</div>
			</div>
		";
}
$contactData = [
	["Helene.jpg", "Bard College Archivist, Helene Tieger", "Helene Tieger, College Archivist", "Stevenson Library Archives &amp; Special Collections <br>1 Library Road <br>Annandale-on-Hudson, NY 12504 <br>(845) 758-7396 <br>tieger@bard.edu"],
	["Palash.jpg", "Digital Projects Coordinator, Palash Bosgang", "Palash Bosgang, Digital Projects Coordinator for Archives &amp; Special Collections", "Stevenson Library Archives &amp; Special Collections <br>1 Library Road <br>Annandale-on-Hudson, NY 12504 <br>(845) 758-7509<br>bosgang@bard.edu"],
	["Andrew.jpg", "Bard College Stevenson Library Website Management, Andrew Fillhart", "Andrew Fillhart, Library Website Management", "(845) 758-7618<br>afillhar@bard.edu"],
];
?>

<div class="right-content">
	<div class="important-info content-item" style="position: relative; z-index: 1;">
		<h2>Contact</h2>
		<div>
			<p>
				<em>If you have questions requiring additional research, are planning to visit the archives, or are interested in making a donation to the Archives, please contact: </em>
			</p>
			<?php
			for ($x = 0; $x < count($contactData); $x++) {
				if ($contactData[$x][0] == "Andrew.jpg")
					echo "<p><em>For technical questions regarding this website, please contact:</em></p>";
				contactCard($contactData[$x][0], $contactData[$x][1], $contactData[$x][2], $contactData[$x][3]);
			}
			?>
		</div>
	</div>
</div>

<?php
$page->close();
?>
