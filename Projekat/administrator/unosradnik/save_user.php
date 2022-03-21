<?php


$ime = htmlspecialchars($_REQUEST['ime']);
$prezime = htmlspecialchars($_REQUEST['prezime']);


//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `radnik` (`ime`,`prezime`)
VALUES (:ime,:prezime)');

  $stmt->execute(array(
		
        ':ime' => $ime,
		':prezime' => $prezime
  ));
    
  echo $stmt->rowCount(); 

?>