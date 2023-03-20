<?php
require("db.php");
$name=$_POST['Name'];
$email=$_POST['Email'];
$status=$_POST['status'];
$userId=$_POST['userId'];

$sql= "UPDATE users 
SET name='$name',
email='$email',
status='$status' 
where id=$userId";

if(mysqli_query($conn,$sql)){?>

    <script>alert("user updated");</script>
    
    <?php
    header("Refresh:0;URL=../index.php");
    }
?>