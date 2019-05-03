<?php
require_once 'components/connection.php';
if (isset($_SESSION['USERID'])) {
    header("location:index.php");
} else {
    if (isset($_REQUEST['login'])) {
        $email = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        $query = "SELECT * FROM register_form where reg_name=" . " '$email' and reg_password=" . " '$pass' ";
//        die($query);
	$que = "select * from register_form";
	$pa = mysqli_query($con,$que);
	$row = mysqli_fetch_array($pa);
	
	if( $row['reg_name'] != $email or $row['reg_password'] != $pass){
		?>
		<script>
		alert("Password or email does not match");
		</script>
		
		<?php
		
	}
        $get_result = mysqli_query($con, $query);
        if (mysqli_num_rows($get_result) > 0) {
//            die("kjn");
            $row = mysqli_fetch_array($get_result);
            $_SESSION['USERID'] = $row['reg_id'];
//            die($_SESSION['USERID']);
            header("location:index.php");
        }
    }
	
}

if (isset($_REQUEST['save_data'])) {
    $query = "INSERT INTO register_form(reg_name,reg_email,reg_password)VALUES('" . $_REQUEST['u_name'] . "','" . $_REQUEST['u_email'] . "','" . $_REQUEST['u_pass'] . "' )";
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
        <style>

            .dropdown:hover>.dropdown-menu {
                display: block;
            }

            .dropdown>.dropdown-toggle:active {
                /*Without this, clicking will make it sticky*/
                pointer-events: none;
            }
        </style>
    </head>
    <body>

        <?php
        require_once 'components/header.php';
        ?>

        <section class="header_text sub">
            <img class="pageBanner" src="themes/images/banner.jpg" alt="New products" >
            <h4><span>Login or Regsiter</span></h4>
        </section>

        <section class="main-content">
            <div class="row">
                <div class="span5">
                    <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
                    <form  method="post">
                        <input type="hidden" name="next" value="/">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter your username" id="username" name="username" class="input-xlarge">
                                    <span style="display:none;color: red;" id="name">*This field is Empty</span>
                                    <span style="display:none;color: red;" id="wwname">*Enter Name</span>

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge">
                                    <span style="display:none;color: red;" id="pass">*This field is Empty</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <input tabindex="3" class="btn btn-inverse large" type="submit" id="login" name="login" onclick="return verify()" value="Sign into your account">
                                <hr>
                                <p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="span7">
                    <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
                    <form  method="post" class="form-stacked">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter your username" name="u_name" id="u_name"  class="input-xlarge">
                                    <span style="display:none;color: red;" id="user_name">*This field is Empty</span>
                                    <span style="display:none;color: red;" id="wname">*Enter Name</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email address:</label>
                                <div class="controls">
                                    <input type="email" placeholder="Enter your email" name="u_email" id="u_email" class="input-xlarge">
                                    <span style="display:none;color: red;" id="user_email">*This field is Empty</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password:</label>
                                <div class="controls">
                                    <input type="password" placeholder="Enter your password" name="u_pass" id="u_pass" class="input-xlarge">
                                    <span style="display:none;color: red;" id="user_pass">*This field is Empty</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
                            </div>
                            <hr>
                            <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" name="save_data" id="save_data" onclick="return verification()" value="Create your account"></div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </section>
        <?php
        require_once 'components/footer.php';
        ?>

    </body>
    <script type = "text/javascript" >
        function verify()
        {
            var a, b, temp;
            temp = 0;
            a = document.getElementById("username").value;
            a = a.trim();
            b = document.getElementById("password").value;
            b = b.trim();
            document.getElementById("username").style.borderColor = "#DBDBDB";
            document.getElementById("password").style.borderColor = "#DBDBDB";
            var co = document.getElementById("name");
            co.style.display = "none";
            var o = document.getElementById("pass");
            o.style.display = "none";
            var q = document.getElementById("wwname");
            q.style.display = "none";
            if (a == "")
            {

                document.getElementById("username").style.borderColor = "red";
                co.style.display = "";
                temp++;

            } else if (isNaN(a) == false)
            {
                co.style.display = "none";
                q.style.display = "";
                document.getElementById("u_name").style.borderColor = "red";
                temp++;
            }
            if (b == "")
            {

                document.getElementById("password").style.borderColor = "red";
                o.style.display = "";
                temp++;
            }

            if (temp != 0) {
                return false;
            }

        }
        function verification()
        {
            var a, b, c, temp;
            temp = 0;
            a = document.getElementById("u_name").value;
            a = a.trim();
            b = document.getElementById("u_email").value;
            b = b.trim();
            c = document.getElementById("u_pass").value;
            c = c.trim();
            document.getElementById("u_name").style.borderColor = "#DBDBDB";
            document.getElementById("u_email").style.borderColor = "#DBDBDB";
            document.getElementById("u_pass").style.borderColor = "#DBDBDB";
            var co = document.getElementById("user_name");
            co.style.display = "none";
            var o = document.getElementById("user_email");
            o.style.display = "none";
            var p = document.getElementById("user_pass");
            p.style.display = "none";
            var q = document.getElementById("wname");
            q.style.display = "none";
            if (a == "")
            {

                document.getElementById("u_name").style.borderColor = "red";
                co.style.display = "";
                temp++;

            } else if (isNaN(a) == false)
            {
                co.style.display = "none";
                q.style.display = "";
                document.getElementById("u_name").style.borderColor = "red";
                temp++;
            }
            if (b == "")
            {

                document.getElementById("u_email").style.borderColor = "red";
                o.style.display = "";
                temp++;
            }
            if (c == "")
            {

                document.getElementById("u_pass").style.borderColor = "red";
                p.style.display = "";
                temp++;
            }

            if (temp != 0) {
                return false;
            }


        }
    </script>
</html>