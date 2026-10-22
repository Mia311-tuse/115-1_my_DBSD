<?php
include ("about_me.php");
echo "Ex02<br/>";

$scores = array(22,16,30,24);
$total = 0;
foreach ($scores as $score) {
    echo "score:  $score<br/>";
    $total += $score;
}
echo " Total: " . $total ;
print_r($score) ;
