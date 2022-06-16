<?php
$con = mysqli_connect("localhost", "root", "", "event");
session_start();
if(!empty($_FILES['file']) || isset($_FILES['file'])){
$page = $_SESSION["PAGE"];
$path = $_FILES['file']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

if($page == "bug"){
$sql = "UPDATE USER SET BUG = 'programs/bd".$_SESSION["USER"].".".$ext."' WHERE UID = '".$_SESSION["ID"]."';";
$file = "C:/wamp/www/Code/programs/bd".$_SESSION["USER"].".".$ext;
if($ext == "")
{
$sql = "UPDATE USER SET BUG = '' WHERE UID = '".$_SESSION["ID"]."';";
}
}

else if($page == "round1"){
$sql = "UPDATE USER SET ROUND1 = 'programs/r1".$_SESSION["USER"].".".$ext."' WHERE UID = '".$_SESSION["ID"]."';";
$file = "C:/wamp/www/Code/programs/r1".$_SESSION["USER"].".".$ext;

if($ext == "")
{
$sql = "UPDATE USER SET ROUND1 = '' WHERE UID = '".$_SESSION["ID"]."';";
}
}

else if($page == "round2"){
$sql = "UPDATE USER SET ROUND2 = 'programs/r2".$_SESSION["USER"].".".$ext."' WHERE UID = '".$_SESSION["ID"]."';";
$file = "C:/wamp/www/Code/programs/r2".$_SESSION["USER"].".".$ext;
if($ext == "")
{
$sql = "UPDATE USER SET ROUND2 = '' WHERE UID = '".$_SESSION["ID"]."';";
}
}

else if($page == "round3"){
$sql = "UPDATE USER SET ROUND3 = 'programs/r3".$_SESSION["USER"].".".$ext."' WHERE UID = '".$_SESSION["ID"]."';";
$file = "C:/wamp/www/Code/programs/r3".$_SESSION["USER"].".".$ext;
if($ext == "")
{
$sql = "UPDATE USER SET ROUND3 = '' WHERE UID = '".$_SESSION["ID"]."';";
}
}


if(mysqli_query($con, $sql) && move_uploaded_file($_FILES["file"]["tmp_name"], $file))
{$_SESSION["flag"] = 1; header("Location: message.php");}

else{$_SESSION["flag"] = 0; header("Location: message.php");}
}
else{
	$_SESSION["flag"] = 0;
header("Location: message.php");}
	
?>