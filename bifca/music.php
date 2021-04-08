<html>
<head>
    <title>Group 3 is better than group 2... fight me</title>
</head>
<body>
    <?php
        $curl = curl_init();
        CURL_SETOPT($curl, CURLOPT_RETURNTRANSFER,1);



        $url = "https://v1.alapi.cn/api/music/search?keyword=Beyonce";

        CURL_SETOPT($curl, CURLOPT_URL, $url);

        $results = json_decode(curl_exec($curl));
        // print $url;

        foreach($results->data->songs as $result){
            print $result->name."<br>";
        }
    ?>


    <?php
        $curl = curl_init();
        CURL_SETOPT($curl, CURLOPT_RETURNTRANSFER,1);



        $url = "https://api.uomg.com/api/rand.music?sort=热歌榜&format=json";

        CURL_SETOPT($curl, CURLOPT_URL, $url);

        $result = json_decode(curl_exec($curl));
        // print $url;


            print $result->name."<br>";
            print $result->data->url."<br>";
            print $result->data->picurl."<br>";
            print $result->data->artistsname."<br>";

    ?>
</body>
</html>
