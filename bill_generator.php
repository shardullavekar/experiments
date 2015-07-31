<?php

$uniqueId = "CUST01" . time() . rand(10000,99999);
$command = "debit";
$accessToken = "3u41p82uT1";
$salt = "n7QRr98Ui4";
$comments = "optional";
$udf = "optional";
$return_url = "https://yourwebsite.com/return_url.php";
$notify_url = "https://yourwebsite.com/notify_url.php";
$amount = "100.00";
$currency = "INR";
$hash_data = $accessToken . "|" .$uniqueId .   "|" . 
        $comments .    "|" .$udf .        "|" . 
        $return_url .  "|" .$notify_url . "|" . 
        $currency .    "|" .$amount .     "|" . 
        $salt;

$hash = openssl_digest($hash_data, 'sha512');


$bill = array('command' => $command,
              'accessToken' => $accessToken,
 'comments' => $comments, 
              'uniqueId' => $uniqueId,
              'udf' => $udf,
 'hash' => $hash,
 'returnUrl' => $return_url,
 'notificationUrl' => $notify_url,
 'amount' => $amount,
 'currency' => $currency);

echo json_encode($bill);

?>
