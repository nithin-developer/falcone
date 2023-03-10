<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

use KiteConnect\KiteConnect;

// Initialise.
$kite = new KiteConnect("xv9q7kaq0d5m8gdt");

// Assuming you have obtained the `request_token`
// after the auth flow redirect by redirecting the
// user to $kite->login_url()
try {
    $kite->getLoginURL();
    $request_token = $_GET['request_token'];
    $user = $kite->generateSession($request_token, "fxbcx6pligh3mgbtltmct4ult5ex0d8j");
    echo "Authentication successful. \n";
    // print_r($user);
    $kite->setAccessToken($user->access_token);
} catch (Exception $e) {
    echo "Authentication failed: " . $e->getMessage();
    throw $e;
}

echo $user->user_name . " has logged in";
$access = $user->access_token;
$_SESSION['token'] = $access;

?>

<a href="sss.php">Open Data</a>

<?php


// $url = "https://www.nseindia.com/api/option-chain-indices?symbol=NIFTY";
// //  Initiate curl
// $ch = curl_init();
// // Will return the response, if false it print the response
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// // Set the url
// curl_setopt($ch, CURLOPT_URL,$url);
// // Execute
// $result=curl_exec($ch);
// // Closing
// curl_close($ch);

// // Will dump a beauty json :3
// var_dump(json_decode($result, true));


?>