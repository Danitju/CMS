<?php


//image in de juiste map zetten
$temp_location = $_FILES['myfile']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['myfile']['name'];

move_uploaded_file($temp_location, $target_location) or die ('Error moving file.');


$title = $_POST['title'];
$description = $_POST['description'];

$title = htmlentities($title,ENT_QUOTES,'utf-8');
$description = htmlentities($description,ENT_QUOTES,'utf-8');


$mysqli = new mysqli('localhost', 'root', 'root', '24994_db') or die ('Error connecting');
$query = "INSERT INTO images VALUES (0,?,?,?)";
$stmt = $mysqli->prepare($query) or die ('Error preparin 1');
$stmt->bind_param('sss',$target_location,$title,$description) or die ('Error binding params');
$stmt->execute() or die ('Error inserting image in database');
$stmt->close();

header('Location: welkom.php');

?>