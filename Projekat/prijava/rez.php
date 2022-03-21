<?php

$datumpolaska = $datum1;
$korisnikid = $s_id;
$cenovnikid = $cenovnikid;
$kola = $kola;
$brojsedista = $brojsedista;
$brpol = $brpol;

$rez2 = 1;
//sediste karta

$sql = "SELECT count(sedistebr)as sedistek FROM `karta` WHERE `datumpolaska` like '$datumpolaska'and `kola` ='$kola' and `brpol` like'$brpol' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
	{
		$sedistek = $row['sedistek'];
		$rez2 += $row['sedistek'];
	}
	} 
else 
{
  echo "nema rezultata";
}

//sediste rez

$sql = "SELECT count(sedistebr)as sedister FROM `rezervacija` WHERE `datumpolaska` like '$datumpolaska'and `kola` ='$kola' and `brpol` like'$brpol' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
	
while($row = $result->fetch_assoc())
	 {
$sedistek = $row['sedister'];
$rez2 += $row['sedistek'];


}
} else {
  echo "nema rezultata";
}

$BS = ($brojsedista - $sedistek - $sedister);
$sedistebr = ($brojsedista - $BS +1);

include '../conn.php';

$stmt = $dbh->prepare ('INSERT INTO `rezervacija` 
(`datumpolaska`,`cenovnikid`,`korisnikid`,`kola`,`brpol`,`sedistebr`,`datumrezervacije`)
VALUES (:datumpolaska,:cenovnikid,:korisnikid ,:kola,:brpol,:sedistebr,CURRENT_TIMESTAMP() )');

  $stmt->execute(array(
  
        ':datumpolaska' => $datumpolaska,
	    ':cenovnikid' => $cenovnikid,
		':korisnikid' => $korisnikid,
	    ':kola' => $kola,
		':brpol' => $brpol,
		':sedistebr' => $rez2,
   
  ));

echo "Rezervisali ste kartu: <br />";
echo "Za datum: ".$datumpolaska . "<br />";
echo "Broj sedista: ". $rez2;
header("Location:prijava.php");



 ?>