<?php
$access_token = 'Q/YRADd89Oui0ynIi05TN0AzXJSPo8vA6W/PK+oLXjjCSkm20vcGHC0Uyxrm2orDgwNYXYQ8YKCwsIleQAO7z7ZupTu3MHmUkaHLWr+iE+h2Y5kljirAFh3pnunSbhsDa/xB3pmfVCMJ6Y8dmaYqKwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
