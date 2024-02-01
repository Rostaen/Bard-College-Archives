<?php
  require_once("inside-template.php");
	//require_once("rss/rsslib.php");
	//include_once('inc/checkDoW.php');

	$page = new Template();
	$page->setTitle('Online Exhibits | Archives &amp; Special Collection | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>

	<div class="right-content inside-page">
		<div class="important-info content-item">
			<h2>Online Exhibits</h2>
			<p class="italic">Most of the exhibits presented here document aspects of College History, including alumni/ae or faculty profiles, oral histories, collections of artwork or music files and exhibits about Bard as a place and an institution.  Some were created by students for class projects; others represent online versions of physical exhibits held in the Library, at Montgomery Place, or elsewhere at the College; and still others are born-digital exhibits originally created for the archives website as part of an exhibit series called 'Voices of Bard.'</p>
			<h3>Student/Class Exhibits</h3>
			<div class="exhibits-container">
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<img src="http://omekalib.bard.edu/files/original/9af5477c3b588c8ae8151e863126d224.png">
					</div>
					<div class="exhibits-text">
						<h4><a href="http://omekalib.bard.edu/exhibits/show/before_bard">Before Bard: A Sense of Place </a></h4>
						<p>
							Students in Bard's Public History Practicum, History 3227, have developed an exhibit covering the unique history of this area before Bard was established (originally St Stephen's College in 1860).
						</p>
					</div>
				</div>
			</div>
			<h3>Voices of Bard: Exhibits from the Archives</h3>
			<div class="exhibits-container">
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<img src="https://www.bard.edu/archives/voices/hirsch/HirshScreenshot.png">
					</div>
					<div class="exhibits-text">
						<h4><a href="http://omekalib.bard.edu/exhibits/show/preciselynot" alt="Enter Hirsch Collection">Precisely Not: Works from the Stefan Hirsch and Elsa Rogo Collection</a></h4>
						<p></p>
					</div>
					<div class="exhibits-image">
						<img src="https://omekalib.bard.edu/files/theme_uploads/c2f289a5590dbc864a6999b42512df50.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="http://omekalib.bard.edu/exhibits/show/blithewoodgarden">Blithewood Garden: Structured Beauty</a></h4>
						<p>Located in the heart of the Hudson River National Historic Landmark District, Blithewood Garden was designed circa 1903 by Francis L. V. Hoppin (1867-1941) of the architectural firm Hoppin & Koen. It is a classic example of a walled Italianate garden. Blithewood Garden today remains breathtakingly beautiful, including its awe-inspiring backdrop of the Catskill Mountains and Hudson River.</p>
					</div>
					<div class="exhibits-image">
						<img src="https://www.bard.edu/bardmakesnoise/images/bardjazzfest/guyducornet.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="http://www.bard.edu/bardmakesnoise/">Bard Makes Noise</a></h4>
						<p>An ongoing web-based project inspired by the creativity of Bard bands and musicians past and present.</p>
					</div>
					<!-- <div class="exhibits-image">
						<img src="https://www.bard.edu/archives/images/bmndisplay1.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/bmn/bmn.php">Bard Makes Noise</a></h4>
					</div> -->
					<div class="exhibits-image">
						<img src="https://www.bard.edu/bardinblackandwhite/images/front1.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="http://www.bard.edu/bardinblackandwhite/">Bard in Black and White</a></h4>
						<p>This exhibition is a celebration of the 150 years of St. Stephen's, renamed Bard College in 1934 in honor of John and Margaret Bard. It is intended to illustrate in photographs the transformation of the campus and student body from its earliest days to the present.</p>
					</div>
					<div class="exhibits-image">
						<img src="voices/bard oral history.png">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/oralhistoryproject/oralhist.php">Bard Oral History Project</a></h4>
						<p>
							The Bard Oral History Project was launched in 2000 as a collaboration between the alumni/ae office and a faculty member then teaching a course in oral histories. The audio and video interviews on this page were recorded as part of that effort. Beginning in 2011, we began to conduct oral histories with alumni/ae and other individuals connected with the history of Bard College calling this effort BardCorps, after the famous StoryCorps project. You can view all of our interviews <a href="https://digitalcommons.bard.edu/oral_hist/" target="_blank">here</a>.
						</p>
					</div>
					<div class="exhibits-image">
						<img src="https://www.bard.edu/archives/voices/koch/kochsmile.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/koch/koch.php">Howard Koch '22</a></h4>
					</div>
					<div class="exhibits-image">
						<img src="https://www.bard.edu/archives/voices/Felix/felix3.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/Felix/felix.php">Felix and Elisabeth Hirsch: &Eacute;migr&eacute; Intellectuals at Bard</a></h4>
					</div>
					<div class="exhibits-image">
						<img src="images/Hungary.png">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/hungary/hungary.php">Hungary '56 Reunion &amp; Conference</a></h4>
					</div>
				</div>
			</div>
			<h3>Montgomery Place Exhibits</h3>
			<div class="exhibits-container">
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<img src="https://omekalib.bard.edu/files/fullsize/d6b1008c7cbfb8c90d5e98f61c83e068.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="https://omekalib.bard.edu/exhibits/show/gilsonfest" target="_blank">Gilsonfest: The Exceptional Journey of Alexander Gilson</a></h4>
						<p>Gilsonfest was a Bard College–led collaboration including Historic Red Hook, the Dutchess County Historical Society, and the Red Hook Quilters, funded by the Lumina Foundation, that focused on the life of Alexander Gilson</p>
					</div>
					<div class="exhibits-image">
						<img src="https://www.bard.edu/archives/images/digitalexhibits/mushrooms/mushrooms.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="http://omekalib.bard.edu/exhibits/show/mushroom-drawings" target="_blank">The Mushroom Drawings of Violetta Delafield</a></h4>
						<p>The Montgomery Place Collections at Bard College contain hundreds of mushroom drawings by Violetta Delafield, most of which are watercolors with specimen data describing each species she collected.</p>
					</div>
					<div class="exhibits-image">
						<img src="https://omekalib.bard.edu/files/fullsize/0572e67e644775bc46207673cd9d47d0.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="http://omekalib.bard.edu/exhibits/show/historic-garden-tools">Historic Garden Tools of Montgomery Place</a></h4>
						<p>An exhibition of the anitque garden implements used at Montgomery Place.</p>
					</div>
				</div>
			</div>
			<h3>Vitrine Exhibits</h3>
			<div class="exhibits-container">
				<div class="exhibits-item grid-4">
					<div class="exhibits-image">
						<img src="https://omekalib.bard.edu/files/original/1cfed89db401474ab938800667652e80.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="https://omekalib.bard.edu/exhibits/show/abolition-resistance--works-fr" target="_blank">Abolition/Resistance</a></h4>
						<p>From Europe to Africa to the Americas, the deepest story of colonial settlement is resistance to racial oppression. Guided by his discerning collector’s eye and deep commitment to civil rights, Alan Sussman amassed an unparalleled collection of works on transatlantic slavery and the struggle against subjugation.</p>
					</div>
					<div class="exhibits-image">
						<img src="http://omekalib.bard.edu/files/original/7fe36c7208bce66510c1d785413e20e7.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="https://omekalib.bard.edu/exhibits/show/davisgodposters" target="_blank">The New Hindu Pantheon</a></h4>
						<p>In India one sees them everywhere: bright wide-eyed Hindu deities, in poster form, perched above cash registers in restaurants and clothing shops, glued to the dashboards of taxis and buses, and framed on the walls of temples and home shrines. These mass-produced chromolithographs or "god-posters" occupy a central place in the visual landscape of modern India.</p>
					</div>
					<div class="exhibits-image">
						<img src="images/Magna.png">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/magna/magna.php">No Free Man... The Clause That Made the Carta, Magna</a></h4>
						<p>Bard College, Stevenson Library presents an exhibit drawn from the Sussman Rare Book Collection in honor of the 800th anniversary of the Magna Carta.</p>
					</div>
					<div class="exhibits-image">
						<img src="https://www.bard.edu/archives/voices/uxmal/Slide 3.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/uxmal/uxmal.php">Uxmal-on-Hudson: Mayan Ruins on Cruger's Island in the 19th Century</a></h4>
						<p></p>
					</div>
					<div class="exhibits-image">
						<img src="https://www.bard.edu/archives/voices/kellogg/kellogg2-big.jpg">
					</div>
					<div class="exhibits-text">
						<h4><a href="voices/kellogg/kellogg.php">Flint Kellogg, St. Stephen's class of 1931</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>