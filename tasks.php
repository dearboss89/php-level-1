<?php

?>
    <b><u>1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
            значения. Затем написать скрипт, который работает по следующему принципу:</u></b>
    <ol type="a">
        <li>если $a и $b положительные, вывести их разность;</li>
        <li>если $а и $b отрицательные, вывести их произведение;</li>
        <li>если $а и $b разных знаков, вывести их сумму;</li>
    </ol>
    ноль можно считать положительным числом.<br>
    Ответ:
<?php
$a = rand(0, 200) - 100;
echo 'a = ' . $a . " ";
$b = rand(0, 200) - 100;
echo 'b = ' . $b . ' . ';
if ($a >= 0 && $b >= 0)
    echo '($a - $b) = ' . ($a - $b);
elseif ($a < 0 && $b < 0)
    echo '($a * $b) = ' . ($a * $b);
else
    echo '($a + $b) = ' . ($a + $b);
?>
    <br><br>
    <b><u>2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
            switch организовать вывод чисел от $a до 15.</u></b><br>
    Ответ:
<?php
$a = rand(0, 15);
echo 'a = ' . $a . " . Порядок чисел: ";
switch ($a) {
    case 0:
        echo $a . ' ';
        $a++;
    case 1:
        echo $a . ' ';
        $a++;
    case 2:
        echo $a . ' ';
        $a++;
    case 3:
        echo $a . ' ';
        $a++;
    case 4:
        echo $a . ' ';
        $a++;
    case 5:
        echo $a . ' ';
        $a++;
    case 6:
        echo $a . ' ';
        $a++;
    case 7:
        echo $a . ' ';
        $a++;
    case 8:
        echo $a . ' ';
        $a++;
    case 9:
        echo $a . ' ';
        $a++;
    case 10:
        echo $a . ' ';
        $a++;
    case 11:
        echo $a . ' ';
        $a++;
    case 12:
        echo $a . ' ';
        $a++;
    case 13:
        echo $a . ' ';
        $a++;
    case 14:
        echo $a . ' ';
        $a++;
    case 15:
        echo $a . ' ';
        break;
    default:
        echo "Некорректное значение переменно а";
        break;
}
?>
    <br><br>
    <b><u>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
            Обязательно использовать оператор return.</u></b><br>
    Ответ:<br>
<?php
function sum($x = 1, $y = 1)
{
    return $x + $y;
}

function subtraction($x = 1, $y = 1)
{
    return $x - $y;
}

function multiplication($x = 1, $y = 1)
{
    return $x * $y;
}

function division($x = 1, $y = 1)
{
    if ($y != 0)
        return $x / $y;
    else
        return 0;
}

$a = rand(0, 200) - 100;
echo 'a = ' . $a . " ";
$b = rand(0, 200) - 100;
echo 'b = ' . $b . "<br>";
echo ' Сложение = ' . sum($a, $b) . "<br>";
echo ' Вычитание = ' . subtraction($a, $b) . "<br>";
echo ' Умножение = ' . multiplication($a, $b) . "<br>";
echo ' Деление = ' . division($a, $b) . "<br>";
?>
    <br>
    <b><u>4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где
            $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от
            переданного значения операции выполнить одну из арифметических операций (использовать
            функции из пункта 3) и вернуть полученное значение (использовать switch).
        </u></b><br>
    Ответ:<br>
<?php
function mathOperation($arg1, $arg2, string $operation)
{
    switch ($operation) {
        case "сложение":
            return sum($arg1, $arg2);
            break;
        case "вычитание":
            return subtraction($arg1, $arg2);
            break;
        case "умножение":
            return multiplication($arg1, $arg2);
            break;
        case "деление":
            return division($arg1, $arg2);
            break;
        default:
            return 'Неверное значение параметра $operation';
    }
}

echo 'a = ' . $a . " ";
echo 'b = ' . $b . "<br>";
echo mathOperation($a, $b, 'сложение') . "<br>";
echo mathOperation($a, $b, 'вычитание') . "<br>";
echo mathOperation($a, $b, 'умножение') . "<br>";
echo mathOperation($a, $b, 'деление') . "<br>";
echo mathOperation($a, $b, 'лажа') . "<br>";
?>
    <br>
    <b><u>5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
            текущий год в подвале при помощи встроенных функций PHP.
        </u></b><br>
    Ответ: выполнено на уроке.<br>
    <br>
    <b><u>6 *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function
            power($val, $pow), где $val – заданное число, $pow – степень.
        </u></b><br>
    Ответ:<br>
<?php
function power(int $val, int $pow)
{
    if ($val == 0 && $pow != 0)
        return 0;
    elseif ($pow == 0)
        return 1;
    elseif ($pow < 0) {
        return 1 / ($val * power($val, ($pow + 1) * (-1)));
    } else
        return $val * power($val, $pow - 1);
}

$a = rand(0, 10) - 5;
$b = rand(0, 10) - 5;
echo 'a = ' . $a . " ";
echo 'b = ' . $b . "<br>";
echo power($a, $b) . "<br>";
echo power($a, -3) . "<br>";
echo power($a, -2) . "<br>";
?>
<br>
<b><u>7 *Написать функцию, которая вычисляет текущее время и возвращает его в формате с
        правильными склонениями, например:<br>
        22 часа 15 минут<br>
        21 час 43 минуты<br>
    </u></b>
Ответ: <br>
<?php
function rightTime(){
    $hour = date("G");
    $min = date("i");
    $result = '';
   // echo $hour % 10;
if ($hour % 10 == 1 && $hour < 10)
    $result .= $hour.' час';
    elseif($hour % 10 >= 0 && $hour % 10 < 5 && $hour < 10)
        $result .= $hour.' часа ';
    else
        $result .= $hour.' часов ';
if($min % 10 == 0 && $min < 10)
    $result .= $min.' минута ';
    elseif($min % 10 >= 0 && $min % 10 < 5 && $min > 20)
        $result .= $min.' минуты';
    else
        $result .= $min.' минут';
    echo $result;
}
rightTime();
?>
