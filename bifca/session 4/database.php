<!DOCTYPE html>
<html>
  <head>
  	<title>Exercise 1</title>
    <style type="text/css">
      body{
        background-color: lightgreen;
      }
      button{
        text-align: center;
        font-size: 30px;
        height: 120px;
        width: 300px;
        background-color: lightblue;
      }
      .anniu{
        text-align: center;
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
      $sql = "SELECT * FROM information ORDER BY gameID ASC";


      $result = mysqli_query($connection,$sql);
      if(mysqli_num_rows($result) > 0){
      	echo"<table>
      	         <tr><th>ID</th> <th>NAME</th> <th>COMPANY</th> <th>TYPE</th> <th>INTRDUCTION</th> <th>PRICE</th> <th>ISSUEDATE</th> <th>URL</th> <th>PHOPTO</th> <th>UPDATE</th> <th>DELETE</th> </tr>";
      	         while($row = mysqli_fetch_assoc($result)){
      	         	echo"<tr>
      	         	      <td>".$row["gameID"]."</td>
      	         	      <td>".$row["gameName"]."</td>
      	         	      <td>".$row["company"]."</td>
      	         	      <td>".$row["type"]."</td>
      	         	      <td>".$row["introduct"]."</td>
      	         	      <td>".$row["price"]."</td>
      	         	      <td>".$row["issueDate"]."</td>
                        <td><a href = '".$row["url"]."'>".$row["url"]."</a></td>
      	         	      <td><img src = '".$row["photo"]."'height = '100px' width = '150px'></td>
                        <td><a href = 'update.php?id=".$row["gameID"]."'>Update</a></td>
                        <td><a href = 'delete.php?id=".$row["gameID"]."&name=".$row["gameName"]."'>Delete</a></td>

      	         	     </tr>";
      	                 }
        echo "</table>";
                 }
               mysqli_close($connection);
     ?>

     <div class="anniu"><a href="list.php"><button> add new game</button></a></div>


  </body>
 </html>
