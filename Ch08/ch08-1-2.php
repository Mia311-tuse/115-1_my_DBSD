<?php
include ("about_me.php");
echo "Ex04<br/>";

$ip = $_SERVER['REMOTE_ADDR'];
echo "IP Address: " . $ip . "<br/>";
$path = $_SERVER["Script_name"];
echo "PATH: " . $path . "";
?>

<table border="1">
    <tr>
        <td>key</td>
        <td>Value</td>
    </tr>
    <?php
    foreach($_SERVER as $key => $value) {
    echo "<tr>
        <td>".$key . "</td>";
        echo "<td>".$value . "</td>
    </tr>";

    }
    ?>
</table>