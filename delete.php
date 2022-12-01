<?php
function delete()
{
    $id = $_GET["id"];

    $connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');
    $sql = "DELETE FROM questions WHERE id='$id'";
    $result = $connect->query($sql) or die('Error');

    if ($result) {
        header("location: /Grinta-dashboard/postQuestions.php?");

    } else {
        echo "Failed: " . mysqli_error($connect);
    }
    exit;
}



?>