<?php
require_once("inside-template.php");
//require_once("rss/rsslib.php");
//include_once('inc/checkDoW.php');

$page = new Template();
$page->setTitle('Digital Collections | Archives &amp; Special Collection | Bard College');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
function exhibitItem($imgURL, $imgAlt, $imgComment, $targetURL, $title, $bodyContent, $nyHeritageUsage = false)
{
	$nyHeritage = '<img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;">';
	echo `
		<div class="exhibits-item grid-4">
			<div class="exhibits-image">
				<a href="images/digicoll/{$imgURL}" target="_blank">
					<img src="images/digicoll/{$imgURL}" alt="{$imgAlt}">
				</a>
				<p class="small-font flex-center">{$imgComment}</p>
			</div>
			<div class="exhibits-text">
				<h3><a target="_blank" href="{$targetURL}">{$title}</a>`;
	if ($nyHeritageUsage == true)
		echo $nyHeritage;
	echo `</h3>
				<p>{$bodyContent}</p>
			</div>
		</div>`;
}

$digitalCollData = [
	["bard college arch.png", "Interior of Albee Social", "Interior of Albee Social, ca. 1935", "https://nyheritage.org/collections/bard-college-architecture-past-and-present", "Bard College Architecture, Past and Present Collection", "This collection contains photographs related to all buildings of Bard College, past and present.", true],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
	["", "", "", "", "", ""],
];
?>

