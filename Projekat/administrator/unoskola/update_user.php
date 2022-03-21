<?php 
 
$kolaid = intval($_REQUEST['kolaid']);
$registracija = htmlspecialchars($_REQUEST['registracija']);
$brojsedista = htmlspecialchars($_REQUEST['brojsedista']);

//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `kola` SET `registracija` = :registracija,`brojsedista` = :brojsedista where `kolaid` =  :kolaid ');

  $stmt->execute(array(
  
        ':kolaid' => $kolaid,
	    ':registracija' => $registracija,
   ':brojsedista' => $brojsedista
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
