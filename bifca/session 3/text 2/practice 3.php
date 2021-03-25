<!DOCTYPE html>
<html>
  <head>
  	<title>Exercise 3</title>
  </head>
  <body>
    <q>question 3</q>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "classicmodels";
      $connection = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT productCode, productName, productLine, quantityInStock From products ORDER BY productName, productLine ASC";


      $result = mysqli_query($connection,$sql);
      if(mysqli_num_rows($result) > 0){
      	echo"<table>
      	         <tr><th>productCode</th><th>productName</th><th>productLine</th><th>quantityInStock</th></tr>";
      	         while($row = mysqli_fetch_assoc($result)){
      	         	echo"<tr>
      	         	      <td>".$row["productCode"]."</td>
      	         	      <td>".$row["productName"]."</td>
      	         	      <td>".$row["productLine"]."</td>
                        <td>".$row["quantityInStock"]."</td>
      	         	     </tr>";
      	                 }
        echo "</table>";
                 }
               mysqli_close($connection);
     ?>

  </body>
 </html>
