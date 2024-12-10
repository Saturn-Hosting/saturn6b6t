<?php

$method = $_SERVER['REQUEST_METHOD'];

if (!$method === 'POST') {
    header('Location: /contact');
    exit;
}

$msg = $_POST['message'] ?? '';

if (empty($msg)) {
    header('Location: /contact');
    exit;
}

$msg = preg_replace('/(@)/', '@|', $msg);
$msg = preg_replace('/([\\\\\'"@#])/', '\\\\$1', $msg);

$url = 'https://discord.com/api/webhooks/1316032261942018098/eWILoCopkADSIQLZ-Q2YKy2QrV7wV1NW7s2po1hKw3QfjOONhfcApPjgV8eZsw2AJ8k7';
$headers = ['Content-Type: application/json; charset=utf-8'];
$POST = ['username' => 'contact', 'content' => $msg];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
curl_exec($ch);

header('Location: /nothing');
