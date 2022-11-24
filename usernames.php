<?php

$connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');
$usersquery = 'SELECT * FROM users ';

$get_users = mysqli_query($connect, $usersquery);

while ($playerList = mysqli_fetch_assoc($get_users)) {

   arsort($playerList);

   // foreach($playerList as $playerList['name'] => $playerList['maxScore']) {
   echo '<pre>';
   echo 'Name:' . $playerList['name'];
   echo '<br>';
   echo 'Score:' . $playerList['maxScore'];
   echo '</pre>';
   //   }



}

$connect->close();
?>