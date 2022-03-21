<?php

$nazivvl = htmlspecialchars($_REQUEST['nazivvl']);


//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `vrstalinije` (`nazivvl`)
VALUES (:nazivvl)');

  $stmt->execute(array(
  
        ':nazivvl' => $nazivvl
   
  ));
    
  echo $stmt->rowCount(); 

?>