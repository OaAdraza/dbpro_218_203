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
        <section class="header_text sub">
            <img class="pageBanner" src="themes/images/img13.jpg" style="height: 400px;overflow: hidden;position: relative" alt="New products" >
            <h4><span>New products</span></h4>
        </section>
        <section class="main-content">
             <form action="" method="post" name="form1" class="col-md-12">
                            <div>
                            <input type="text" name="t1" class="form-control" placeholder="Enter Medicine Name" style="width: 70%" required="">
                            </div>
                            <br>
                            <div>
                            <input type="submit" name="submit1" value="Search Medicine" class="btn btn-default" style="width: 35%">
                            <button class="btn btn-default" type="button" style="width: 35%"><a href="products.php?id=<?= $_GET['id']?> ">Total Medicine </a></button>
                            </div>
                        </form>
            <div class="row">
                <div class="span9">
                    <ul class="thumbnails listing-products">
                       
                       
                            <?php



                              if (isset($_GET['pageno'])) {
                            $pageno = $_GET['pageno'];
                        } else {
                            $pageno = 1;
                        }




                        if (isset($_POST["submit1"])) {
                            $t1 = trim($_POST['t1']);


                        $no_of_records_per_page = 6;
                        $offset = ($pageno - 1) * $no_of_records_per_page;
                        $id = $_GET['id'];
                        $total_pages_sql = "SELECT COUNT(*) FROM product where super_category_id=$id";
                        $result = mysqli_query($con, $total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);



                            //die($t1);
                            $query23 = "Select * from product where medicine_name  like('%$t1%') LIMIT $offset, $no_of_records_per_page";
                            $result4 = mysqli_query($con, $query23);
                            $num_of_result = 0;
                            if (mysqli_num_rows($result4) > 0) {
                            while ($row18 = mysqli_fetch_array($result4)) {
                                ?>
                                <li class="span3">
                                    <div class="product-box">
                                        <span class="sale_tag"></span>
                                        <a href="product_detail.php?p_id=<?= $row8['product_id'] ?>&sup_id=<?= $_GET['id'] ?>"><img alt="" src="<?= $row18['product_img1'] ?>"></a><br/>
                                        <a href="product_detail.php?p_id=<?= $row8['product_id'] ?>&sup_id=<?= $_GET['id'] ?>" class="title"><?= $row18['product_name'] ?></a><br/>
                                        <a href="#" class="category">FRIENDz</a>
                                        <p><b>Medicine Name :  <?= $row18["medicine_name"] ?> </b></p>
                                        <p><b>Quantity :  <?= $row18["qty"] ?> </b></p>
                                        <p class="price">$<?= $row18['price'] ?></p>

                                    </div>
                                </li>
                                <?php
                                $num_of_result = $num_of_result + 1;
                            }
                        }




                        }



                            else{

                              
                        $no_of_records_per_page = 6;
                        $offset = ($pageno - 1) * $no_of_records_per_page;
                        $id = $_GET['id'];
                        $total_pages_sql = "SELECT COUNT(*) FROM product where super_category_id=$id";
                        $result = mysqli_query($con, $total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);


                        $sql = "SELECT * FROM product where super_category_id=$id LIMIT $offset, $no_of_records_per_page";
                        $result = mysqli_query($con, $sql);
                        $num_of_result = 0;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row8 = mysqli_fetch_array($result)) {
                                ?>
                                <li class="span3">
                                    <div class="product-box">
                                        <span class="sale_tag"></span>
                                        <a href="product_detail.php?p_id=<?= $row8['product_id'] ?>&sup_id=<?= $_GET['id'] ?>"><img alt="" src="<?= $row8['product_img1'] ?>"></a><br/>
                                        <a href="product_detail.php?p_id=<?= $row8['product_id'] ?>&sup_id=<?= $_GET['id'] ?>" class="title"><?= $row8['product_name'] ?></a><br/>
                                        <a href="#" class="category">FRIENDz</a>
                                        <p><b>Medicine Name :  <?= $row8["medicine_name"] ?> </b></p>
                                        <p><b>Quantity :  <?= $row8["qty"] ?> </b></p>
                                        <p class="price">$<?= $row8['price'] ?></p>

                                    </div>
                                </li>
                                <?php
                                $num_of_result = $num_of_result + 1;
                            }
                        }

                            }

                        ?>

                        
                    </ul>
                    <hr>
                    <?php
                    if (mysqli_num_rows($result) == 0) {
                        ?>
                        <h1> sorry, we  have no stocks in this item.</h1>
                        <?php
                    }
                    
					else{?>
                    <div class="pagination pagination-small pagination-centered">
                        <ul class="pagination">
                            <?php
                            $id = $_GET['id'];
                            $sql1 = "SELECT * FROM product where super_category_id=$id ";
                            $result = mysqli_query($con, $sql1);
                            $row = mysqli_fetch_array($result);
                            ?>

                            <li><a href="?pageno=1&id=<?= $row["super_category_id"] ?>">First</a></li>
                            <li class="<?php
                            if ($pageno <= 1) {
                                echo 'disabled';
                            }
                            ?>">
                                <a href="<?php
                                if ($pageno <= 1) {
                                    echo '#';
                                } else {
                                    echo "?pageno=" . ($pageno - 1);
                                }
                                ?>&id=<?= $row["super_category_id"] ?>">Prev</a>
                            </li>
                            <li class="<?php
                            if ($pageno >= $total_pages) {
                                echo 'disabled';
                            }
                            ?>">
                                <a href="<?php
                                if ($pageno >= $total_pages) {
                                    echo '#';
                                } else {
                                    echo "?pageno=" . ($pageno + 1);
                                }
                                ?>&id=<?= $row["super_category_id"] ?>">Next</a>
                            </li>
                            <li><a href="?pageno=<?php echo $total_pages; ?>&id=<?= $row["super_category_id"] ?>">Last</a></li>
                        </ul>
                    </div>
					<?php
					}
					?>
                </div>
                <?php
                include 'components/sidebar.php';
                ?>
            </div>
        </section>
        <?php
        require_once 'components/footer.php';
        ?>
        <script src="themes/js/common.js"></script>
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">

        </script>

    </body>

</html>