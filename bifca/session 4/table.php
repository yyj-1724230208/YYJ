<!DOCTYPE html>
<html>
  <head>
  	<title>table</title>
    <style type="text/css">
      body{

        background-color: lightgreen;

      }
    </style>
  </head>
  <body>
    <q>table</q>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "games";
      $connection = new mysqli($servername, $username, $password, $dbname);


      $sql = "INSERT INTO information VALUES('".$_POST["gameID"]."','".$_POST["gameName"]."','".$_POST["company"]."','".$_POST["type1"]."','".$_POST["introduct"]."','".$_POST["price"]."','".$_POST["issuedate"]."','".$_POST["url"]."','".$_POST["photo"]."')";

      if ($connection->query($sql) === TRUE){
        echo "New record created successfully,<a href='database.php'>Click Here</a> to back";
      }
      else{
        echo"New record created unsuccessfully,<a href='table.php'>Click Here</a> to change";
      }
      $connection->close();
     ?>




  </body>
 </html>
