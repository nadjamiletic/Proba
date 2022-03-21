<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sr" lang="sr">

<head>


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />


<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />


<title>JUGOPREVOZ KRUSEVAC - &copy; 2019</title>
</head>

<body>

	<div id="wrapper">
		
		<div class="top"></div> <!-- end #header -->


<div class="standardni">
 <h1 align="center">PRIJAVITE SE ZA ULAZ U PROGRAM</h1><br>
    <div id="logovanje">

</div>
<?php 

								$errors = "Pogresno Korisnicko ime ili Sifra, Probajte ponovo";
                               
                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                               if ($error_id == 1) { echo $errors;}
							   
?>  

                            <center>  <form action="authenticate.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">  
                                  <input type="text" name="username" class="form-control" placeholder="Korisnicko ime" required autofocus><br/>
                                  <input type="password" name="password" class="form-control" placeholder="Sifra" required><br/>
                                  <button class="btn btn-lg btn-primary btn-block" type="submit">Prijavi se</button>
                             </form></center>
    
 
   </div><!-- End #wrapper --> 



</body>

</html>
