<?php
function printHeader()
{
    echo "<h3> SID: C113181127 </h3>";
    echo "<h3> Name: 謝佳芯 </h3>";
    echo "<h3>EX05</h3>";
}
printHeader();
function callFunc1($callback)
{
    $callback();
}
function callFunc2(callable $callback)
{
    $callback();
}
$hello = function () {
    echo "Hello, World!</br>";
};

function hi()
{
    echo "Hi, World!<br/>";
}

callFunc1("hi");
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);
