
<?php  

$connect = mysqli_connect('127.0.0.1','root','','grinta');
$usersquery = 'SELECT * FROM users ORDER BY users.maxscore DESC';

$get_users = mysqli_query($connect,$usersquery);

while ($playerList = mysqli_fetch_assoc($get_users)){


asort($playerList);
 echo 'Username: ' .$playerList['name']. ' - Score: ' .$playerList['maxScore'];

// foreach($playerList as $name => $age){
//     echo $name.' - '.$age;
    echo '<br />';
// }

}

$connect->close();
?>