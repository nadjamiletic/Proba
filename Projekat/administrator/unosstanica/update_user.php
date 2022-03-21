<?php 
 
$stanicaid = intval($_REQUEST['stanicaid']);
$imes = htmlspecialchars($_REQUEST['imes']);
$adresas = htmlspecialchars($_REQUEST['adresas']);
$lat = htmlspecialchars($_REQUEST['lat']);
$lng = htmlspecialchars($_REQUEST['lng']);
$tip = htmlspecialchars($_REQUEST['tip']);

//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `stanica` SET 
`imes` = :imes,`adresas` = :adresas,`lat` = :lat,`lng` = :lng,`tip`=:tip  where `stanicaid` =  :stanicaid ');
  $stmt->execute(array(
  
        ':stanicaid' => $stanicaid,
	    ':imes' => $imes,
		':adresas' => $adresas,
		':lat' => $lat,
		':lng' => $lng,
		':tip' => $tip
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
