

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
<?php
require_once 'connection.php';

?>
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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                  
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
              
                  
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
						<li><a href="registeration.php"><i class="fa fa-sign-out fa-fw"></i> Registerd</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                       
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">


                                    <h1>Add General Categoray</h1>
                                    <form>
                                        <div class="form-group">
                                            <label>General Category Name</label>
                                            <input class="form-control" id="General_name" name="General_name" required="">
                                        </div>


                                         <div class="form-group">
                                          <label>Status</label>
                                            <select class="form-control" id="General_status" name="General_status" required="">
                                                <option value="">Status</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                </select>
                                        </div>

                                         <button type="submit" class="btn btn-default" id="save_dat"  name="save_dat">Submit Button</button>

                                    </form>

                                    <?php

                                    if (isset($_REQUEST['save_dat'])) {
                                    $query = "INSERT INTO general_category(general_category_name,general_category_status)VALUES('" . $_REQUEST['General_name'] . "','" . $_REQUEST['General_status'] . "')";
   //die($query);
                                   mysqli_query($con, $query);
                                        header("location:forms.php");
}
?>


<br>
<br>

<hr>
<hr>

        
         <h1>Add Super Categoray</h1>
                                    <form>

                                        <div class="form-group">
                                            <label>Selects general Categoray </label>
                                            <select class="form-control" name="gen_category" id="gen_category">
                                                <option value="">super Category...</option>
                                    <?php
                                    $qry_5 = "SELECT * FROM `general_category` WHERE general_category_status ='1' ";

                                    $res_5 = mysqli_query($con, $qry_5);
                                    if (mysqli_num_rows($res_5) > 0) {

                                        foreach ($res_5 as $row_5) {
                                            ?>

                                            <option value="<?= $row_5['general_category_id'] ?>"> <?= $row_5['general_category_name'] ?></option>

                                            <?php
                                        }
                                    }
                                    ?>
                                </select>   



                                        <div class="form-group">
                                            <label> Super Category Name</label>
                                            <input class="form-control" id="sup_name" name="sup_name" required="">
                                        </div>


                                         <div class="form-group">
                                          <label>Status</label>
                                            <select class="form-control" id="sup_status" name="sup_status" required="">
                                                <option value="">Status</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                </select>
                                        </div>

                                         <button type="submit" class="btn btn-default" id="sa_dat"  name="sa_dat">Submit Button</button>

                                    </form>


<?php

                                    if (isset($_REQUEST['sa_dat'])) {
                                    $query = "INSERT INTO `super_category`(`general_category_id`, `super_category_name`, `super_category_status`)VALUES('" . $_REQUEST['gen_category'] . "','" . $_REQUEST['sup_name'] . "','" . $_REQUEST['sup_status'] . "')";
   //die($query);
                                   mysqli_query($con, $query);
                                        header("location:forms.php");
}
?>




