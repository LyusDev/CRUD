<?php

include "../dbconnection.php";

$prod_id = $connection->insert_id;
$prod_name = $_POST['prod_name'];
$prod_price = $_POST['prod_price'];
$prod_desc = $_POST['prod_desc'];
$prod_qty = "";
$prod_image = "";

$sql = "INSERT INTO tbl_product values('$prod_id', '$prod_name', '$prod_price', '$prod_desc', '$prod_qty','$prod_image')";


if ($connection->query($sql) === TRUE) {
    echo json_encode(array("statusCode" => 200));
    
} else {
    echo json_encode(array("statusCode" => 201));
}
mysqli_close($connection);
