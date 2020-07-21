<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 21.07.2020
 * Time: 13:44
 */
echo "Hello, World<br>";
$name = "Alex";
echo "Hello, $name!<br>";
$a = "Hello<br>"; //строка
$b = true; //Булевое значение
$c = 45; //Целочисленное число
$d = 4.2; //Число с плавающей точкой
echo " <br>" . $a;
echo " <br>" . $b;
echo " <br>" . $c;
echo " <br>" . $d;

$e = 'Hello,';
$f = "world";
$g = "$e, $f";
$h = '$a, $b';
echo " <br>" . $g;
echo " <br>" . $h . " <br>";
echo $g = $e . $f . "<br>";
?>
<?php
$a = (int)'05';
$b = (string)145.3;
$c = (bool)-4;
echo 'Строка -> число -> строка : ' . $a . '<br>';
echo 'Число -> строка : ' . $b . '<br>';
echo 'Число -> булево -> строка : ' . $c . '<br>';
?>
<?php
$a = 4;
$b = 5;
echo $a + $b . '<br>';
echo $a * $b . '<br>';
echo $a - $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
echo $a ** $b . '<br>';
$a += $b;
echo 'a = ' . $a . '<br>';
$a = 0;
echo $a++ . '<br>';
echo ++$a . '<br>';
echo $a-- . '<br>';
echo --$a . '<br>';
?>
<?php
$a = 4;
$b = 5;
var_dump($a == $b);
var_dump($a === $b);
var_dump($a > $b);
var_dump($a < $b);
var_dump($a <> $b);
var_dump($a != $b);
var_dump($a !== $b);
var_dump($a <= $b);
var_dump($a >= $b);
echo '<br>';
?>
<?php
$a = 4;
$b = '4';
var_dump($a == $b);
var_dump($a === $b);
echo '<br>';
?>
<?php
define('MY_CONST', 100);
echo MY_CONST;
?>
<?php
$a = 1;
$b = 2;
echo "<br> a = ".$a;
echo "<br> b =".$b;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "<br> a = ".$a;
echo "<br> b =".$b;

?>



