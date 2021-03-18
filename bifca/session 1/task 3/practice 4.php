<html>
  <head>
    <title>practice 4</title>
    <style type="text/css">
  		#biao{
          width: 400px;
          height: 400px;
          background-color: black;
            }
        #a{
          width: 10px;
          height: 50px;
          background-color: white;
        }

    </style>
    </head>
    <body>
      <?php
      echo "<table width='400px' border=1>";
      for ($w=1;$w<=8;$w++){
        echo "<tr>";
        for ($b=1;$b<=8;$b++){
          if(($w+$b)%2){
            echo "<td height='40px' bgcolor='black'></td>";
          }else{
            echo "<td></td>";
             }
           }
        echo "</tr>";
      }
        echo "</table>";
      ?>

  </body>

</html>
