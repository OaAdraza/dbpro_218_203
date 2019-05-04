<?php
session_start();
require_once 'components/connection.php';
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
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
        <?php
        require_once 'components/header.php';
        ?>

        <section  class="homepage-slider" id="home-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="themes/images/banner.jpg" alt="" />
                    </li>
                    <li>
                        <img src="themes/images/img13.jpg" alt="" />
                        <div class="intro">
                            <h1>Mid season sale</h1>
                            <p><span>Up to 50% Off</span></p>
                            <p><span>On selected items online and in stores</span></p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="main-content">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">
                                <span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
                                <span class="pull-right">
                                    <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                                </span>
                            </h4>
                            <div id="myCarousel" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            <?php
                                            $query34 = "Select * from product where product_name='medicines' LIMIT 4 OFFSET 0";
                                            $result = mysqli_query($con, $query34);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>


                                                        <p><a href="product_detail.php?p_id=<?= $row['product_id'] ?>"><img src="<?= $row['product_img1'] ?>" alt="" /></a></p>
                                                        <p class="title"><?= $row['product_name'] ?></p>
                                                        <p> <b>product name: <?= $row['medicine_name'] ?></b></p>
                                                        <p> <b>Quantity: <?= $row['qty'] ?></b></p>
                                                        <p class="price">$<?= $row['price'] ?></p>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                            <?php
                                            $query39 = "Select * from product where product_name='medicines' LIMIT 4 OFFSET 5";
                                            $result44 = mysqli_query($con, $query39);
                                            while ($row11 = mysqli_fetch_array($result44)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>


                                                        <p><a href="product_detail.php?p_id=<?= $row11['product_id'] ?>"><img src="<?= $row11['product_img1'] ?>" alt="" /></a></p>
                                                        <p class="title"><?= $row11['product_name'] ?></p>
                                                        <p> <b>product name: <?= $row['medicine_name'] ?></b></p>
                                                        <p> <b>Quantity: <?= $row11['qty'] ?></b></p>
                                                        <p class="price">$<?= $row11['price'] ?></p>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </li>
                                            <!--  <li class="span3">
                                                  <div class="product-box">
                                                      <span class="sale_tag"></span>
                                                      <p><a href="product_detail.php"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
                                                      <a href="product_detail.php" class="title">Quis nostrud exerci tation</a><br/>
                                                      <a href="products.php" class="category">Quis nostrud</a>
                                                      <p class="price">$32.50</p>
                                                  </div>
                                              </li>
                                              <li class="span3">
                                                  <div class="product-box">
                                                      <p><a href="product_detail.php"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
                                                      <a href="product_detail.php" class="title">Know exactly turned</a><br/>
                                                      <a href="products.php" class="category">Quis nostrud</a>
                                                      <p class="price">$14.20</p>
                                                  </div>
                                              </li>
                                              <li class="span3">
                                                  <div class="product-box">
                                                      <p><a href="product_detail.php"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
                                                      <a href="product_detail.php" class="title">You think fast</a><br/>
                                                      <a href="products.php" class="category">World once</a>
                                                      <p class="price">$31.45</p>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>'

                                      <div class="item">
                                          <ul class="thumbnails">
                                              <li class="span3">
                                                  <div class="product-box">
                                                      <p><a href="product_detail.html"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
                                                      <a href="product_detail.html" class="title">Know exactly</a><br/>
                                                      <a href="products.php" class="category">Quis nostrud</a>
                                                      <p class="price">$22.30</p>
                                                  </div>
                                              </li>
                                              <li class="span3">
                                                  <div class="product-box">
                                                      <p><a href="product_detail.php"><img src="themes/images/ladies/6.jpg" alt="" /></a></p>
                                                      <a href="product_detail.php" class="title">Ut wisi enim ad</a><br/>
                                                      <a href="products.php" class="category">Commodo consequat</a>
                                                      <p class="price">$40.25</p>
                                                  </div>
                                              </li>
                                              <li class="span3">
                                                  <div class="product-box">
                                                      <p><a href="product_detail.php"><img src="themes/images/ladies/7.jpg" alt="" /></a></p>
                                                      <a href="product_detail.php" class="title">You think water</a><br/>
                                                      <a href="products.php" class="category">World once</a>
                                                      <p class="price">$10.45</p>
                                                  </div>
                                              </li>
                                              <li class="span3">
                                                  <div class="product-box">
                                                      <p><a href="product_detail.php"><img src="themes/images/ladies/8.jpg" alt="" /></a></p>
                                                      <a href="product_detail.php" class="title">Quis nostrud exerci</a><br/>
                                                      <a href="products.php" class="category">Quis nostrud</a>
                                                      <p class="price">$35.50</p>
                                                  </div>
                                              </li>-->
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                            <?php
                                            $query3 = "Select * from product where product_name='medicines' LIMIT 4 OFFSET 10";
                                            $result4 = mysqli_query($con, $query3);
                                            while ($row1 = mysqli_fetch_array($result4)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>


                                                        <p><a href="product_detail.php?p_id=<?= $row1['product_id'] ?>"><img src="<?= $row1['product_img1'] ?>" alt="" /></a></p>
                                                        <p class="title"><?= $row1['product_name'] ?></p>
                                                        <p> <b>product name: <?= $row['medicine_name'] ?></b></p>
                                                        <p> <b>Quantity: <?= $row1['qty'] ?></b></p>
                                                        <p class="price">$<?= $row1['price'] ?></p>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">
                                <span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
                                <span class="pull-right">
                                    <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                                </span>
                            </h4>
                            <div id="myCarousel-2" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            <?php
                                            $query8 = "Select * from product where product_name='other Product' LIMIT 4 OFFSET 1";
                                            $result8 = mysqli_query($con, $query8);
                                            while ($row8 = mysqli_fetch_array($result8)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="product_detail.php?p_id=<?= $row8['product_id'] ?>"><img src="<?= $row8['product_img1'] ?>" alt="" /></a></p>
                                                        <p class="title"><?= $row8['product_name'] ?></p>
                                                        <p> <b>product name: <?= $row['medicine_name'] ?></b></p>
                                                        <p> <b>Quantity: <?= $row8['qty'] ?></b></p>
                                                        <p class="price">$<?= $row8['price'] ?></p>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </li>
                                            <!--<li class="span3">
                                                <div class="product-box">
                                                    <p><a href="product_detail.html"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
                                                    <a href="product_detail.html" class="title">Know exactly</a><br/>
                                                    <a href="products.php" class="category">Quis nostrud</a>
                                                    <p class="price">$22.30</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p><a href="product_detail.html"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
                                                    <a href="product_detail.html" class="title">Know exactly</a><br/>
                                                    <a href="products.php" class="category">Quis nostrud</a>
                                                    <p class="price">$22.30</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p><a href="product_detail.html"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
                                                    <a href="product_detail.html" class="title">Know exactly</a><br/>
                                                    <a href="products.php" class="category">Quis nostrud</a>
                                                    <p class="price">$22.30</p>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware4.jpg" alt="" /></a></p>
                                                    <a href="product_detail.php" class="title">Know exactly</a><br/>
                                                    <a href="products.php" class="category">Quis nostrud</a>
                                                    <p class="price">$45.50</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware3.jpg" alt="" /></a></p>
                                                    <a href="product_detail.php" class="title">Ut wisi enim ad</a><br/>
                                                    <a href="products.php" class="category">Commodo consequat</a>
                                                    <p class="price">$33.50</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
                                                    <a href="product_detail.php" class="title">You think water</a><br/>
                                                    <a href="products.php" class="category">World once</a>
                                                    <p class="price">$45.30</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
                                                    <a href="product_detail.php" class="title">Quis nostrud exerci</a><br/>
                                                    <a href="products.php" class="category">Quis nostrud</a>
                                                    <p class="price">$25.20</p>
                                                </div>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                            <?php
                                            $query5 = "Select * from product where  product_name='other Product' LIMIT 4 OFFSET 14";
                                            $result5 = mysqli_query($con, $query5);
                                            while ($row5 = mysqli_fetch_array($result5)) {
                                                ?>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="product_detail.php?p_id=<?= $row5['product_id'] ?>"><img src="<?= $row5['product_img1'] ?>" alt="" /></a></p>
                                                        <p class="title"><?= $row5['product_name'] ?></p>
                                                        <p> <b>product name: <?= $row['medicine_name'] ?></b></p>
                                                        <p> <b>Quantity: <?= $row5['qty'] ?></b></p>
                                                        <p class="price">$<?= $row5['price'] ?></p>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </li>



                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row feature_box">
                        <div class="span4">
                            <div class="service">
                                <div class="responsive">
                                    <img src="themes/images/feature_img_2.png" alt="" />
                                    <h4>MODERN <strong>DESIGN</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="customize">
                                    <img src="themes/images/feature_img_1.png" alt="" />
                                    <h4>FREE <strong>SHIPPING</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="support">
                                    <img src="themes/images/feature_img_3.png" alt="" />
                                    <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our_client">
            <h4 class="title"><span class="text">Manufactures</span></h4>
            <div class="row">
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/14.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/35.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/1.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/2.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/3.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="themes/images/clients/4.png"></a>
                </div>
            </div>
        </section>
        <?php
        require_once 'components/footer.php';
        ?>
    </body>
</html>