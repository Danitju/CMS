<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>badmemes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="cms.css" />
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

</head>
<body>
<h1 class="title1">Frouks</h1>
<div class="upload">
</div>
<?php 
$mysqli = new mysqli('localhost', 'root', 'root', '24994_db') or die ('Error connecting');
$query = "SELECT location, title, description FROM images ORDER BY image_id DESC";
$stmt = $mysqli->prepare($query) or die ('Error preparing');
$stmt->bind_result($location, $title,$description) or die ('Error binding results');
$stmt->execute() or die ('Error executing');

echo '<div class="main">';
echo '<section>';
while ($succes = $stmt->fetch()){
    
    echo '<div class="grid-container grid-columns-three">';
    echo '<img class="thumbnail" src="' . $location . '" />';
    // echo ' ' . $title . '<br>';
    // echo ' ' . $description . '<br>'; 
    echo '</div>';

  

}
echo '</section>';
echo '</div>';
?>
</body>
