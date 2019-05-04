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
        $query27 = "select max(`checkout_id`) from check_out";
        $result14 = mysqli_query($con, $query27);
        $row1 = mysqli_fetch_array($result14);
        $invoice = $row1['max(`checkout_id`)'];
        $invoice++;
        $check_out = "INSERT INTO check_out( `user_id`, `name`, `email`, `phone`, `fax`, `company`, `adress`, `city`, `postal_code`, `country`, `invoice_id`)" . " VALUES(' " . $_SESSION['USERID'] . " ',' " . $_REQUEST['user_fname'] . $_REQUEST['user_lname'] . " ',' " . $_REQUEST['user_email'] . " ',' " . $_REQUEST['user_telephone'] . " ',' " . $_REQUEST['user_fax'] . " ',' " . $_REQUEST['user_company'] . " ',' " . $_REQUEST['user_add_1'] . " ',' " . $_REQUEST['user_city'] . " ',' " . $_REQUEST['user_post'] . " ',' " . $_REQUEST['user_country'] . " ',' " . $invoice . " ')";
        $result = mysqli_query($con, $check_out);
//        die("done");
        $query = "SELECT max(`checkout_id`) FROM `check_out` ";
        $get_result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($get_result);
        $invoice_id = $row['max(`checkout_id`)'];
        // die($invoice_id);
        $update_status = "SELECT `invoice_id`,`status` FROM cart where user_id=" . $_SESSION['USERID'] . " && status=0";
        // die($update_status);
        $update_product_result = mysqli_query($con, $update_status);
        while ($row_product = mysqli_fetch_array($update_product_result)) {
            $update = "UPDATE cart SET status=1";
            //die($update);
            $result_update = mysqli_query($con, $update);
        }

        //die($check_out);
