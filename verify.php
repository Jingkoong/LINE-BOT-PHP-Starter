<?php
$access_token = '+jwbx0a/YQ/4saX2ScfX99HdbkHJFkMRP4NqwlrcJVntQODeR3YjBSRkyubUusXnrMLXL7YMcrSd2jeIwHJJj8My0+dF/kHbECXMnYgKYoayW956+ApCINwk7AgqwCjtIQMOeoHmIlHZo83wFJd5qwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
