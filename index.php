<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
    <script src="index.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />
    <script src="js/store.js"></script>
    <script src="js/delete.js"></script>
    <script src="js/update.js"></script>
</head>

<body>
    <div class="container">
        <div class="row bg-dark mb-3 p-2">
            <div class="col-lg-6">
                <h1 class="text-white">LyusDev JQuery Project</h1>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertModal">
                    Add a Product
                </button>
            </div>
        </div>
        <table id="table_id" class="table table-striped table-responsive-sm">
            <thead>
                <tr>
                    <th>Count</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include "backend/view.php" ?>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <label for="prod_name">Product Name:</label>
                            <input type="textbox" class="form-control" id="prod_name" autofocus />
                            <br /><br />
                            <label for="prod_price">Product Price:</label>
                            <input type="textbox" class="form-control" id="prod_price" />
                            <br /><br />
                            <label for="prod_desc">Product Description:</label>
                            <br />
                            <textarea rows="5" cols="50" class="form-control" id="prod_desc"></textarea>
                            <br /><br />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="save">Save</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <label for="prod_name">Product Name:</label>
                            <input type="textbox" class="form-control" id="up_prod_name" autofocus />
                            <br /><br />
                            <label for="prod_price">Product Price:</label>
                            <input type="textbox" class="form-control" id="up_prod_price" />
                            <br /><br />
                            <label for="prod_desc">Product Description:</label>
                            <br />
                            <textarea rows="5" cols="50" class="form-control" id="up_prod_desc"></textarea>
                            <input type="hidden" name="id_modal" id="id_modal" class="form-control-sm">
                            <br /><br />
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary updatee">Save changes</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>