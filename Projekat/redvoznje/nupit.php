

<html>
<head>
<style type="text/css">
#gallery {
  width: 800px; height: 300px;
 
  left: 50%;
  margin: 0 auto;
}
body {background-color:#0000FF;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Red voznje</title>


</head>

<body> 


<?php

$linija = $_GET["linija"];
$brpol = $_GET["brpol"];
//echo $linija;
mb_internal_encoding( 'UTF-8' );

$servername = "mysql681.loopia.se";
$username = "nadjanet@m49213";
$password = "nadja.net";
$dbname = "mmelektronik_net";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
       
      
 
$sql = (" SELECT redvoznje.linijaid as rbpolas, stanica.imes as stanica,redvoznje.brojpolaska as brpol, redvoznje.vreme as vreme,
 redvoznje.km as rastojanje,stanica.lat as latituda,stanica.lng as longituda FROM `redvoznje` LEFT JOIN stanica
 ON redvoznje.stanicaid=stanica.stanicaid LEFT JOIN linija on redvoznje.linijaid=linija.linijaid where redvoznje.linijaid=$linija and redvoznje.brojpolaska=$brpol
 ORDER BY redvoznje.brojpolaska, redvoznje.vreme  ");
$result = $conn->query($sql);
$_GET["kordinate"]=array();
$i=0;
if ($result->num_rows > 0) {
     //echo "<centar><table><tr><th>Stanice</th><th>latituda</th><th>longituda</th></tr>";
      //output data of each row
     while($row = $result->fetch_assoc()) {
       // echo "<tr><td>" . $row["stanica"]. "</td><td> " . $row["latituda"]. "</td><td> " . $row["longituda"]. "</td></tr>";
	   //vraca lat i long iskljuci
         //echo $row["latituda"];
        //echo $row["longituda"];
		$_GET["kordinateLAT"][$i]=  $row["latituda"]; 
		
		$_GET["kordinateLNG"][$i++]=  $row["longituda"]; 		
		
		
     }
     echo "</table></centar>";
} else {
     echo "0 results";
}



?> 

</body>
</html>

