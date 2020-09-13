
<?php

include '../dbconnection.php';

$id = $_POST['id'];
$prod_name = $_POST['prod_name'];
$prod_price = $_POST['prod_price'];
$prod_desc = $_POST['prod_desc'];

$sql = "UPDATE tbl_product SET Name = '$prod_name', Price = '$prod_price', Description = '$prod_desc' WHERE Product_ID = $id";


if ($connection->query($sql) === TRUE) {
    echo json_encode(array("statusCode" => 200));
    
} else {
    echo json_encode(array("statusCode" => 201));
}

mysqli_close($connection);