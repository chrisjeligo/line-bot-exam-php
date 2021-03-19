<?php
$access_token = 'k9W59oZ0c3/ZcgSZtJ9zmNT+0CfT+XCBVpYPMKZTKcE1NprF6CWjrFgK8LYVfks++v6OnPLM7JLzhZt6rU9DliNrJpWHJZXA+8orI0/jKYWLoKxRI++WPgrSW+QHy6BbvdQaSWyD72NKYvoRjpEMFAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
