
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>
<script type = "text/javascript" >
	function verification(){
		var a,b,c,d,e,f,h,temp;
		temp =0;
		a = document.getElementById("firstname").value;
		a=a.trim();
		b = document.getElementById("lastname").value;
		b=b.trim();
		c = document.getElementById("username").value;
		c=c.trim();
		d = document.getElementById("password").value;
		d=d.trim();
		e = document.getElementById("cpassword").value;
		e=e.trim();
		f = document.getElementById("email").value;
		f=f.trim();
		h = document.getElementById("contact").value;
		h=h.trim();
		document.getElementById("firstname").style.borderColor = "#DBDBDB";
		document.getElementById("lastname").style.borderColor = "#DBDBDB";
		document.getElementById("username").style.borderColor = "#DBDBDB";
		document.getElementById("password").style.borderColor = "#DBDBDB";
		document.getElementById("cpassword").style.borderColor = "#DBDBDB";
		document.getElementById("email").style.borderColor = "#DBDBDB";
		document.getElementById("contact").style.borderColor = "#DBDBDB";
		var q = document.getElementById("fname");
            q.style.display = "none";
		var p = document.getElementById("lname");
            p.style.display = "none";
		var g = document.getElementById("pwd");
            g.style.display = "none";
		
		if (a == "")
            {

                document.getElementById("firstname").style.borderColor = "red";
                temp++;

            } 
		else if (isNaN(a) == false)
            {
                q.style.display = "";
                document.getElementById("fname").style.borderColor = "red";
                temp++;
            }
		
			if (b == "")
            {

                document.getElementById("lastname").style.borderColor = "red";
                temp++;

            } 
		else if (isNaN(b) == false)
            {
                p.style.display = "";
                document.getElementById("lname").style.borderColor = "red";
                temp++;
            }
			if (c == "")
            {

                document.getElementById("username").style.borderColor = "red";
                temp++;

            } 
			if (d == "")
            {

                document.getElementById("password").style.borderColor = "red";
                temp++;

            }
			if (e == "")
            {

                document.getElementById("cpassword").style.borderColor = "red";
                temp++;

            }
			else if(d != e)
			{
				document.getElementById("password").style.borderColor = "red";
				document.getElementById("cpassword").style.borderColor = "red";
				 g.style.display = "";
                 temp++;
				
			}
			if (f == "")
            {

                document.getElementById("email").style.borderColor = "red";
                temp++;

            }
			if (h == "")
            {

                document.getElementById("contact").style.borderColor = "red";
                temp++;

            }
			if (temp != 0) {
                return false;
            }

		
		
	}


</script>


<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>
<body class="login" style="margin-top: -20px;">

    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>User Registration Form</h2><br>
div >
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" id="firstname" />
						<span style="display:none;color: red;float:left;" id="fname">*Enter Name</span>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" id="lastname" />
						<span style="display:none;color: red;float:left;" id="lname">*Enter Name</span>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password"  id="password" />
                    </div>
					  <div>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword"  id="cpassword" />
						<span style="display:none;color: red;float:left;" id="pwd">*Password Does not match</span>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" name="email" id="email" />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="contact" id="contact" />
                    </div>
                    
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register" onclick="return verification()">
                    </div>
                        <input type="text" class="form-control" placeholder="SEM" name="sem" name="sem"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>
					

                </form>
            </section>
<?php
require_once 'dbconnection.php';
if (isset($_REQUEST['submit1'])) {
    $query = "INSERT INTO student_registeration(firstname,lastname,username,password,email,contact,sem,enrollment,status)VALUES('" . $_REQUEST['firstname'] . "','" . $_REQUEST['lastname'] . "','" . $_REQUEST['username'] . "','" . $_REQUEST['password'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['contact'] . "','" . $_REQUEST['sem'] . "','" . $_REQUEST['enrollmentno'] . "','no' )";
//    die($query);
  mysqli_query($con, $query);
	?>
	  <div class="alert alert-success col-lg-12 col-lg-push-0">
        Registration successfully, You will get email when your account is approved
    </div>

	<?php
}

?>


    </div>

  

</body>
</html>
