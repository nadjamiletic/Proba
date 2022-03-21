
<?php
$servername = "mysql681.loopia.se";
$username = "nadjanet@m49213";
$password = "nadja.net";
$dbname = "mmelektronik_net";

$conn = new mysqli($servername, $username, $password, $dbname);
  
if ($conn->connect_error) {
      die("Neuspela konekcija na bazu: " . $conn->connect_error);
 }

?>


