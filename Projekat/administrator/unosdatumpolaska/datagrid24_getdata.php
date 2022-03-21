<?php

include '../conn.php';

 
$stmt = $dbh->prepare('SELECT datumpolaska.datumpolaskaid,datumpolaska.datum, polazak.oznakap, kola.registracija
FROM polazak INNER JOIN (kola INNER JOIN datumpolaska ON kola.kolaid = datumpolaska.kolaid) ON polazak.polazakid = datumpolaska.polazakid;

 ');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
 
$data = $stmt->fetchAll();
 
//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');
 
echo json_encode($data);


?>
