<?php

$datum = htmlspecialchars($_REQUEST['datum']);
$polazakid = htmlspecialchars($_REQUEST['polazakid']);
$kolaid = htmlspecialchars($_REQUEST['kolaid']);


//echo "<script type='text/javascript'>alert('stanicaid=$stanicaid,telefon=$telefon');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `datumpolaska` (`datum`,`polazakid`,`kolaid`)
VALUES (:datum,:polazakid,:kolaid)');

  $stmt->execute(array(
		':datum'=> $datum,
        ':polazakid' => $polazakid,
		':kolaid' => $kolaid
   
  ));
    
  echo $stmt->rowCount(); 

?>