<!DOCTYPE html>
<html>
  <head>
  	<title>Exercise 4</title>
  </head>
  <body>
    <q>question 4</q>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "classicmodels";
      $connection = new mysqli($servername, $username, $password, $dbname);

      $sql1 = "SELECT customerName, customerLastName From customer";
      $sql2 = "SELECT orderNumber, orderDate From orders";



      $result1 = mysqli_query($connection,$sql1);

      if(mysqli_num_rows($result) > 0){
      	echo"<table>
      	         <tr><th>Name</th><th>lastName</th></tr>";
      	         while($row = mysqli_fetch_assoc($result)){
      	         	echo"<tr>
      	         	      <td>".$row["customerName"]."</td>
      	         	      <td>".$row["customerLastName"]."</td>
      	         	     </tr>";
      	                 }
        echo "</table>";
                 }
               mysqli_close($connection);

      $result2 = mysqli_query($connection,$sql2);
               if(mysqli_num_rows($result2) > 0){
                echo"<table>
                         <tr><th>orderNumber</th><th>orderDate</th></tr>";
                         while($row = mysqli_fetch_assoc($result2)){
                          echo"<tr>
                                <td>".$row["orderNumber"]."</td>
                                <td>".$row["orderDate"]."</td>
                               </tr>";
                                 }
                 echo "</table>";
                          }
                        mysqli_close($connection);
     ?>

  </body>
 </html>
