<?php
//$prevoznikid = htmlspecialchars($_REQUEST['prevoznikid']);
$nazivp = htmlspecialchars($_REQUEST['nazivp']);
$pib = htmlspecialchars($_REQUEST['pib']);
$maticnibroj = htmlspecialchars($_REQUEST['maticnibroj']);
$adresa = htmlspecialchars($_REQUEST['adresa']);
$mestoid = htmlspecialchars($_REQUEST['mestoid']);
$email = htmlspecialchars($_REQUEST['email']);
$telefon = htmlspecialchars($_REQUEST['telefon']);

//echo "<script type='text/javascript'>alert('stanicaid=$stanicaid,telefon=$telefon');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `prevoznik` (`nazivp`,`pib`,`maticnibroj`,`adresa`,`mestoid`,`email`,`telefon`)
VALUES (:nazivp,:pib,:maticnibroj,:adresa,:mestoid,:email,:telefon)');

  $stmt->execute(array(
		//':prevoznikid'=> $prevoznikid,
        ':nazivp' => $nazivp,
		':pib' => $pib,
		':maticnibroj' => $maticnibroj,
		':adresa' => $adresa,
		':mestoid' => $mestoid,
		
		':email' => $email,
		':telefon' => $telefon
  ));
    
  echo $stmt->rowCount(); 

?>