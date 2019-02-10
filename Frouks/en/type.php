<?php
require "include/db.php";
$db=dbConnect();
$type_id = $_GET['type_id'];
$products = get_product_type($type_id,$db);
$productid=$_GET['product_id'];
$types=get_product_types($db);

?>

<!DOCTYPE html><!--HEADER-->
<html><!--HOMEPAGE-->
	<head>
	<link rel="stylesheet" href="../styles/styleGrid.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link rel="stylesheet" href="../styles/style.css">
		 <link rel="stylesheet" href="../styles/product_page.css">
		<link rel="stylesheet" href="../styles/responsive.css">
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
		</header><!--END HEADER-->

<main>
<section>
<div class="grid-container grid-columns-three">
<?php foreach ($products as $product):?>
    <a href="product.php?product_id=<?php echo $product['image_id']?>"> <img class="thumbnail" src="<?php echo $product['location'] ?>"></a>
<?php endforeach; ?>
</div>
</section>
</main>
<script src="scripts/script.js"></script>
	</body>
</html>
