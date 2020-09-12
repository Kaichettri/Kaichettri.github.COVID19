<?php
$u="root";
$p="";
$dname="user page";
$db=new PDO('mysql:host=localhost, dbname=' .$dname . ' ;charset=UTF-8' ,$u ,$p);
$db->setAttributes(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);