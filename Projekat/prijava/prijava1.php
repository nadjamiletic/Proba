<!doctype html>
<html>
<head>
<STYLE>
<!--
TD{font-family: Arial; 
   font-size: 8pt;
   border: 1px solid black;
   border-collapse: collapse;
   word-wrap: break-word;}
TH{font-family: Arial; 
    font-size: 9pt;
    border: 1px solid black;}
--->
TABLE
{


    
    border-collapse: collapse;
    border: 1px solid black;
    padding: 1px;
    table-layout: fixed;
    width: 100px;

}

.loader {
	position: fixed;
	left: 150px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('loader_blue.gif') 50% 50% no-repeat rgb(249,249,249);
}


@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

table.sample {
	border-width: 0px;
	border-spacing: 0px;
	border-style: outset;
	border-color: gray;
	border-collapse: separate;
	background-color: white;
}
table.sample th {
	border-width: 0px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
table.sample td {
	border-width: 0px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}

table.sample1 {
	border-collapse: collapse;
	border-width: 1px;
	border-spacing: 0px;
	border-style: outset;
	border-color: gray;
	
	background-color: white;
}
table.sample1 th {
	border-collapse: collapse;
	border-width: 1px;
	padding: 0px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
table.sample1 td {
	border-collapse: collapse;
	border-width: 1px;
	padding: 2.5px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #8c8c8c;
  color: black;
}
</STYLE>
    <meta charset="utf-8">
    <title>Karta</title>
    <link href="stil/glavni-stil.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();

if(!isset($_SESSION['ime']))
	header("Location: ./index.php");
$s_ime = $_SESSION['ime'];
$s_prezime = $_SESSION['prezime'];
$s_grad = $_SESSION['grad'];
$s_email = $_SESSION['email'];
$s_id = $_SESSION['id'];
$s_login = $_SESSION['login'];

?>

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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>  
<script type="text/javascript" src="../js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../js/fancyboxpack.js"></script>
<link rel="stylesheet" type="text/css" href="../css/fancybox.css" media="screen" />
<script type="text/javascript" src="../js/FancyBox.js"></script>

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
 <script>

   $(function() {
   var datum1 = $('#datepicker1').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    });
  $(document).ready(function() {
    $("#datepicker1").datepicker();
	
	 var datum2 = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    });
  $(document).ready(function() {
    $("#datepicker").datepicker();
	
  });
  </script> 
<link rel="stylesheet" type="text/css" href="../css/fancybox.css" media="screen" />    
        
<title>JUGOPREVOZ KRUSEVAC a.d. KRUSEVAC - &copy; 2019</title>
</head>

<body>

	<div id="wrapper">
		
		<div class="top">


</div>
<div id="nav">
<ul id="menu">
    
   

<li>
<a href="index.php" class="drop">ODJAVI SE</a>
</li>
<li>
<a href="#" class="drop">KORISNIK: <?php echo $s_ime." ".$s_prezime?></a>
</li>

</ul>
</div> <!-- end #nav -->

 

<div class="standardni">

<?php  
include '../conn1.php';
echo "<br/>";
$odstan = $_GET["odstan"];
$dostan = $_GET["dostan"];
$vreme = $_GET["vreme"];
$brpol = $_GET["brpol"];


$sql = "SELECT * FROM`cenovnik` WHERE
    stanicaod LIKE '$odstan' AND stanicado LIKE '$dostan' AND polazak LIKE '$brpol' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
	
while($row = $result->fetch_assoc())
	 {
$cenovnikid = $row['cenovnikid'];       
$cena = $row['cena'];
$kola = $row['kola'];

}
} else {
  echo "nema rezultata";
}

$sql = "SELECT * FROM`kola` WHERE registracija LIKE '$kola'  ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
	
while($row = $result->fetch_assoc())
	 {
$brojsedista = $row['brojsedista'];       


}
} else {
  echo "nema rezultata";
}


echo "<table align='left' id='customers'>";
echo "<tr>";
echo "<td>
A.D. JUGOPREVOZ KRUSEVAC</br>
PIB:100477562; MATIČNI BROJ: 07292660<br>
TEKUĆI RAČUN:  <br>
Komercijalna banka:205-1754-64 <br>
Aik banka A.D. Beograd: 105-70190-46<br>
 </td>";
echo "</tr>";
echo "</table>";

$datums=date("Y/m/d") ;
//racun
echo "<table align='left' id='customers'>";
echo  "<tr>";
echo "<td>KARTA</br>
Mesto izdavanja: KRUŠEVAC  </br>
Datum izdavanja: $datums    </br>
Valuta: Dinar </br>
</td>";
echo "</tr>";
echo "</table>";

//kupac
echo "<table align='right' id='customers'>";
echo  "<tr>";
echo "<th>KUPAC: $s_ime $s_prezime</th>";
echo "</tr>";

echo  "<tr>";
echo "<td>MESTO:$s_grad<br>
GRAD:$s_grad <br>
Email:$s_email<br>

</td>";
echo "</tr>";
echo "</table>";
                                          
echo "<br />";

$cena = number_format((float)$cena , 2, '.', '');

$counter = 1;

//echo "<br />";
//echo "<br />";
//echo "<br />";
//echo "<br />";
//echo "<br />";
//echo "<br />";
//tabela
echo "<table align='center' id='customers'>";
echo  "<tr>";
echo "<th>R.br.</th>";
echo "<th>Od stanice</th>";
echo "<th>Do stanice</th>";
echo "<th>Vreme polaska</th>";
echo "<th>Kola</th>";
echo "<th>Prodajna cena</th>";
echo "<th>Broj polaska</th>";
echo "</tr>";

echo "<tr>";
echo "<td>$counter</td>";
echo "<td>$odstan</td>";
echo "<td>$dostan</td>";
echo "<td>$vreme</td>";
echo "<td>$kola</td>";
echo "<td>$cena</td>";
echo "<td>$brpol</td>";
echo "</tr>";
echo "</table>";
                                          
echo "<br />";
echo "<br />";
echo "<br />";
 
if(isset($_POST['kupi']))
	
		{		
		
		    $datum1 = $_POST['datum1'];
            $racun = $_POST['racun'];
			
			$_GET['datum1'] = $datum1;
			$_GET['cenovnikid'] = $cenovnikid;
			$_GET['korisnikid'] = $korisnikid;
			$_GET['kola'] = $kola;
			$_GET['racun'] = $racun;
			include'kupi.php';
			
		}
if(isset($_POST['rezervisi']))
	
		{		
		
		    $datum1 = $_POST['datum1'];
           
			
			$_GET['datum1'] = $datum1;
			$_GET['cenovnikid'] = $cenovnikid;
			$_GET['korisnikid'] = $korisnikid;
			$_GET['kola'] = $kola;
			include'rez.php';
			
		}		
?>

<form action="" method="post" name="unos">

<p> Datum Polaska:     
	<input id="datepicker" name="datum1"/>
	RACUN:&nbsp; <input type="text" name="racun" align="right">
</p>
  
<p>
  <input type="submit" name="kupi" value="KUPI">
</p>
<p>
  <input type="submit" name="rezervisi" value="REZERVISI">
</p>

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

<script type="text/javascript" src="js/slider.js"></script>


</body>

</html>


