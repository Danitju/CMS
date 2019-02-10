<!DOCTYPE html>
<html lang="en">
	<!--LOCATION-->
	<head>
		<title>Location</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="../styles/style.css">
		<link rel="stylesheet" href="../styles/responsive.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta charset="utf-8">
	</head>
	<body>
		<header class="header-main">
			<div class="lang-settings"> 
				<a href="../nl/location.html" id="eng">Nederlands</a><!--WIP-->
			</div>
			<div class="search">
				<input type="text" placeholder="Search...">
				<span class="search-button"><i class="fas fa-search"></i></span>
			</div>
			<a href="index.html"><img class="logo" src="../images/frouks_logo.svg"></a><!--Link naar homepage-->
			<nav class="nav-top">
				<span class="menu-button"><i class="fas fa-bars"></i></span>
				<ul>
					<li class="nav-item dropdown"><a href="collection.html">Collection <i class="fas fa-caret-down dropdown"></i></a>
						<ul class="subnav">
							<li class="subnav-item" id="rings"><a>Rings</a></li>
							<li class="subnav-item" id="earrings"><a>Earrings</a></li>
							<li class="subnav-item" id="necklaces"><a>Necklaces</a></li>
							<li class="subnav-item" id="bracelets"><a>Bracelets</a></li>
							<li class="subnav-item" id="weddingsrings"><a>Wedding rings</a></li>
							<li class="subnav-item" id="cufflinks"><a>Cufflinks</a></li>
							<li class="subnav-item" id="specials"><a>Specials</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="workshops.html">Workshops</a></li>
					<li class="nav-item"><a href="gemstones.html">Gemstones</a></li>
					<li class="nav-item"><a href="about.html">About</a></li>
					<li class="nav-item"><a href="events.html">Events</a></li>
					<li class="nav-item"><a class="link-active" href="location.html">Location</a></li>
					<li class="nav-item"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</header>
         <main class="main">
			<!--<div class="container">
            <div id="map_container"></div>
              <div id="map"></div>
            </div>-->
			<img class="map" src="../images/blou-plattegrond.jpg">
         </main>
        <footer class="footer">
			<p>Emailadres</p>
			<p>Contactgegevens</p>
			<p>Locatie</p>
        </footer>
		<script src="../scripts/script.js"></script>
        <!--<script src="scripts/map.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyvDGy9uEJ251ahsZ5xhO0ZYcIj1gDpOc&callback=initMap"></script>-->
    </body>
</html>