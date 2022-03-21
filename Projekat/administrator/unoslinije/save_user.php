<?php

$imel = htmlspecialchars($_REQUEST['imel']); //The htmlspecialchars() function is used to converts special characters ( e.g. & (ampersand), " (double quote), ' (single quote), < (less than), > (greater than)) to HTML entities ( i.e. & (ampersand) becomes &amp,
$polaznas = htmlspecialchars($_REQUEST['polaznas']);
$krajnjas = htmlspecialchars($_REQUEST['krajnjas']);
$vrstalid = htmlspecialchars($_REQUEST['vrstalid']);

echo "<script type='text/javascript'>alert('imel=$imel,   polaznas=$polaznas,   krajnjas=$krajnjas');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `linija` (`imel`,`polaznas`,`krajnjas`,`vrstalid`)
VALUES (:imel,:polaznas,:krajnjas,:vrstalid)');

  $stmt->execute(array(
  
        ':imel' => $imel,
		':polaznas' => $polaznas,
		':krajnjas' => $krajnjas,
		':vrstalid' => $vrstalid
   
  ));
    
  echo $stmt->rowCount(); 

?>