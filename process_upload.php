<?php

require "include/db.php";
$db=dbConnect();




//image in de juiste map zetten
$temp_location = $_FILES['myfile']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['myfile']['name'];
$mime = mime_content_type($temp_location); 
if(
    substr($mime,0,5) !== 'image'
){
    echo 'Je mag alleen plaatjes uploaden.'; exit;
}
move_uploaded_file($temp_location, $target_location) or die ('Error moving file.');


$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$title = htmlentities($title,ENT_QUOTES,'utf-8');
$description = htmlentities($description,ENT_QUOTES,'utf-8');
$price = htmlentities($price,ENT_QUOTES,'utf-8');


insert_product($target_location,$title,$description,$price,$db);


header('Location: welkom.php');

?>