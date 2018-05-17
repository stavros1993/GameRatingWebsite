<HTML>

<HEAD> 

<link rel="stylesheet" type="text/css" href="trial.css" />
 
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
if($_SESSION['username']) {
echo "Καλως ήρθες, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>"; }
?>
<style>

 p.info {padding:0cm 8cm;}	

</style>
</HEAD>
<BODY>
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
</td>
</tr>
</table>

<p class="info">

</p>
<p class="info">

eSports are a form of competition using video games. Most commonly, eSports take the form of organized, multiplayer video game competitions, particularly between professional players. The most common video game genres associated with eSports are real-time strategy (RTS), first-person shooter (FPS), fighting, and multiplayer online battle arena (MOBA). Tournaments such as The International, the League of Legends World Championship, the Evolution Championship Series and the Intel Extreme Masters provide live broadcasts of the competition, and prize money to competitors.

</p>
<p class="info">

Although organized online and offline competitions have long been a part of video game culture, these were largely between amateurs until the late 2000s when participation by professional gamers and spectatorship in these events saw a large surge in popularity. Many game developers now actively design toward a professional eSport subculture.

</p>

<p class="info">

The genre of fighting games and arcade game fighters have also been popular in amateur tournaments, although the fighting game community has often distanced themselves from the eSports label. In the mid-2010s, the most successful titles featured in professional competition were the multiplayer online battle arena (MOBA) games Dota 2 and League of Legends, and the first person shooter game Counter-Strike: Global Offensive. Other games with significant earnings include Call of Duty, Heroes of the Storm, Hearthstone, Overwatch, Smite and StarCraft II.

</p>

<p class="info">

In 2013, it was estimated that approximately 71.5 million people worldwide watched eSports. The increasing availability of online streaming media platforms, particularly Twitch.tv, has become central to the growth and promotion of eSports competitions. Demographically, Major League Gaming has reported viewership that is approximately 85% male and 15% female, with a majority of viewers between the ages of 18 and 34. Despite this, several female personalities within eSports are hopeful about the increasing presence of female gamers. South Korea has several established eSports organizations, which have licensed pro gamers since the year 2000. Recognition of eSports competitions outside South Korea has come somewhat slower. Along with South Korea, most competitions take place in Europe, North America and China. Despite its large video game market, eSports in Japan is relatively underdeveloped, which has been attributed largely to its broad anti-gambling laws which prohibit paid professional gaming tournaments.

</p>


<p class="info">
Log-in isn't required to vote for your favorite eSport. If you want to log in or create an account to add new games to the voting list, you can <table align="center"><tr><form action='register.php' method='POST'> <INPUT type="submit" name="Δημιουργία Λογαριασμού" value="Register"></form><form action='index.html' method='POST'> or <INPUT type="submit" name="Log-in" value="Log-in">.</form></tr></table>
</p>
<img src="https://esportswithfriends.com/wp-content/uploads/2017/03/5f762ac3e149bf9375c0bc2588308429-1.jpg" arena align="center" hspace=" 300" width="1050" height="480"/>

<html>
<body>

</body>
</html>
</BODY>
</HTML>