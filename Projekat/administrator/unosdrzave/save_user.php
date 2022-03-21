<?php

$nazivd = htmlspecialchars($_REQUEST['nazivd']);


//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `drzava` (`nazivd`)
VALUES (:nazivd)');

  $stmt->execute(array(
  
        ':nazivd' => $nazivd
   
  ));
    
  echo $stmt->rowCount(); 

?>