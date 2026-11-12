<?php
require("about_me.php");
echo "W10-Ex01" . "<Hr/>";
session_start();
if (!isset($_session["page_counter"])) {
    $_session["page_counter"] = "1";
} else {
    $_session["page_counter"]++;
}
$value = $_session["page_counter"];
echo "使用者Session ID:" . session_id() . "<br/>";
echo "進入網頁次數： $value </br>";

if ($value >= 5) {
    unset($_session["page_counter"]);
    if (!isset($_session["page_counter"])) {
        echo "Session變數page_counter不存在!<br/>";
        session_destroy();
        echo "關閉交談期 <br/>";
    }
}