<html>
  <head>
  	<title>Exercise 1</title>
  </head>
  <body>
    <q>question 1</q>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "classicmodels";
      $connection = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT contactLastName, country, city From customers";


      $result = mysqli_query($connection,$sql);
      if(mysqli_num_rows($result) > 0){
      	echo"<table>
      	         <tr><th>LastName</th><th>country</th><th>city</th></tr>";
      	         while($row = mysqli_fetch_assoc($result)){
      	         	echo"<tr>
      	         	      <td>".$row["contactLastName"]."</td>
      	         	      <td>".$row["country"]."</td>
      	         	      <td>".$row["city"]."</td>
      	         	     </tr>";
      	                 }
        echo "</table>";
                 }
               mysqli_close($connection);
