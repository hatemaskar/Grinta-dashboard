<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <style>
        table {
            width: 100%;
            border: 1px solid #b3adad;
            border-collapse: collapse;
            padding: 5px;
        }

        table th {
            border: 1px solid #b3adad;
            padding: 5px;
            background: #f0f0f0;
            color: #313030;
            width: max-content;
        }

        table td {
            border: 1px solid #b3adad;
            text-align: center;
            padding: 5px;
            background: #ffffff;
            color: #313030;
            width: fit-content;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 style="padding-top:100px ;">Questions List</h2>
        <a class="btn btn-primary" href="/Grinta-dashboard/create.php" role="button">Add Question</a>
        <br>
        <table class="table" style="width:50%" border="5px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Correct Answer</th>
                </tr>
                <tr>
                    <th>Fake Answer 1</th>
                    <th>Fake Answer 2</th>
                    <th>Fake Answer 3</th>
                </tr>
                <tr>
                    <th>Question Type</th>
                    <th>Difficulty</th>
                    <th>category</th>
                </tr>
                <tr>
                    <th>Video URL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Create conenction
                $connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');

                // Check connection
                if ($connect->connect_error) {
                    die("Connection failed: " . $connect->connect_error);
                }

                // Read all row from database table
                $sql = 'SELECT * FROM questions';
                $result = $connect->query($sql);

                if (!$result) {
                    die('Invalid query: ' . $connect_error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                             <td>Q $row[id]</td>
                             <td>$row[question]</td>
                             <td>$row[correctAns]</td>

                        </tr>
                        <tr>
                        <td>$row[fakeAns1]</td>
                        <td>$row[fakeAns2]</td>
                        <td>$row[fakeAns3]</td>
                        </tr>
                        <tr>
                        <td>Type: $row[type]</td>
                        <td>Difficulty: $row[difficulty]</td>
                        <td>Category: $row[category]</td>

                        </tr>
                        <tr>
                        <td>Video URL:$row[videoURL]</td>
                        <td colspan='2'>
                        <a class='btn btn-primary btn sm' href='/Grinta-dashboard/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn sm remove' href='/Grinta-dashboard/delete.php?id=$row[id]'>Delete</a> 
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