
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="eg. Bridal dress">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <li> <a href="index.php">Home</a></li>
                    <?php if (isset($_SESSION['USERID'])) {
                        ?>
                        <li><a href="cart.php">Your Cart
                                <?php
                                $query88 = "SELECT COUNT(cart_id) FROM `cart` WHERE status=0 && user_id=" . $_SESSION['USERID'];
                                $result88 = mysqli_query($con, $query88);
                                $row88 = mysqli_fetch_array($result88);
//                                var_dump($row88);
                                echo'(' . $row88['COUNT(cart_id)'] . ' Items)';
                                ?>
                            </a></li>
                    <?php }
                    ?>
                    <?php
                    if (isset($_SESSION['USERID'])) {
                        ?>
                        <li><a href="logout.php">Logout</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="register.php">Login</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>

                    <?php
                    $general_query = "SELECT * FROM general_category where general_category_status='1' ";
                    $result17 = mysqli_query($con, $general_query);
                    while ($row23 = mysqli_fetch_array($result17)) {
                        ?>
                        <li>
                            <a href=" " ><?= $row23['general_category_name'] ?></a>


                            <?php
                            $sub_query = "SELECT * FROM super_category where super_category_status='1' && general_category_id=" . $row23['general_category_id'];
                            $result27 = mysqli_query($con, $sub_query);
                            ?>
                            <ul>

                                <?php
                                while ($row27 = mysqli_fetch_array($result27)) {
                                    ?>
                                    <li>
                                        <a href="products.php?id=<?= $row27['super_category_id'] ?>">  <?= $row27['super_category_name'] ?></a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>

                            <?php
                        }
                        ?>
                    </li>
                </ul>
            </nav>
        </div>
    </section>