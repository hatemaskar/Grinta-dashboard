<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');

$usersquery = 'SELECT * FROM users ';
$questquery = 'SELECT * FROM questions ';
$maxScoreQuery = 'SELECT * FROM users ORDER BY users.maxScore DESC';


$get_users = mysqli_query($connect, $usersquery);
$get_questnumber = mysqli_query($connect, $questquery);
$get_maxScore = mysqli_query($connect, $maxScoreQuery);


$userNumber = mysqli_num_rows($get_users);
$questNumber = mysqli_num_rows($get_questnumber);

$maxScore = mysqli_fetch_assoc($get_maxScore);



// Display Max Score of the game
// echo '<pre>'; 
//   print_r ($maxScore['maxScore']) ; 
//   echo '</pre>';
//   echo '<pre>'; 
//   print_r ($maxScore['name']) ; 

//    echo '</pre>';

//   Display players names list
//    while ($playerList = mysqli_fetch_assoc($get_users)){
//    echo '<pre>'; 
//    print_r ($playerList['name']) ; 
//    echo '</pre>';
//  }

//  function top5(){   // Display top 5 usersnames
//    $connect = mysqli_connect('127.0.0.1','root','','grinta');
//    $maxScoreQuery = 'SELECT * FROM users ORDER BY users.maxScore DESC';
//    $get_users = mysqli_query($connect,$maxScoreQuery);
//     $i=0;
//     while ($i<7){
//     $playerList = mysqli_fetch_assoc($get_users);
//     echo '<pre>'; 
//     print_r ($playerList['name']) ; 
//     echo '</pre>';
//     $i++;

//   }
//   $connect->close();
//  };

//  function top5score(){  // Display top 5 scores
//    $connect = mysqli_connect('127.0.0.1','root','','grinta');
//    $maxScoreQuery = 'SELECT * FROM users ORDER BY users.maxScore DESC';
//    $get_users = mysqli_query($connect,$maxScoreQuery);
//     $i=0;
//     while ($i<7){
//     $playerList = mysqli_fetch_assoc($get_users);
//     echo '<pre>'; 
//     print_r ($playerList['maxScore']) ; 
//     echo '</pre>';
//     $i++;

//   }
//   $connect->close();
//  };

$connect->close();

?>