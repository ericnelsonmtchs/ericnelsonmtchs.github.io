<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>A One Step Away</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
$to="duane.erickson@mtchs.org";
$subject="Formmail Message";
$from=$_REQUEST['emailAddress'];
$message="Name: ".$_REQUEST['fullName']."\nPhone: ".$_REQUEST['phoneNumber']."\nMessage: ".$_REQUEST['comments'];
mail($to,$subject,$message,$from);
?>
</head>

<body>

<div id="main">

			<div id="header">
				<h1>A One Step Away</h1>
				<a href="home.html"><img src="images/favicon.png"/></a>
				<h2>Bed - Breakfast - Lodging</h2>
			</div><!-- #BeginLibraryItem "/Library/menu.lbi" -->
<div id="nav">
				<ul>
					<li><a href="home.html">Home</a></li><li><a href="history.html">History</a></li><li><a href="pictures.html">Pictures</a></li><li><a href="rooms.html">Rooms</a></li><li><a href="sales.html">Sales</a></li>
				</ul>
			</div><!-- #EndLibraryItem -->
			<div id="sent">
			<p>Your message has been sent! Thank you for your time.</p>
			</div>
			<div id="info">
				<p>For more information on amenities, rates, or reservation for a room, call us at:</p>
				<br>
				<p>(208)-392-4938</p>
				<br>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:80%;margin:auto;"><div id="gmap_canvas" style="border:1px solid black;height:400px;width:80%;margin:auto;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">themecircle.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(43.8265877,-115.83565290000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.8265877, -115.83565290000001)});infowindow = new google.maps.InfoWindow({content:"<b>Rental Property</b><br/>112 Cottonwood Street<br/>83631 Idaho City" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			</div>
			<div id="footer">
				<p>© 2015 A One Step Away</p>
			</div>
			</div>
			</body>
			</html>