<br>
<br>
<hr>
<hr>
<h1>Add Pharmacy Detail</h1>
 <form>


                                        <div class="form-group">
                                            <label> Pharmacy Name</label>
                                            <input type="text" class="form-control" id="nam" name="nam" required="">
                                        </div>


                                        <div class="form-group">
                                            <label> Pharmacy Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required="">
                                        </div>

                                         <div class="form-group">
                                            <label> Pharmacy fax</label>
                                            <input type="text" class="form-control" id="fax" name="fax" required="">
                                        </div>

                                         <div class="form-group">
                                            <label> Pharmacy Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required="">
                                        </div>

                                        <div class="form-group">
                                            <label> Pharmacy Address</label>
                                            <input type="text" class="form-control" id="Address" name="Address" required="">
                                        </div>


                                         <button type="submit" class="btn btn-default" id="sav_dat"  name="sav_dat">Submit Button</button>

                                    </form>

                                    <?php

                                    if (isset($_REQUEST['sav_dat'])) {
                                    $query = "INSERT INTO `add_information`(`Pharmacy_name`, `phone`, `fax`, `email`, `Address`)VALUES('" . $_REQUEST['nam'] . "','" . $_REQUEST['phone'] . "','" . $_REQUEST['fax'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['Address'] . "')";
   // die($query);
                                   mysqli_query($con, $query);
                                        header("location:forms.php");
}
?>



<br>
<br>

<hr>
<hr>

         
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
      
                                    



                                    <form role="form" method="post">
									</select>	
                                        </div>
										    <div class="form-group">
                                            <label>Selects super_category </label>
                                            <select class="form-control" name="super_category" id="super_category">
                                                <option value="">super Category...</option>
                                    <?php
                                    $qry_1 = "SELECT * FROM `super_category` WHERE super_category_status ='1' ";

                                    $res_2 = mysqli_query($con, $qry_1);
                                    if (mysqli_num_rows($res_2) > 0) {

                                        foreach ($res_2 as $row_2) {
                                            ?>

                                            <option value="<?= $row_2['super_category_id'] ?>"> <?= $row_2['super_category_name'] ?></option>

                                            <?php
                                        }
                                    }
                                    ?>
								</select>	
								</div>
								 <div class="form-group">
                                            <label>Selects super_category </label>
                                            <select class="form-control" name="super_name" id="super_name">
                                                <option value="">super Category...</option>
                                    <?php
                                    $qry_1 = "SELECT * FROM `super_category` WHERE super_category_status='1' ";

                                    $res_2 = mysqli_query($con, $qry_1);
                                    if (mysqli_num_rows($res_2) > 0) {

                                        foreach ($res_2 as $row_2) {
                                            ?>

                                            <option value="<?= $row_2['super_category_name'] ?>"> <?= $row_2['super_category_name'] ?></option>

                                            <?php
                                        }
                                    }
                                    ?>
								</select>	
								</div>

                                          <div class="form-group">
                                            <label>Medicine Name</label>
                                            <input class="form-control" id="medicine_name" name="medicine_name">
                                        </div>

                                        <div class="form-group">
                                            <label>Medicine Id</label>
                                            <input class="form-control" id="brand" name="brand">
                                        </div>
										 <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" id="discription" name="discription" rows="3"></textarea>
                                        </div>
                                    
										<div class="form-group">
                                            <label>Product Image1</label>
                                            <input type="file" id="img1" name="img1">
                                        </div>
										<div class="form-group">
                                            <label>Product Image2</label>
                                            <input type="file" id="img2" name="img2">
                                        </div>
										<div class="form-group">
                                            <label>Product Image3</label>
                                            <input type="file" id="img3" name="img3">
                                        </div>
                                         <div class="form-group">
                                            <label>Price $</label>
                                            <input class="form-control" id="price" name="price" placeholder="">
                                        </div>
										<div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" id="quantity" name="quantity" placeholder="">
                                        </div>
                                       
										
										 <div class="form-group">
										  <label>Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option value="">Status</option>
												<option value="1">0</option>
												<option value="2">1</option>
												</select>
                                        </div>
                                       
                                       
                                   
                                     
                                      
                                        <button type="submit" class="btn btn-default" id="save_data"  onclick="return verification()"  name="save_data">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                     <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	<script>
	function verification(){
		var temp,a,b,c;
		temp=0;
		  a = document.getElementById("quantity").value;
            a = a.trim();
			b = document.getElementById("price").value;
            b = b.trim();
			c = document.getElementById("super_category").value;
            c = c.trim();
			document.getElementById("quantity").style.borderColor = "#DBDBDB";
			document.getElementById("price").style.borderColor = "#DBDBDB";
			document.getElementById("super_category").style.borderColor = "#DBDBDB";
			if(c ==""){
			document.getElementById("super_category").style.borderColor = "red";	
			temp++;
			}
			if(b < 0){
			document.getElementById("price").style.borderColor = "red";	
			temp++;
			}
			if(a < 0){
			document.getElementById("quantity").style.borderColor = "red";	
			temp++;
			}
			
			  if (temp != 0) {
                return false;
            }
	}
	</script>
	<?php
require_once 'connection.php';
if (isset($_REQUEST['save_data'])) {


// $targetfolder = "./themes/images/medicine/";

//  $targetfolder1 = $targetfolder . basename( $_FILES['img1']['name']) ;
//  $targetfolder2 = $targetfolder . basename( $_FILES['img2']['name']) ;
//  $targetfolder3 = $targetfolder . basename( $_FILES['img3']['name']) ;
//  $ok=1;

// $file_type1  =$_FILES['img1']['type'];
// $file_type2  =$_FILES['img2']['type'];
// $file_type3  =$_FILES['img3']['type'];

// if ($file_type1 =="application/pdf"  || $file_type2 =="application/pdf"  || $file_type3 =="application/pdf"  || $file_type1=="image/gif" || $file_type1 =="image/jpeg"  || $file_type2=="image/gif" || $file_type2 =="image/jpeg"  || $file_type3=="image/gif" || $file_type3 =="image/jpeg") {

//     move_uploaded_file($_FILES['img1']['tmp_name1'], $targetfolder1);
//     move_uploaded_file($_FILES['img2']['tmp_name2'], $targetfolder2);
//     move_uploaded_file($_FILES['img3']['tmp_name3'], $targetfolder3);


	$filepath1 ="themes/images/medicine/".$_REQUEST['img1'];
	$filepath2 ="themes/images/medicine/".$_REQUEST['img2'];
	$filepath3 ="themes/images/medicine/".$_REQUEST['img3'];
    $query = "INSERT INTO `product`(`super_category_id`, `product_name`, `medicine_name`, `Medicine_id`, `discription`, `product_img1`, `product_img2`, `product_img3`, `price`, `qty`, `status`)VALUES('" . $_REQUEST['super_category'] . "','" . $_REQUEST['super_name'] . "','" . $_REQUEST['medicine_name'] . "','" . $_REQUEST['brand'] . "','" . $_REQUEST['discription'] . "','" . $filepath1 . "','" . $filepath2 . "','" . $filepath3. "','" . $_REQUEST['quantity'] . "','" . $_REQUEST['price'] . "','" . $_REQUEST['status'] . "' )";
   // die($query);
    mysqli_query($con, $query);
    header("location:forms.php");
}

// }
// else{


//  echo "Problem uploading file";

// }
?>

</body>

</html>
