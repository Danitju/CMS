<?php
require "include/db.php";
$db = dbConnect();
// extra check toegevoegd: als type_id niet is opgegeven dan standaard op 1 zetten (mag je ook andere van maken natuurlijk)
$type_id = isset($_GET['type_id']) ? (int) $_GET['type_id'] : 1; 

// Hier zet ik alle variabelen voor de pagination
$results_per_page = 1;

//Hier roep ik een nieuwe functie aan die alleen het aantal producten/images telt in de de database, check in db.php
$number_of_pages = count_product_type_pages($type_id, $results_per_page, $db);

// Jouw code die checkt op page number
if (!isset($_GET['page'])) {
	$page = 1;
} else {
	$page = (int) $_GET['page']; // met (int) zet je een variabele om van een string, bijvoorbeeld: "1", naar een integer: 1.
}
// Heb dus twee extra parameters aan de function 'get_product_type' toegevoegd, het paginanummer en het aantal resultaten per pagina
// In die 'get_product_type' functie wordt dus de juiste query gedaan, zodat je die functie EN pagination ook op andere plekken kunt gebruiken...!
// Zo hoef is jouw hele lap code die eerst onderin de pagina stond niet meer nodig, snap je? Ik heb gewoon die ene functie slimmer gemaakt.
$products = get_product_type($type_id, $db, $page, $results_per_page);

//Deze wordt niet gebruikt volgens mij? 
//$productid = $_GET['product_id'];

$types = get_product_types($db);
?>
<!DOCTYPE html><!--HEADER-->
<html><!--HOMEPAGE-->
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../styles/style.css">
		<link rel="stylesheet" href="../styles/styleGrid.css">
		<link rel="stylesheet" href="../styles/responsive.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<meta charset="utf-8">
	</head>
	<body>
	<header class="header-main">
			<div class="lang-settings"> 
				<a href="../en/index.html" id="eng">English</a><!--WIP-->
			</div>
			<div class="search">
				<input type="text" placeholder="Zoeken...">
				<span class="search-button"><i class="fas fa-search"></i></span>
			</div>
			<a href="index.html"><img class="logo" src="../images/frouks_logo.svg"></a><!--Link naar homepage-->
			<nav class="nav-top">
				<span class="menu-button"><i class="fas fa-bars"></i></span>
				<ul>
					<li class="nav-item dropdown"><a href="welkom.php">Collectie <i class="fas fa-caret-down dropdown-icon"></i></a>
						<ul class="subnav">
						<?php foreach ($types as $type) : ?>
							<li class="subnav-item" id="rings"><a href="type.php?type_id=<?php echo $type['id'] ?>"><?php echo ucfirst($type['naam']) ?></a></li>
							<?php endforeach ?>
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
<main>
<section>
	<div class="grid-container grid-columns-three">
	<?php foreach ($products as $product) : ?>
		<a href="product.php?product_id=<?php echo $product['image_id'] ?>"> <img class="thumbnail" src="<?php echo $product['location'] ?>"></a>
	<?php endforeach; ?>

	<?php
	for ($page = 1; $page <= $number_of_pages; $page++) {
		echo '<a href="welkom.php?page=' . $page . '">' . $page . '</a>';
	}
	?>
	</div>
</section>
</main>
<script src="scripts/script.js"></script>
</body>
</html>
