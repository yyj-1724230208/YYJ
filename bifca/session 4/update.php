<!DOCTYPE html>
<html>
  <head>
  	<title>UPDDATE</title>
      <style type="text/css">
        body{
          background-color: lightgreen;
        }
        .UPDATE {
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
      $sql = "SELECT * FROM information WHERE gameID = ".$_GET['id'];


      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sqlupdate = "UPDATE information SET gameName='".$_POST['gameName']."',company='".$_POST['company']."',type='".$_POST['type']."',price='".$_POST['price']."',issueDate='".$_POST['issueDate']."',url='".$_POST['url']."'WHERE gameID =".$_GET['id'];


    if ($connection->query($sqlupdate) === TRUE){
        echo "New record update successfully.<a href=database.php>Click here</a>to back";
            }
      else{
        echo"New record update unsuccessfully.";
      }
    }



      $result = mysqli_query($connection,$sql);
      if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){
                 ?>
                  <div class ='UPDATE'> <form action="update.php?id=<?php echo $_GET['id'];?>" method="POST">

                  <lable> GameName: </lable>
                  <input type="text" name="gameName" value="<?php echo $row['gameName'];?>"><br>
                  <lable> Company: </lable>
                  <input type="text" name="company" value="<?php echo $row['company'];?>"><br>
                  <lable> Type: </lable>
                  <input type="text" name="type" value="<?php echo $row['type'];?>"><br>
                  <lable> Price: </lable>
                  <input type="text" name="price" value="<?php echo $row['price'];?>"><br>
                  <lable> Issuedate: </lable>
                  <input type="text" name="issueDate" value="<?php echo $row['issueDate'];?>"><br>
                  <lable> URL: </lable>
                  <input type="text" name="url" value="<?php echo $row['url'];?>"><br>

                  <input type="submit" name="submit">


                  </form>
                  </div>


                 <?php
  	                   }
                    }
                ?>


  </body>
 </html>
