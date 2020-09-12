<?php
session_start();
$n=$_POST['name'];
$u=$_POST['username'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$address=$_POST['address'];
$country=$_POST['country'];
$dob=$_POST['dob'];
$st=$_POST['state'];
$c=$_POST['city']
$conn=mysqli_connect("","root","","page users");
$q="select * from users where Username=$u and Name=$n and Email=$email and Password=$pwd and Address=$address and Country=$country and DOB=$dob and State=$st and City=$c";
$r=mysqli_query($conn,$q);
$n=mysqli_fetch_rows($r);
if($n==0){
	$q1="insert into users values($u,$email,$dob,$address,$c,$st,$country,$n,$pwd)";
	mysqli_query($conn,$q1);
	header("Location:index.html");
}
if($n>0){
	echo("Please enter new values");
	header("Location:Register.html");
}
?>
