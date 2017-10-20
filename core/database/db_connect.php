<?php
$servername = "localhost";
$username = "ddbadmin";
$password = "ddbadmin123";
$database = "drinkdiary";

$connect_error = "Sorry we can\'t connect to the site at this time, please contact the site owner";

$conn = mysqli_connect("$servername", "$username", "$password") or die($connect_owner);
mysqli_select_db($conn, 'drinkdiary');

?>
