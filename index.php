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
	//$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
	global $a,$b;
	$b = $a + $b;
	echo "现在可以用global输出全局变量而不需要放到函数中去了 ;";
	echo "<br>";
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
test2();//不删除不代表变量至不变- -.

echo "<h1>PHP is fun!</h1>";
echo "<h2>Hello world!</h2>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";

$txt1="Learn PHP";
$txt2="W3School.com.cn";
//$cars=array("Volvo","BMW","SAAB");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2<br>";

//注释： 循环
echo "<h3>循环</h3>";

function cycles(){
	$cars=array("Volvo","BMW","SAAB");
	static $numbers = 0;//修改为static后，输出就是三个不同的，改回来后就是相同的，很奇怪
	echo "My car is a $cars[$numbers]";
	$numbers++;//缺少一个选择控制，当numbers大于3时，输出为空
	echo "<br>";//教程中的换行符是：PHP_EOL，但是没有换行效果
}

cycles();
cycles();
cycles();
cycles();

//注释： 参数作用域
function test3($xx)
{
	echo $xx;
}
test3($x/2);
echo PHP_EOL;
test3(3154);

echo "<h2>这是一个","字符串，(这个逗号是中文的逗号) ","使用了","多个","参数。</h2>";

$name = "runoob";
$c = <<< EEE
			\n\t
			"abc"=$name<br><a>html格式</a><br/>
			"123"
EEE;
echo $c;

$x11 = 5985;
var_dump($x11);
echo "<br>";
$x2 = -345;
var_dump($x2);
echo "<br>";
$x3 = 0x8C;
var_dump($x3);
echo "<br>";
$x4 = 047;
var_dump($x4);
echo "<br>";
var_dump("是");
echo "<br>";
var_dump(2.4e3);
echo "<br>";
var_dump(8E-5);//这个表达方式没有变化，可能技校数的表达，什么语言都差不多;
echo "<br>";
var_dump(array("Volvo","BMW","Toyota"));
echo "<br>";
print_r(array("Volvo","BMW","toyota"));
echo "<br>";
class Car
{
	var $Color;
	function __construct($Color = "green"){
		$this -> Color = Color;
	}
	function what_color(){
		return $this -> Color;
	}
}

define("myname","Porco Rosso",$case_insensitive = true);
echo MYName;//输出时，并没有$符号;
echo "<br>";
define("Myname","Mobai",$case_insensitive = false);
echo Myname;
echo "<br>";
echo MyName;
echo "<br>";
function outname()
{
	echo myname;
	echo "<br>";
	echo Myname;
	echo "<br>";
	echo MyName;
	echo "<br>";
}
outname();
$txt1 = "hello";
$txt2 = "world";
echo $txt1,$txt2;
echo "<br>";
echo $txt1."+".$txt2;
echo "<br>";
echo "<br>";
echo strlen("福尔摩白");
echo "<br>";
echo mb_strlen("福尔摩白","utf-8");
echo "<br>";
echo strpos("福尔摩白","白");
echo "<br>";
echo mb_strpos("福尔摩白","白");
echo "<br>";

var_dump(intdiv(10,3));
echo "<br>";

$z1 = 10;
echo $z1;
echo "<br>";
$z2 = 20;
echo $z2;
echo "<br>";
$z2 +=$z1;
echo $z2;
echo "<br>";
$z3 = "hello";
$z4 = " world!!!";
$z3 .=$z4;
echo $z3;
echo "<br>";
var_dump(5==5);
echo "<br>";
var_dump(5===5);
echo "<br>";
var_dump(5 xor -1);
echo "<br>";
var_dump(5 || -12);
echo "<br>";

$x = array("a" => "red","b" => "green");
$y = array("c" => "blue","d" => "yellow");
$z = $x + $y;
var_dump($z);
echo "<br>";
var_dump($x==$y);
echo "<br>";
var_dump($x===$y);
echo "<br>";
var_dump($x<>$y);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$test = 'mobai';
$username=isset($test) ? $test : 'nobody';
echo $username,PHP_EOL;
echo "<br>";
$test1 = "福尔摩白";
$username1 = $test1 ?: "nobody";
echo $username1,PHP_EOL;
echo "<br>";
$t = date("h:i:sa.d.m.Y");
echo $t;
?>
</body>
</html>
