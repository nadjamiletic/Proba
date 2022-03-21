<?php

$imes = htmlspecialchars($_REQUEST['imes']);
$adresas = htmlspecialchars($_REQUEST['adresas']);
$lat = htmlspecialchars($_REQUEST['lat']);
$lng = htmlspecialchars($_REQUEST['lng']);
$tip = htmlspecialchars($_REQUEST['tip']);

//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `stanica` (`imes`,`adresas`,`lat`,`lng`,`tip`)
VALUES (:imes,:adresas,:lat,:lng,:tip)');

  $stmt->execute(array(
  
        ':imes' => $imes,
		':adresas' => $adresas,
		':lat' => $lat,
		':lng' => $lng,
		':tip' => $tip
   
  ));
    
  echo $stmt->rowCount(); 

?>