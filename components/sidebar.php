<script src="jquery.js"></script>
<div class="span3 col">
    <div class="block">
        <ul class="nav nav-list" >
            <li class="nav-header">GENERAL &SUB CATEGORIES </li>
            <?php
            $general_query = "SELECT * FROM general_category where general_category_name='woman' && general_category_status='1' ";
            $result1 = mysqli_query($con, $general_query);
            while ($row = mysqli_fetch_array($result1)) {
                ?>
                <li id="hov"><a href="#" ><strong><?= $row['general_category_name'] ?></strong></a>
                    <ul id="sh" style="display: none;
                        width: auto;
                        list-style-type: none;
                        overflow: hidden;" >
                        <?php
                        $sub_query = "SELECT * FROM super_category where  super_category_status='1'  &&  general_category_id=" . $row['general_category_id'];
                        $result2 = mysqli_query($con, $sub_query);
                        while ($row2 = mysqli_fetch_array($result2)) {
                            ?>
                            <li data-animate="fadeInDown"><a  style=" text-decoration:none; display:block;" href="products.php?id=<?= $row2['super_category_id'] ?>" ><?= $row2['super_category_name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
            <?php
            $general_query = "SELECT * FROM general_category where general_category_name='Men' && general_category_status='1' ";
            $result2 = mysqli_query($con, $general_query);
            while ($row1 = mysqli_fetch_array($result2)) {
                ?>
                <li id="ho"><a href="#" ><strong><?= $row1['general_category_name'] ?></strong></a>
                    <ul id="shh" style="display: none" >
                        <?php
                        $sub_query = "SELECT * FROM super_category where  super_category_status='1'  &&  general_category_id=" . $row1['general_category_id'];
                        $result3 = mysqli_query($con, $sub_query);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            ?>
                            <li data-animate="fadeInDown"><a href="products.php?id=<?= $row3['super_category_id'] ?>" ><?= $row3['super_category_name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
            <?php
            $general_query = "SELECT * FROM general_category where general_category_name='sport' && general_category_status='1' ";
            $result2 = mysqli_query($con, $general_query);
            while ($row1 = mysqli_fetch_array($result2)) {
                ?>
                <li id="hoo"><a href="#" ><strong><?= $row1['general_category_name'] ?></strong></a>
                    <ul id="shhs" style="display: none" >
                        <?php
                        $sub_query = "SELECT * FROM super_category where  super_category_status='1'  && general_category_id=" . $row1['general_category_id'];
                        $result3 = mysqli_query($con, $sub_query);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            ?>
                            <li data-animate="fadeInDown"><a href="products.php?id=<?= $row3['super_category_id'] ?>" ><?= $row3['super_category_name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
            <?php
            $general_query = "SELECT * FROM general_category where general_category_name='HangBag' && general_category_status='1' ";
            $result2 = mysqli_query($con, $general_query);
            while ($row1 = mysqli_fetch_array($result2)) {
                ?>
                <li id="hang"><a href="#" ><strong><?= $row1['general_category_name'] ?></strong></a>
                    <ul id="bang" style="display: none" >
                        <?php
                        $sub_query = "SELECT * FROM super_category where  super_category_status='1'  && general_category_id=" . $row1['general_category_id'];
                        $result3 = mysqli_query($con, $sub_query);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            ?>
                            <li data-animate="fadeInDown"><a href="products.php?id=<?= $row3['super_category_id'] ?>" ><?= $row3['super_category_name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
            <?php
            $general_query = "SELECT * FROM general_category where general_category_name='Best seller' && general_category_status='1' ";
            $result2 = mysqli_query($con, $general_query);
            while ($row1 = mysqli_fetch_array($result2)) {
                ?>
                <li id="hoooo"><a href="#" ><strong><?= $row1['general_category_name'] ?></strong></a>
                    <ul id="shhsss" style="display: none" >
                        <?php
                        $sub_query = "SELECT * FROM super_category where  super_category_status='1'  && general_category_id=" . $row1['general_category_id'];
                        $result3 = mysqli_query($con, $sub_query);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            ?>
                            <li data-animate="fadeInDown"><a href="products.php?id=<?= $row3['super_category_id'] ?>" ><?= $row3['super_category_name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
            <?php
            $general_query = "SELECT * FROM general_category where general_category_name='Top Seller' && general_category_status='1' ";
            $result2 = mysqli_query($con, $general_query);
            while ($row1 = mysqli_fetch_array($result2)) {
                ?>
                <li id="hooooo"><a href="#" ><strong><?= $row1['general_category_name'] ?></strong></a>
                    <ul id="shhssss" style="display: none" >
                        <?php
                        $sub_query = "SELECT * FROM super_category where super_category_status='1' &&  general_category_id=" . $row1['general_category_id'];
                        $result3 = mysqli_query($con, $sub_query);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            ?>
                            <li data-animate="fadeInDown"><a href="products.php?id=<?= $row3['super_category_id'] ?>" ><?= $row3['super_category_name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
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

                                <?php
                                $product = "Select * from product where product_name='medicines' LIMIT 4 OFFSET 0";
                                $results = mysqli_query($con,$product);
                                $row4 = mysqli_fetch_array($results);


                                ?>  



                              <a href="product_detail.php?p_id=<?= $row4['product_id'] ?>&sup_id=<?= $_GET['id'] ?>"><img alt="" src="<?= $row4['product_img1'] ?>"></a><br/>
                                        <a href="product_detail.php?p_id=<?= $row8['product_id'] ?>&sup_id=<?= $_GET['id'] ?>" class="title"><?= $row4['product_name'] ?></a><br/>
                                        <a href="#" class="category">FRIENDz</a>
                                        <p><b>Medicine Name :  <?= $row4["medicine_name"] ?> </b></p>
                                        <p><b>Quantity :  <?= $row4["qty"] ?> </b></p>
                                        <p class="price">$<?= $row4['price'] ?></p>


                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails listing-products">
                        <li class="span3">
                            <div class="product-box">

                                <?php
                                $product = "Select * from product where product_name='medicines' LIMIT 4 OFFSET 5";
                                $results = mysqli_query($con,$product);
                                $row4 = mysqli_fetch_array($results);


                                ?>  



                              <a href="product_detail.php?p_id=<?= $row4['product_id'] ?>&sup_id=<?= $_GET['id'] ?>"><img alt="" src="<?= $row4['product_img1'] ?>"></a><br/>
                                        <a href="product_detail.php?p_id=<?= $row8['product_id'] ?>&sup_id=<?= $_GET['id'] ?>" class="title"><?= $row4['product_name'] ?></a><br/>
                                        <a href="#" class="category">FRIENDz</a>
                                        <p><b>Medicine Name :  <?= $row4["medicine_name"] ?> </b></p>
                                        <p><b>Quantity :  <?= $row4["qty"] ?> </b></p>
                                        <p class="price">$<?= $row4['price'] ?></p>


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>