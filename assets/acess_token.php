<?php include_once 'db.php';

$consumerKey = "YOUR_CONSUMER_KEY";
$consumerSecret = "YOUR_CONSUMER_SECRET";

$credentials = base64_encode($consumerKey . ":" . $consumerSecret);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,
"https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials");

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Basic $credentials"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response);

echo $result->access_token;
?>
<?php

$BusinessShortCode = "174379";
$Passkey = "YOUR_PASSKEY";
$Timestamp = date('YmdHis');

$Password = base64_encode(
    $BusinessShortCode .
    $Passkey .
    $Timestamp
);