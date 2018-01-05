<?php
$DB_host = "sql313.byethost32.com";
$DB_user = "b32_21140711";
$DB_pass = "adopcan451320";
$DB_name = "b32_21140711_AdoptCan";

 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }
