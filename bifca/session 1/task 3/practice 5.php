<html>
  <head>
    <title>practice 5</title>  </head>
    <body>
      <?php
        $month = date('F',time());
        if($month == "December"){
           echo "It's December, here comes the snow.";
        }
        else{
           echo "It’s not December so you can keep the heating off.";
        }
        echo "<br><br><br><br>";
      ?>

  </body>

</html>
