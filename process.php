
<?php
if ( empty($_POST["user"]) || empty($_POST["pass"]) )
{
	header("Location: login.php");
}
if(isset($_POST["user"]) && isset($_POST["pass"]))
{
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$con = mysqli_connect("localhost", "root", "", "event");
	$query = mysqli_query($con,"select  * FROM user;");
	$flg=0;
	if($query) 
	{
		while($row = mysqli_fetch_assoc($query))
		{
			
			if($row["USERNAME"] == $user && $row["PASSWORD"] == $pass)
			{
				session_start();
				$_SESSION["ID"] = $row["UID"];
				$_SESSION["USER"] = $row["USERNAME"];
				$flg=1;
				header("Location: home.php");
			}
			
		}if($flg==0){
		header("Location: login.php");}
		else{header("Location: home.php");}
	}
}
else
	header("Location: login.php");
?>