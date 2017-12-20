<?php
function sendSms($number,$massage)
{
    $number = ltrim($number, '0');
    $number= '94'.$number;
// Authorisation details.
    $username = "supunsnnk@gmail.com";
    $hash = "b6a22ab63e78e8916617d011e700ce8ffdab3e7af4a92463f9add48b639e23ea";

// Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

// Data for text message. This is the text message data.
    $sender = "Canteen"; // This is who the message appears to be from.
    $numbers = $number; // A single number or a comma-seperated list of numbers
    $message = $massage;
// 612 chars or less
// A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
    $ch = curl_init('http://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    return($result);
}
?>