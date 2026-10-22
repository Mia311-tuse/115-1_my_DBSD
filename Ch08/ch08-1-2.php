<?php
include("about_me.php");
echo "Ex04<br/>";
?>

<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP ADDRESS:" . $ip . "<br/>";
$path = $_SERVER["SCRIPT_NAME"];
echo "PATH" . $path . "";
?>

<Table border="1">
    <TR>
        <TD>Key</TD>
        <TD>Value</TD>
    </TR>

    <?PHP
    foreach ($_SERVER as $key => $value) {
        echo "<TR><TD>" . $key . "</TD>";
        echo "<TD>" . $value . "</TD></TR>";
    }
    ?>
</Table>