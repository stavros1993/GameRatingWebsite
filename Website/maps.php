<html>
<head>
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
if($_SESSION['username']) {
echo "Welcome, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>"; }
?>
<style>
header('Content-type: text/plain; charset=utf-8');
p {color:green;}
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCatE4JSXhSxv4A4rOyEpYYa-lx4K5Fc3Y" type="text/javascript"></script>
<script type="text/javascript">
var googleMarkerPoints = [];
var index = 0;
var map;

var markers = [
    {
        "title": 'Staples Center',
        "lat": '34.043056',
        "lng": '-118.267222',
        "description": 'Staples Center, officially stylized as STAPLES Center, is a multi-purpose sports arena in Downtown Los Angeles. Adjacent to the L.A. Live development, it is located next to the Los Angeles Convention Center complex along Figueroa Street. The arena opened on October 17, 1999, and is one of the major sporting facilities in the Greater Los Angeles Area. <br><img src="http://upload.wikimedia.org/wikipedia/commons/6/64/ClippersStaples.JPG" alt="facade" height="100" width="120">',
        "type": 'Στάδιο'
    },
        {
            "title": 'Spodek',
            "lat": '50.265997',
            "lng": '19.024711',
            "description": 'Spodek is a multipurpose arena complex in Katowice, Poland, opened in 1971. Aside from the main dome, the complex includes a gym, an ice rink, a hotel and three large car parks. It was the largest indoor venue of its kind in Poland until it was surpassed by Krakow Arena in 2014.<br><img src="http://upload.wikimedia.org/wikipedia/commons/e/e0/Katowice_Spodek-_Nowa_elewacja.jpg" alt="facade" height="100" width="120">',
            "type": 'Στάδιο'
        },
    {
        "title": 'Blizzard Entertainment Headquarters',
        "lat": '33.8',
        "lng": '-117.822125',
        "description": 'Blizzard Entertainment, Inc. is an American video game developer and publisher based in Irvine, California, and is a subsidiary of the American company Activision Blizzard. <br><img src="http://upload.wikimedia.org/wikipedia/commons/b/b2/Blizzard_Entertainment_Logo.svg" alt="logo" height="100" width="120"> ',
        "type": 'Developer'
    },
        {
            "title": 'Riot Games',
            "lat": '33.669515',
            "lng": '-117.822125',
            "description": 'Riot Games is an American video game developer, publisher, and eSports tournament organizer established in 2006. The company is primarily known for League of Legends, which was released in North America and Europe on October 27, 2009.  <br><img src="http://www.blogcdn.com/massively.joystiq.com/media/2011/10/riot-1318450508.jpg" alt="logo" height="100" width="120"> ',
            "type": 'Developer'
        },
        {
            "title": 'Valve Corporation',
            "lat": '47.614028',
            "lng": '-122.194015',
            "description": ' Valve Corporation is an American video game developer and digital distribution company headquartered in Bellevue, Washington.It is the developer of the software distribution platform Steam and the Half-Life, Counter-Strike, Portal, Day of Defeat, Team Fortress, Left 4 Dead, and Dota 2 games. <br><img src="http://upload.wikimedia.org/wikipedia/commons/a/ab/Valve_logo.svg" alt="logo" height="100" width="120"> ',
            "type": 'Developer'
        }
    ];
	
