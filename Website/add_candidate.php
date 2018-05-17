<?php
//only members can access this page!!!
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);

if($_SESSION['username']) {
echo "Welcome, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>"; 
$submit = $_POST['submit'];

$name = strip_tags($_POST['name']);
$category = strip_tags($_POST['category']);
//$last_name = strip_tags($_POST['last_name']);

if ($submit)
{
$connect=mysql_connect("127.0.0.1","root","");
mysql_select_db("phplogin"); //select db


$result=mysql_query("SELECT * FROM candidate", $con);
$row = mysql_fetch_array($result);

$namecheck = mysql_query("SELECT name FROM candidate WHERE name = '$name'");
$count = mysql_num_rows($namecheck);
 
 
if((strcasecmp($category,"Shooter")!=0)&&(strcasecmp($category,"MOBA")!=0)&&(strcasecmp($category,"Strategy")!=0))
{
die ("Choose one of the following categories: Shooter, MOBA ή Strategy");
}
 
if($count!=0)
{
die("This game is already in the voting list.");
}
if($name&&$category)
{

if(strlen($name)>35||strlen($category>30))
{
echo "The name or category contains too many characters!";
}
else {
if(strlen($name)>35||strlen($name)<4)
{
echo "The title must be between 4 and 25 characters long";
}
else
{ 

$queryreg = mysql_query("

INSERT INTO candidate VALUES ('NULL','$name','$category','0','0','0','0','NULL','0')

",$connect);
die("You've added a candidate!<a href='Homepage.php'>Return to the Homepage</a>");
}
}
 }
else
echo "Fill in <b>όλα</b> all the fields!";

}

} else 
die ("Only registered members have access to this page!<a href='index.php'> Log-in </a>, <a href='register.php'>register</a> <a href='Homepage.php'>or return to the  Homepage </a>");

?>


<html>
<head>

</head>


<body bgcolor=#C0C0C0>

<table>
<link rel="stylesheet" type="text/css" href="trial.css" />
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
<img src="logo.jpg" alt="esports logo" border="5" hspace="310" >

</td>
</tr>
</table>

<form action='add_candidate.php' method='POST'>
	<table align="center">
		<tr >
			<td>
			Title:
			</td>
			<td>
			<input type='text' name= 'name' value='<?php echo $name;  ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Category:
			</td>
			<td>
			<input type='text' name='category' value= '<?php echo $category;  ?>'>
			</td>
		<tr>
			<td>
		<INPUT type="reset" name="Clear_Form" value="Clear field">
			</td>
			<td>
		<INPUT type="submit" name="submit" value="Submit data">
			</td>
		</tr>
	</table>
</form>
</html>