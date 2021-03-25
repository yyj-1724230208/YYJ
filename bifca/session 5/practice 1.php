<html>
  <head>
    <title>practice 1</title>
  </head>
    <body>
    <?php
      $curl = curl_init();

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      if(isset($_GET['pokemon'])){
         $pokemon = $_GET['pokemon'];
         }
      else {
        $pokemon = "charizard";
      }
      $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon;

      curl_setopt($curl,CURLOPT_URL,$url);

      $result = json_decode(curl_exec($curl));

      print "<img src='".$result->sprites->front_default."'><br>";
      print "<h1>".$result->name."</h1>";
      print "<h1>Height:".$result->height."</h1>";
      print "<h1>Weight:".$result->weight."</h1>";

    ?>
  </body>

</html>
