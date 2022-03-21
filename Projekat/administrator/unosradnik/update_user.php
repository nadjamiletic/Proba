<?php 
 
$radnikid = intval($_REQUEST['radnikid']);
$ime = htmlspecialchars($_REQUEST['ime']);
$prezime = htmlspecialchars($_REQUEST['prezime']);

echo "<script type='text/javascript'>alert('radnikid=$radnikid,ime=$ime');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `radnik` SET `ime` = :ime,`prezime` = :prezime where `radnikid` =  :radnikid ');

  $stmt->execute(array(
  
        ':radnikid' => $radnikid,
	    ':ime' => $ime,
		':prezime' => $prezime
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
