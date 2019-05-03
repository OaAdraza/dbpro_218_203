<?php

session_start();
if(!isset($_SESSION["USERID"])){
    
    ?>
    <script type="text/javascript">
    window.location="index.php";
    </script>
    
    <?php
    
}

require_once 'components/connection.php';
if (isset($_POST["del"])) {
    if (isset($_SESSION["USERID"])) {
        $query43 = "DELETE FROM cart WHERE product_id='{$_POST['product_id']}' and user_id = '$_SESSION[USERID]' LIMIT 1";
        $res = mysqli_query($con, $query43);
    }
}
//UPDATE `cart` SET`quantity`=[value-5] WHERE 1
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ecoomerece shoping site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>

        <!-- global styles -->
        <link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- scripts -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="themes/js/superfish.js"></script>
        <script src="themes/js/jquery.scrolltotop.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="themes/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        require_once 'components/header.php';
        ?>


        <section class="header_text sub">
            <img class="pageBanner" src="themes/images/Banner.jpg" alt="New products" >
            <h4><span>Shopping Cart</span></h4>
        </section>
        <section class="main-content">
            <div class="row">
                <div class="span9">
                    <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                    <div class="table-responsive">

                        <table class="table table-striped table-hover table-sm">
                            <caption>List of product added in cart</caption>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th >Remove</th>
                                    <th>Image</th>
                                    <th>Product Name</th>

                                    <th>Unit Price</th>

                                    <th>quantity <span style="padding: 10px">  Update</span></th>
                                    <th>Total</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $query12 = "select * from cart where status= 0";
                                $result12 = mysqli_query($con, $query12);
                                ?><tr>
                                    <?php
                                    $sr = 1;
                                    $total = 0;
                                    $g_total = 0;
                                    $btn = 0;
                                    while ($row12 = mysqli_fetch_array($result12)) {


                                        $total += $row12['quantity'] * $row12['price'];
                                        $g_total += $total;
                                        $btn = $btn + 1;
                                        ?>
                                        <td><b><?php echo $sr; ?></b></td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name='product_id' id='product_id' value="<?= $row12['product_id'] ?>" />
                                                <input type="submit" class="btn btn-default btn-sm  mt-3" name="del" id="del" value="Delete">

                                            </form>
                                        </td>
                                        <td><form > <input style="width: 70%" type="image" src="<?= $row12['img'] ?>"></form></td>
                                        <td ><?= $row12['product_name'] ?></td>
                                        <td><?= $row12['price'] ?></td>


                                        <td> <form method="post">
                                                <input type="text" style="width: 30%" name="quantity" id="quantity" value="<?= $row12['quantity'] ?>">
                                                <input type="hidden" name='product_id' id='product_' value="<?= $row12['product_id'] ?>" />

                                                <input type="submit" class="btn btn-default btn-sm  mt-3" name="update_record" id="update_record" value="Update"></form></td>
                                        <?php
                                        if (isset($_POST['update_record'])) {
                                            $query = "select * from product WHERE  product_id='{$_POST['product_id']}' ";
                                            $reuslt = mysqli_query($con, $query);
                                            $row = mysqli_fetch_array($reuslt);
                                            $qty = $row['qty'];
                                            if ($qty < $_REQUEST['quantity'] || $_REQUEST["quantity"] < 0) {
                                                ?>
                                        <script type="text/javascript">
                                            alert("You enter more than available quantity");
                                        </script>

                                        <?php
                                    } else {
                                        $query39 = "UPDATE `cart` SET   `quantity`= ' " . $_REQUEST['quantity'] . " ' WHERE  product_id='{$_POST['product_id']}' ";
                                        //die($query39);
                                        $result = mysqli_query($con, $query39);
                                        //die($result);
                                        header('location:cart.php');
                                    }
                                }
                                ?>
                                <td><?php echo $total ?></td>

                                </tr>

                                <?php
                                $sr = $sr + 1;
                            }
                            ?>


                            </tbody>

                        </table>
                    </div>
                    <hr>
                    <p class="cart-total right">
                    <h6>  <strong>Total   :</strong><?php echo $g_total ?></h6><br>
                    <hr/>
                    <?php
					 $q = "Select * from cart where status = 0";
					  $r = mysqli_query($con, $q);
					  $rr = mysqli_fetch_array($r);
                    if ($btn > 0) {
                        ?>
                        <button class="btn btn-inverse" type="submit" id="checkout" name="checkout">Home Delivery</button>
                        <a href="payment.php?p_id=<?php echo $rr['product_id'] ?>" class="btn btn-inverse"  id="online" name="online">online Payment</a>
                        <?php }
                    ?>
                </div>

                <?php
                include 'components/sidebar.php';
                ?>
            </div>
        </div>
    </section>

    <?php
    require_once 'components/footer.php';
    ?>

</body>

</html>