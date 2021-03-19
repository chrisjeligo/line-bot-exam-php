<?php



require "vendor/autoload.php";

$access_token = 'k9W59oZ0c3/ZcgSZtJ9zmNT+0CfT+XCBVpYPMKZTKcE1NprF6CWjrFgK8LYVfks++v6OnPLM7JLzhZt6rU9DliNrJpWHJZXA+8orI0/jKYWLoKxRI++WPgrSW+QHy6BbvdQaSWyD72NKYvoRjpEMFAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f22f0820707f753a9a57f68064f04c4d';

$pushID = 'U8a3983a11ee8f700d7b31aceada5708b'; //user id - change here

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Kuay เซียน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







