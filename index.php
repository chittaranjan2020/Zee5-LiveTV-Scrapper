<?php
// ©Chittaranjan [ Telegram ]
// usage index.php?c=0-9-129
// Don't Change Any Thing !

$input = $_GET["c"];
if (!$input){
   exit("<h3>Channel ID not found <br><br>You Entered Worng ID or Not Entered ID Here</h3><br><h4> Use Correct Format ➸ <code>https://zee.avipatilpro.repl.co/?c=CHANNEL_ID_HERE</code> <br><br><br> <h4> ➤ Created by <a href='https://github.com/chittaranjan2020'>Chittaranjan Maharana</a></h4> ");
  
}
$channel_meta = JsonfromURI("https://catalogapi.zee5.com/v1/channel/${input}");
$stream_url = $channel_meta->stream_url_hls;
$tok_json = JsonfromURI("https://useraction.zee5.com/token/live.php");
$video_token = $tok_json->video_token;
$m3u8 = $stream_url.$video_token;
echo $m3u8;
// header("Location: $m3u8"); --> For Direct Play

function JsonfromURI($url) {
   $resp = file_get_contents($url);       
   return json_decode($resp);


header("Location: $stream_url.$video_token;
echo $m3u8;");
exit();
};
?>