//        $result22 = mysqli_query($con, $check_out);
//        $query78 = "SELECT max(checkout_id) FROM  'check_out' ";
//        die($query78);
//        $get_result = mysqli_query($con, $query78);
//        $row = mysqli_fetch_array($get_result);
//        $invoice_id = $row['max(checkout_id)'];
//        $update_status = "SELECT 'invoice_id','status' FROM cart where invoice_id=" . $invoice_id . " && status=0";
//        //die($update_status);
//        $update_product_result = mysqli_query($con, $update_status);
//        while ($row_product = mysqli_fetch_array($update_product_result)) {
//            $update = "UPDATE cart SET status=1";
//            $result_update = mysqli_query($con, $update);
//        }
        header("location:checkout.php");

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
            <img class="pageBanner" src="themes/images/slid.jpg" alt="New products" >
            <h4><span>Check Out</span></h4>
        </section>
        <section class="main-content">
            <div class="row">
                <div class="span12">
                    <div class="accordion" id="accordion2">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
                        </div>
                        <div id="collapseTwo" >
                            <div class="accordion-inner">
                                <form  >
                                    <div class="row-fluid">
                                        <div class="span6" >
                                            <h4>Your Personal Details</h4>

                                            <div class="control-group">

                                                <label class="control-label">First Name</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Enter Your first Name" id="user_fname" name="user_fname" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_fname">*This field is Empty</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Last Name</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Enter Your Last Name" id="user_lname" name="user_lname" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_lname">*This field is Empty</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Email Address</label>
                                                <div class="controls">
                                                    <input type="email" placeholder="Enter your email" id="user_email" name="user_email" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_email">*This field is Empty</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Telephone</label>
                                                <div class="controls">
                                                    <input type="tel" placeholder="Enter your Telephone Number" id="user_telephone" name="user_telephone" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_telephone">*This field is Empty</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Fax</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Enter Your Fax" id="user_fax"  name="user_fax" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_fax">*This field is Empty</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <h4>Your Address</h4>
                                            <div class="control-group">
                                                <label class="control-label">Company</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Enter Your company Name" id="user_company" name="user_company" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_company">*This field is Empty</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label"> Address</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Enter Your Current address" name="user_add_1"  id="user_add_1" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_add_1">*This field is Empty</span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label"> City:</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Enter Your City name" id="user_city" name="user_city" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_city">*This field is Empty</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Post Code:</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Enter Your Postal Address" name="user_post" id="user_post" class="input-xlarge">
                                                    <span style="display:none;color: red;" id="u_post">*This field is Empty</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Country:</label>
                                                <div class="controls">
                                                    <select class="input-xlarge" id="user_country" name="user_country">
                                                        <option value="">Select Country</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                    </select>
                                                    <span style="display:none;color: red;" id="u_country">*Select  Country</span>

                                                </div>
                                            </div>
                                        </div>

                                        <button tabindex="3" class="btn btn-inverse large" name="check_out" id="check_out" type="submit" onclick="return verified()" >Confrim Order</button>

                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </section>
        <?php
        require_once 'components/footer.php';
        ?>
        <script src="themes/js/common.js"></script>
        <script type = "text/javascript" >
                                            function verified()
                                            {
                                                var a, b, c, d, e, f, g, i, j, k, temp;
                                                temp = 0;
                                                a = document.getElementById("user_fname").value;
                                                a = a.trim();
                                                b = document.getElementById("user_lname").value;
                                                b = b.trim();
                                                c = document.getElementById("user_email").value;
                                                c = c.trim();
                                                d = document.getElementById("user_telephone").value;
                                                d = d.trim();
                                                e = document.getElementById("user_fax").value;
                                                e = e.trim();
                                                f = document.getElementById("user_company").value;
                                                f = f.trim();

                                                g = document.getElementById("user_add_1").value;
                                                g = g.trim();

                                                i = document.getElementById("user_city").value;
                                                i = i.trim();
                                                j = document.getElementById("user_post").value;
                                                j = j.trim();
                                                k = document.getElementById("user_country").value;
                                                k = k.trim();

                                                document.getElementById("user_fname").style.borderColor = "#DBDBDB";
                                                var co = document.getElementById("u_fname");
                                                co.style.display = "none";
                                                document.getElementById("user_lname").style.borderColor = "#DBDBDB";
                                                var cc = document.getElementById("u_lname");
                                                cc.style.display = "none";
                                                document.getElementById("user_email").style.borderColor = "#DBDBDB";
                                                var dd = document.getElementById("u_email");
                                                dd.style.display = "none";
                                                document.getElementById("user_telephone").style.borderColor = "#DBDBDB";
                                                var ee = document.getElementById("u_telephone");
                                                ee.style.display = "none";
                                                document.getElementById("user_fax").style.borderColor = "#DBDBDB";
                                                var ff = document.getElementById("u_fax");
                                                ff.style.display = "none";
                                                document.getElementById("user_company").style.borderColor = "#DBDBDB";
                                                var gg = document.getElementById("u_company");
                                                gg.style.display = "none";

                                                document.getElementById("user_add_1").style.borderColor = "#DBDBDB";
                                                var hh = document.getElementById("u_add_1");
                                                hh.style.display = "none";

                                                document.getElementById("user_city").style.borderColor = "#DBDBDB";
                                                var jj = document.getElementById("u_city");
                                                jj.style.display = "none";
                                                document.getElementById("user_post").style.borderColor = "#DBDBDB";
                                                var kk = document.getElementById("u_post");
                                                kk.style.display = "none";
                                                document.getElementById("user_country").style.borderColor = "#DBDBDB";
                                                var ll = document.getElementById("u_country");
                                                ll.style.display = "none";


                                                if (a == "")
                                                {

                                                    document.getElementById("user_fname").style.borderColor = "red";
                                                    co.style.display = "";
                                                    temp++;
                                                }
                                                if (b == "")
                                                {

                                                    document.getElementById("user_lname").style.borderColor = "red";
                                                    cc.style.display = "";
                                                    temp++;
                                                }
                                                if (c == "")
                                                {

                                                    document.getElementById("user_email").style.borderColor = "red";
                                                    dd.style.display = "";
                                                    temp++;
                                                }
                                                if (d == "")
                                                {

                                                    document.getElementById("user_telephone").style.borderColor = "red";
                                                    ee.style.display = "";
                                                    temp++;
                                                }
                                                if (e == "")
                                                {

                                                    document.getElementById("user_fax").style.borderColor = "red";
                                                    ff.style.display = "";
                                                    temp++;
                                                }
                                                if (f == "")
                                                {

                                                    document.getElementById("user_company").style.borderColor = "red";
                                                    gg.style.display = "";
                                                    temp++;
                                                }
                                                if (g == "")
                                                {

                                                    document.getElementById("user_add_1").style.borderColor = "red";
                                                    hh.style.display = "";
                                                    temp++;
                                                }

                                                if (i == "")
                                                {

                                                    document.getElementById("user_city").style.borderColor = "red";
                                                    jj.style.display = "";
                                                    temp++;
                                                }
                                                if (j == "")
                                                {

                                                    document.getElementById("user_post").style.borderColor = "red";
                                                    kk.style.display = "";
                                                    temp++;
                                                }
                                                if (k == "")
                                                {

                                                    document.getElementById("user_country").style.borderColor = "red";
                                                    ll.style.display = "";
                                                    temp++;
                                                }



                                                if (temp != 0) {
                                                    return false;
                                                }


                                            }
        </script>
    </body>

</html>