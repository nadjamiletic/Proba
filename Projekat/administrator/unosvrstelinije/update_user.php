<?php 
 
$vrstalinijeid = intval($_REQUEST['vrstalinijeid']);
$nazivvl = htmlspecialchars($_REQUEST['nazivvl']);

//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `vrstalinije` SET `nazivvl` = :nazivvl where `vrstalinijeid` =  :vrstalinijeid ');

  $stmt->execute(array(
  
        ':vrstalinijeid' => $vrstalinijeid,
	    ':nazivvl' => $nazivvl
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
