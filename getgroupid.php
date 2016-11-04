<?php
$access_token = 'IuM1APpXsYJiNcxSom3dxgpTGQj6A/gRFF1crr+uuGB6HqM7a4g2SKgX91zMC3TKHNLJ9NqhDN7/1FTKfhmJ6K3TOG2srD5uby0WFgydq5w9g6F55c6VlpuU7oqDlGb3cFNhLW4f+7Ju/3vx2uMyKAdB04t89/1O/w1cDnyilFU=';
$userid = 'Uf6fc670282d1f0a8b1d48ace208e8422';
//$userid = '@yvw3254a';
$url = 'https://api.line.me/v2/bot/profile/'.$userid;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
$obj = json_decode($result);
$name = $obj->{'displayName'};
echo $name."<br>";
var_dump($obj);

