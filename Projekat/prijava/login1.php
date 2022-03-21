<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NOVI NALOG</title>
    <link href="stil/glavni-stil.css" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../css/menu.css" />   
        
<?php
if(isset($_POST['submit']))
{
    $obavezna_polja = array('korisnicko', 'ime', 'prezime', 'email', 'telefon', 'grad', 'sifra', 'sifra1');
    $error = false;
    $error2 = false;
    $regex = "/^\/[\s\S]+\/$/";
    // provera da li su polja popunjena
    foreach($obavezna_polja as $polja) {
        if (empty($_POST[$polja])) {
            $error = true;
        }
    }
    if ($error) {
        echo "UNESITE SVA POLJA !";
    } else {
        foreach($obavezna_polja as $polja) {
            if (@preg_match($regex, $_POST[$polja])) {
                $error2 = true;
            }
        }
    }
    if ($error2) {
        echo "UNESITE SVA POLJA ISPRAVNO !";
    }else {
        $korisnicko = $_POST["korisnicko"];
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $email = $_POST["email"];
        $telefon = $_POST["telefon"];
        $grad = $_POST["grad"];
        $sifra = $_POST["sifra"];
        $sifra1 = $_POST["sifra1"];
        if ($sifra == $sifra1) {
            $siframd5 = md5($sifra);
            ubaci_korisnika_u_bazu($korisnicko, $ime, $prezime, $email, $telefon, $grad, $siframd5);
            $_SESSION ["korisnicko"] = $korisnicko;
            $_SESSION ["siframd5"] = $siframd5;
            //
        } else {
            echo "SIFRE SE NE POKLAPAJU, UNESITE IH PONOVO !";
        }

    }

}
function ubaci_korisnika_u_bazu($korisnicko, $ime, $prezime, $email, $telefon, $grad, $sifra)
{
    $servername = "mysql681.loopia.se";
    $username = "nadjanet@m49213";
    $password = "nadja.net";
    $dbname = "mmelektronik_net";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Neuspela konekcija na bazu: " . $conn->connect_error);
    }

    $sql = "INSERT INTO korisnici (korisnicko, ime, prezime, email, telefon, grad, sifra)
    VALUES ('$korisnicko','$ime','$prezime','$email','$telefon','$grad','$sifra')";

    if ($conn->query($sql) === TRUE) {
        echo "Novi rekord je uspesno upisan!";
		header( "Location: ./login.php" );
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
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
<form name="registracija" action="" method="post"><br/>
        <div style="width:300px">Korisnicko ime:&nbsp; <input style="float:right" type="text" name="korisnicko" align="right"></div><br />
        <div style="width:300px">Ime:&nbsp;<input style="float:right" type="text" name="ime" align="right"></div><br />
        <div style="width:300px">Prezime:&nbsp; <input style="float:right" type="text" name="prezime" align="right"></div><br />
        <div style="width:300px">Email:&nbsp;<input style="float:right" type="text" name="email" align="right"></div><br />
        <div style="width:300px">Telefon:&nbsp; <input style="float:right" type="text" name="telefon" align="right"></div><br />
        <div style="width:300px">Grad:&nbsp;<input style="float:right" type="text" name="grad" align="right"></div><br />
        <div style="width:300px">Sifra:&nbsp;<input style="float:right" type="password" name="sifra" align="right"></div><br />
        <div style="width:300px">Ponovi sifru:&nbsp;<input style="float:right" type="password" name="sifra1" align="right"></div><br />
<input type="submit" name="submit" value="Registracija" align="right"><br/>
</form>


</div>

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





