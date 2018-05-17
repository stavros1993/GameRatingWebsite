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
header('Content-type: text/plain; charset=utf-8');

p {color:white;}

p.info {padding:0cm 8cm;}	
ul li
{
padding-top:0px;
padding-left:0px;
}

table th,td
{
border:2px solid black;
border-collapse:collapse;
}

.menu_new td
{
border:0px solid black;
}

h1 {text-align:initial}

</style>

<script type="text/javascript">

function popup(pUrl, pName, pWidth, pHeight, pScroll)
{
	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;
	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;
	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';
	win = window.open(pUrl, pName, settings)
}

</script>
</script>  
</script>

<link rel="stylesheet" type="text/css" href="trial.css" />

</head>

<body bgcolor=#C0C0C0>

<script type="text/javascript" src="open_image_on_click.js"></script>

<title> Images </title>

 
<table class="menu_new">
<tr >

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
<img src="http://designwebsiteblog.com/wp-content/uploads/2012/10/03/1290wordpress-youtube-gallery-big.jpg" height="100" width="800" align="right" hspace="300">
</td>
<td>
<marquee direction="down" width="240" height="60" behavior="alternate" style="border:solid">
  <marquee behavior="alternate">
   <a href="http://na.lolesports.com/">League of Legends tournament of the current season</a> 
<marquee></marquee>
</td>
</tr>
</table>

<table class="images" align="center">

<tr>

<th> DOTA 2 - <a href="http://blog.dota2.com/">Official site</a></th>
<th>League of Legends - <a href="http://na.leagueoflegends.com/">Official site</a></th>
<th> StarCraft II - <a href="http://us.battle.net/sc2/en//">Official site</a></th>
<th> Hearthstone- <a href="http:/http://us.battle.net/hearthstone/en//">Official site</a>  </th>

</tr>

<td align="center" valign="center">

<img src="https://static-cdn.jtvnw.net/ttv-boxart/Dota%202.jpg" width="200" height="200"onclick="popup(this.src,'name','1200','650','no')" /> 

<br/>
</td>

</td>

<td  align="center" valign="center">
<img src="http://news.cdn.leagueoflegends.com/public/images/misc/GameBox.jpg" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')" /></a>
<br/>
</td>

<td  align="center" valign="center">
<img src="http://upload.wikimedia.org/wikipedia/en/2/20/StarCraft_II_-_Box_Art.jpg" width="200" height="200"  onclick="popup(this.src,'name','1200','650','no')"/>
<br/>
</td>

<td  align="center" valign="center">
<img src="https://is3-ssl.mzstatic.com/image/thumb/Purple128/v4/5a/67/02/5a670294-229e-c44d-ded4-22083365fd48/mzl.fqntrgwg.jpg/643x0w.jpg" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')"/>
<br/>
</td>
 

</tr>

<td align="center" valign="center">
<img src="http://www.doteros.com/wp-content/uploads/2013/07/dota2_father_of_dragons_por_dotapremierleague_2.jpg" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')" />
<br/>

</td>

<td  align="center" valign="center">
<img src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/LolGameInfo-Harbinger/en_US/8588e206d560a23f4d6dd0faab1663e13e84e21d/assets/assets/images/gi-landing-top.jpg" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')" />
<br/>

</td>

<td  align="center" valign="center">
<img src="http://img3.wikia.nocookie.net/__cb20080511221659/starcraft/images/c/cb/Screenshot_SC2_DevGame1.jpg" width="200" height="200"  onclick="popup(this.src,'name','1200','650','no')"/>
<br/>

</td>

<td  align="center" valign="center">
<img src="http://www.blogcdn.com/wow.joystiq.com/media/2013/03/jainahearthstone4.png" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')" />
<br/>

</td>

<tr>

<td align="center" valign="center">
<img src="http://4.bp.blogspot.com/-MUNrggQPYUY/UY_SN3sCyXI/AAAAAAAAA6Y/Bi-JebJrmlk/s640/dota2-2.jpg" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')"/>
<br/>

</td>


<td  align="center" valign="center">
<img src="http://www.blogcdn.com/massively.joystiq.com/media/2011/11/league.jpg" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')" />
<br/>

</td>

<td  align="center" valign="center">
<img src="http://ecx.images-amazon.com/images/I/611he05az8L.jpg" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')"  />
<br/>

</td>

<td  align="center" valign="center">
<img src="http://www.toptiertactics.com/wp-content/uploads/2013/12/hearthstone-cards-ccg-tcg-700x352.png" width="200" height="200" onclick="popup(this.src,'name','1200','650','no')"/>
<br/>
</td>

</tr>

</table>


<p class="info" style="font-family:arial;color:black;font-size:15px;">In order to <b> download </b> pictures,artwork etc, and to watch related videos, use the following links:<a href="http://na.leagueoflegends.com/en/media/">League of Legends Media </a>,<a href="http://steamcommunity.com/app/570/screenshots/">DOTA 2 Screenshots</a>, <a href="http://steamcommunity.com/app/570/images/"> Artwork</a>, <a href="http://steamcommunity.com/app/570/videos">Videos</a>,<a href="http://us.battle.net/sc2/en/media/">Starcraft II Media</a>,<a href="http://us.battle.net/hearthstone/en/media/">Hearthstone Media.</a></p>

</body>
</html>