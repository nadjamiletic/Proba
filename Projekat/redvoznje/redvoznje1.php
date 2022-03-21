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
	<link rel=Stylesheet type ="text/css" href="../csslog/html5_tables.css">
	<link rel=Stylesheet type ="text/css" href="../csslog/kontakt.css">
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>

 






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
				</form>
			</div>

			<h1>RED VOŽNJE </h1>

			<p><br /></p>

			<form action="" method="post" name="unos">
				<?php
					include"../conn.php" ;
					$stmt = $dbh->prepare('select stanicaid, imes from stanica order by imes');
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$stmt->execute();
					$data = $stmt->fetchAll();
				?>
				<label>Od Stanice:</label>
				<select class="easyui-combobox" required="true" name="od" style="width:200px;">
					<?php foreach ($data as $row): ?>
						<option><?=$row["imes"]?></option>
					<?php endforeach ?>
				</select>	

				<?php
					include"../conn.php" ;
					$stmt = $dbh->prepare('select stanicaid, imes from stanica order by imes');
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$stmt->execute();
					$data = $stmt->fetchAll();		  
				?>
				<label>Do Stanice:</label>
				<select class="easyui-combobox" required="true" name="do" style="width:200px;">		
					<?php foreach ($data as $row): ?>
						<option><?=$row["imes"]?></option>
					<?php endforeach ?>
				</select>	
		          <br />
                  <br />
				<p><input type="submit" name="upisi" value="Pronadji">
			</form>	
		</div>
		<br />
		<H3>
		<div id="tabela">
			<center> 
				<table>
					<?php
						if(isset($_POST['upisi']))
						{			
							$od1  = $_POST['od'];
							$do1  = $_POST['do'];
							$_GET['od'] = $od1;
							$_GET['do'] = $do1;
							include'rupit.php';
						}
					?>
				</table>
			</center>
        </div>
	<!--/div-->
	</H3>



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

			&copy CUATROMosqueteros <br />

			<br />

			<br />

			</p>

			</div>



   

</div><!-- End #wrapper -->



<script type="text/javascript" src="../js/slider.js"></script>





</body>



</html>

