<html>
  <head>
    <title>practice 6</title>  </head>
    <body>
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
  </body>

</html>
