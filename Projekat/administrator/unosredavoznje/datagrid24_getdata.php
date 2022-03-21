<?php

include '../conn.php';


$stmt = $dbh->prepare('SELECT redvoznje.redvoznjeid,redvoznje.linijaid, stanica.imes,redvoznje.vreme, linija.imel ,redvoznje.brojpolaska,redvoznje.Km,redvoznje.dani
 FROM `redvoznje` LEFT JOIN stanica ON redvoznje.stanicaid=stanica.stanicaid LEFT JOIN linija on redvoznje.linijaid=linija.linijaid order by redvoznjeid');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
 
$data = $stmt->fetchAll();
 
//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');
 
echo json_encode($data);


?>
