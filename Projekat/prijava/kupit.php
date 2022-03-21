

<html>

<head>



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

         

 

$sql = ("SELECT redvoznje.linijaid as brlinije,stanica.imes as odstan,redvoznje.vreme as vreme,linija.krajnjas as dostan,

redvoznje.brojpolaska as brpol,redvoznje.km as rastojanje FROM `redvoznje` LEFT JOIN stanica ON

 redvoznje.stanicaid=stanica.stanicaid LEFT JOIN linija on redvoznje.linijaid=linija.linijaid where

 imes like '$uslov' and krajnjas like '$uslov1'");

$result = $conn->query($sql);



if ($result->num_rows > 0) {

      echo "<centar><table><tr><th>Od Stanice</th><th>Vreme Polaska</th><th>Do Stanice</th><th>Karta</th></tr>";

     // output data of each row

     while($row = $result->fetch_assoc()) {

 

echo "<tr>



<td>" . $row["odstan"]. "</td><td> " .  $row["vreme"]. "</td><td> " . $row["dostan"]. "</td>

<td>" . "<a href='../prijava/prijava1.php?odstan=".$row['odstan']."&dostan=".$row['dostan']."&vreme=".$row['vreme']."&brpol=".$row['brpol']."'>KUPI</a>"."</td>



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