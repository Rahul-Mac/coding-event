
	 
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.jpg" type="image/jpg" sizes="16x16"></link>
<style>

#frm{
	margin-top:90px;
	margin-left:350px;
	width:380px;
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
  width: 100%;
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
   <title>IT EVENT - LOGIN</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="header">
<a href="login.php" class="logo" title="IT EVENT">IT EVENT</a>
</div>
    <div id=frm>
     <form action="process.php" method="POST">
	   <p>
			<input type="text" placeholder="Username" autocomplete="off" name="user" />
		 </p>
		 <p>
			<input type="password" placeholder="Password" name="pass"/>
		 </p>
		 <p>
		 <br><br>
			<input type="submit" id="btn" value="Login" />
		 </p>
		 <br>

     </form>	 
	
	</div>
</body>
</html>