<?php

   $database = 'mmelektronik_net';
   $host = 'mysql681.loopia.se';
   $user = 'nadjanet@m49213';
   $pass = 'nadja.net';
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);
   
   if(!$dbh){

      echo "Ne mogu se prijaviti na bazu podataka";
   }
   
?>
