<!DOCTYPE html>
<html>
  <head>
  	<title>Practice 1</title>
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
    // 0~30 Total.
        $total = 0;
          for ($i=0; $i < 30; $i++) {
          	$total = $total + $i;
          }
           echo $total;

          echo"<br><br><br><br><br><br><br>";
    ?>



 <?php
    // question 2

          for ($row = 1; $row <= 4; $row++) {
               for ($star = 1; $star <= $row ; $star++) {
               	echo "*";
               }
          	   echo "<br/>";
          }


          echo"<br><br><br><br><br><br><br>";
    ?>




<!-- question 4 -->

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
