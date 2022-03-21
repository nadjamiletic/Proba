
<html>
<head>
<!--<style type="text/css">
#gallery {
  width: 800px; height: 300px;
 
  left: 50%;
  margin: 0 auto;
}
body {background-color:#0000FF;}
</style> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Red voznje</title>


</head>

<body>

<?php

$od = $_GET['od'];
$do = $_GET['do']; 
$uslov=$od;
$uslov1=$do;

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
         
 
$sql = ("SELECT redvoznje.linijaid as brlinije, stanica.imes as odstan,redvoznje.vreme as vreme,linija.krajnjas as dostan,
redvoznje.brojpolaska as brpol,redvoznje.km as rastojanje FROM `redvoznje` LEFT JOIN stanica ON
 redvoznje.stanicaid=stanica.stanicaid LEFT JOIN linija on redvoznje.linijaid=linija.linijaid where
 imes like '$uslov' and krajnjas like '$uslov1'");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      echo "<centar><table><tr><th>Itinerar</th><th>Navigacija</th><th>Od Stanice</th><th>Vreme Polaska</th><th>Do Stanice</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
 
echo "<tr>
<td>" . "<a href='itinerar.php?linija=".$row['brlinije']."&brpol=".$row['brpol']."'>ITINERAR</a>"."</td>
<td>" . "<a href='navigacija.php?linija=".$row['brlinije']."&brpol=".$row['brpol']."'>NAVIGACIJA</a>"."</td>
<td>" . $row["odstan"]. "</td><td> " .  $row["vreme"]. "</td><td> " . $row["dostan"]. "</td>


</tr> " ;
		
		
     }
     echo "</table></centar>";
} 
     else {
     echo "0 results";
}



?> 

</body>
</html>