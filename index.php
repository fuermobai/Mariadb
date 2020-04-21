<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello World!\n";
print "hello world!";
ECHO "hello World!!!<br>";
Echo "HeLLo wORlD!@!<br>";
$color="red";
echo "my car is ".$color."<br>";
echo "my house is ".$Color."<br>";
echo "my Boat is ".$coLOR."<br>";
$x = 5;
#$y = 32;
#$z = $x + $y;
#echo $z;
$txt="hello world!";
echo $txt;

function myTest() {
  $y=10; // 局部作用域
  echo "<p>测试函数内部的变量：</p>";
  echo "变量 x 是：$x";
  echo "<br>";
  echo "变量 y 是：$y";
} 

myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";

$a = 1;
$b = 2;

function test1(){
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
	}
echo "<br>";
test1();
echo $b;



echo "<br>";
function test2(){
	static $value_ = 365;#static关键词和c++差不多
	echo $value_;
	$value_++; 
	}
test2();
echo "<br>";
test2();

echo "<br>";
test2();
echo "<br>";
test2();
echo "<br>";
test2();//不删除不代表变量至不变- -。


?>


</body>
</html>
