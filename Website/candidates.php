<html>
<head>
<link rel="stylesheet" type="text/css" href="trial.css" />
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
if($_SESSION['username']) {
echo "Καλως ήρθες, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>"; }
?>
<style>
table.videogames td,tr
{
border:1px solid black;

}
table.videogames th
{
border:1px solid black;
}

 p {padding:0cm 7cm;}	

</style>
</head>
<body>
<body bgcolor=#C0C0C0>
<table class="menu">
<tr>

<td valign="top">

<ul class="Periexomena" align="top">      
 <li><a href="Homepage.php">Homepage</a></li>
 <li><a href="maps.php">Map</a></li>
 <li><a href="candidates.php">Games List - Votes</a></li> 
 <li><a href="images_media.php">Pictures/Media/Links</a></li>
 <li><a href="register.php">Register</a>/<a href="index.html">Log-in</a></li> 
 <li><a href="contact.php">Contact</a></li> 
</ul>
</td>

<td>
<img src="logo.jpg" alt="esports logo" border="5" hspace="300" >
 <p>Current <a href="top5.php"> TOP 5 </a> ! <a href='rating.php'> Rate the videogames!</a>
 If you have an account, you can add a videogame by clicking <a href="add_candidate.php"> here.</a></p>
</td>
<td>
<marquee direction="down" width="240" height="60" behavior="alternate" style="border:solid">
  <marquee behavior="alternate">
   <a href="http://na.lolesports.com/">League of Legends tournament of the current season</a> 
<marquee></marquee>
</td>
</tr>
</table>
</body>
</html>

<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$con = mysql_connect("localhost:3306","root","");
if (!$con)
{
echo "problem in the connection".mysql_error();
}
else
{
	echo'<table align="center">';
	echo"<tr>";
	echo"<td>";

	
	mysql_select_db("phplogin", $con);
	$result=mysql_query("SELECT * FROM category", $con);
	$row = mysql_fetch_array($result);
	
	echo"<form action='candidates.php' method='post'>";
	echo"<select name='categories' id='yourselectbox'>";
	
	while ($row)
	{
		echo "<option value='" . $row["cat_id"] . "'> " . $row[ "name"] . "</option>";

		
		$row = mysql_fetch_array($result);
	}
	
	
	echo"</select>";
	echo"<input name='submitbutton' type='submit' value='Select' />";
	$category= $_POST['categories'];  
	echo"</form>";
	echo"</td>";
	
	$result = mysql_query("SELECT name,cat_id,sum1/users_voted,sum2/users_voted,sum3/users_voted,image FROM candidate", $con);
	$row = mysql_fetch_array($result);
	
	$result2 = mysql_query("SELECT name,cat_id,sum1/users_voted,sum2/users_voted,sum3/users_voted,image FROM candidate WHERE cat_id='MOBA'", $con);
	$row2 = mysql_fetch_array($result2);
	
	$result3 = mysql_query("SELECT name,cat_id,sum1/users_voted,sum2/users_voted,sum3/users_voted,image FROM candidate WHERE cat_id='Shooter'", $con);
	$row3 = mysql_fetch_array($result3);
	
	$result4 = mysql_query("SELECT name,cat_id,sum1/users_voted,sum2/users_voted,sum3/users_voted,image FROM candidate WHERE cat_id='Strategy'", $con);
	$row4 = mysql_fetch_array($result4);
	
	//stop
echo '<table align="center" class="videogames">';
 echo '<tr>';
	echo'<th>Name</th>';
	echo'<th>Genre</th>';
	echo'<th>Picture</th>';
	echo'<th> Originality</th>';
	echo'<th>Gameplay</th>';
	echo'<th>Competitiveness</th>';
 echo '</tr>';
 
while ($row)
	{
	  echo'<tr>';
		if($category==0){ 
		
         echo '<td>' . $row['name'] . '</td>';
		 echo '<td>' . $row['cat_id'] . '</td>';		 
		 echo "<td>";?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
		$v1 = sprintf("%02.2f", $row['2']);
		$v2 = sprintf("%02.2f", $row['3']);
		$v3 = sprintf("%02.2f", $row['4']);
        echo '<td>' . $v1 .	'</td>';
		echo '<td>' . $v2 .	'</td>';
		echo '<td>' . $v3 . '  </td>';

	}
	echo '</tr>';
	 $row = mysql_fetch_array($result);

    }  
	 
while ($row2)
	{
	   echo'<tr>';
		if($category==1){
	
         echo '<td>' . $row2['name'] . '  </td>';
         echo '<td>' . $row2['cat_id'] . '</td>';	
		 echo "<td>";?> <img src="<?php echo $row2["image"]; ?>" height="100" width="100"> <?php echo "</td>";		 
		$v1 = sprintf("%02.2f", $row2['2']);
		$v2 = sprintf("%02.2f", $row2['3']);
		$v3 = sprintf("%02.2f", $row2['4']);
        echo '<td>' . $v1 .	'</td>';
		echo '<td>' . $v2 .	'</td>';
		echo '<td>' . $v3 . '  </td>';

	 }
	 echo '</tr>';
	 $row2 = mysql_fetch_array($result2);
	// echo"<td>";
	}

while ($row3)
	{
		  
		if($category==2){ 
		echo'<tr>';
        echo '<td>' . $row3['name'] . '  </td>';
        echo '<td>' . $row3['cat_id'] . '</td>';
		echo "<td>";?> <img src="<?php echo $row3["image"]; ?>" height="100" width="100"> <?php echo "</td>";
		$v1 = sprintf("%02.2f", $row3['2']);
		$v2 = sprintf("%02.2f", $row3['3']);
		$v3 = sprintf("%02.2f", $row3['4']);
        echo '<td>' . $v1 .	'</td>';
		echo '<td>' . $v2 .	'</td>';
		echo '<td>' . $v3 . '  </td>';

	 }
	$row3 = mysql_fetch_array($result3);
	}

while ($row4)
	{

		if($category==3){ 
		echo'<tr>';
        echo '<td>' . $row4['name'] . '  </td>';
        echo '<td>' . $row4['cat_id'] . '</td>';		
		echo "<td>";?> <img src="<?php echo $row4["image"]; ?>" height="100" width="100"> <?php echo "</td>";
		$v1 = sprintf("%02.2f", $row4['2']);
		$v2 = sprintf("%02.2f", $row4['3']);
		$v3 = sprintf("%02.2f", $row4['4']);
        echo '<td>' . $v1 .	'</td>';
		echo '<td>' . $v2 .	'</td>';
		echo '<td>' . $v3 . '  </td>';

	 }
		 
	echo '</tr>';
	$row4 = mysql_fetch_array($result4);
	}

   }
mysql_close($con);
?>