window.onload = function () {
	document.getElementById("CheckAll").checked = true;
	document.getElementById("Developers").checked = false;
	document.getElementById("Stadiums").checked = false;
	
    var mapOptions = {
        center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var infoWindow = new google.maps.InfoWindow();
    var latlngbounds = new google.maps.LatLngBounds();
    map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
    var i = 0;
    var interval = setInterval(function () {
        var data = markers[i];
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var icon = "";
        switch (data.type) {
            case "Στάδιο":
                icon = "red";
                break;
            case "Developer":
                icon = "blue";
                break;
        }
        icon = "http://maps.google.com/mapfiles/ms/icons/" + icon + ".png";
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: data.title,
            animation: google.maps.Animation.DROP,
            icon: new google.maps.MarkerImage(icon)
        });
		googleMarkerPoints[index++] = marker;

        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent(data.description);
                infoWindow.open(map, marker);
            });
        })(marker, data);
        latlngbounds.extend(marker.position);
        i++;
        if (i == markers.length) {
            clearInterval(interval);
            var bounds = new google.maps.LatLngBounds();
            map.setCenter(latlngbounds.getCenter());
            map.fitBounds(latlngbounds);
        }
    }, 80);
}

	function myFunction1() {
		if (document.getElementById("Stadiums").checked == true){
			googleMarkerPoints[0].setMap(map); 
			googleMarkerPoints[1].setMap(map);
			if(document.getElementById("Developers").checked == true) document.getElementById("CheckAll").checked = true;
		}
		else {
			googleMarkerPoints[0].setMap(null); 
			googleMarkerPoints[1].setMap(null);
			document.getElementById("CheckAll").checked = false;
		}
	}
 
	 
	function myFunction2() {		
		if (document.getElementById("Developers").checked == true){
			googleMarkerPoints[2].setMap(map); 
			googleMarkerPoints[3].setMap(map);
			googleMarkerPoints[4].setMap(map);
			if(document.getElementById("Stadiums").checked == true) document.getElementById("CheckAll").checked = true;
		}
		else {
			googleMarkerPoints[2].setMap(null); 
			googleMarkerPoints[3].setMap(null);
			googleMarkerPoints[4].setMap(null);	
			document.getElementById("CheckAll").checked = false;
		}
	}


	function myFunction3() {
		if (document.getElementById("CheckAll").checked == true){
			googleMarkerPoints[0].setMap(map); 
			googleMarkerPoints[1].setMap(map);
			googleMarkerPoints[2].setMap(map); 
			googleMarkerPoints[3].setMap(map);
			googleMarkerPoints[4].setMap(map);
			document.getElementById("Developers").checked = true;
			document.getElementById("Stadiums").checked = true;
		}
		else {
			googleMarkerPoints[0].setMap(null); 
			googleMarkerPoints[1].setMap(null);
			googleMarkerPoints[2].setMap(null); 
			googleMarkerPoints[3].setMap(null);
			googleMarkerPoints[4].setMap(null);
			document.getElementById("Developers").checked = false;
			document.getElementById("Stadiums").checked = false;
		}
	}

</script>

<link rel="stylesheet" type="text/css" href="trial.css" />

</head>

<body>
<body bgcolor=#C0C0C0>

<table class="menu_new">
<tr >

<td>

<ul class="Periexomena" align="top">      
 <li><a href="Homepage.php">Homepage</a></li>
 <li><a href="maps.php">Map</a></li>
 <li><a href="candidates.php">Games List - Votes</a></li> 
 <li><a href="images_media.php">Pictures,Media and Links</a></li>
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

    <tr align="top">

	<td align="right">
      <td align="right"id="dvMap" style="width: 1300px; height: 760px">
        </td>
    </td>
    <td valign="top">
        <u>Legend:</u><br />
        <img alt="" src="http://maps.google.com/mapfiles/ms/icons/red.png" />
        Stadium<br />
        <img alt="" src="http://maps.google.com/mapfiles/ms/icons/blue.png" />
        Developer<br />
    
	
	         <p><b>Points of Interest:</b> </p>
	<form action="">
	<input type="checkbox" name="group" id="CheckAll" value="Devs" onClick = "myFunction3();">Select/Deselect all<br>  
	<input type="checkbox" name="group" id="Stadiums" value = "Stadiums" onClick="myFunction1();">Stadiums<br>  
	<input type="checkbox" name="group" id="Developers" value="Devs" onClick = "myFunction2();">Gaming developers 

	</td>
	</tr>
	</form>
  </table>
  
