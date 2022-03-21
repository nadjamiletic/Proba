<?php 
 
$polazakid = intval($_REQUEST['polazakid']);
$oznakap = htmlspecialchars($_REQUEST['oznakap']);
$prevoznikid = htmlspecialchars($_REQUEST['prevoznikid']);
$linijaid = htmlspecialchars($_REQUEST['linijaid']);
$redovnost = htmlspecialchars($_REQUEST['redovnost']);

//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `polazak` SET 
`oznakap` = :oznakap,`prevoznikid` = :prevoznikid,`linijaid` = :linijaid,`redovnost`=:redovnost  where `polazakid` =  :polazakid ');
  $stmt->execute(array(
  
        ':polazakid' => $polazakid,
	    ':oznakap' => $oznakap,
		':prevoznikid' => $prevoznikid,
		':linijaid' => $linijaid,
		':redovnost' => $redovnost
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
