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
      $sql = "SELECT lastName, firstName, jobTitle From employees ORDER BY lastName ASC";


      $result = mysqli_query($connection,$sql);
      if(mysqli_num_rows($result) > 0){
      	echo"<table>
      	         <tr><th>LastName</th><th>FirstName</th><th>JobTitle</th></tr>";
      	         while($row = mysqli_fetch_assoc($result)){
      	         	echo"<tr>
      	         	      <td>".$row["lastName"]."</td>
      	         	      <td>".$row["firstName"]."</td>
      	         	      <td>".$row["jobTitle"]."</td>
      	         	     </tr>";
      	                 }
        echo "</table>";
                 }
               mysqli_close($connection);
