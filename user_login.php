<?php
session_start();
include 'include/db_connect.php';

/*$host = 'localhost';
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
*/
function display_users($pdo) {

foreach($pdo->query('SELECT * FROM users') as $row) {
   print_r($row);
}
}

display_users($pdo);


function user_exists($pdo, $username) {
  $stmt = $pdo->prepare('SELECT COUNT(uid) FROM users WHERE username = :username');
  $stmt->execute(['username' => $username]);
  $result = $stmt->fetchColumn();
   return ($result == 1);
}

if(user_exists($pdo,'edadmin') == true) {
   echo "exists";
} else {
  echo "doesnt exist";
}

##$mytext = 'some text';
##echo $mytext;

  $username = $_POST['username'];
  $pwood = $_POST['password'];
  $_SESSION['username']=$username;
  print_r($_SESSION);
  if(empty($username) === true || empty($pwood) === true) {
  echo "You need to enter a username and password";
  } else if (user_exists($pdo,$_POST['username']) == true){
  header("Location: user_home.php"); 
  } else if (user_exists($pdo,$_POST['username']) == false){
  echo 'you dont appear to be in the database';
  }
 

?>
