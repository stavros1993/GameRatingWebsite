<?php
error_reporting(E_ALL ^ E_NOTICE ^E_DEPRECATED);
session_start();
if($_SESSION['username']) {
echo "Welcome, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>"; }

$submit = $_POST['submit'];

//form data
$username = strip_tags($_POST['username']);
$first_name = strip_tags($_POST['first_name']);
$last_name = strip_tags($_POST['last_name']);
$username = strip_tags($_POST['username']);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);
$date = date("Y-m-d");

if ($submit)
{

$connect=mysql_connect("127.0.0.1","root","");
mysql_select_db("phplogin"); //select db

$namecheck = mysql_query("SELECT username FROM users WHERE username = '$username'");
$count = mysql_num_rows($namecheck);
 
if($count!=0)
{
die("The Username is already in use.");

}
//check for existance
if($first_name&&$username&&$password&&$repeatpassword&&$last_name&&email)
{

if($password==$repeatpassword)
{
if(strlen($username)>30||strlen($first_name>20)||strlen($last_name>20))
{
echo '<script language="javascript">';
echo 'alert("The username or your name has too many characters !")';
echo '</script>';
}
else {
if(strlen($password)>25||strlen($password)<6)
{
echo '<script language="javascript">';
echo 'alert("Your password must be between 6 and 25 characters long")';
echo '</script>';

}
else
{ 
$password = md5($password);
$repeatpassword = md5($repeatpassword);

$queryreg = mysql_query("

INSERT INTO users VALUES ('NULL','$first_name','$last_name','$username','$password','$date','$email')

");

die("You've successfully create your account! <a href='index.html'>Please login </a>");
}
}
}
else  
echo '<script language="javascript">';
echo 'alert("Your password isn\'t correct")';
echo '</script>';
}
else
echo '<script language="javascript">';
echo 'alert("Please fill in all fields")';
echo '</script>';
}
?>

<html>
<head><link rel="stylesheet" type="text/css" href="trial.css" />
</head>
<body bgcolor=#C0C0C0>

<table>
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
<td>
<marquee direction="down" width="240" height="60" behavior="alternate" style="border:solid">
  <marquee behavior="alternate">
   <a href="http://na.lolesports.com/">League of Legends tournament of the current season</a> 
<marquee></marquee>
</td>
</tr>
</table>

<p>
<form action='register.php' method='POST'>
	<table align="center">
	<h1 align="center">Register</h1>;
		<tr>
			<td >
			First Name:
			</td>
			<td>
			<input type='text' name= 'first_name' value='<?php echo $first_name;  ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Last Name:
			</td>
			<td>
			<input type='text' name='last_name' value= '<?php echo $last_name;  ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Username:
			</td>
			<td>
			<input type='text' name='username' value= '<?php echo $username;  ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Choose a password:
			</td>
			<td>
			<input type='password' name='password'> 
			</td>
		</tr>
		<tr>
			<td>
			Repeat your Password:
			</td>
			<td>
			<input type='password' name='repeatpassword'>
			</td>
		</tr>
		<tr>
		<tr>
			<td>
			E-mail:
			</td>
			<td>
			<input type='text' name='email' value= '<?php echo $email;  ?>'>
			</td>
		</tr>
		<td align="center">
		<INPUT type="reset" name="Clear_Form" value="Clear">
		</tr>
		<tr>
	    <td align="center">
		<INPUT type="submit" name="submit" value="Submit">
		</td>
		</tr>
	</table>
</p>
</html>