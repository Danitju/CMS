<?php
function dbConnect(){
    $mysqli = new mysqli('localhost', 'root', 'root', '24994_db') or die ('Error connecting');
    return $mysqli;
}

function get_product($productid,$db){
    $query = "SELECT * FROM images WHERE image_id=?";
    $stmt = $db->prepare($query) or die ('Error preparin 1');
    $stmt->bind_param('i',$productid) or die ('Error binding params');
    $stmt->execute() or die ('Error inserting image in database');
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    $stmt->close();
    return $row;

}

function insert_product($target_location,$title,$description,$price,$db){
    $query = "INSERT INTO images VALUES (0,?,?,?,?)";
    $stmt = $db->prepare($query) or die ('Error preparin 1');
    $stmt->bind_param('ssss',$target_location,$title,$description,$price) or die ('Error binding params');
    $stmt->execute() or die ('Error inserting image in database');
    $stmt->close();
}

function get_product_type($type,$db){
    $query = "SELECT location, title,image_id,description,type FROM images WHERE type=? ORDER BY image_id DESC";
$stmt = $db->prepare($query) or die ('Error preparing');
$stmt->bind_param('s',$type) or die ('Error binding params');
$stmt->bind_result($location, $title,$image_id,$description,$type) or die ('Error binding results');
$stmt->execute() or die ('Error executing');
$res = $stmt->get_result();
$products= [];
while ($row = $res->fetch_assoc()){
 $products[] = $row;
}
$stmt->close();
return $products;
}