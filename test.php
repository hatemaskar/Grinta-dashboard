<?php

$connect=mysqli_connect('localhost','root','','grinta');
$questquery='SELECT * FROM questions';
$quest=mysqli_query($connect,$questquery);
$questNumber = mysqli_num_rows($quest);

$question = $_POST['question'];
$correctAnswer = $_POST['answer'];
$fakeAnswer1 = $_POST['fakeAnswer1'];
$fakeAnswer2 = $_POST['fakeAnswer2'];
$fakeAnswer3 = $_POST['fakeAnswer3'];
$fakeAnswer4 = $_POST['fakeAnswer4'];

$sql = "INSERT INTO `questions` (`id`, `question`, `correctAns`, `fakeAns1`, `fakeAns2`, `fakeAns3`, `type`, `difficulty`, `category`, `videoURL`) VALUES (NULL, '$question', '$correctAnswer', '$fakeAnswer1', '$fakeAnswer1', '$fakeAnswer1', '', '', '', '');"

$result = mysqli_query($connect, $sql);
if($result)
{
	echo "Contact Records Inserted";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 classs='title'>Questions Dashboard</h>

  <div class='questions'>
    <fieldset>
    <legend>Contact Form</legend>
    <form name="frmContact" method="post" action="test.php">
    <p>
    <label for="Name">Question </label>
    <input type="text" name="txtName" id="question">
    </p>
    <p>
    <label for="email">Correct Answer </label>
    <input type="text" name="answer" id="txtEmail">
    </p>
    <p>
    <label for="phone">Fake Answer 1</label>
    <input type="text" name="fakeAnswer1" id="txtPhone">
    </p>
    <p>
    <label for="message">Fake Answer 2</label>
    <input name="txtMessage" id="fakeAnswer2"></input>
    </p>
    <p>
    <label for="message">Fake Answer 3</label>
    <input name="txtMessage" id="fakeAnswer3"></input>
    </p>

    <p>
    <input type="submit" name="Submit" id="Submit" value="Submit">
    </p>
    </form>
    </fieldset>
  </div>
</body>
</html>