<html>
<head>
<link rel="stylesheet" type="text/css" href="trial.css" />
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
if($_SESSION['username']) {
echo "Welcome, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>"; }
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

 p {padding:0cm 17cm;}	

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
{	echo'<p>Select the game you would like to rate:</p>';
	echo"<form action='rating.php' method='post'>";
	echo'<table align="center">';
	echo"<tr>";
	echo"<td>";

	mysql_select_db("phplogin", $con);
	$result=mysql_query("SELECT name FROM candidate", $con);
	$row = mysql_fetch_array($result);
	
	echo"<select name='videogames' id='yourselectbox'>";
	
	while ($row)
	{
		echo "<option value='" . $row["name"] . "'> " . $row[ "name"] . "</option>";

		
		$row = mysql_fetch_array($result);
	}
	echo"</select>";

	$name= $_POST['name'];  

	echo"</td>";
	echo"</tr>";
	echo'</table>';
	echo"<table align='center'>";

echo"<tr>";
echo"<td>";

echo"<ul>";
echo'Originality';
echo'<li><input type="radio" name="originality" value="1">1</li>';
echo'<li><input type="radio" name="originality" value="2">2</li>';
echo'<li><input type="radio" name="originality" value="3">3</li>';
echo'<li><input type="radio" name="originality" value="4">4</li>';
echo'<li><input type="radio" name="originality" value="5">5</li>';
echo'<li><input type="radio" name="originality" value="6">6</li>';
echo'<li><input type="radio" name="originality" value="7">7</li>';
echo'<li><input type="radio" name="originality" value="8">8</li>';
echo'<li><input type="radio" name="originality" value="9">9</li>';
echo'<li><input type="radio" name="originality" value="10">10</li>';
echo'</ul>';

echo"</td>";

echo"<td>";

echo"<ul>";
echo'Gameplay';
echo'<li><input type="radio" name="gameplay" value="1">1</li>';
echo'<li><input type="radio" name="gameplay" value="2">2</li>';
echo'<li><input type="radio" name="gameplay" value="3">3</li>';
echo'<li><input type="radio" name="gameplay" value="4">4</li>';
echo'<li><input type="radio" name="gameplay" value="5">5</li>';
echo'<li><input type="radio" name="gameplay" value="6">6</li>';
echo'<li><input type="radio" name="gameplay" value="7">7</li>';
echo'<li><input type="radio" name="gameplay" value="8">8</li>';
echo'<li><input type="radio" name="gameplay" value="9">9</li>';
echo'<li><input type="radio" name="gameplay" value="10">10</li>';
echo'</ul>';

echo"</td>";

echo"<td>";

echo"<ul>";
echo'Competitiveness';
echo'<li><input type="radio" name="challenge" value="1">1</li>';
echo'<li><input type="radio" name="challenge" value="2">2</li>';
echo'<li><input type="radio" name="challenge" value="3">3</li>';
echo'<li><input type="radio" name="challenge" value="4">4</li>';
echo'<li><input type="radio" name="challenge" value="5">5</li>';
echo'<li><input type="radio" name="challenge" value="6">6</li>';
echo'<li><input type="radio" name="challenge" value="7">7</li>';
echo'<li><input type="radio" name="challenge" value="8">8</li>';
echo'<li><input type="radio" name="challenge" value="9">9</li>';
echo'<li><input type="radio" name="challenge" value="10">10</li>';
echo'</ul>';

echo"</td>";
echo "<tr>";
echo "<td>";

echo"<input name='submitbutton' type='submit' value='Επιλογή' />";
echo"</td>";
echo "</tr>";

echo"</table>";

echo'</form>';

$or=$_POST['originality'];
$ga= $_POST['gameplay'];
$ch= $_POST['challenge'];
$vg= $_POST['videogames'];

if(!isset($_POST['originality']) || !isset($_POST['gameplay']) || !isset($_POST['challenge']) ) {
echo "<p>Select the 3 ratings:</p>";
}

	$ip=$_SERVER['REMOTE_ADDR'];
	
	$results=mysql_query("SELECT * FROM vote
	WHERE ip='$ip'
	AND game='$vg';", $con);
	
	$rows = mysql_fetch_array($results);
	
	$num_of_results = mysql_num_rows($results); 

	if ($num_of_results==0) {
	$sum_all=$_POST['originality']+$_POST['challenge']+$_POST['gameplay'];
	echo $sum_all;
	mysql_query("UPDATE candidate SET	
	sum1 = sum1 + '$or',
	sum2 = sum2 + '$ga',
	sum3 = sum3 + '$ch',
	sum_all = sum_all + '$sum_all',
	users_voted = users_voted + '1'
	WHERE name = '$vg'", $con);
	
	
	mysql_query("INSERT INTO vote(id,game,ip)
	VALUES ('NULL','$vg', '$ip')", $con);
	
	die("<p> You've rated successfully! <a href='candidates.php'>Click here</a> to return to the voting page.</p>") ;	
	}
	else {
	
	echo'<p>If you\'ve already voted this game from the same IP, your new vote won\'t be counted.</p>';
	
	}	
}
?>