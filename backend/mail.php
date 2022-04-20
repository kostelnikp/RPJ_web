<?php

$message = "Line 1\nLine 2\nLine 3";


$message = wordwrap($message, 70);


$to = "user2@spsepotest.com";
$subject = "Skuska";
$body = "Telo spravy";
$headers = "From: user1@spsepotest.com";


if (ISSET($_POST['send'])) {
    mail($to,$subject,$body,$headers);
}
