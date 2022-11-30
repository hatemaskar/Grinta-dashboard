<!-- <?php

$connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');
$usersquery = 'SELECT * FROM users ';

$get_users = mysqli_query($connect, $usersquery);

while ($playerList = mysqli_fetch_assoc($get_users)) {

   arsort($playerList);

   echo '<pre>';
   echo 'Name:' . $playerList['name'];
   echo '<br>';
   echo 'Score:' . $playerList['maxScore'];
   echo '</pre>';




}

$connect->close();
?> -->
<style>
   .table,
   .tbody {
      color: white;
      display: flex;
      flex-direction: row;
      position: absolute;
   }

   .container {
      display: flex;

   }
</style>

<body>
   <div class="container">
      <h2 style="text-align: center;">اللاعبين</h2>
      <br>
      <table class="table">
         <thead>
            <!-- <tr class="header">
               <th>Username</th>
               <th id="question">Max score</th>
               <th id="answer">Email</th>
            </tr> -->


         </thead>
         <tbody style="margin:20px; margin-top:50px; font-size: 20px;">
            <?php
            // Create conenction
            $connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');

            // Check connection
            if ($connect->connect_error) {
               die("Connection failed: " . $connect->connect_error);
            }

            // Read all row from database table
            $sql = 'SELECT * FROM users ';
            $result = $connect->query($sql);

            if (!$result) {
               die('Invalid query: ' . $connect_error);
            }

            while ($row = $result->fetch_assoc()) {
               echo "
                        <tr>
                        <td >$row[name]</td>
                        <td >$row[maxScore]</td>
                        <td > $row[email]</td>
                        </tr>
                    
                        ";
            }
            ?>

         </tbody>
      </table>



   </div>

</body>