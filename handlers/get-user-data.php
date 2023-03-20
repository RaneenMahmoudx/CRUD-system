<?php
require("db.php");
$sql= "SELECT id,name,email,status from users where id=$userId";
$sqlResult= mysqli_query($conn,$sql); //execute the previous line
$userData = mysqli_fetch_assoc($sqlResult);
?>