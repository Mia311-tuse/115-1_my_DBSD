<?php
function printHeader()
{
    echo "<h3> SID: C113181127 </h3>";
    echo "<h3> Name: 謝佳芯 </h3>";
    echo "<h3>EX02</h3>";
}

function rateExchange($amount, $rate)
{
    $result = $amount * $rate;
    return $amount * $rate;
}

$rate = rateExchange(1000, 32.5);
printHeader();
echo "Money:" . $rate;
?>