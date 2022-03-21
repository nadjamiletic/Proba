<?php

include '../conn.php';

 
$stmt = $dbh->prepare('SELECT prevoznik.prevoznikid, prevoznik.nazivp, prevoznik.pib, prevoznik.maticnibroj, prevoznik.adresa, mesto.nazivm, drzava.nazivd, prevoznik.email, prevoznik.telefon
FROM drzava INNER JOIN (mesto INNER JOIN prevoznik ON mesto.mestoid = prevoznik.mestoid) ON drzava.drzavaid = mesto.drzavaid;




 ');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
 
$data = $stmt->fetchAll();
 
//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');
 
echo json_encode($data);


?>
