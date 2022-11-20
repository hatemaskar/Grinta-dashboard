<?php

  // Display top 5 usersnames
    $connect = mysqli_connect('127.0.0.1','root','','grinta');
    $maxScoreQuery = 'SELECT * FROM users ORDER BY users.maxScore DESC';
    $get_users = mysqli_query($connect,$maxScoreQuery);
     $i=0;
     while ($i<7){
     $playerList = mysqli_fetch_assoc($get_users);
     echo '<pre>'; 
     print_r ($playerList['name']) ; 
     echo '</pre>';
     $i++;
     
   }
   $connect->close();
 



?>