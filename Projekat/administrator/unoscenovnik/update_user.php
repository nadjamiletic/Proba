<?php 
 
$cenovnikid = intval($_REQUEST['cenovnikid']);
$polazak = htmlspecialchars($_REQUEST['polazak']);
$stanicaod = htmlspecialchars($_REQUEST['stanicaod']);
$stanicado = htmlspecialchars($_REQUEST['stanicado']);
$kola = htmlspecialchars($_REQUEST['kola']);
$cena = htmlspecialchars($_REQUEST['cena']);


include '../conn.php';

$stmt = $dbh->prepare (' UPDATE `cenovnik` SET 
`polazak` = :polazak,`stanicaod` = :stanicaod,`stanicado` = :stanicado,`kola` = :kola,`cena` = :cena
where `cenovnikid` =  :cenovnikid ');
  $stmt->execute(array(
  
        ':cenovnikid' => $cenovnikid,
	    ':polazak' => $polazak,
		':stanicaod' => $stanicaod,
		':stanicado' => $stanicado,
		':kola' => $kola,
		':cena' => $cena
   
  ));
    
  echo $stmt->rowCount(); 


?>
 
