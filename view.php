<?php
session_start();

 if (($_SESSION["USER"] == "root"))	
 {
	 $con = mysqli_connect("localhost", "root", "", "event");
	$query = mysqli_query($con,"select  USERNAME, BUG, ROUND1, ROUND2, ROUND3  FROM user;");
	if($query) 
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$file1 = $row["BUG"];
			$file2 = $row["ROUND1"];
			$file3 = $row["ROUND2"];
			$file4 = $row["ROUND3"];
			
			echo "
			<table border=4 >
  <tr>
    <th>GROUP</th>
    <th>BUG</th> 
    <th>ROUND 1</th>
<th>ROUND 2</th>
<th>ROUND 3</th>	
  </tr>
  <TR>
  <TD><b>".$row["USERNAME"]."</b></a></td>

			<td><a href = \"".$file1."\">BUG</a></td>
			<td><a href = \"".$file2."\">ROUND1</a></td>
			<td><a href = \"".$file3."\">ROUND2</a></td>
			<td><a href = \"".$file4."\">ROUND3</a></td>
</tr></TABLE>";
		}
	}
	
 }
 else
 {
	  header("Location: login.php");
 }
?>