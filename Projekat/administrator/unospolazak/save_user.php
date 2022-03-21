<?php

$oznakap = htmlspecialchars($_REQUEST['oznakap']);
$prevoznikid = htmlspecialchars($_REQUEST['prevoznikid']);
$linijaid = htmlspecialchars($_REQUEST['linijaid']);
$redovnost = htmlspecialchars($_REQUEST['redovnost']);

//echo "<script type='text/javascript'>alert('stanicaid=$stanicaid,telefon=$telefon');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `polazak` (`oznakap`,`prevoznikid`,`linijaid`,`redovnost`)
VALUES (:oznakap,:prevoznikid,:linijaid,:redovnost)');

  $stmt->execute(array(
		':oznakap'=> $oznakap,
        ':prevoznikid' => $prevoznikid,
		':linijaid' => $linijaid,
		':redovnost' => $redovnost
   
  ));
    
  echo $stmt->rowCount(); 

?>