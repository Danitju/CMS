<?php
require "include/db.php";
$db=dbConnect();
$type_id = $_GET['type_id'];
$products = get_product_type($type_id,$db);
$productid=$_GET['product_id'];
$types=get_product_types($db);

?>


<!DOCTYPE html>
<html lang="nl">
	<!--ABOUT-->
	<head>
		<title>Over Frouks</title>
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
				<a href="../en/about.html" id="eng">English</a><!--WIP-->
			</div>
			<div class="search">
				<input type="text" placeholder="Zoeken...">
				<span class="search-button"><i class="fas fa-search"></i></span>
			</div>
			<a href="index.html"><img class="logo" src="../images/frouks_logo.svg"></a><!--Link naar homepage-->
			<nav class="nav-top">
				<span class="menu-button"><i class="fas fa-bars"></i></span>
				<ul>
					<li class="nav-item dropdown"><a href="welkom.php">Collectie <i class="fas fa-caret-down dropdown"></i></a>
						<ul class="subnav">
						<?php foreach ($types as $type):?>
							<li class="subnav-item" id="rings"><a href="type.php?type_id=<?php echo $type['id']?>"><?php echo ucfirst( $type['naam'])?></a></li>
							<?php endforeach ?>
						</ul>
					</li>
					<li class="nav-item"><a href="workshops.php">Workshops</a></li>
					<li class="nav-item"><a href="gemstones.php">Stenen Overzicht</a></li>
					<li class="nav-item"><a class="link-active" href="about.php">Over Frouks</a></li>
					<li class="nav-item"><a href="events.php">Evenementen</a></li>
					<li class="nav-item"><a href="location.php">Locatie</a></li>
					<li class="nav-item"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header>
		<main class="main">
				<div class="figure">
					<img class="figure-image" src="../images/achtergrond3kopie.jpg" alt="Een foto van Frouks">
					<div class="figure-text">
						Frouks is Froukje van de Avoird (1975).
						Geboren en opgegroeid in Amstelveen. Begon
						met smeden in 1994 aan de Vakschool voor
						Edelsmeden in Amsterdam. Na haar studie
						heeft Froukje het vak verfijnd bij BLGK
						Edelsmeden. Ook heeft zij altijd haar eigen
						atelier op diverse locaties in Amsterdam
						gehad. Tegenwoordig heeft Froukje een
						geweldig atelier met uitzicht op het
						inspirerende Westelijk haven gebied en 't IJ.
						Waar zij naast het maken van haar eigen
						werk ook cursus geeft.
						“Een sieraad is zeer persoonlijk.”, vindt
						Frouks, “ Daarom is het zo leuk om
						samen met de klant een sieraad op maat te
						creëren. Het is een meerwaarde voor de klant om
						zijn/haar eigen wensen samen vorm te geven
						en maakt dat het sieraad uniek is. Dat is
						leuk voor de klant en voor mij is het een
						plezier om iets op maat te maken.”
					</div>
				</div>
		</main>
		<script src="../scripts/script.js"></script>
	</body>
</html>