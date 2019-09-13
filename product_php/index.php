<?php
include_once("config/database.php");
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
</head>
<body>
<div class="container">

<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-tags"></i>
                View Orders
            </h3>
            <form method="post">
                <button name="insert" class="btn-info">insert new product here</button>
            </form>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th> Product ID</th>
                        <th> Product Name</th>
                        <th> Product Price</th>
                        <th> Product Quantity</th>
                        <th> Product Description</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                        if(isset($_POST["insert"])) {
                            echo "<script>window.open('insert.php','_self')</script>";
                        }
                    ?>
                    <?php


                    $i = 0;
                    $get_products = "select * from product";
                    $run_products = mysqli_query($con, $get_products);

                    while ($row_products = mysqli_fetch_array($run_products)) {

                    $product_id            =   $row_products['product_id'];
                    $product_name          =   $row_products['product_name'];
                    $product_descriptions  =   $row_products['product_description'];
                    $product_price         =   $row_products['product_price'];
                    $product_quantity      =   $row_products['product_quantity'];
                    $i++;

                    ?>
                        <tr>
                            <td> <?php  echo $product_id ; ?>            </td>
                            <td> <?php  echo $product_name; ?>           </td>
                            <td> <?php  echo $product_price; ?>          </td>
                            <td> <?php  echo $product_quantity; ?>       </td>
                            <td> <?php  echo $product_descriptions; ?>   </td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>

