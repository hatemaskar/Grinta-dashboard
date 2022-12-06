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

<!-- <html lang="ar" dir="rtl"></html> -->

<style>

body {
    background-color: #151722;
    font-family: Tajawal;
    color: white;
    margin-top: 100px;
   margin: auto;
   max-width: 800px;
   text-align: right;
}

   .table,
   .tbody,
   .thead,
   .h2 {
      color: white;
      display: flex;
      flex-direction: column;
      position: absolute;
      flex-wrap: wrap;
      flex-grow: 1;
   }
 
    


   .container {
      /* display: flex; */
      margin: 100px;
   }
</style>

<body>
   <div class="container">
   <div class="logo-usernames"  style="position:relative;display:block; margin-right: auto; margin-left: auto;width:50%;">
                <img src="./assets/logo.png" alt="">
            </div>
      <h2 style="text-align: center; font-size:48px;">اللاعبين</h2>
      <br>
      <table class="table">
         <thead>
            <tr class="header" style="margin:20px; margin-top:30px; font-size: 20px;width:80%;">
               <th>Username</th>
               <th id="question">Max score</th>
               <th id="answer">Email</th>
            </tr>


         </thead>
         <tbody style="margin:20px; margin-top:30px; font-size: 20px;">
            <?php
            // Create conenction
            $connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');

            // Check connection
            if ($connect->connect_error) {
               die("Connection failed: " . $connect->connect_error);
            }

            // Read all row from database table
            $sql = 'SELECT * FROM users ORDER BY users.maxscore DESC ';
            $result = $connect->query($sql);

            if (!$result) {
               die('Invalid query: ' . $connect_error);
            }

            while ($row = $result->fetch_assoc()) {
               echo "
                        <tr>
                        <td style='text-align: left;'>$row[name]</td>
                        <td style='text-align: center;'>$row[maxScore]</td>
                        <td style='text-align: left;' > $row[email]</td>
                        </tr>
                    
                        ";
            }
            ?>

         </tbody>
      </table>

<style>
   body{
      
   }
</style>

   </div>

</body>