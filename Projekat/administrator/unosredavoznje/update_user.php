<?php 
 
$redvoznjeid = intval($_REQUEST['redvoznjeid']);
$linijaid = htmlspecialchars($_REQUEST['linijaid']);
$stanicaid = htmlspecialchars($_REQUEST['stanicaid']);
$brojpolaska = htmlspecialchars($_REQUEST['brojpolaska']);
$vreme = htmlspecialchars($_REQUEST['vreme']);
$dani = htmlspecialchars($_REQUEST['dani']);
$Km = htmlspecialchars($_REQUEST['Km']);

echo "<script type='text/javascript'>alert('redvoznjeid=$redvoznjeid,linijaid=$linijaid');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `redvoznje` SET `linijaid` = :linijaid,`stanicaid` = :stanicaid,`brojpolaska` = :brojpolaska,
`vreme` = :vreme,`dani`=:dani,`Km`=:Km  where `redvoznjeid` =  :redvoznjeid ');
  $stmt->execute(array(
  
        ':redvoznjeid' => $redvoznjeid,
	    ':linijaid' => $linijaid,
		':stanicaid' => $stanicaid,
		':brojpolaska' => $brojpolaska,
		':vreme' => $vreme,
		':dani' => $dani,
		':Km' => $Km
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
