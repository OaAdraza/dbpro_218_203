<?php
require_once 'connection.php';
$id = $_GET["id"];
mysqli_query($con,"UPDATE general_category SET general_category_status='1' WHERE general_category_id=$id");
?>
<script>
window.location="tables.php";
</script>