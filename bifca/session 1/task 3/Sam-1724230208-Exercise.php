<!DOCTYPE html>
<html>
  <head>
  	<title>Practice 1</title>
  </head>
  <body>

  	<?php
    // Depending on whether it's August or not.
      $month = date('F',time());
      if($month == "December"){
         echo "It's December, here comes the snow.";
      }
      else{
         echo "It’s not December so you can keep the heating off.";
      }
      echo "<br><br><br><br>";
    ?>






    <?php
    // While loops
        $i =  0 ;
        while ($i <= 7 ) {
          echo "ABC&nbsp";
          $i++;
        }
    ?>

     <?php
    // Do While loops
        echo"<br><br><br><br>";
        $u =  0 ;
        do{
          echo "xyz&nbsp";
          $u++;
        }
        while ($u <= 9 );
    ?>

      <?php
    // For loops 1
        echo"<br><br><br><br>";
        for ($num = 1 ; $num < 10 ; $num++){
          echo $num;
        }
    ?>
     
       <?php
    // For loops 2
        echo"<br><br><br><br>";
        
        for ($string = "A" ; $string < "G" ; $string++){
         echo "<li>Iteam $string </li>\n";
        }
          echo "</ol>";
    ?>
     





      <?php
    // A list of equations for squares.
        echo"<br><br><br><br>";
        for ($num1 = 1 ; $num1 <= 12 ; $num1++){
            $result = $num1 * $num1;
            echo "$num1 * $num1 = $result<br>\n" ;
        }
    ?>








 <?php
    // Multiplication table.
        echo"<br><br><br><br>";
        echo "<table border='1'>";
        for ($num1 = 1 ; $num1 <= 7 ; $num1++){
        	echo "<tr>";
          for ($num2 = 1 ; $num2 <= 7 ; $num2++) {
            $result = $num1 * $num2;
            echo "<td>$result</td>" ; 
             } 
          }
          echo"<br>";
       
    ?>

  </body>
 </html>