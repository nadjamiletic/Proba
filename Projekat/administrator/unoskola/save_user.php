<?php


$registracija = htmlspecialchars($_REQUEST['registracija']);
$brojsedista = htmlspecialchars($_REQUEST['brojsedista']);


//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `kola` (`registracija`,`brojsedista`)
VALUES (:registracija,:brojsedista)');

  $stmt->execute(array(
  
        ':registracija' => $registracija,
		':brojsedista' => $brojsedista,
  ));
    
  echo $stmt->rowCount(); 

?>