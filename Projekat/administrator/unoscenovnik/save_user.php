<?php

$polazak= htmlspecialchars($_REQUEST['polazak']);
$stanicaod = htmlspecialchars($_REQUEST['stanicaod']);
$stanicado = htmlspecialchars($_REQUEST['stanicado']);
$kola = htmlspecialchars($_REQUEST['kola']);
$cena = htmlspecialchars($_REQUEST['cena']);
echo "<script type='text/javascript'>alert('stanicaod=$stanicaod,stanicado=$stanicado,polazak=$polazak,kola=$kola');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `cenovnik` (`polazak`,`stanicaod`,`stanicado`,`kola`,`cena`)
VALUES (:polazak,:stanicaod,:stanicado,:kola,:cena)');

  $stmt->execute(array(
		':polazak'=> $polazak,
        ':stanicaod' => $stanicaod,
        ':stanicado' => $stanicado,
        ':kola' => $kola,
        ':cena' => $cena
   
  ));
    
  echo $stmt->rowCount(); 

?>