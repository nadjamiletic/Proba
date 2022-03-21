<?php

$linijaid = htmlspecialchars($_REQUEST['linijaid']);
$stanicaid = htmlspecialchars($_REQUEST['stanicaid']);
$brojpolaska = htmlspecialchars($_REQUEST['brojpolaska']);
$vreme = htmlspecialchars($_REQUEST['vreme']);
$dani = htmlspecialchars($_REQUEST['dani']);
$Km = htmlspecialchars($_REQUEST['Km']);
//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `redvoznje` (`linijaid`,`stanicaid`,`brojpolaska`,`vreme`,`dani`,`Km`)
VALUES (:linijaid,:stanicaid,:brojpolaska,:vreme,:dani,:Km)');

  $stmt->execute(array(
  
        ':linijaid' => $linijaid,
		':stanicaid' => $stanicaid,
		':brojpolaska' => $brojpolaska,
		':vreme' => $vreme,
		':dani' => $dani,
		':Km' => $Km
   
  ));
    
  echo $stmt->rowCount(); 

?>