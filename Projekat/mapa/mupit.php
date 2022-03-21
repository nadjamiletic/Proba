
<?php

$od = $_GET['od'];
$uslov=$od;

mb_internal_encoding( 'UTF-8' );

$servername = "mysql681.loopia.se";
$username = "nadjanet@m49213";
$password = "nadja.net";
$dbname = "mmelektronik_net";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
       
$sql = (" SELECT stanica.imes as stanica, stanica.lat as latituda, stanica.lng as longituda FROM `stanica` where imes like '$uslov'");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
     while($row = $result->fetch_assoc()) {
$lat = $row['latituda'];
$lng = $row['longituda'];
$stanica = $row['stanica'];    

		
     }
echo "<br />";
} else {
     echo "0 results";
}

?>