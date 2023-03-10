<?php

session_start();

$access = $_SESSION['token'];

require_once __DIR__ . '/vendor/autoload.php';

use KiteConnect\KiteConnect;

// Initialise.
$kite = new KiteConnect("xv9q7kaq0d5m8gdt");

try {
    $kite->setAccessToken($access);
    echo "Authentication successful. \n";
} catch (Exception $e) {
    echo "Authentication failed: " . $e->getMessage();
    throw $e;
}

// echo "<pre>";
// print_r($kite->getQuote(["NSE:NIFTY 50"]));

// $asb = $kite->getQuote(["NSE:NIFTY 50"]);

// $js =  json_encode($asb, JSON_PRETTY_PRINT);

// echo "<script>console.log('$js')</script>";
// echo $js;
// $jsde = json_decode($js);

// $data = json_decode($js,true);  

// echo $jsde->instrument_token;

// echo $data["NSE:NIFTY 50"]["last_price"];  


$url = "https://www.nseindia.com/api/option-chain-indices?symbol=NIFTY";
//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL, $url);
// Execute
$result = curl_exec($ch);
// Closing
curl_close($ch);

$abc = json_encode($result, JSON_PRETTY_PRINT);
echo "<script>console.log('".$abc."')</script>";
// Will dump a beauty json :3
$de =  json_decode($abc, true);
echo "<pre>";
print_r($de);
var_dump($de);
