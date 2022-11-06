<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <title><?php echo $_REQUEST["name"]; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="css/darkmode.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.5/lazysizes.min.js"></script>
</head>

<body data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="">
    <div id="jtvh1"><a href="https://github.com/arivarasan12">
            <h1><?php echo $_REQUEST["name"]; ?> </h1>
    </div></a>
    <div id="content">
        <div class="container">
            <div id="list" class="row">
                <?php
        
                // $int_var = (int)filter_var($tem, FILTER_SANITIZE_NUMBER_INT);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'http://eurostar.mix.tm/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
                    'X-User-Agent: Model: MAG250; Link: WiFi',
                    'Referer: http://eurostar.mix.tm/stalker_portal/c/',
                    'Accept: /',
                    'Host: eurostar.mix.tm',
                    'Connection: Keep-Alive'
                ));
                curl_setopt($ch, CURLOPT_COOKIE, 'mac=10:27:BE:5B:64:8B; stb_lang=en; timezone=GMT');

                $response = curl_exec($ch);
                // echo $response;
                $decoded_json = json_decode($response, true);

                $customers = $decoded_json['js'];
                $token = $customers['token'];
                $randome = $customers['random'];
                curl_close($ch);

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'http://eurostar.mix.tm/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=EB46E386EEE26&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E&device_id2=ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=eb46e386eee26a40e033c245a03c5cde&api_signature=263&metrics=%7B"mac"%3A"10%3A27%3ABE%3A5B%3A64%3A8B"%2C"sn"%3A"EB46E386EEE26"%2C"model"%3A"MAG250"%2C"type"%3A"STB"%2C"uid"%3A""%2C"random"%3A"11f4dd1d5b4c7b21618c8d92cc414247"%7D&JsHttpRequest=1-xml');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
                    'X-User-Agent: Model: MAG250; Link: WiFi',
                    'Referer: http://eurostar.mix.tm/stalker_portal/c/',
                    'Authorization: Bearer ' . $token,
                    'Accept: /',
                    'Host: eurostar.mix.tm',
                    'Connection: Keep-Alive',
                ]);
                curl_setopt($ch, CURLOPT_COOKIE, 'mac=10:27:BE:5B:64:8B; stb_lang=en; timezone=GMT');

                $response = curl_exec($ch);
                // echo $response;

                curl_close($ch);



                $pageno = 0;
                $maxpageno = 1;


                while ($pageno <= $maxpageno && $pageno < 25) {
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'http://eurostar.mix.tm/stalker_portal/server/load.php?type=vod&action=get_ordered_list&category=990&genre=75&p='.$pageno.'&sortby=added&JsHttpRequest=1-xml');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
                        'X-User-Agent:  Model: MAG250; Link: WiFi',
                        'Referer:  http://eurostar.mix.tm/stalker_portal/c/',
                        'Authorization: Bearer ' . $token,
                        'Accept:  /',
                        'Host:  eurostar.mix.tm',
                        'Connection:  Keep-Alive',

                        // 'Cookie: mac=10:27:BE:5B:64:8B; stb_lang=en; timezone=GMT'
                    ));
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_COOKIE, 'mac=10:27:BE:5B:64:8B; stb_lang=en; timezone=GMT');
                    $resp = curl_exec($ch);
                    // echo $resp;

                    if ($resp == 'Authorization failed.') {
                        echo "No Search Results Found Or try Refershing The Page";
                        break;
                    } else {

                        $decoded_json = json_decode($resp, true);
                        $customers = $decoded_json['js'];
                        $total_items = $customers['total_items'];
                        $max_page_items = $customers["max_page_items"];
                        $maxpageno = ceil($total_items / $max_page_items);
                        $token1 = $customers["data"];
                        $token2 = $token1[0];
                        $json2 = json_encode($token2);
                        for ($x = 0; $x < sizeof($token1); $x++) {
                            $tempvar = $token1[$x];
                            $name = $tempvar['name'];
                            $screenshot_uri = $tempvar["screenshot_uri"];
                            $cmd = $tempvar["id"];
                            echo '<div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2"><a href="movieplay.php?c=';
                        
                            $name = json_encode($name);
                            $category=$tempvar['category_id'];
                            $cat=json_encode($category);
                            $name = trim(str_replace('\/', '/', $name), '"');
                            $cmd = json_encode($cmd);
                            echo trim(str_replace('\/', '/', $cmd), '"');
                            echo '&ca=';
                            echo trim(str_replace('\/', '/', $cat), '"');
                            echo '&name=';
                            echo trim(str_replace('\/', '/', $name), '"');
                            
                            echo '" class="card">';
                            echo '<img class="lazyload" data-src="';
                            echo 'http://eurostar.mix.tm';
                            $screenshot_uri=json_encode($screenshot_uri);
                            echo trim(str_replace('\/','/',$screenshot_uri),'"');
                            echo '" onerror=this.src="http://static2.tgstat.ru/channels/_0/8b/8b2b3c0f2516974f647268e9b5337c60.jpg" style="height: 200px">';
                            echo '<div class="card-body"><p class="card-text">';
                            echo trim(str_replace('\/', '/', $name), '"');
                            echo ' </p></div></a></div>';
                        }
                        echo $pageno;
                        echo $maxpageno;
                        $pageno = $pageno + 1;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>