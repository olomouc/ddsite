<?php

$host = 'localhost';
$db = 'drinkdiary';
$user = 'ddbadmin';
$pass = 'ddbadmin123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
#var_dump($dsn);

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try{
$pdo = new PDO($dsn, $user, $pass, $opt);
##var_dump($pdo);
}catch(Exception $e){
  echo 'Message: ' .$e->getMessage();
  exit;
}
$stmt = $pdo->query('SELECT username FROM users');
#var_dump($stmt);
while ($row = $stmt->fetch())
{
    echo "<h2>" . $row['username'] . "</h2>"  . "\n";
}

?>
