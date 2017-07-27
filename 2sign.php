<?php
// header("content-type:text/html charset = gb2312,utf-8");
/**
 * @Author: sunjiawei
 * @Date:   2017-07-27 11:06:50
 * @Last Modified by:   sunjiawei
 * @Last Modified time: 2017-07-27 14:37:59
 */

// 运算
$a = 1;
echo -$a;

echo "<hr>";

$a = 87;
$b = $a%7;
echo $b;

echo "<hr>";

$a += 5;
$a = $a + 5;

$b %= 7;
echo $b;

echo "<hr>";

// 00000001 = 1
// <<左移，往高位
// 00000010 = 2
// >>右移，往低位
$a = 1;
$b = $a<<3;
echo "$b";

echo "<hr>";

//取反
$a = 10;
$b = ~$a;
echo $b;
echo "<hr>";

//&
$a = 1;
$b = 2;
$c = $a&$b;
echo $c;

// |
$a = 3;
$b = 4;
$c = $a|$b;
echo "$c";
echo "<hr>";

//判断的事情，比较运算符
$a = '1';
$b = 1;
if ($a == $b){
    echo "相等";
}

// 类型和数值
if ($a === $b) {
    echo "全等";
}

$a = 'a';
$b = 'b';
// 比较的ascii码
if ($a < $b) {
    echo "成立";
}else{
    echo "不成立";
}

// 不等<> !=
$a = 1;
$b = 2;
if ($a <> $b) {
    echo 'a 和 b 不相等';
}

// echo `ipconfig`;

echo "<hr>";

$a = 0;
$a++; //自己加1
echo $a;
$a--; //自己减1
echo $a;

echo "<hr>";

//前置
$a = 10;
echo ++$a;// 11

//后置
$b = 10;
echo $b++; //10
//11

//逻辑运算符
// and && 逻辑与
// or  || 逻辑或
// xor    逻辑异或
// not ！ 逻辑非
echo "<hr>";

var_dump(true and true);
var_dump(false and true);
var_dump(true && true);

echo "<hr>";
var_dump(true or true);
var_dump(true or false);
var_dump(false or false);

echo "<hr>";
var_dump(true xor true);//false
var_dump(true xor false);//true
var_dump(false xor false);//false

echo "<hr>";
var_dump(!true);
var_dump(!false);

echo "<hr>";
//字符串连接符
$a = "我是一个字符串";
$b = 10;
$c = $a.$b;
echo $c;

echo "<hr>";
//142和143等价
$c .='woshiyigezifuchuan';
$c = $c.'woshiyigezifuchuan';
echo $c;