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
if (isset($_REQUEST['update_record'])) {
    $query39 = "UPDATE `cart` SET   `quantity`= ' " . $_REQUEST['quantity'] . " ' WHERE product_id=" . $_GET['id'];
    //die($query39);
    mysqli_query($con, $query39);
    header('location:cart.php');
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
            $query111 = "SELECT * FROM cart where product_id=" . $_GET['p_id'];
            $result = mysqli_query($con, $query111);
            $row = mysqli_fetch_array($result);
            ?>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span4">
                            <a  class="thumbnail" data-fancybox-group="group1" ><img alt="" src="<?= $row['img'] ?>"></a>
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
                                <input type="text" class="span1" placeholder="1" name="quantity" id="quantity" value="<?php $row['quantity'] ?>">
                                <input class="btn btn-inverse" type="submit"  name="update_record" id="update_record" value="update_record" >
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span9">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home"></div>
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
                                            $row = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM product"));

                                            $query34 = "SELECT * FROM product where super_category_id=" . $row['super_category_id'];
//                                            die($query34);
                                            $result4 = mysqli_query($con, $query34);
                                            while ($row90 = mysqli_fetch_array($result4)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <a href="product_detail.html"><img alt="" src="<?= $row90['product_img1'] ?>"></a><br/>
                                                        <a href="product_detail.html" class="title"><?= $row90['product_name'] ?></a><br/>
                                                        <a href="#" class="category">Suspendisse aliquet</a>
                                                        <p class="price">$<?= $row90['price'] ?></p>
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