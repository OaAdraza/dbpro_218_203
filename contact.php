<?php
require_once 'components/connection.php';
if (isset($_REQUEST['save_data'])) {
    $query = "INSERT INTO contact(con_name,con_email,con_message)VALUES('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['message'] . "' )";
//    die($query);
    mysqli_query($con, $query);
    header("location:index.php");
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

        <section class="google_map">
            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=74%2F6+Nguy%E1%BB%85n+V%C4%83n+Tho%E1%BA%A1i,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=74%2F6+Nguyen+Van+Thoai+Da+Nang,+Viet+Nam&amp;sll=37.0625,-95.677068&amp;sspn=41.546728,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=74+Nguy%E1%BB%85n+V%C4%83n+Tho%E1%BA%A1i,+Ng%C5%A9+H%C3%A0nh+S%C6%A1n,+Da+Nang,+Vietnam&amp;t=m&amp;ll=16.064537,108.24151&amp;spn=0.032992,0.039396&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </section>
        <section class="header_text sub">
            <img class="pageBanner" src="themes/images/Banner.jpg" alt="New products" >
            <h4><span>Contact Us</span></h4>
        </section>
        <section class="main-content">
            <div class="row">
                <div class="span5">
                    <div>

                        <h5>Pharmacies INFORMATION</h5>
                        <?php
                        $query = " SELECT * FROM add_information";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            foreach ($result as $row) {
                                ?>
                                <p><strong>Name:</strong>&nbsp; <?= $row['Pharmacy_name'] ?><br>
                                    <strong>Phone:</strong>&nbsp; <?= $row['phone'] ?><br>
                                    <strong>Fax:</strong>&nbsp; <?= $row['fax'] ?><br>
                                    <strong>Email:</strong>&nbsp;<a href="#"> <?= $row['email'] ?></a><br>
                                    <strong>Address:</strong>&nbsp; <?= $row['Address'] ?><br>

                                </p>
                                <?php
                            }
                        }
                        ?>
                        <br/>
                        <h5>SECONDARY OFFICE IN VIETNAM</h5>
                        <?php
                        $query = " SELECT * FROM sec_information";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            foreach ($result as $row) {
                                ?>
                                <p><strong>Phone:</strong>&nbsp; <?= $row['phone'] ?><br>
                                    <strong>Fax:</strong>&nbsp; <?= $row['fax'] ?><br>
                                    <strong>Email:</strong>&nbsp;<a href="#"> <?= $row['email'] ?></a>
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="span7">
                   
                    <form method="post" action="#">
                        <fieldset>
                            <div class="clearfix">
                                <label for="name"><span>Name:</span></label>
                                <div class="input">
                                    <input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
                                    <span style="display:none;color: red;" id="user_name">*This field is Empty</span>
                                </div>
                            </div>

                            <div class="clearfix">
                                <label for="email"><span>Email:</span></label>
                                <div class="input">
                                    <input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
                                    <span style="display:none;color: red;" id="user_email">*This field is Empty</span>
                                </div>
                            </div>

                            <div class="clearfix">
                                <label for="message"><span>Message:</span></label>
                                <div class="input">
                                    <textarea tabindex="3" class="input-xlarge" id="message" name="message" rows="7" placeholder="Message"></textarea>
                                    <span style="display:none;color: red;" id="user_message">*This field is Empty</span>
                                </div>
                            </div>

                            <div class="actions">
                                <button tabindex="3" type="submit" class="btn btn-inverse" id="save_data" name="save_data" onclick="return verify()">Send message</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <?php
        require_once 'components/footer.php';
        ?>
        <script src="themes/js/common.js"></script>
    </body>
    <script type = "text/javascript" >
                                    function verify()
                                    {
                                        var a, b, c, temp;
                                        temp = 0;
                                        a = document.getElementById("name").value;
                                        a = a.trim();
                                        b = document.getElementById("email").value;
                                        b = b.trim();
                                        c = document.getElementById("message").value;
                                        c = c.trim();
                                        document.getElementById("name").style.borderColor = "#DBDBDB";
                                        document.getElementById("email").style.borderColor = "#DBDBDB";
                                        document.getElementById("message").style.borderColor = "#DBDBDB";
                                        var co = document.getElementById("user_name");
                                        co.style.display = "none";
                                        var o = document.getElementById("user_email");
                                        o.style.display = "none";
                                        var q = document.getElementById("user_message");
                                        q.style.display = "none";
                                        if (a == "")
                                        {

                                            document.getElementById("name").style.borderColor = "red";
                                            co.style.display = "";
                                            temp++;
                                        }
                                        if (b == "")
                                        {

                                            document.getElementById("email").style.borderColor = "red";
                                            o.style.display = "";
                                            temp++;
                                        }
                                        if (c == "")
                                        {

                                            document.getElementById("message").style.borderColor = "red";
                                            q.style.display = "";
                                            temp++;
                                        }
                                        if (temp != 0) {
                                            return false;
                                        }

                                    }

    </script>
</html>