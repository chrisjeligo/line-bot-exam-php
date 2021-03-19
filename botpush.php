<?php



require "vendor/autoload.php";

$access_token = 'k9W59oZ0c3/ZcgSZtJ9zmNT+0CfT+XCBVpYPMKZTKcE1NprF6CWjrFgK8LYVfks++v6OnPLM7JLzhZt6rU9DliNrJpWHJZXA+8orI0/jKYWLoKxRI++WPgrSW+QHy6BbvdQaSWyD72NKYvoRjpEMFAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f22f0820707f753a9a57f68064f04c4d';

$pushID = 'Uf5cda2d0838064186a9a1b3d421d4f85';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







