<!DOCTYPE html>



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sr" lang="sr">



<head>







<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />




<!-- CSS-->

<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />

<link type="text/css" rel="stylesheet" href="../css/menu.css" />

<LINK REL=Stylesheet TYPE ="text/css" HREF="../csslog/html5_tables.css">

<LINK REL=Stylesheet TYPE ="text/css" HREF="../csslog/kontakt.css">

<!-- JavaScripts-->



<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>

<script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>

<script type="text/javascript" src="../js/banner.js"></script>





 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2r3cC91dz6rkOBwNlRiD7pnxhSePbAv8&callback=initMap"

  type="text/javascript"></script>
  

        







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
   
				<li><a href="../redvoznje/redvoznje1.php" class="drop">Red Vožnje</a></li>
    
				<li><a href="../mapa/mapa.php" class="drop">Mapa</a></li>
    
				<li><a href="../galerija.html" class="drop">Galerija</a></li>
    
				<li><a href="../kontakt.html" class="drop">Kontakt</a></li>
				
				<li><a href="../prijava/index.php" class="drop">Karta</a></li>

			</ul>
		</div>
		



<div class="standardni">

 

   <div id="rezultati">

    <form action="" method="post" name="unos">





			    </form></div>

<h1>Mapa </h1>





 

   <form action="" method="post" name="unos">

	

	<?php

		

		include"../conn.php" ;

		$stmt = $dbh->prepare('select stanicaid, imes from stanica order by imes');

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                $stmt->execute();

                $data = $stmt->fetchAll();

		

		?>

		

		<label>Izaberi Stanicu::</label>

				<select class="easyui-combobox" required="true" name="od" style="width:200px;">

				

                <?php foreach ($data as $row): ?>

                <option><?=$row["imes"]?></option>

                <?php endforeach ?>

				</select>	

	

				<input type="submit" name="upisi" value="Pronadji">

		



		

		

		

		

    </form></div>

		



<?php



        if(isset($_POST['upisi']))

		{		

		

			$od  = $_POST['od'];

			

		    $_GET['od'] = $od;

			

			include'mupit.php';

								

		}

		

		

        if (!empty($od)) {

        

        }

        else {

        

		$lat='43.32472';

		$lng='21.90333';

		$stanica='NIS';

        }

        

		

?>



<head> 

<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 

<title>Google Maps API</title> 

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>

</head> 



<?php







require_once '../Classes/class.MapBuilder.php';


$map = new MapBuilder();


$map->setApiKey('AIzaSyC2r3cC91dz6rkOBwNlRiD7pnxhSePbAv8');

$map->setCenter($lat, $lng);

$map->setMapTypeId(MapBuilder::MAP_TYPE_ID_ROADMAP);

$map->setSize(1000, 550);

$map->setZoom(15);

$map->addMarker($lat, $lng, array(

        'title' => $stanica

    ) );



$map->show();


?>



        </div>

</div></H3>


 </div>


<body>

<div id="googleMap" style="width:998px;height:480px;"></div>

</body>

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



<script type="text/javascript" src="js/slider.js"></script>





</body>



</html>

