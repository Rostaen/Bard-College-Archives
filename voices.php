<?php
require("template.php");

// create page object
$page = new Template();
$page->setTitle('Voices of Bard | Archives | Special Collection | Bard College');
$page->setSubHeading('Voices of Bard');

// print page header
$page->open();
?>
<p><em>This page represents a dynamic exhibit space that will spotlight short audio or video clips of interest to the Bard Community. Selections might be recent, or not so recent; the voices familiar to many, or perhaps to only a few, for whom a voice conjures an old friend. Previous Voices of Bard Exhibits are archived at the bottom of the page. </em></p>

<!-- <h1>Precisely Not: Works from the Stefan Hirsch and Elsa Rogo Collection</h1>
 -->
<div class="hirsch-images">
	<img src="voices/hirsch/HirshScreenshot.png" alt="hirsch item" border="0" style="width:100%;">
	<br><br>
	<a href="http://omekalib.bard.edu/exhibits/show/preciselynot" alt="Enter Hirsch Collection">Enter the Stefan Hirsch &amp; Elsa Rogo Collection</a>
	<br><br>

</div>

<hr size="1" noshade>
<p><em><strong>Previous Voices of Bard Exhibits:</strong></em></p>
<ul>
	<li><a href="http://omekalib.bard.edu/exhibits/show/mushroom-drawings" target="_blank">Mushroom Exhibit</a> <p>The mushroom drawings of Violetta Delafield.</p></li>
	<li><a href="http://omekalib.bard.edu/exhibits/show/historic-garden-tools">Historic Garden Tools</a> <p>An exhibition of the anitque garden implements used at Montgomery Place.</p></li>
	<li><a href="http://omekalib.bard.edu/exhibits/show/blithewoodgarden">Blithewood Garden: Structured Beauty</a> <p>Located in the heart of the Hudson River National Historic Landmark District, Blithewood Garden was designed circa 1903 by Francis L. V. Hoppin (1867-1941) of the architectural firm Hoppin & Koen. It is a classic example of a walled Italianate garden. Blithewood Garden today remains breathtakingly beautiful, including its awe-inspiring backdrop of the Catskill Mountains and Hudson River.</p></li>
	<li><a href="http://www.bard.edu/bardmakesnoise/">Bard Makes Noise</a> <p>An ongoing web-based project inspired by the creativity of Bard bands and musicians past and present.</p></li>
	<li><a href="http://www.bard.edu/bardinblackandwhite/">Bard in Black and White</a> <p>This exhibition is a celebration of the 150 years of St. Stephen&rsquo;s, renamed Bard College in 1934 in honor of John and Margaret Bard. It is intended to illustrate in photographs the transformation of the campus and student body from its earliest days to the present.</p></li>
	<li><a href="voices/magna/magna.php">Stevenson Library Presents: Magna Carta Exhibit</a></li>
	<li><a href="voices/uxmal/uxmal.php">Uxmal-on-Hudson</a> <p>Mayan Ruins on Cruger's Island in the 19th Century</p></li>
	<li><a href="voices/kellogg/kellogg.php">Flint Kellogg, St. Stephen's class of 1931</a></li>
	<li><a href="voices/oralhistoryproject/oralhist.php">Bard Oral History Project</a></li>
	<li><a href="voices/koch/koch.php">Howard Koch</a></li>
	<li><a href="voices/bmn/bmn.php">Bard Makes Noise</a></li>
	<li><a href="voices/Felix/felix.php"><strong>Felix and Elisabeth Hirsch</strong></a> <p>&Eacute;migr&eacute; Intellectuals at Bard</p></li>
	<li><a href="voices/Kline-Education/kline.php">Reamer Kline's <em>Education for the Common Good</em></a> <p>A History of Bard College the First 100 Years, 1860-1960</p></li>
	<li><a href="voices/hungary/hungary.php">Hungary '56 Reunion &amp; Conference</a></li>
</ul> 	
<?
// close page
$page->close();
?>