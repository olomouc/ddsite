<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to Drinking Diary</title>
<link rel="stylesheet" href="theme/css/style.css" media="all" />
</head>
<body>
<div class="container-fluid">
<?php
##require 'core/init.php';
error_reporting(E_ALL); ini_set('display_errors', '1');
$welcome = "Hello and welcome to Drinking Diary";
print $welcome . " " . $_SESSION['username'];
?>
</body>
</html>
