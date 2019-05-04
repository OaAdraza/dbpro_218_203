<?php

$con = mysqli_connect("localhost", "root", "", "db2");

if (mysqli_connect_errno()) {

    echo "Failed to connect with database" . mysqli_connect_errno();
} else {

    echo "successfully connect with Database";

    ob_start();
}
?>