<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h2>Questions List</h2>
        <a class="btn btn-primary" href="/Grinta-dashboard/createQuestion.php" role="button">Add Question</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Correct Answer</th>
                    <th>Fake Answer 1</th>
                    <th>Fake Answer 2</th>
                    <th>Fake Answer 3</th>
                    <th>Question Type</th>
                    <th>Difficulty</th>
                    <th>category</th>
                    <th>Video URL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Create conenction
                    $connect = mysqli_connect('127.0.0.1','root','','grinta');

                    // Check connection
                    if ($connect->connect_errno){
                        die("Connection failed: " . $connect->connect_error);
                    }

                    // Read all row from database table
                    $sql='SELECT * FROM questions';
                    $result = $connect->query($sql);

                    if (!$result) {
                        die('Invalid query: ' . $connect_error);
                    }
                    
                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                             <td>$row[id]</td>
                             <td>$row[question]</td>
                             <td>$row[correctAns]</td>
                             <td>$row[fakeAns1]</td>
                             <td>$row[fakeAns2]</td>
                             <td>$row[fakeAns3]</td>
                             <td>$row[type]</td>
                             <td>$row[difficulty]</td>
                             <td>$row[category]</td>
                             <td>$row[videoURL]</td>
                             <td>
                             <a class="btn-btn-primary btn sm" href="/Grinta-dashboard/editQuestion.php?id=$row[id]">Edit</a>
                             <a class=" href="/Grinta-dashboard/deleteQuestion.php?id=$row[id]">Delete</a>  
                             </td>
                        </tr>
                        ";
                    }
                ?>

            </tbody>
        </table>
        


    </div>
</body>
</html>