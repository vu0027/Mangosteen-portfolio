<?php
/*
$server="sql113.epizy.com";
$username= "epiz_27997611";
$password ="wVDtrygO8rKr";
$dbname="epiz_27997611_ms";
$conn= mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
  die("Connection Failed:".mysqli_connect_error());
}
*/
$DSN='mysql:host = localhost; dbname=ms';
$ConnectingDB = new PDO($DSN,'root','');

 ?>
