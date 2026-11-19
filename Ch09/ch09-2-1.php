<?php
$file = basename($_SERVER["PHP_SELF"], ".php");

//檔案開啟
$fp = fopen($file . ".php", "r")
    or exit("file: $file.php open error <br/>");
echo "file: $file.php open successful <br/>";
echo "file size : " . filesize($file . ".php") . "<br/>";

//檔案關閉
fclose($fp);

