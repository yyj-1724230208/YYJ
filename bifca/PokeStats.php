<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
       body{
         background-color: lightgreen;
       }
      .box{
        height: 400px;
        width: auto;
        text-align: center;
      }
    </style>
  </head>
    <body>
      <div class="box">
    <?php
      $curl = curl_init();

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      if(isset($_GET['id'])){
         $pokemon = $_GET['id'];
         }
      else {
        $pokemon = 1;
      }
      $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon;



      curl_setopt($curl,CURLOPT_URL,$url);

      $result = json_decode(curl_exec($curl));

      print "<img src='".$result->sprites->front_default."' style= height=400px; width=200px;><br>";
      print "<h1>".$result->name."</h1>";
      print "<h1>Height:".$result->height."</h1>";
      print "<h1>Weight:".$result->weight."</h1>";

    ?>
    <div>
  </body>

</html>
