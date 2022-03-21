<?php 
 
$datumpolaskaid = intval($_REQUEST['datumpolaskaid']);
$datum = htmlspecialchars($_REQUEST['datum']);
$polazakid = htmlspecialchars($_REQUEST['polazakid']);
$kolaid = htmlspecialchars($_REQUEST['kolaid']);


echo "<script type='text/javascript'>alert('datumpolaskaid=$datumpolaskaid,polazakid=$polazakid,kolaid=$kolaid');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `datumpolaska` SET 
`datum` = :datum,`polazakid` = :polazakid,`kolaid` = :kolaid  where `datumpolaskaid` =  :datumpolaskaid ');
  $stmt->execute(array(
  
        ':datumpolaskaid' => $datumpolaskaid,
	    ':datum' => $datum,
		':polazakid' => $polazakid,
		':kolaid' => $kolaid
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
