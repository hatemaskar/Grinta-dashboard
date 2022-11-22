<?php

if (!isset($_GET["id"])){
    $id=$_GET["id"];

    $connect = mysqli_connect('127.0.0.1','root','','grinta');
    $sql='DELETE FROM questions WHERE questions.id=$id';
    $result= $connect->query($sql);
    
}

header ("location: /Grinta-dashboard/postQuestions.php");
exit;

?>