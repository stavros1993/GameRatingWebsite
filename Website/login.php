<?php 
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password) //both have to be true to execute this block
{
//connect to db

$connect=mysql_connect("127.0.0.1","root","") or die("couldn't connect!");
mysql_select_db("phplogin") or die("Couldnt find db");

$query=mysql_query("SELECT * FROM users WHERE username='$username' ");

$numrows = mysql_num_rows($query);

if($numrows!=0)
{

	while ($row = mysql_fetch_assoc($query))
	{
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
	
	if($username==$dbusername&&(md5($password)==$dbpassword))
	{
	   echo "You've logged in! <a href='Homepage.php'>Click here</a> to treturn to the Homepage.";
	   $_SESSION['username']=$username;
	}
	else 
		echo "Wrong password.";
	}
	else
	die("The user with this password doesn't exist.");
	}
	else
	die("Enter the username and the password.");

?>