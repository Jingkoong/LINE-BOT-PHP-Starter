<?php
$access_token = 'IuM1APpXsYJiNcxSom3dxgpTGQj6A/gRFF1crr+uuGB6HqM7a4g2SKgX91zMC3TKHNLJ9NqhDN7/1FTKfhmJ6K3TOG2srD5uby0WFgydq5w9g6F55c6VlpuU7oqDlGb3cFNhLW4f+7Ju/3vx2uMyKAdB04t89/1O/w1cDnyilFU=';
date_default_timezone_set("Asia/Bangkok");

			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Get useid
			$useid = $event['source']['userId'];
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => "ขณะนี้เวลา " . date("h:i:sa")
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'Ua912d9ff96886713d731319c8d58436d',
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";

echo "OK";
