<?php 
 
$drzavaid = intval($_REQUEST['drzavaid']);
$nazivd = htmlspecialchars($_REQUEST['nazivd']);

//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `drzava` SET `nazivd` = :nazivd where `drzavaid` =  :drzavaid ');

  $stmt->execute(array(
  
        ':drzavaid' => $drzavaid,
	    ':nazivd' => $nazivd
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
