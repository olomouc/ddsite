<?php

function user_exists($username, $connect) {
     $username = sanitize($username);
     $connect = mysqli_connect('localhost','ddbadmin','ddbadmin123','drinkdiary') OR die("Can't connect");
     $query = mysqli_query($connect,"SELECT COUNT(`uid`) FROM `users` WHERE `username` = '$username' ");
     return (mysqli_num_rows($query ==1)?true:false);
}


/*if(user_exists('edadmin') === true) {
   echo 'exists';
} else {
  echo 'doesnt exist';
}
*/

?>
