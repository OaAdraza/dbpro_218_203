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


if (isset($_SESSION['USERID'])) {
    if (isset($_REQUEST['check_out'])) {
        $query2 = "select max(`checkout_id`) from online_checkout";
        $result1 = mysqli_query($con, $query2);
        $row1 = mysqli_fetch_array($result1);
        $invoice = $row1['max(`checkout_id`)'];
        $invoice++;
        $check_out = "INSERT INTO online_checkout( `user_id`, `firstname`, `email`, `card_name`, `card_number`, `expiray_date`, `cvv_number`, `invoice_id`)" . " VALUES(' " . $_SESSION['USERID'] . " ',' " . $_REQUEST['firstname'] . "', ' " . $_REQUEST['email'] . " ',' " . $_REQUEST['card_name'] . " ',' " . $_REQUEST['card_number'] . " ',' " . $_REQUEST['month'] . $_REQUEST['year'] . " ',' " . $_REQUEST['cvv'] . " ' ,' " . $invoice . " ')";
        //die($check_out);
        $result32 = mysqli_query($con, $check_out);
        $query = "SELECT max(`checkout_id`) FROM `online_checkout` ";
        // die($query);
        $get_result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($get_result);
        $invoice_id = $row['max(`checkout_id`)'];
        $update_status = "SELECT `invoice_id`,`status` FROM cart where user_id=" . $_SESSION['USERID'] . " && status=0";
        $update_product_result = mysqli_query($con, $update_status);
        while ($row_product = mysqli_fetch_array($update_product_result)) {
            $update = "UPDATE cart SET status=1";
			$id = $_GET['p_id'];
			$upd = "UPDATE product set $qty= $qty -1 where product_id=$id";
			$ress = mysqli_query($con, $upd);
            $result_update = mysqli_query($con, $update);
        }
        header("location:index.php");

        //die($check_out);
        //$result = mysqli_query($con, $check_out);
        //die($result);
        //$query34 = "SELECT max(`checkout_id`) FROM `check_out` ";
        //die($query34);
        //$get_result = mysqli_query($con, $query34);
        //$row56 = mysqli_fetch_array($get_result);
        //die($row56);
        //$invoice_id = $row56['max(`checkout_id`)'];
        //die($invoice_id);
        //$update_status = "SELECT `invoice_id`,`status` FROM cart where invoice_id=" . $invoice_id . " && status=0";
        //$query = "SELECT max(`checkout_id`) FROM `check_out` ";
        //$get_result = mysqli_query($con, $query);
        //$row77 = mysqli_fetch_array($get_result);
        //$invoice_id = $row77['max(`checkout_id`)'];
        //die($invoice_id);
        //$payment = "UPDATE check_out SET    WHERE user_id=" . $_SESSION['USERID'] . " && checkout_id=" . $invoice_id;
        //$update_payment = mysqli_query($con, $payment);
    }
} else {
    header("location:register.php");
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery.min.js"></script>
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
    </head>
    <body>
        <?php
        require_once 'components/header.php';
        ?>
        <div class="main">
            <h1>Payment Form Widget</h1>
            <div class="content">

                <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });

                </script>
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <div class="pay-tabs">
                            <h2>Select Payment Method</h2>

                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span ><label class="pic4" style="margin-left: 200px"></label><span style="margin-left: 220px">Online CheckOut</span></span></li>

                                <div class="clear"></div>
                            </ul>

                        </div>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="payment-info">
                                    <h3>Personal Information</h3>
                                    <form method="post">
                                        <div class="tab-for">
                                            <h5>FIRST NAME</h5>
                                            <input type="text" value="" name="firstname" id="firstname"  placeholder="Raza">
                                            <span style="display:none;color: red;" id="u_fname"></span>
                                            <span style="display:none;color: red;" id="u_f">*Enter Name</span>
                                            <h5>EMAIL ADDRESS</h5>
                                            <input type="text" value="" name="email" id="email"     placeholder="razakhadim57@gmail.com">
                                            <span style="display:none;color: red;" id="u_email"></span>
                                            <span style="display:none;color: red;" id="u_e">*Enter Valid Email</span>

                                        </div>

                                        <h3 class="pay-title">Credit Card Info</h3>

                                        <div class="tab-for">
                                            <h5>NAME ON CARD</h5>
                                            <input type="text" value="" name="card_name" id="card_name" >
                                            <span style="display:none;color: red;" id="u_card"></span>
                                            <span style="display:none;color: red;" id="u_c">*Enter card name</span>
                                            <h5>CARD NUMBER</h5>
                                            <input class="pay-logo" type="text" placeholder="0000-0000-0000-0000"  name="card_number"  id="card_number" />
                                            <span style="display:none;color: red;" id="u_num"></span>
                                            <span style="display:none;color: red;" id="u_n">*Enter valid 16 digit card number</span>
                                        </div>
                                        <div class="transaction">
                                            <div class="tab-form-left user-form">
                                                <h5>EXPIRATION</h5>
                                                <ul>
                                                    <li>
                                                        <input type="number" class="text_box" min="1"  name="month" id="month" />
                                                        <span style="display:none;color: red;" id="u_m"></span>
                                                        <span style="display:none;color: red;" id="u_mo"></span>
                                                    </li>
                                                    <li>
                                                        <input type="number" class="text_box"  min="1" name="year" id="year"  />
                                                        <span style="display:none;color: red; " id="u_y"></span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="tab-form-right user-form-rt">
                                                <h5>CVV NUMBER</h5>
                                                <input type="password" name="cvv" id="cvv" />
                                                <span style="display:none;color: red;" id="u_cvv"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <button  class="btn btn-inverse large" name="check_out" id="check_out" type="submit" onclick="return verified()" >Confrim Order</button>
                                    </form>
                                    <div class="single-bottom">
                                        <ul>
                                            <li>
                                                <input type="checkbox"  id="brand" value="">
                                                <label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function verified()
            {
                var a, c, d, e, f, g, i, t, temp;
                temp = 0;
                a = document.getElementById("firstname").value;
                a = a.trim();
                c = document.getElementById("email").value;
                c = c.trim();
                d = document.getElementById("card_name").value;
                d = d.trim();
                e = document.getElementById("card_number").value;
                e = e.trim();
                f = document.getElementById("month").value;
                f = f.trim();

                g = document.getElementById("year").value;
                g = g.trim();

                i = document.getElementById("cvv").value;
                i = i.trim();
                t = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

                document.getElementById("firstname").style.borderColor = "#DBDBDB";
                var co = document.getElementById("u_fname");
                co.style.display = "none";
                var coo = document.getElementById("u_f");
                coo.style.display = "none";
                document.getElementById("email").style.borderColor = "#DBDBDB";
                var dd = document.getElementById("u_email");
                dd.style.display = "none";
                var ddd = document.getElementById("u_e");
                ddd.style.display = "none";
                document.getElementById("card_name").style.borderColor = "#DBDBDB";
                var ee = document.getElementById("u_card");
                ee.style.display = "none";
                var eee = document.getElementById("u_c");
                eee.style.display = "none";
                document.getElementById("card_number").style.borderColor = "#DBDBDB";
                var ff = document.getElementById("u_num");
                ff.style.display = "none";
                var fff = document.getElementById("u_n");
                fff.style.display = "none";
                document.getElementById("month").style.borderColor = "#DBDBDB";
                var gg = document.getElementById("u_m");
                gg.style.display = "none";
                var ggg = document.getElementById("u_mo");
                ggg.style.display = "none";

                document.getElementById("year").style.borderColor = "#DBDBDB";
                var hh = document.getElementById("u_y");
                hh.style.display = "none";

                document.getElementById("cvv").style.borderColor = "#DBDBDB";
                var jj = document.getElementById("u_cvv");
                jj.style.display = "none";

                if (a == "")
                {

                    document.getElementById("firstname").style.borderColor = "red";
                    co.style.display = "";
                    temp++;
                } else if (isNaN(a) == false)
                {
                    co.style.display = "none";
                    coo.style.display = "";
                    document.getElementById("firstname").style.borderColor = "red";
                    temp++;
                }
                if (c == "")
                {

                    document.getElementById("email").style.borderColor = "red";
                    dd.style.display = "";
                    temp++;
                } else if ((!t.test(email.value))) {
                    dd.style.display = "none";
                    ddd.style.display = "";
                    document.getElementById("email").style.borderColor = "red";
                    temp++;
                }
                if (d == "")
                {

                    document.getElementById("card_name").style.borderColor = "red";
                    ee.style.display = "";
                    temp++;
                } else if (isNaN(d) == false)
                {
                    ee.style.display = "none";
                    eee.style.display = "";
                    document.getElementById("card_name").style.borderColor = "red";
                    temp++;
                }
                if (e == "")
                {

                    document.getElementById("card_number").style.borderColor = "red";
                    ff.style.display = "";
                    temp++;
                } else if (e.length < 16) {
                    ff.style.display = "none";
                    fff.style.display = "";
                    document.getElementById("card_number").style.borderColor = "red";
                    temp++;

                }
                if (f == "")
                {

                    document.getElementById("month").style.borderColor = "red";
                    gg.style.display = "";
                    temp++;
                } else if (f.length > 2) {
                    gg.style.display = "none";
                    ggg.style.display = "";
                    document.getElementById("month").style.borderColor = "red";
                    temp++;

                }
                if (g == "")
                {

                    document.getElementById("year").style.borderColor = "red";
                    hh.style.display = "";
                    temp++;
                }

                if (i == "")
                {

                    document.getElementById("cvv").style.borderColor = "red";

                    temp++;
                }
                if (temp != 0) {
                    return false;
                }


            }
        </script>
    </body>

</html>