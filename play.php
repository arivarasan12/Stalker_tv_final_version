<html>
<head>
<title><?php echo $_REQUEST["c"]; ?> | LiveTV</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="https://play-lh.googleusercontent.com/A0UZO-jMqgtkSZ29w8xUbU0g55JLBa65zZX3QpFUB9sOjz9a7kLcb3do2Sg-pHIH4w0=w240-h480">
<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
<link rel="stylesheet" href="http://localhost/plyr.css">
<style>
html {
  font-family: Poppins;
  background: #000;
  margin: 0;
  padding: 0
}

.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }
    
    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 150px;
        line-height: 100px;
    }
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        
        background-size: 35px auto, auto;
    }

    .plyr__video-wrapper::after {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
        content: '';
        height: 40px;
        width: 40px;
        background: url('https://play-lh.googleusercontent.com/A0UZO-jMqgtkSZ29w8xUbU0g55JLBa65zZX3QpFUB9sOjz9a7kLcb3do2Sg-pHIH4w0=w240-h480') no-repeat;
        background-size: 35px auto, auto;
    }

</style>

</head>
<body>
  <div id="loading" class="loading">
<div class="loading-text">
    <span class="loading-text-words">S</span>
    <span class="loading-text-words">T</span>
    <span class="loading-text-words">A</span>
    <span class="loading-text-words">L</span>
    <span class="loading-text-words">K</span>
    <span class="loading-text-words">E</span>
    <span class="loading-text-words">R</span>
    <span class="loading-text-words">-</span>
    <span class="loading-text-words">T</span>
    <span class="loading-text-words">V</span>

</div>
</div>

<div id="player">
<video  title="<?php echo $_REQUEST["q"]; ?>" id="video" style="width:100%;height:100%;"></video>
</div>
<script>
  setTimeout(videovisible, 4000)

function videovisible() {
    document.getElementById('loading').style.display = 'none'
}


var url="<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://live.new4k.tv/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent: Model: MAG250; Link: WiFi',
    'Referer: http://live.new4k.tv/stalker_portal/c/',
    'Accept: /',
    'Host: live.new4k.tv',
    'Connection: Keep-Alive'));
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT');

$response = curl_exec($ch);
$decoded_json = json_decode($response, true);
 
$customers = $decoded_json['js'];
$token= $customers['token'];
$randome=$customers['random'];
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://live.new4k.tv/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=C17992B38C6B1&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=c17992b38c6b1ef0e854c478029b8ab3&timestamp=1666586897&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3AD6%3A82%3AFC%22%2C%22sn%22%3A%22C17992B38C6B1%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22395d1941f5b3f4649eb51e9cc13e05ae%22%7D&JsHttpRequest=1-xml');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent: Model: MAG250; Link: WiFi',
    'Referer: http://live.new4k.tv/stalker_portal/c/',
    'Authorization: Bearer '.$token,
    'Accept: /',
    'Host: live.new4k.tv',
    'Connection: Keep-Alive',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT');

$response = curl_exec($ch);

curl_close($ch);



$ch = curl_init();
$channelno=$_REQUEST["q"];
curl_setopt($ch, CURLOPT_URL,'http://live.new4k.tv/stalker_portal/server/load.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffrt+http%3A%2F%2Flocalhost%2Fch%2F'.$channelno);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent:  Model: MAG250; Link: WiFi',
    'Referer:  http://live.new4k.tv/stalker_portal/c/',
    'Authorization: Bearer '.$token,
    'Accept:  /',
    'Host:  live.new4k.tv',
    'Connection:  Keep-Alive',
    
    // 'Cookie: mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT'
));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT');
$response = curl_exec($ch);
$decoded_json = json_decode($response, true);
 
$customers = $decoded_json['js'];
$channelurl= $customers['cmd'];
echo $channelurl.'"';
curl_close($ch);
?>;
plyr.setup(video);

 if(Hls.isSupported()) {
    var video = document.getElementById('video');
    var hls = new Hls();
    hls.loadSource(url);
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED,function() {
      video.play();
  });
 }
  else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = url;
    video.addEventListener('canplay',function() {
      video.play();
    });

  }


</script>

</body>
</html>
