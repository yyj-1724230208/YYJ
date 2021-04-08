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

    //  if(isset($_GET['stat'])){
    //     $num = $_GET['stat'];
    //     }
    //  else {
    //    $num = 1;
    //  }
    //  $url = "http://v.juhe.cn/toutiao/index".$num;

      $key = "APPKEY";
      $query = array(
        "key"=>$key,
        "type"=>"top"
      );

      $url="http://v.juhe.cn/toutiao/index"."?".http_build_query($query);

      curl_setopt($curl,CURLOPT_URL,$url);

      $result = json_decode(curl_exec($curl));

      print "<h1>".$result->data->title."</h1>";
      print "<h1>".$result->data->author_name."</h1>";

    ?>
    <div>
  </body>

</html>
