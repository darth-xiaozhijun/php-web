<?php

/**
 * 基本代数运算
 */
$a = 5;
$b = 6;
$c = $a + $b;
echo $a."+".$b."=".$c;

/**
 * 局部和全局作用域
 * 在所有函数外部定义的变量，拥有全局作用域。
 * 除了函数外，全局变量可以被脚本中的任何部分访问，要在一个函数中访问一个全局变量，需要使用 global 关键字。
 * 在 PHP 函数内部声明的变量是局部变量，仅能在函数内部访问：
 */
$x=5; // 全局变量

function myTest()
{
    $y=10; // 局部变量
    echo "\n";
    echo "<p>测试函数内变量:<p>";
//    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
//echo "变量 y 为: $y";

/**
 * global 关键字用于函数内访问全局变量。
 * 在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：
 */
$x=5;
$y=10;

function testGlobal()
{
    global $x,$y;
    $y=$x+$y;
}

testGlobal();
echo $y; // 输出 15