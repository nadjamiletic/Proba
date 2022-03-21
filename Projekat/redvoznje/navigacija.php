<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sr" lang="sr">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../css/menu.css" />
<LINK REL=Stylesheet TYPE ="text/css" HREF="../csslog/html5_tables.css">
<LINK REL=Stylesheet TYPE ="text/css" HREF="../csslog/kontakt.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2r3cC91dz6rkOBwNlRiD7pnxhSePbAv8&callback=initMap"
  type="text/javascript"></script>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>       
              
 
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>

<script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>     




<script type="text/javascript" src="../js/jquery.mousewheel-3.0.4.pack.js"></script>

<script type="text/javascript" src="../js/fancyboxpack.js"></script>

<link rel="stylesheet" type="text/css" href="../css/fancybox.css" media="screen" />

<script type="text/javascript" src="../js/FancyBox.js"></script>

<link rel="stylesheet" type="text/css" href="../css/fancybox.css" media="screen" />   


<title>JUGOPREVOZ KRUSEVAC a.d. KRUSEVAC - &copy; 2019</title>
</head>

<body>

	<div id="wrapper">
		
		<div class="top"></div>
		<div id="nav">
			<ul id="menu">
				<li><a href="../onama.html" class="drop">O nama</a>
    
					<div class="dropdown_1column">
						<div class="col_1">
							<h2>Dobrodošli</h2>
							<ul class="simple">
								<li><a href="../onama.html">O nama</a></li>
								<li><a href="../video.html">Video</a></li>
							</ul>   
						</div>
					</div>
				</li>
   
				<li><a href="redvoznje1.php" class="drop">Red Vožnje</a></li>
    
				<li><a href="../mapa/mapa.php" class="drop">Mapa</a></li>
    
				<li><a href="../galerija.html" class="drop">Galerija</a></li>
    
				<li><a href="../kontakt.html" class="drop">Kontakt</a></li>
				
				<li><a href="../prijava/index.php" class="drop">Karta</a></li>

			</ul>
		</div>
		<div id="slider">
			<div id="slideshow">
				<div>
					<img src="../images/slider/3.jpg">
				</div>
				<div>
					<img src="../images/slider/s1.jpg">
				</div>
				<div>
					<img src="../images/slider/3.jpg">
				</div>
				<div>
					<img src="../images/slider/5.jpg">
				</div>
				<div>
					<img src="../images/slider/3.jpg">
				</div> 
				<div>
					<img src="../images/slider/1.jpg">
				</div>
				<div>
					<img src="../images/slider/3.jpg">
				</div> 
				<div>
					<img src="../images/slider/6.jpg">
				</div>

			</div>
		</div>



<div class="standardni">
 
   <div id="rezultati">
    <form action="" method="post" name="unos">
	<p>

			    </form></div>
<h1>NAVIGACIJA </h1>
<p><br />
 </p>
  
	



<?php

	$linija = $_GET["linija"];
	$brpol = $_GET["brpol"];

	require_once '../Classes/class.MapBuilder.php';

	$map = new MapBuilder();


	$map->setApiKey('AIzaSyC2r3cC91dz6rkOBwNlRiD7pnxhSePbAv8');

	$map->setMapTypeId(MapBuilder::MAP_TYPE_ID_ROADMAP);

	$map->setSize(930, 550);

	$map->setZoom(8);

	$servername = "mysql681.loopia.se";
	$username = "nadjanet@m49213";
	$password = "nadja.net";
	$dbname = "mmelektronik_net";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = ("SELECT redvoznje.linijaid as rbpolas, stanica.imes as name,redvoznje.brojpolaska as brpol,
				redvoznje.vreme as vreme, redvoznje.km as rastojanje,stanica.lat as lat,stanica.lng as lng
				FROM `redvoznje` LEFT JOIN stanica ON redvoznje.stanicaid=stanica.stanicaid LEFT JOIN linija on redvoznje.linijaid=linija.linijaid
				where redvoznje.linijaid='$linija' and redvoznje.brojpolaska='$brpol' ORDER BY redvoznje.brojpolaska, redvoznje.vreme ");
 
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
     
		while($row = $result->fetch_assoc()) 
		{	 
			$map->addMarker($row['lat'], $row['lng'], array('title' => $row['name']));
		}
		$map->show();
	}
	else 
	{
		echo "0 results";
	}

?>

</div>


 

<div class="footer">


<div>
<a href="mailto:ksprevoz@tehnicom.net"><img src="../images/main/poruka.jpg" width="233" height="109" /></a>
</div>

<div>
<a href="https://www.youtube.com/"><img src="../images/main/yt.png" width="233" height="109" /></a>
</div>

<div>
<a href="https://www.facebook.com/JugoprevozKS?fref=ts"><img src="../images/main/fb.jpg" width="233" height="109" /></a>
</div>


<div>
<a href="http://www.elfak.ni.ac.rs/cir/"><img src="../images/main/elfak.png" width="233" height="109" /></a>
</div>


</div>

<div class="footer">
<p align="center"><br />
&copy 2019 CuatroMosqueteros <br />
<br />
<br />
</p>
</div>

   
   </div><!-- End #wrapper -->

<script type="text/javascript" src="../js/slider.js"></script>


</body>

</html>
