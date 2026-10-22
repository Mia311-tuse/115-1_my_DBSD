<?php
include ("about_me.php");
echo "Ex03<br/>";

$arr = array(
    "Color" => "black",
    "Name" => "Chen-hui-An",
    "Shape" => "Triangle"
);

$arr["type"] = "PHP";
unset($arr["type"]);

foreach($arr as $key => $value) {
    echo "$key => $value ";
}

echo "<br/>";
print_r($arr);