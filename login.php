<?php
session_start();
$n=$_POST['Name'];
$p=$_POST['Password'];
$conn=mysqli_connect("","root","","page users");
$q="SELECT username,password from page user username=$n and password=$p";
$r=mysqli_query($conn,$q);
if(!empty($r)){
	header("Location:index.html");
}
else{
	header("Location:Login form.html");
}
?>