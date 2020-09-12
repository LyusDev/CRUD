<?php

include "../dbconnection.php";



$id = $_POST['id'];





if ($connection->query("DELETE FROM tbl_product WHERE Product_ID = $id") === TRUE) {
    echo json_encode(array("statusCode" => 200));
    
} else {
    echo json_encode(array("statusCode" => 201));
}
mysqli_close($conn);