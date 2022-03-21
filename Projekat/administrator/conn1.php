
<?php
$servername = "mysql681.loopia.se";
$database = "mmelektronik_net";
$username = "nadjanet@m49213";
$password = "nadja.net";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {

    die("Greska u konekciji: " . mysqli_connect_error());

}


?>


