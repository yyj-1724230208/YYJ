<html>
  <head>
    <title>practice 1</title>
  </head>
    <body>
    <?php
      $curl = curl_init();

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      if(isset($_GET['item'])){
         $item = $_GET['item'];
         }
      else {
        $item = "Bandage";
      }
      $query = array(
             "x-api-key" => "QJEZxalMqapyjmvZ",
             "q" => $item
      );

      $url = "https://tarkov-market.com/api/v1/item"."?".http_build_query($query);
      curl_setopt($curl,CURLOPT_URL,$url);
      // echo $url;
      $results = json_decode(curl_Exec($curl));

      foreach($results as $result){
        echo "<img src='".$result->icon."'>";
      }

    ?>
  </body>

</html>
