<?php

require("about_me.php");
echo "W10-EX02" . "<Hr/>";

function each(&$array)
{
    $res = array();
    $key = key($array);

    if ($key !== null) {
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    } else {
        $res = false;
    }

    return $res;
}
?>

<style>
table{
    border-collapse:collapse;
}

th{
    background:#d6a5ff;   /* 紫色 */
    padding:5px;
    border:1px solid #999;
}

td{
    padding:5px;
    border:1px solid #999;
}

.item{
    background:#b8f5b8;   /* 淡綠色 */
}

.total{
    background:yellow;
    text-align:right;
    font-weight:bold;
}
</style>

<table>
<tr>
    <th>功能</th>
    <th>編號</th>
    <th>名稱</th>
    <th>價格</th>
    <th>數量</th>
</tr>

<?php
$total = 0;

while (list($arr,$value)=each($_COOKIE))
{
    if(isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]))
    {
        echo "<tr class='item'>";

        echo "<td>";
        echo "<a href='delete.php?Id=".$arr."'>刪除</a>";
        echo "</td>";

        while(list($name,$value)=each($_COOKIE[$arr]))
        {
            echo "<td>$value</td>";

            if($name=="Price")
                $price=$value;

            if($name=="Quantity")
                $quantity=$value;
        }

        $total += $price * $quantity;

        echo "</tr>";
    }
}

if($total>0)
{
    echo "<tr>";
    echo "<td colspan='5' class='total'>";
    echo "總金額 = NT$".$total."元";
    echo "</td>";
    echo "</tr>";
}
?>
</table>

<hr>

<a href="catalog.php">Catalog</a>
|
<a href="shoppingcart.php">Mini Cart</a>