<?php
    require '../vendor/autoload.php';
    $key = '../key.json';   
    $sheet_id = "1h0uNLcQ9DaWGsIsdCijFMphbYcVH_PGTvnGiZHU3vLc";

    $client = new \Google_Client();
    $client->setAuthConfig($key);
    $client->addScope(\Google_Service_Sheets::SPREADSHEETS);
    $client->setApplicationName('choinomi');
    $sheet = new \Google_Service_Sheets($client);

    $sheet_range = 'A6:AZ6'; // フォルダコピー後表示するRangeを変更