<?php

include '../conn.php';

 
$stmt = $dbh->prepare("SELECT mesto.mestoid,mesto.nazivm, drzava.nazivd
FROM mesto INNER JOIN drzava ON drzava.drzavaid = mesto.drzavaid");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
 
$data = $stmt->fetchAll();
 
//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');
 
echo json_encode($data);


?>
