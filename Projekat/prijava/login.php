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
   
				<li><a href="../redvoznje/redvoznje1.php" class="drop">Red Vožnje</a></li>
    
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

<h1>Prijava naloga</h1>

<form name="logovanje" action="sigurnastrana.php" method="post">
<p>Korisnicko ime: &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="korisnicko" align="right" required></p>

<p>Unesite vasu sifra: 
<input type="password" name="sifra" align="right" required></p>

<p><input type="submit" value="Prijavi se" align="right"></p>

</form>


</div>
	
	<?php	
		if($_GET['pogresnaSifra'] == true)
			echo "<script type='text/javascript'>alert('Uneli ste pogresnu sifru ili korisnicko ime')</script>"; 
	?>


<div class="footer">
<p align="center"><br />
&copy 2019 Cuatro Mosqueteros <br />
<br />
<br />
</p>
</div>

   
   </div><!-- End #wrapper -->

<script type="text/javascript" src="../js/slider.js"></script>


</body>

</html>
