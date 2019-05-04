<?php
require_once 'connection.php';
$query4 = "DELETE FROM `register_form` where reg_id=" . $_GET['id'];
 mysqli_query($con, $query4);
   header('location:tables.php');


?>