<!DOCTYPE html>
<html>
  <head>
  	<title>Exercise 1</title>
  </head>
  <body>

  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "classicmodels";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $id=$_POST['id'];
    $id=$_POST['id'];
    $id=$_POST['id'];





    $results = $connection->query($sql);
    if($results->num_rows > 0){
      echo"<table>
               <tr><th>Prodcut Line</th><th>Decription</th></tr>";
               while($row = $results->fetch_assoc()){
                echo"<tr>
                      <td>".$row["productLine"]."</td>
                      <td>".$row["textDescription"]."</td>
                     </tr>";
                       }
      echo "</table>";
               }
             mysqli_close($connection);
   ?>



     </body>
     </html>
