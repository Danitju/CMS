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
						<?php foreach ($types as $type):?>
							<li class="subnav-item" id="rings"><a href="type.php?type_id=<?php echo $type['id']?>"><?php echo ucfirst( $type['naam'])?></a></li>
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
<?php endwhile; 



$con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con, '24994_db');

    $result_per_page = 5;

    $sql = "SELECT * FROM images";
    $result = mysqli_query($con,$sql);
    $number_of_results = mysqli_num_rows($result);

  
    $number_of_pages = ceil($number_of_results/$result_per_page);

    if (!isset($_GET['page'])){
        $page = 1;        
    } else{
        $page = $_GET['page'];
    }

    echo $this_page_first_result = ($page-1)*$result_per_page;

    $sql = "SELECT * from images LIMIT " . $this_page_first_result . ',' . $result_per_page;
    $result = mysqli_query($con, $sql);?>

   <?php while($row =$stmt->fetch()):?>
		<a href="product.php?product_id=<?php echo $image_id?>"> <img class="thumbnail" src="<?php echo $location ?>"></a>
<?php endwhile;


    for ($page=1;$page<=$number_of_pages;$page++) {
        echo '<a href="welkom.php?page=' . $page . '">' . $page . '</a>';
    }

?>
</div>

</section>

</main>
<script src="scripts/script.js"></script>
	</body>
</html>
