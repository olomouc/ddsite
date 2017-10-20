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
session_start;
$welcome = "Hello and welcome to Drinking Diary";
print $welcome;
echo $_SESSION['username'];
?>
<a href="login.php">Click Here to login</a>
</div>
</body>
</html>
