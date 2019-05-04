<?php
require_once 'connection.php';
$id = $_GET["id"];
mysqli_query($con,"UPDATE super_category SET super_category_status='1' WHERE super_category_id=$id");
?>
<script>
window.location="tables.php";
</script>