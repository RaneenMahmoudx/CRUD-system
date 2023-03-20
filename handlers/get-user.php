<?php
require("db.php");
$sql= "SELECT id,name,email,status,created_at from users";
$sqlResult= mysqli_query($conn,$sql); //execute the previous line
$userData = mysqli_fetch_all($sqlResult);
?>