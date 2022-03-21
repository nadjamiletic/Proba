<?php 
 
$mestoid = intval($_REQUEST['mestoid']);
$nazivm = htmlspecialchars($_REQUEST['nazivm']);
$drzavaid = htmlspecialchars($_REQUEST['drzavaid']);


//echo "<script type='text/javascript'>alert('mestoid=$mestoid,nazivm=$nazivm,drzavaid=$drzavaid');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `mesto` SET 
`nazivm` = :nazivm,`drzavaid` = :drzavaid where `mestoid` =  :mestoid ');
  $stmt->execute(array(
  
 // UPDATE `busprevoznik1`.`linija` SET `nazivlinije` = 'KrsNadja', `vrstalinijeid` = '2' WHERE (`linijaid` = '4');
        ':mestoid' => $mestoid,
	    ':nazivm' => $nazivm,
		':drzavaid' => $drzavaid,
		
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
