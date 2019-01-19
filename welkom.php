<!DOCTYPE html><!--HEADER-->
<html><!--HOMEPAGE-->
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styleGrid.css">
		<link rel="stylesheet" href="responsive.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<meta charset="utf-8">
	</head>
	<body>
		<header class="header-main">
			<!--<input class="search" type="text">-->
			<a href="index.html"><img class="logo" src="frouks_logo.svg"></a><!--Link naar de homepage-->
			<nav class="top-nav">
				<div class="menu-button"><i class="fas fa-bars"></i></div>
				<ul>
					<li class="nav-item"><a href="#">Collectie <i class="fas fa-caret-down dropdown"></i></a></li>
					<li class="nav-item"><a href="#">Workshops</a></li>
					<li class="nav-item"><a href="stenen_overzicht.html">Stenen Overzicht</a></li>
					<li class="nav-item"><a href="#">Over Frouks</a></li>
					<li class="nav-item"><a href="#">Evenementen</a></li>
					<li class="nav-item"><a href="#">Locatie</a></li>
					<li class="nav-item"><a href="#">Contact</a></li>
				</ul>
			</nav>
		</header><!--END HEADER-->
<?php 
$mysqli = new mysqli('localhost', 'root', 'root', '24994_db') or die ('Error connecting');
$query = "SELECT location, title,image_id, description FROM images ORDER BY image_id DESC";
$stmt = $mysqli->prepare($query) or die ('Error preparing');
$stmt->bind_result($location, $title,$image_id,$description) or die ('Error binding results');
$stmt->execute() or die ('Error executing');
?>
<main>
<section>
<div class="grid-container grid-columns-three">
<?php while ($succes = $stmt->fetch()):?>
    <a href="product.php?product_id=<?php echo $image_id?>"> <img class="thumbnail" src="<?php echo $location ?>"></a>
<?php endwhile; ?>
</div>
</section>
</main>
<script src="scripts/script.js"></script>
	</body>
</html>
