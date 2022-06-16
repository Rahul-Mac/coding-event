<?php
session_start();

 if (($_SESSION["ID"] == "") && ($_SESSION["USER"] == ""))
	 header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.jpg" type="image/jpg" sizes="16x16"></link>
<style>

#frm{
	margin-top:90px;
	margin-left:50px;
	width:700px;
	border: 1px solid #BFBFBF;
	padding: 10px 10px 20px 10px;
	box-shadow: 10px 10px 5px #aaaaaa;
}

#frm1{
	margin-top:90px;
	margin-left:50px;
	width:700px;
	border: 1px solid #BFBFBF;
	padding: 10px 10px 20px 10px;
	box-shadow: 10px 10px 5px #aaaaaa;
}

#btn{
	background-color: dodgerblue;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:left;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-5deg, #ad0c0c, #ff9c9c);
	border-radius: 4px;
	outline: none;
}
#btn:hover
{
	background-color: white;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:left;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-50deg, #ad0c0c, #ff9c9c);
	border-radius: 4px;
}

.header button.btn 
{
	background-color: dodgerblue;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:right;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-5deg, #ad0c0c, #ff9c9c);
	border-radius: 4px;
	outline: none;

}
.header button.btn:hover 
{
	background-color: white;
  	border: none;
  	font-weight: bold;
	color: white;
	font-size: 16px;
	float:right;
	padding: 7px;
	display: inline;
	background-image: linear-gradient(-50deg, #ad0c0c, #ff9c9c);
	border-radius: 4px;
}

.header 
{	overflow: hidden;
  	background-color:#e8e8e8;
	padding: 15px;
}
.header a:hover.logo 
{
	color: white;
		background-image: linear-gradient(-50deg, #ad0c0c, #ff9c9c);
		border-radius: 4px;
		padding:10px;
}
.header a.logo 
{
  	font-size: 30px;
  	font-weight: bold;
	color: white;
	border-radius: 4px;
	background-image: linear-gradient(-5deg, #ad0c0c, #ff9c9c);
	padding:10px;
}
a {text-decoration: none;} 


input[type=text] {
  width: 95px;
  box-sizing: border-box;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding:6px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  height:30px;
  border: 3px solid #ff9c9c;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  width: 50%;
  padding:6px;
  border: 3px solid #ad0c0c;
  height:50px;
  font-size: 24px;
}

input[type=password] {
  width: 95px;
  box-sizing: border-box;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding:6px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  height:30px;
  border: 3px solid #ff9c9c;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=password]:focus {
  width: 100%;
  padding:6px;
  border: 3px solid #ad0c0c;
  height:50px;
  font-size: 24px;
}

body 
{ 
  	font-family:sans-serif;
}

</style>
   <title>IT EVENT - MCQ</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="header">
<a href="login.php" class="logo" title="IT EVENT">IT EVENT</a>
<a href="out.php" title="Log Out"><button type="button" class="btn" style="margin-right:16px">Log Out</button></a>
</div>
<div id=frm1>
<?php 
echo "<h1> Welcome, ".$_SESSION["USER"]."</h1>";
?>
</div>
    <div id=frm>
     <form action="mcqpr.php" method="POST">
		<h1>GUESS THE LOGO</h1>
		<?php
		for($i=1; $i<=5; $i++)
		{
		echo "
		<br><br><br><br><br>
		<img src = \"".$i.".jpg\" width=300 height=300><br><br>
		<input type=\"text\" name=\"".$i."\">
		";
		}
		?>
		<br><br><br>
		<input type="submit" id="btn" value="SUBMIT" />
		<br><br><br>
     </form>	 
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>