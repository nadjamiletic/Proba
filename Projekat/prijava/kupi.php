<?php

$racun = $racun;	
$datumpolaska = $datum1;
$cenovnikid = $cenovnikid;
$kola = $kola;
$brojsedista = $brojsedista;
$brpol = $brpol;
$korisnikid = $s_id;

include '../conn1.php';

//sediste karta

$sql = "SELECT count(sedistebr)as sedistek FROM `karta` WHERE `datumpolaska` like '$datumpolaska'and `kola` ='$kola' and `brpol` like'$brpol' ";

$result = $conn->query($sql);

$rez2 = 1;

if ($result->num_rows > 0) {
    
	
while($row = $result->fetch_assoc())
	 {
$sedistek = $row['sedistek'];       
$rez2 += $row['sedistek'];

}
} else {
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

$stmt = $dbh->prepare ('INSERT INTO `karta` 
(`datumpolaska`,`cenovnikid`,`korisnikid`,`kola`,`brpol`,`sedistebr`,`racun`,`datumkupovine`)
VALUES (:datumpolaska,:cenovnikid,:korisnikid ,:kola,:brpol,:sedistebr,:racun,CURRENT_TIMESTAMP() )');

  $stmt->execute(array(
  
        ':datumpolaska' => $datumpolaska,
	    ':cenovnikid' => $cenovnikid,
		':korisnikid' => $korisnikid,
	    ':kola' => $kola,
		':brpol' => $brpol,
		':sedistebr' => $rez2,
	    ':racun' => $racun,
   
  ));
  
echo "Kupili ste kartu:<br />";
echo "Za datum: ". $datumpolaska . "<br />";
echo "Broj sedista: ". $rez2;
header("Location:prijava.php"); 


 ?>