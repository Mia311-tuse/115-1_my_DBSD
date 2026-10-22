<?php
include ("about_me.php");
echo "Ex01<br/>";

function rateExchange($amount, $rate)
{
    $result = $amount * $rate;
    return $result;
}

$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=" . $result . "元<br/>";

require("ch6-5-1.inc");
$file = "ch6-5-1.inc";
require $file;
