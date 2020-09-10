<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css" />

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body>
    <table id="table_id" class="display cell-border compact hover order-column row-border stripe">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include "dbconnection.php";

            $query = $connection->query("select * from tbl_product");

            if ($query->num_rows > 0) {

                while ($row = $query->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $row['Product_ID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Price'] . "</td>";
                    echo "<td>" . $row['Description'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>



    <script src="js/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="index.js"></script>


</body>

</html>