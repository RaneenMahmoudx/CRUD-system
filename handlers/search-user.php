<?php
require("db.php");
$name= $_GET['name'];
$sql= "SELECT id,name,email,status,created_at from users where name like '%$name%' ";
$sqlResult= mysqli_query($conn,$sql); //execute the previous line
$userData = mysqli_fetch_all($sqlResult);
?>