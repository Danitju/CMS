<?php

require "include/db.php";
$db=dbConnect();

$productid=$_GET['product_id'];
$product=get_product($productid,$db);
$types=get_product_types($db);

// print_r($product);
?>


<!DOCTYPE html>
<html lang="nl">
	<!--COLLECTION-->
	<head>
		<title>Collectie</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" href="styleGrid.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link rel="stylesheet" href="../styles2/style.css">
		 <link rel="stylesheet" href="../styles2/product_page.css">
		<link rel="stylesheet" href="../styles2/responsive.css">
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
			<a href="index.html"><img class="logo" src="../images/frouks_logo.svg"></a><!--Link naar homepage-->
			<nav class="nav-top">
				<span class="menu-button"><i class="fas fa-bars"></i></span>
				<ul>
					<li class="nav-item dropdown"><a href="welkom.php">Collectie <i class="fas fa-caret-down dropdown"></i></a>
						<ul class="subnav">

						<?php foreach ($types as $type):?>
							<li class="subnav-item" id="rings"><a href="type.php?type_id=<?php echo $type['id']?>"><?php echo ucfirst( $type['naam'])?></a></li>
							<?php endforeach ?>

							<!-- Deze foreach moet elke keer gepaste worden in het menu. Dit is om de catogorien te laten zien -->
						</ul>
					</li>
					<li class="nav-item"><a href="workshops.php">Workshops</a></li>
					<li class="nav-item"><a href="gemstones.php">Stenen Overzicht</a></li>
					<li class="nav-item"><a href="about.php">Over Frouks</a></li>
					<li class="nav-item"><a href="events.php">Evenementen</a></li>
					<li class="nav-item"><a href="location.php">Locatie</a></li>
					<li class="nav-item"><a href="contact.php">Contact</a></li>
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