<div class="right-content inside-page digital-collection">
	<div class="important-info content-item">
		<h2>Digital Collections</h2>
		<div>
			<p class="italic">
				The digital collections found here have all been created at Bard, and several of these collections - the Hannah Arendt Collection, the Blücher Archive, and the Student Newspaper Archive - are hosted at Bard as well. Other collections are hosted by <a target="_blank" href="https://nyheritage.org/contributors/bard-college-archives-and-special-collections" target="_blank">New York Heritage</a>.
			</p>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/bard pres coll.png" target="_blank">
						<img src="images/digicoll/bard pres coll.png" alt="Bard President Leon Botstein">
					</a>
					<p class="small-font flex-center">Bard President Leon Botstein, ca. 1980</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/bard-college-presidents">Bard College Presidents Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"></h3>
					<p>This collection contains photographs of the presidents of Bard College, which began as a seminary training school called St. Stephen's. During the intervening years, the administrative head of the college has variously been called Warden, Dean, and President. The title Dean was used during the years 1927-1944, when the college merged with Columbia University with President Murray Butler as head. Consecutively, these men are Warden George Franklin Seymour, 1860-1861; Warden Thomas Richey, 1861-1863; Warden Robert Brinckerhoff Fairbairn, 1863-1898; Warden Lawrence T. Cole, 1899-1903; Warden Thomas R. Harris, 1904-1907; President William Cunningham Rodgers, 1909-1919; President (later Warden and Dean) Bernard Iddings Bell, 1919-1933; Dean Donald George Tewksbury, 1933-1937; Dean Harold Mestre, 1938-1939; President Charles Harold Gray, 1940-1946; President Edward C. Fuller, 1940-1946; President James Herbert Case Jr., 1950-1960; President Reamer Kline, 1960-1974; and President Leon Botstein, 1975 to present. Two acting presidents were Robert Leigh, who served as dean under Columbia's president from 1939 to 1940, and George Bailey Hopson who served three terms as acting warden; 1898-1899, 1903-1904, and 1907-1909.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/student newspaper.png" target="_blank">
						<img src="images/digicoll/student newspaper.png" alt="Cover of the Bard Observer">
					</a>
					<p class="small-font flex-center">Cover, Bard Observer, May 8, 1968</p>
				</div>
				<div class="exhibits-text">
					<h3><a href="https://digitalcommons.bard.edu/stu_news/">Bard College Student Newspaper Archive</a> </h3>
					<p>Launched in 2000 by two former Bard students, this site provides access to over 10,000 pages of student newspapers, spanning more than 100 years of Bard's history. As the creators of the site note in their introduction: 'Nowhere does one find a more intimate, personal account of Bard's cultural history than in the expressive output of the students themselves.'</p>
				</div>
			</div>
			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="https://digitalcommons.bard.edu/assets/md5images/24a3afc0a3ed403d8656506dc1f8afd1.png" target="_blank">
						<img src="https://digitalcommons.bard.edu/assets/md5images/24a3afc0a3ed403d8656506dc1f8afd1.png" alt="BardCorps logo with the words BardCorops in tan with a red oval around it.">
					</a>
				</div>
				<div class="exhibits-text">
					<h3><a href="http://digitalcommons.bard.edu/oral_hist/">BardCorps-Oral Histories</a></h3>
					<p>BardCorps is a collaborative oral history project of the Alumni/ae Office and the Bard College Archives. This is modeled on the famous StoryCorps initiative that travels the country recording personal stories in an Airstream trailer. We are recording the stories of Bardians to preserve memory, and to document and expand our collective understanding of Bard’s history.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<div class="grid-2">
						<a href="images/digicoll/john johnston bard.png" target="_blank">
							<img src="images/digicoll/john johnston bard.png" alt="John Johnston Bard">
						</a>
						<a href="images/digicoll/margaret johnston bard.png" target="_blank">
							<img src="images/digicoll/margaret johnston bard.png" alt="Margaret Johnston Bard">
						</a>
					</div>
					<p class="small-font flex-center">John and Margaret Johnston Bard, founders of the College.</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/bard-family-papers">Bard Family Papers</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> </h3>
					<p>The letters, deeds, and other objects included here represent a small sample from a collection of Bard family materials donated to the college in 1938-39 by J.A. Sands, a Bard descendant. These selections, with dates ranging from the mid 18th through the mid 20th centuries, animate our understanding of individual family members, their relationships to each other and to the larger society. </p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/fire engines.png" target="_blank">
						<img src="images/digicoll/fire engines.png" alt="Engines exiting the station">
					</a>
					<p class="small-font flex-center">Engines exiting the station, ca. 1949.</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/bard-student-fire-department">Bard Student Fire Department Collection </a><img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> </h3>
					<p>The photographs in this collection document the existence of a student-run volunteer fire department at Bard College. Initially organized in 1942, the Bard College Fire Brigade (later called simply the Bard College Fire Department) became a central campus organization when founder George Blackstone returned from military service in 1946. Intended to protect the Bard community and to provide student members with fire fighting skills, the company fought fires as far away as Rhinecliff and Clermont during its active years. As years passed, however, leadership faltered. Suffering from lack of funds and dwindling membership, <a href="voices/Kline-Education/kline.php">President Kline</a> closed the department on May 3, 1960.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/trinity school.png" target="_blank">
						<img src="images/digicoll/trinity school.png" alt="Trinity Church and School">
					</a>
					<p class="small-font flex-center">Trinity Church and School, Tivoli</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/bard-tivoli-history-collection">Bard-Tivoli History Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> </h3>
					<p>This collection contains photographs, letters, and other manuscript material pertaining primarily to the relationship between John and Margaret Bard and Reverend James Starr Clark. These illustrate the beginnings of St. Stephen's College in Annandale; and in Tivoli, Trinity Church and School, and Trinity Academy. </p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<!-- <a href="https://news.hrvh.org/veridian/?a=cl&cl=CL1&sp=idadahji&e=-------en-20--1--txt-txIN-------" target="_blank"> -->
					<img src="https://blogs.bard.edu/library/files/2022/09/barrytownexplorer.png" alt="Barrytown Explorer on HRVH.">
					<!--</a>
						 <p class="small-font flex-center">Image from HVH website.</p> -->
				</div>
				<div class="exhibits-text">
					<h3><a href="https://news.hrvh.org/veridian/?a=cl&cl=CL1&sp=idadahji&e=-------en-20--1--txt-txIN-------" target="_blank">Barrytown Explorer</a> <!-- <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> --></h3>
					<p>The Barrytown Explorer was a local monthly newspaper published by Chanler Armstrong Chapman of Barrytown, a hamlet in the Town of Red Hook. Chapman (1901-1982) was a Livingston/Astor/Chanler family scion, a dairy farmer, a Red Hook School board member, and a witty, eccentric raconteur who delighted in flouting convention. He launched the newspaper in June 1958 during the age of the Space Race, soon after the Soviet Union had launched Sputnik, the world’s first artificial satellite, and the U.S. had successfully countered with “Explorer,” from Cape Canaveral, in Florida. The Explorer’s inaugural issue claimed “This paper is interested in four subjects. First, the Neighbors and their families; second, good schools in good Communities; third, a fair price for milk at the barn door for Dairy Farmers; Fourth, the Truth, always the truth.” The newspaper offered lively coverage of local people and events until ceasing publication in April 1982, a month after Chapman died. This collection is a collaboration with <a href="https://www.historicredhook.org/" target="_blank">Historic Red Hook</a> to pool our holdings of the paper and it was carefully digitized by Archives Student Workers. We worked with <a href="https://www.senylrc.org/" target="_blank">SENYLRC</a> to upload the combined scanned newspaper run to <a href="https://news.hrvh.org/veridian/?a=cl&cl=CL1&sp=idadahji&e=-------en-20--1--txt-txIN-------" target="_blank">HRVH Newspapers</a> ensuring that it is widely accessible and searchable.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/bluecher.png" target="_blank">
						<img src="images/digicoll/bluecher.png" alt="Heinrich Blücher">
					</a>
					<p class="small-font flex-center">Heinrich Blücher</p>
				</div>
				<div class="exhibits-text">
					<h3><a href="http://www.bard.edu/bluecher/">Blücher Archive</a> </h3>
					<p>Reintroduces the ideas and influence of Heinrich Blücher to the Bard community and beyond. This site features transcripts of lectures delivered in the 1950s and 1960s on the history of philosophy. These lectures embodied his ideas surrounding the Common Course, which evolved into the present First Year Seminar.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/class photo.png" target="_blank">
						<img src="images/digicoll/class photo.png" alt="St. Stephen’s graduating class of 1901; Rev. George B. Hopson, seated">
					</a>
					<p class="small-font flex-center">St. Stephen's graduating class of 1901; Rev. George B. Hopson, seated</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/bard-class-photos">Class Photos</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"></h3>
					<p>2010 marks the 150th anniversary of the founding of Bard College, formerly called St. Stephen's College. The images in this growing collection represent existing class pictures from St. Stephen's and Bard College.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/chest xrays.png" target="_blank">
						<img src="images/digicoll/chest xrays.png" alt="Chest x-rays at the gym, 1945.">
					</a>
					<p class="small-font flex-center">Chest x-rays at the gym, 1945. Professor Harvey Fite stands third in line.</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/elie-shneour-collection">Elie Shneour Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"></h3>
					<p>The Elie A. Shneour Collection is comprised of black and white images scanned directly from negatives found in the Bard Archives. Taken by Elie Shneour '47 during the years 1943-1948, the collection offers a snapshot of Bard during and immediately after WWII. Included are some of the first images of women at Bard, as the college became coed in 1944 causing it to break its ties with Columbia University. Other items of interest include aerial shots of the campus, theatrical and musical events, dance parties, conferences, and portraits of individuals who made Bard such a vibrant community.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/hannah coll.png" target="_blank">
						<img src="images/digicoll/hannah coll.png" alt="Arendt marginalia on p. 1142">
					</a>
					<p class="small-font flex-center">Arendt marginalia on p. 1142, in Aristotle’s Graece ex Recensione Immanuelis Bekkeri</p>
				</div>
				<div class="exhibits-text">
					<h3><a href="http://www.bard.edu/arendtcollection/">Hannah Arendt Collection, The</a> </h3>
					<p>This site presents images and analysis of marginalia contained in selected titles from Hannah Arendt's personal library, given to Bard after her death in 1975. It also features audio segments from 'Thinking in Dark Times,' a conference held at Bard in October of 2006 that re-examined her scholarship and commemorated the 100th anniversary of her birth. </p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/harvey fite col.png" target="_blank">
						<img src="images/digicoll/harvey fite col.png" alt="Poster depicting Opus 40 for Fite sculpture xhibit held at Bard">
					</a>
					<p class="small-font flex-center">Poster depicting Opus 40 for Fite sculpture exhibit held at Bard 1969</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/harvey-fite-collection">Harvey Fite Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> </h3>
					<p>Harvey Fite was a student at St. Stephen's College until 1930. He returned as a professor, teaching classes in drama and sculpture at Bard College from 1934-1969. Many of the photos included here were given to Bard by his family in 1996 at the presentation of the self portrait sculpture which stands in the Kellogg Library. Harvey Fite was a vital force in the Bard community, and he helped to shape the college even while he worked to create the monumental landscape work which became Opus 40. </p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/hyde park post office mural.png" target="_blank">
						<img src="images/digicoll/hyde park post office mural.png" alt="Hyde Park Post Office Mural Panel 6 featuring Drs. John and Samuel Bard">
					</a>
					<p class="small-font flex-center">Hyde Park Post Office Mural Panel 6 featuring Drs. John and Samuel Bard</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/olin-dows-collection">Olin Dows Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"></h3>
					<p>This collection contains images scanned from a series of original photographs of the work of Rhinebeck artist Olin Dows (1904-1981, b. Irvington-on-Hudson). Dows studied at Harvard University and the Yale School of Fine Arts and, significantly, spent the summer of 1929 in Mexico where he met with such luminaries as Diego Rivera and Dr. Atl. In the early-1930's, Dows became involved in Federal relief efforts for the arts through his connection to Franklin D. Roosevelt. He was appointed Director of the Treasury Relief Art Project, funded by the Works Progress Administration in 1935. This first selection highlights his work in the Rhinebeck and Hyde Park Post Offices. Dows was commissioned to paint a series of murals in the Rhinebeck Post Office in 1939, and in 1941, at the suggestion of President Roosevelt, he painted the murals in the Hyde Park Post Office as well.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/paul scrapbook.png" target="_blank">
						<img src="images/digicoll/paul scrapbook.png" alt="Page from the Paul Hartzell photo scrapbook epicting the 'Burial of the Algebra' tradition">
					</a>
					<p class="small-font flex-center">Page from the Paul Hartzell photo scrapbook depicting the 'Burial of the Algebra' tradition</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/paul-hartzell-album">Paul Hartzell Album</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> </h3>
					<p>This photograph album was assembled by Paul Hartzell, class of 1915. It contains images of individual students, sports teams, fraternities, faculty, buildings, commencement exercises, budding romance, and various college rituals such as the Freshman Tug of War. Taken together, these provide a sense of life at St. Stephens during the years 1913-1915. <em>Images in this collection can be enlarged several times to view details.</em></p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/louise link.png" target="_blank">
						<img src="images/digicoll/louise link.png" alt="Louise Link '71 stands on the Blithewood lawn.">
					</a>
					<p class="small-font flex-center">Louise Link '71 stands on the Blithewood lawn.</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/peter-aaron-collection">Peter Aaron Collection</a><img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"></h3>
					<p>This collection represents selected photographs of students and campus life at Bard taken by photographer Peter Aaron, '68 between the years 1964-1971. The original photographs were loaned to the archives by Mr. Aaron, scanned by Bard Archives staff, and subsequently returned to him. Included here are two aerial shots, some posed portraits, and a variety of candid images of students hanging out and having fun. Dark glasses and sideburns notwithstanding, together they offer a snapshot of Bard in the 1960s that, in many instances, might have been taken yesterday.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="#">
						<img src="https://digitalcommons.bard.edu/poetry_at_bard/1000/thumbnail.jpg" alt="Poetry at Bard digital commons thumbnail.">
					</a>
					<p class="small-font flex-center"></p>
				</div>
				<div class="exhibits-text">
					<h3><a href="https://digitalcommons.bard.edu/poetry_at_bard/index.html" target="_blank">Poetry at Bard</a> </h3>
					<p>These audio recordings have been digitized from a collection of cassette and open reel tapes of readings and lectures at Bard over the last 50 years. The collection was initially established with funds provided by the Carter A Towbin Poetry Fund in 1982 and first located in Albee Hall before moving to the Olin Building. Our hope is to use the recordings to help tell the story of Bard as an exuberant place for poetry for more than half a century.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/tennis team.png" target="_blank">
						<img src="images/digicoll/tennis team.png" alt="St. Stephen’s freshmen tennis team">
					</a>
					<p class="small-font flex-center">St. Stephen's freshmen tennis team, 1923</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/sports-st-stephens">Sports at St. Stephen's</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"></h3>
					<p>Athletics thrived at St. Stephen's beginning in the 1920s with many teams achieving national rankings in their respective sports. Under the energetic leadership of Bernard Iddings Bell, construction on the Memorial Gymnasium was completed in 1921, a new athletic director was hired, and by 1925 a proper athletic field was completed next to the Hoffman Library. Sports teams, or 'squads' were often generically referred to as the 'Saints,' but individual teams were affectionately referred to as the 'Scarlet Harriers' (cross country); the 'Scarlet Bootmen' (soccer); the 'Scarlet Stickmen' (lacross); the 'Scarlet Icemen,' or 'Scarlet Rinkmen' (hockey); the 'Red and White' (basketball); and the 'Crimson and White'(football). Tennis, Rugby and Bowling were also popular. While the drama of those games has evaporated, these team images retain and reflect the spark and prowess of the athletes of the day.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/tivoli coll.png" target="_blank">
						<img src="images/digicoll/tivoli coll.png" alt="Dolly Freeborn driving car on Friendship St.">
					</a>
					<p class="small-font flex-center">Dolly Freeborn driving car on Friendship St., Tivoli</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/tivoli-collection">Tivoli Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> </h3>
					<p>The Tivoli Collection is comprised of selected photographs of Tivoli collected by the late Joan Navins, former Village Historian.</p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/roosevelt.png" target="_blank">
						<img src="images/digicoll/roosevelt.png" alt="Eleanor Roosevelt with William Matthews at Ward Manor">
					</a>
					<p class="small-font flex-center">Eleanor Roosevelt with William Matthews at Ward Manor 1938 David Wordell Collection</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/ward-manor">Ward Manor Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"></h3>
					<p>In 1926 William Ward of the Ward Baking Company funded the renovation of the river estate known as Almonte for purposes of creating a home for the elderly in the 'gray manor house', to be managed and run by his friend William Matthews. Soon, Matthews extended the operation to include summer camps for girls and boys, and summer bungalow rentals to poor families in some 56 buildings extending from Cruger's Island, through what is now Tivoli Bays, to the "Homestead" mansion at the southern edge of the village of Tivoli. This photograph collection, owned by William Matthews' grandaughter Donna Matthews, documents these activities and the lives that were led here for more than 30 years. Very few of these buildings are standing today. </p>
				</div>
			</div>

			<div class="exhibits-item grid-4">
				<div class="exhibits-image">
					<a href="images/digicoll/radio station.png" target="_blank">
						<img src="images/digicoll/radio station.png" alt="Weekly variety show of WXBC broadcast">
					</a>
					<p class="small-font flex-center">Weekly variety show of WXBC broadcast, spring 1950.</p>
				</div>
				<div class="exhibits-text">
					<h3><a target="_blank" href="https://nyheritage.org/collections/bard-college-radio-wxbc">WXBC Collection</a> <img src="https://nyheritage.org/sites/default/files/NYH_Logo_Small.png" alt="hrvh" width="100" height="39.5333" border="0" align="absmiddle" style="width: inherit !important;"> </h3>
					<p>WXBC was envisioned in 1946 by Elie Shneour '47, and implemented by many hands, including those of John Gillin '47 who wrote his senior project about the technical design and construction of this college radio station. The "X' in its call letters stood for "Experimental," and the 1951 yearbook described the station as the "Voice of the Bard Campus." The photographs in this collection record some of the events of WXBC in its early years.</p>
				</div>
			</div>

			<p>Rights and Usage Information for Bard College Archives and Special Collections Digital Collections: The materials on this web site are made available for use in research, teaching and private study. For those purposes the user may reproduce these materials (by download, printing, etc.) without further permission, on the condition that proper attribution of the source for all copies is provided by clearly acknowledging the name of the Library, the title of the web page or resource, and the URL at which it was located. </p>

			<p>For other uses of these materials, i.e. in commercial products, for broadcast or publication, permission must be obtained in advance from the Bard College Archives and Special Collections staff. </p>
		</div>
	</div>
</div>

<?php
$page->close();
?>
