<?php 
 
$prevoznikid = intval($_REQUEST['prevoznikid']);
$nazivp = htmlspecialchars($_REQUEST['nazivp']);
$pib = htmlspecialchars($_REQUEST['pib']);
$maticnibroj = htmlspecialchars($_REQUEST['maticnibroj']);
$adresa = htmlspecialchars($_REQUEST['adresa']);
$mestoid = htmlspecialchars($_REQUEST['mestoid']);
$email = htmlspecialchars($_REQUEST['email']);
$telefon = htmlspecialchars($_REQUEST['telefon']);
//echo "<script type='text/javascript'>alert('prevoznikid=$prevoznikid,drzavaid=$drzavaid,mestoid=$mestoid');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `prevoznik` SET 
`prevoznikid`=:prevoznikid,`nazivp` = :nazivp,`pib` = :pib,`maticnibroj` = :maticnibroj,`adresa`=:adresa,`mestoid` = :mestoid,
`email` = :email,`telefon` = :telefon
where `prevoznikid` =  :prevoznikid ');
  $stmt->execute(array(
  
        ':prevoznikid' => $prevoznikid,
	    ':nazivp' => $nazivp,
		':pib' => $pib,
		':maticnibroj' => $maticnibroj,
		':adresa' => $adresa,
		':mestoid' => $mestoid,
		
		':email' => $email,
		':telefon' => $telefon,
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
