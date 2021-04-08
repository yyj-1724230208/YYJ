<!DOCTYPE html>
<html>
  <head>
  	<title>DELETE <?php echo $_GET['gameName'];?></title>
    <style type="text/css">
      body{
        background-color: lightgreen;
      }
      .DELETE {
        padding-bottom: 30px;
        padding-top: 30px;
        margin-left: 35%;
        margin-right: 35%;
        margin-top: 20%;
        text-align: center;
        background-color: lightblue;
        font-size: 24px;
      }
    </style>
  </head>
  <body>
   <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "games";
      $connection = new mysqli($servername, $username, $password, $dbname);

     if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST['confirm'])){

          $sqldelete = 'DELETE FROM information WHERE gameID = '.$_GET['id'];

          if($connection->query($sqldelete) === TRUE){
            echo"New record deleted successfully. <a href='database.php'>Click Here</a> to back";
          }
          else{
            echo"Unfortunatly we couldn't delete the recode!";
          }


     }
     else{
      ?>
      <div class="DELETE">
      <form action='delete.php?name=<?php echo $_GET['name'];?>&id=<?php echo $_GET['id'];?>' method='post'>
        <lable>confrm you want to delete the game <?php echo $_GET['name'];?>from the Pokedex.</lable><br>
        <lable>Click here to confirm </lable><input type="checkbox" name="confirm"><br>
        <input type="submit" name="submit">
      </form>
    </div>
  <?php
     }
     ?>
  </body>
 </html>
