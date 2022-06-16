<?php
session_start();

 if (($_SESSION["ID"] == "") && ($_SESSION["USER"] == ""))
	 header("Location: login.php");
 if("" == trim($_POST["1"]) || "" == trim($_POST["2"]) || "" == trim($_POST["3"]) || "" == trim($_POST["4"]) || "" == trim($_POST["5"]))
 {$_SESSION["flag"] = 0;	header("Location: message.php");}
else{
 $one = $_POST["1"];
 $one = strtolower($one);
 $two = $_POST["2"];
 $two = strtolower($two);
 $thr = $_POST["3"];
 $thr = strtolower($thr);
 $for = $_POST["4"];
 $for = strtolower($for);
 $fiv = $_POST["5"];
 $fiv = strtolower($fiv);
 $cnt = 0;
 if($one == "levi's" || $one == "levis")
	$cnt++;
if($two == "nestle")
	$cnt++;
if($thr == "skype")
	$cnt++;
if($for == "hewlettpackard" || $for == "hewlett packard")
	$cnt++;
if($fiv == "bluestacks")
	$cnt++;


$con = mysqli_connect("localhost", "root", "", "event");
$sql = "UPDATE USER SET SCORE = '".$cnt."' WHERE UID = '".$_SESSION["ID"]."';";
if(mysqli_query($con, $sql)){$_SESSION["flag"] = 1;
header("Location: message.php");}
else{
	$_SESSION["flag"] = 0;header("Location: message.php");}
}
 ?>