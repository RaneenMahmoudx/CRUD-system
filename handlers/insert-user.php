<?php
require("db.php");
 $name =$_POST['Name'];
 $email=$_POST['Email'];
 $password=$_POST['Password'];
 $password=password_hash($password,PASSWORD_DEFAULT);

 $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

 if($sqlResult= mysqli_query($conn,$sql)){?>

    <script>alert("user added")</script>
    
 <?php
    header("Refresh:0;URL=../create.php");
 }
?>