<?php
    require ROOT.'vendor/autoload.php';
    $key = ROOT.'key.json';
    $sheet_id = "1h0uNLcQ9DaWGsIsdCijFMphbYcVH_PGTvnGiZHU3vLc";
    $client = new \Google_Client();
    $client->setAuthConfig($key);
    $client->addScope(\Google_Service_Sheets::SPREADSHEETS);
    $client->setApplicationName('choinomi');
    $sheet = new \Google_Service_Sheets($client);