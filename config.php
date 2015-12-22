<?php
//$basefolder="hottttttt";
$basefolder="vcorner";
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="vcorners";
$base_url="http://localhost/".$basefolder."/";
$con=mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
$rs=mysql_select_db($dbname);
$pathfolder = "C:\xampp\htdocs\vcorner"; 
//$pathfolder = "C:\xampp\htdocs\hottttttt"; 
?>