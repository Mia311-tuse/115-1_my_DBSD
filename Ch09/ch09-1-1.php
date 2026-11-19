<?php
require "about_me.php";
echo "W11 Ex01<br/>";
echo "<HR>";

$file = basename($_SERVER["PHP_SELF"], ".php");
$path = realpath($file . ".php"); //取得檔案實際路徑
echo "real path: $path <BR/>";
$part = pathinfo(($path)); //取得路徑資訊
echo "path: " . $part["dirname"] . "<BR/>";
echo "filename: " . $part["basename"] . "<BR/>";
echo "extension: " . $part["extension"] . "<HR/>";


//複製檔案
if (file($file . ".php")) {
    $lines = file($file . ".php");
    echo "file: $file.php exists <BR/>";
} else {
    echo "file: $file.php does not exist <BR/>";
}

if (!copy($file . ".php", $file . "bak")) {
    echo "file: $file.php copy to bak failed <BR/>";
} else {
    echo "file: $file.php copy to bak successful <BR/>";
}

//檔案更名
rename($file."bak",  "test.php");

$file= "test.php";

unlink($file);
echo "file: $file has been deleted <BR/>";

?>