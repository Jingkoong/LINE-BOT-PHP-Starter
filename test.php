<?php
include ('vendor/autoload.php');
use \LINE\LINEBot;
use \LINE\LINEBot\HTTPClient;
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot\MessageBuilder;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('IuM1APpXsYJiNcxSom3dxgpTGQj6A/gRFF1crr+uuGB6HqM7a4g2SKgX91zMC3TKHNLJ9NqhDN7/1FTKfhmJ6K3TOG2srD5uby0WFgydq5w9g6F55c6VlpuU7oqDlGb3cFNhLW4f+7Ju/3vx2uMyKAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '2fa416dd228a8bc1a9ceaa51fc768f48']);

echo "Start<br>";

$response = $bot->getMessageContent('6328682950755');
if ($response->isSucceeded()) {
	echo "GetMSG<br>";
    $tempfile = tmpfile();
    fwrite($tempfile, $response->getRawBody());
	echo "Succeeded<br>";
} else {
	echo "FAIL<br>";
    error_log($response->getHTTPStatus() . ' ' . $response->getRawBody());
}

echo "OK";
