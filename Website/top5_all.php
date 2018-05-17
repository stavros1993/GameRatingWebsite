<html>
<head>
<link rel="stylesheet" type="text/css" href="trial.css" />
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

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
p {padding:0cm 19cm;}	
</style>
</head>
<body>
<body bgcolor=#C0C0C0>
<table class="menu">
<tr>
<td>
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
	mysql_select_db("phplogin", $con);

	$result = mysql_query("SELECT name,sum_all/(users_voted*3),users_voted FROM candidate ORDER BY sum_all DESC");
	$row = mysql_fetch_array($result);
	
	echo '<p><font size="5">';
	echo '<b> TOP 5 videogames:';
	echo '</p></font>';
	

	echo '<table class="videogames" width="200" align = "center">';
	echo '<tr>';
		echo '<th>';echo'Videogames:';echo'</th>';
        echo '<th>';echo'Rating:';echo'</th>';
		echo '<th>';echo'Users Voted:';echo'</th>';
	echo '</tr>';
	
	
		while ($row)
	{
	echo '<tr>';
        echo '<td>' . $row['0'] . '</td>';
		$v = sprintf("%02.2f", $row['1']);
        echo '<td>' . $v .	'</td>';
		echo '<td>' . $row['2'] . 	'</td>';
		
	echo '</tr>';
		$row = mysql_fetch_array($result);
	}
	
	echo '<tr align="left" >';
	echo '<td align="left">';
	echo'<a href="top5.php"><button>Εμφάνιση λιγότερων</button></a>';
	echo '</td>';
	echo '</tr>';	
	echo '</table>';
	
	
echo '<p>Return to the candidate list<a href="candidates.php"> εδώ.</a>If you are a registered user,<a href="add_candidate.php"> you can add</a> one or more videogames to the list.</p>'; 
   }
mysql_close($con);
?>