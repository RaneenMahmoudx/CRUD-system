<?php
require("db.php");
$userId=$_GET['userId'];
$sql= "DELETE from users where id=$userId";
if($sqlResult= mysqli_query($conn,$sql)){?>

<script>alert("user added");</script>

<?php
header("Refresh:0;URL=../index.php");
}
?>