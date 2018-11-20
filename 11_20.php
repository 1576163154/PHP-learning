<?php
echo "hello,php\n";

$today = date("Y:M:d H:i:S \n");
 
 //①nl2br 将 \n 转换为网页 </br>
echo nl2br($today);

echo "third line";

//②直接用网页的方式
echo "<br>";

echo "forth line";

//换行，并空出一行
echo "<p>";

echo "fifth line";

//全局和局部变量
$x = 5;
$y = 17;

function localTest()
{
	$y = 10;
	$x = 12;
	echo "<p>测试函数内变量:<p>";
	echo "x = $x";
	echo "<br>";
	echo "y = $y";
	
	echo "<br>";
	//函数内获取全局变量x
	global $x;
	echo "x = $x";

	//用 $GLOBALS[index] 获取全局变量
	echo "<br>";
	echo "全局变量 x = ";
	echo $GLOBALS['x'];

	//修改全局变量
	$GLOBALS['x'] = 50;
	echo "<br>";
	echo "修改后，全局变量 x = ";
	echo $GLOBALS['x'];
}

localTest();

echo "<p>测试函数外变量:<p>";
echo "x = $x";
echo "<br>";
echo "y = $y";

?>