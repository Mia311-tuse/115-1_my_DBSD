<?php
$file = "guestbook.txt";

if(!file_exists($file) or filesize($file) == 0) {
    echo "目前沒有任何留言訊息!<br/>";
}else {
    readfile($file);
}
?>

<br/>
| <a href="guestbook.php">新增留言</a> |
| <a href="showmessage.php">檢視留言</a> |
<>