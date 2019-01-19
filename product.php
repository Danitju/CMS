<?php

require "include/db.php";
$db=dbConnect();

$productid=$_GET['product_id'];
$product=get_product($productid,$db);

// print_r($product);
?>


<!DOCTYPE html>
<html lang="nl">
	<!--COLLECTION-->
	<head>
		<title>Collectie</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" href="styles/style.css">
		 <link rel="stylesheet" href="styles/product_page.css">
		<link rel="stylesheet" href="styles/responsive.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<meta charset="utf-8">
	</head>
	<body>
		<header class="header-main">
			<div class="lang-settings"> 
				<a href="" id="eng">English</a><!--WIP-->
			</div>
			<div class="search">
				<input type="text" placeholder="Zoeken...">
				<span class="search-button"><i class="fas fa-search"></i></span>
			</div>
			<a href="index.html"><img class="logo" src="images2/frouks_logo.svg"></a><!--Link naar homepage-->
			<nav class="nav-top">
				<span class="menu-button"><i class="fas fa-bars"></i></span>
				<ul>
					<li class="nav-item dropdown"><a href="collection.html">Collectie <i class="fas fa-caret-down dropdown"></i></a>
						<ul class="subnav">
							<li class="subnav-item" id="rings"><a>Ringen</a></li>
							<li class="subnav-item" id="earrings"><a>Oorbellen</a></li>
							<li class="subnav-item" id="necklaces"><a>Kettingen</a></li>
							<li class="subnav-item" id="bracelets"><a>Armbanden</a></li>
							<li class="subnav-item" id="weddingsbands"><a>Trouwringen</a></li>
							<li class="subnav-item" id="cufflinks"><a>Manchetknopen</a></li>
							<li class="subnav-item" id="specials"><a>specials</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="workshops.html">Workshops</a></li>
					<li class="nav-item"><a href="gemstones.html">Stenen Overzicht</a></li>
					<li class="nav-item"><a href="about.html">Over Frouks</a></li>
					<li class="nav-item"><a href="events.html">Evenementen</a></li>
					<li class="nav-item"><a href="location.html">Locatie</a></li>
					<li class="nav-item"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</header>
		<main class="main">
			<div class="product-content">
				<div class="flexbox-container">
					<img class="product-img" src="<?php echo $product['location']; ?>" alt="Afbeelding van product">
				</div>
				<div class="flexbox-container">
					<div class="name-block"><span class="product-name"><?php echo $product['title']; ?></span></div>
					<div class="price-block"><span class="product-price"><?php echo $product['price']; ?></span></div>
					<div class="product-desc">
					<?php echo $product['description']; ?>
					</div>
					<a class="purchase" href="#purchase">Kopen</a>
				</div>
			</div>
		</main>
		<script src="scripts/script.js"></script>
	</body>
</html>