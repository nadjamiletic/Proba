<?php

include '../conn.php';

 
/*$stmt = $dbh->prepare('SELECT cenovnik.cenovnikid,polazak.oznakap, stanicaodid,stanicadoid, kola.registracija, cenovnik.cena
FROM kola INNER JOIN (cenovnik INNER JOIN polazak ON polazak.polazakid = cenovnik.polazakid) ON cenovnik.kolaid=kola.kolaid group by cenovnikid;

 ');*/
 $stmt = $dbh->prepare('SELECT * FROM cenovnik ');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
 
$data = $stmt->fetchAll();
 
echo json_encode($data);


?>
