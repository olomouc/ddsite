<?php
function sanitize($data) {
   $connect = mysqli_connect('localhost','ddbadmin','ddbadmin123','drinkdiary');	
   return mysqli_real_escape_string($connect,$data);

}
?>
