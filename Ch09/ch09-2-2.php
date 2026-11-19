<?php
require("about_me.php");
echo "W011-EX02" . "<br/>"; 
echo "<HR>";

$file = 'mybooks.txt';  // 檔案名稱
$content = "PHP與MySQL網頁設計範例教本\r\n";

// 開啟檔案（w：寫入模式）
$fp = fopen($file, "w")
    or exit("檔案 $file 開啟錯誤<br/>");

// 寫入檔案
if (fwrite($fp, $content)) {
    print "寫入檔案 $file 成功<br/>";
} else {
    print "寫入檔案 $file 錯誤<br/>";
}

// 關閉檔案
fclose($fp);
?>