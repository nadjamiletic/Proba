<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sigurna strana</title>
    <link href="stil/glavni-stil.css" rel="stylesheet" type="text/css">
</head>
<?php

session_start();

if(isset($_POST['korisnicko']))
{
    $error = false;
    $regex = "/^\/[\s\S]+\/$/";
    if (@preg_match($regex, $_POST['korisnicko']))
    {
        if (@preg_match($regex, $_POST['sifra']))
        {
            $error = true;
        }
    }
    if ($error) {
        echo "<script type='text/javascript'>alert('UNESITE SVA POLJA ISPRAVNO !')</script>";
    }else {
        $korisnicko = $_POST['korisnicko'];
        $siframd5 = md5($_POST['sifra']);
        }
        $korisnicko = $_POST['korisnicko'];
        $siframd5 = md5($_POST['sifra']);
}else{
    $korisnicko = $_SESSION ["korisnicko"];
    $siframd5 = $_SESSION ["siframd5"];
}

// poziv funkcije i provera podataka !
$rez = loginbaza($korisnicko);
if ($rez != null)
{
    if ($rez['sifra'] ==  $siframd5)
    {
        $_SESSION['ime'] = $rez['ime'];
        $_SESSION['prezime'] = $rez['prezime'];
		$_SESSION['grad'] = $rez['grad'];
		$_SESSION['email'] = $rez['email'];
        $_SESSION['id'] = $rez['id'];
		$_SESSION['login'] = true;
        
        header( "Location: ./prijava.php" );
    }else
    {
        echo "<script type='text/javascript'>alert('POGRESNO KORISNICKO IME ILI SIFRA!')</script>";
		header( "Location: ./login.php?pogresnaSifra=true" );
		
        //session_end();
        exit();
    }
}else{
    //echo "Rezultat funkcije je prazan !!!";
   // session_end();
   header( "Location: ./login.php" );
    exit();
    }

function loginbaza($tempkorisnik)

{
	
    $servername = "mysql681.loopia.se";
    $username = "nadjanet@m49213";
    $password = "nadja.net";
    $dbname = "mmelektronik_net";

    
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
      die("Neuspela konekcija na bazu: " . $conn->connect_error);
    }
        $sql = "SELECT * FROM korisnici WHERE korisnicko='$tempkorisnik'";
        $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        return $row;
    }else
    {
        return null;
    }
    $conn->close();
	
	
}

?>
<body>
</body>
</html>
