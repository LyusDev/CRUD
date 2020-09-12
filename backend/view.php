<?php
include "dbconnection.php";

$query = $connection->query("select * from tbl_product");

if ($query->num_rows > 0) {
    $i = 1;
    while ($row = $query->fetch_assoc()) {
?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['Product_ID'] ?></td>
            <td><?= $row['Name'] ?></td>
            <td><?= $row['Price'] ?></td>
            <td><?= $row['Description'] ?></td>
            <td class="d-flex">
                <form method="POST"><button type="button" class="updatee btn btn-primary" data-id="<?= $row['Product_ID']; ?>">Update</button></form>
                <form method="POST"><button type="button" class="deletee btn btn-danger" data-id="<?= $row['Product_ID']; ?>">Delete</button></form>
            </td>

        </tr>
<?php
    }
}
?>