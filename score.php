
<?php  

$connect = mysqli_connect('127.0.0.1','root','','grinta');
$usersquery = 'SELECT * FROM users ORDER BY users.maxscore DESC';

$get_users = mysqli_query($connect,$usersquery);

while ($playerList = mysqli_fetch_assoc($get_users)){
echo '<pre>'; 
print_r ($playerList['maxScore']) ; 
echo '</pre>';
}

$connect->close();
?>