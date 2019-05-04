<?php

$con = mysqli_connect("localhost", "root", "", "medical");

if (mysqli_connect_errno()) {

    echo "Failed to connect with database" . mysqli_connect_errno();
} else {

    echo "successfully connect with Database";
    session_start();
    ob_start();
}
?>