<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>
Login to Drinking Diary
</title>
<link rel="stylesheet" href="theme/css/style.css" media="all" />
</head>
<body>
<div class="container-fluid">
<form class="col-sm-4 col-sm-push-4" action="user_login.php" method="post">
<ul>
  <li>	User name:<br>
  <input type="text" name="username"></li>
  <li>	User password:<br>
  <input type="password" name="password"></li>
   <li> <input type="submit" class="btn btn-info" value="login">
   <li><a href="register.php">Please register if you don't have an account</a>
</ul>
</form>
</div>
</body>
</html>
