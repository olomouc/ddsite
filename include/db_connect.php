<?php

$host = 'localhost';
$db = 'drinkdiary';
$user = 'ddbadmin';
$pass = 'ddbadmin123';

$dsn = "mysql:host=$host;dbname=$db";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try{
$pdo = new PDO($dsn, $user, $pass, $opt);
}catch(Exception $e){
  echo 'Message: ' .$e->getMessage();
  exit;
}

?>