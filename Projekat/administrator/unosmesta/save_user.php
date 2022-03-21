<?php

$nazivm = htmlspecialchars($_REQUEST['nazivm']);
$drzavaid = htmlspecialchars($_REQUEST['drzavaid']);

//echo "<script type='text/javascript'>alert('nazivlinije=$nazivlinije,vrstalinijeid=$vrstalinijeid');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `mesto` (`nazivm`,`drzavaid`)
VALUES (:nazivm,:drzavaid)');

  $stmt->execute(array(
  
        ':nazivm' => $nazivm,
		':drzavaid' => $drzavaid,
		
   
  ));
    
  echo $stmt->rowCount(); 

?>