<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INSERT</title>
</head>

<body>
    <h1>Add a Product</h1>

    <form method="POST" id="fupForm">
        <label for="prod_name">Product Name:</label>
        <input type="textbox" id="prod_name" />
        <br /><br />
        <label for="prod_price">Product Price:</label>
        <input type="textbox" id="prod_price" />
        <br /><br />
        <label for="prod_desc">Product Description:</label>
        <br />
        <textarea rows="10" cols="50" id="prod_desc"></textarea>
        <br /><br />
        <button type="button" id="save">Save</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="../index.js"></script>



</body>

</html>