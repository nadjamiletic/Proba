<?php 
 
$linijaid = intval($_REQUEST['linijaid']);
$imel = htmlspecialchars($_REQUEST['imel']);
$polaznas = htmlspecialchars($_REQUEST['polaznas']);
$krajnjas = htmlspecialchars($_REQUEST['krajnjas']);
$vrstalid = htmlspecialchars($_REQUEST['vrstalid']);

//echo "<script type='text/javascript'>alert('a=$a,fd=$fd');</script>"; 
include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `linija` SET 
`imel` = :imel,`polaznas` = :polaznas,`krajnjas` = :krajnjas,`vrstalid`=:vrstalid  where `linijaid` =  :linijaid ');
  $stmt->execute(array(
  
        ':linijaid' => $linijaid,
	    ':imel' => $imel,
		':polaznas' => $polaznas,		
		':krajnjas' => $krajnjas,
		':vrstalid' => $vrstalid
   
  ));
    
  echo $stmt->rowCount(); 

// catch(PDOException $e)
 //{
//  echo 'Error: ' . $e->getMessage();
//}

?>
 
