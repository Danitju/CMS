<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con, '24994_db');

    $result_per_page = 10;

    $sql = "SELECT * FROM images";
    $result = mysqli_query($con,$sql);
    $number_of_results = mysqli_num_rows($result);

    // while ($row = mysqli_fetch_array($result)) {
    //     echo $row['image_id'] . ' ' . $row['location'] . '<br>';
    // }

    $number_of_pages = ceil($number_of_results/$result_per_page);

    if (!isset($_GET['page'])){
        $page = 1;        
    } else{
        $page = $_GET['page'];
    }

    echo $this_page_first_result = ($page-1)*$result_per_page;

    $sql = "SELECT * from images LIMIT " . $this_page_first_result . ',' . $result_per_page;
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($result)){
        echo $row['image_id'] . ' ' . $row['location'] . '<br>';
    }


    for ($page=1;$page<=$number_of_pages;$page++) {
        echo '<a href="test.php?page=' . $page . '">' . $page . '</a>';
    }

?>
</body>
</html>