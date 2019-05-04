<?php
require_once 'connection.php';

if (isset($_REQUEST['save_data'])) {
$query = "UPDATE register_form set reg_name='".$_REQUEST['u_name']."', reg_email='".$_REQUEST['u_email']."',reg_password='".$_REQUEST['u_pass']."'  where reg_id= " . $_GET['id'];

    mysqli_query($con, $query);
    header('location:tables.php');   
   //$query = "INSERT INTO register_form(reg_name,reg_email,reg_password)VALUES('" . $_REQUEST['u_name'] . "','" . $_REQUEST['u_email'] . "','" . $_REQUEST['u_pass'] . "' )";
//    die($query);
    //mysqli_query($con, $query);
    //header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <?php
        $query4 = "Select * from register_form where reg_id=" . $_GET['id'];
        //    die($query4);
        $row = mysqli_fetch_array(mysqli_query($con, $query4));
        ?>
        <div class="container">

            <div class="span7">
                <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
                <form  method="post" class="form-stacked">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <br>
                            <div class="controls">
                                <input type="text" placeholder="Enter your username" name="u_name" id="u_name"  class="input-xlarge form-control" value="<?= $row['reg_name'] ?>">
                                <span style="display:none;color: red;" id="user_name">*This field is Empty</span>
                                <span style="display:none;color: red;" id="wname">*Enter Name</span>
                            </div>
                            <br>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email address:</label>
                            <br>
                            <div class="controls">
                                <input type="email" placeholder="Enter your email" name="u_email" id="u_email" class="input-xlarge form-control" value="<?= $row['reg_email'] ?>">
                                <span style="display:none;color: red;" id="user_email">*This field is Empty</span>
                            </div>
                            <br>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password:</label>
                            <br>
                            <div class="controls">
                                <input type="password" placeholder="Enter your password" name="u_pass" id="u_pass" class="input-xlarge form-control" value="<?= $row['reg_password'] ?>">
                                <span style="display:none;color: red;" id="user_pass">*This field is Empty</span>
                            </div>
                            <br>
                        </div>

                        <div class="actions"><input tabindex="9" class="btn btn-inverse btn-info large form-control" type="submit" name="save_data" id="save_data" onclick="return verification()" value="UPDATE ACCOUNT"></div>
                    </fieldset>

                </form>
            </div>
        </div>
        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
        <script type = "text/javascript" >
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

    </body>

</html>

