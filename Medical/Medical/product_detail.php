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
if (isset($_REQUEST['add_product'])) {
    $query = "select * from product where product_id=" . $_GET['p_id'];
    $reuslt = mysqli_query($con, $query);
    $row = mysqli_fetch_array($reuslt);
    $qty = $row['qty'];
    if (isset($_SESSION['USERID'])) {
        $query2 = "select max(`checkout_id`) from check_out";
        $result1 = mysqli_query($con, $query2);
        $row1 = mysqli_fetch_array($result1);
        $invoice = $row1['max(`checkout_id`)'];
        $invoice++;

        $query3 = "SELECT `product_id`,`invoice_id` FROM cart where product_id=" . $_GET['p_id'] . " && invoice_id=" . $invoice;
        $result2 = mysqli_query($con, $query3);
        if (mysqli_num_rows($result2) > 0) {
            die('item alreaddy added');
        } else if ($qty < $_REQUEST['quanty'] || $_REQUEST["quanty"] < 0) {
            ?>
            <script type="text/javascript">
                alert("You enter more than available quantity");
            </script>

            <?php
        } else {
            $query = "select * from product where product_id=" . $_GET['p_id'];

            $reuslt = mysqli_query($con, $query);
            $row = mysqli_fetch_array($reuslt);
            $qty = $row['qty'];

            $query1 = "insert into cart(`product_id`,`product_name`,`img`,`quantity`,`price`,`user_id`,`invoice_id`) values(' " . $row['product_id'] . " ',' " . $row['product_name'] . " ',' " . $row['product_img1'] . " ',' " . $_REQUEST['quanty'] . " ',' " . $row['price'] . " ',' " . $_SESSION['USERID'] . " ',' " . $invoice . " ')";
            $result3 = mysqli_query($con, $query1);
            header("location:cart.php?p_id=" . $row['product_id']);
        }
    } else {
        header("location:register.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap E-commerce Templates</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->

        <!-- bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>

        <!-- global styles -->
        <link href="themes/css/main.css" rel="stylesheet"/>
        <link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>

        <!-- scripts -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="themes/js/superfish.js"></script>
        <script src="themes/js/jquery.scrolltotop.js"></script>
        <script src="themes/js/jquery.fancybox.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        require_once 'components/header.php';
        ?>

        <section class="header_text sub">
            <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
            <h4><span>Product Detail</span></h4>
        </section>
        <section class="main-content">
            <?php
            $query111 = "SELECT * FROM product where product_id=" . $_GET['p_id'];
//  die($query111);
            $result = mysqli_query($con, $query111);
            $row = mysqli_fetch_array($result);
            ?>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span4">
                            <a  class="thumbnail" data-fancybox-group="group1" ><img alt="" src="<?= $row['product_img1'] ?>"></a>
                            <ul class="thumbnails small">
                                <li class="span1">
                                    <a class="thumbnail" data-fancybox-group="group1" ><img src="<?= $row['product_img1'] ?>" alt=""></a>
                                </li>
                                <li class="span1">
                                    <a  class="thumbnail" data-fancybox-group="group1"><img src="<?= $row['product_img2'] ?>" alt=""></a>
                                </li>
                                <li class="span1">
                                    <a  class="thumbnail" data-fancybox-group="group1" ><img src="<?= $row['product_img3'] ?>" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span5">
                            <address>
                                <strong>Brand:</strong> <span>Apple</span><br>
                                <strong>Product Code:</strong> <span>PD-<?= $row['product_id'] ?></span><br>
                                <strong>Availability:</strong> <span><?= $row['status'] == 1 ? 'InStock' : 'Out Of stock' ?></span><br>
                            </address>
                            <h4><strong>Price: $<?= $row['price'] ?></strong></h4>
                        </div>
                        <div class="span5">
                            <form class="form-inline" method="post">
                                <label class="checkbox">
                                    <input type="checkbox" value=""> Option one is this and that
                                </label>
                                <p>&nbsp;</p>
                                <label>Qty:</label>
                                <input type="text" class="span1" placeholder="1" name="quanty" id="quanty" required>
                                <input class="btn btn-inverse" type="submit"  name="add_product" id="add_product" value="Add to cart"  >
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span9">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#home">Description</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home"><?= $row['discription'] ?></div>
                                <div class="tab-pane" id="profile">
                                    <table class="table table-striped shop_attributes">
                                        <tbody>
                                            <tr class="">
                                                <th>Size</th>
                                                <td>Large, Medium, Small, X-Large</td>
                                            </tr>
                                            <tr class="alt">
                                                <th>Colour</th>
                                                <td>Orange, Yellow</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="span9">
                            <br>
                            <h4 class="title">
                                <span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
                                <span class="pull-right">
                                    <a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
                                </span>
                            </h4>
                            <div id="myCarousel-1" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails listing-products">
                                            <?php
// $query34 = "SELECT * FROM product where super_category_id=" . $row['super_category_id'];
                                            $query34 = "SELECT * FROM product where product_id >7 and product_id <11";
//                                            die($query34);
                                            $result4 = mysqli_query($con, $query34);
                                            while ($row90 = mysqli_fetch_array($result4)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <a href="product_detail.php?p_id=<?= $row90['product_id'] ?>&sup_id=<?= $_GET['p_id'] ?>"><img alt="" src="<?= $row90['product_img1'] ?>"></a><br/>
                                                        <a href="product_detail.php?p_id=<?= $row90['product_id'] ?>&sup_id=<?= $_GET['p_id'] ?>" class="title"><?= $row90['product_name'] ?></a><br/>
                                                        <a href="#" class="category">Phasellus consequat</a>
                                                        <p class="price">$<?= $row90['price'] ?></p>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails listing-products">
                                            <?php
// $query34 = "SELECT * FROM product where super_category_id=" . $row['super_category_id'];
                                            $query90 = "SELECT * FROM product where product_id >11 and product_id <16";
//                                            die($query34);
                                            $result90 = mysqli_query($con, $query90);
                                            while ($row91 = mysqli_fetch_array($result90)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <a href="product_detail.php?p_id=<?= $row91['product_id'] ?>&sup_id=<?= $_GET['p_id'] ?>"><img alt="" src="<?= $row91['product_img1'] ?>"></a><br/>
                                                        <a href="product_detail.php?p_id=<?= $row91['product_id'] ?>&sup_id=<?= $_GET['p_id'] ?>" class="title"><?= $row91['product_name'] ?></a><br/>
                                                        <a href="#" class="category">Phasellus consequat</a>
                                                        <p class="price">$<?= $row91['price'] ?></p>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails listing-products">
                                            <?php
// $query34 = "SELECT * FROM product where super_category_id=" . $row['super_category_id'];
                                            $query50 = "SELECT * FROM product where product_id >25 and product_id <30";
//                                            die($query34);
                                            $result50 = mysqli_query($con, $query50);
                                            while ($row51 = mysqli_fetch_array($result50)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <a href="product_detail.php?p_id=<?= $row51['product_id'] ?>&sup_id=<?= $_GET['p_id'] ?>"><img alt="" src="<?= $row51['product_img1'] ?>"></a><br/>
                                                        <a href="product_detail.php?p_id=<?= $row51['product_id'] ?>&sup_id=<?= $_GET['p_id'] ?>" class="title"><?= $row51['product_name'] ?></a><br/>
                                                        <a href="#" class="category">Phasellus consequat</a>
                                                        <p class="price">$<?= $row51['price'] ?></p>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span3 col">
                    <div class="block">
                        <ul class="nav nav-list">
                            <li class="nav-header">SUB CATEGORIES</li>
                            <li><a href="products.html">Nullam semper elementum</a></li>
                            <li class="active"><a href="products.html">Phasellus ultricies</a></li>
                            <li><a href="products.html">Donec laoreet dui</a></li>
                            <li><a href="products.html">Nullam semper elementum</a></li>
                            <li><a href="products.html">Phasellus ultricies</a></li>
                            <li><a href="products.html">Donec laoreet dui</a></li>
                        </ul>
                        <br/>
                        <ul class="nav nav-list below">
                            <li class="nav-header">MANUFACTURES</li>
                            <li><a href="products.html">Adidas</a></li>
                            <li><a href="products.html">Nike</a></li>
                            <li><a href="products.html">Dunlop</a></li>
                            <li><a href="products.html">Yamaha</a></li>
                        </ul>
                    </div>
                    <div class="block">
                        <h4 class="title">
                            <span class="pull-left"><span class="text">Randomize</span></span>
                            <span class="pull-right">
                                <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                            </span>
                        </h4>
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
                                                <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                                <a href="#" class="category">Suspendisse aliquet</a>
                                                <p class="price">$261</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
                                                <a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
                                                <a href="#" class="category">Urna nec lectus mollis</a>
                                                <p class="price">$134</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <h4 class="title"><strong>Best</strong> Seller</h4>
                        <ul class="small-product">
                            <li>
                                <a href="#" title="Praesent tempor sem sodales">
                                    <img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
                                </a>
                                <a href="#">Praesent tempor sem</a>
                            </li>
                            <li>
                                <a href="#" title="Luctus quam ultrices rutrum">
                                    <img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
                                </a>
                                <a href="#">Luctus quam ultrices rutrum</a>
                            </li>
                            <li>
                                <a href="#" title="Fusce id molestie massa">
                                    <img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
                                </a>
                                <a href="#">Fusce id molestie massa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php
        require_once 'components/footer.php';
        ?>
        <script type="text/javascript">
                function cart(id) {
                    windows.location = "product_detail.php?id" + id;
                }
        </script>
    </body>

</html>