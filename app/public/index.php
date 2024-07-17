<?php
/*
$variable = 1;
echo $variable;
echo PHP_EOL;
echo gettype($variable);

echo "<br>";

$string = "Hello";
echo $string;
echo PHP_EOL;
echo gettype($string);

echo "<br>";

echo PHP_EOL;
$bool = true;
var_dump($bool);

echo "<br>";

echo PHP_EOL;
$float = 1.7;
var_dump($float);
echo gettype($float);

echo "<br>";

echo PHP_EOL;
$null = null;
var_dump($null);

echo "<br>";
$first = 10;
echo ($first);
echo "<br>";
$second  = 20;
echo ($second);
echo "<br>";
$tmp = $first;
$first = $second;
$second = $tmp;
echo "<br>";
echo ($first);
echo "<br>";
echo ($second);


echo "<br>";
$var = "false";
echo ((bool)$var);

echo "<br>";

echo "hello" . " " . "world!";


// $array = array(
//     'Jonh',
//     'Mary',
//     'David'
// );

echo "<br>";

$array = ['Jonh','Mary','David'];

$arr = [
    'Russia' => 'Moscov',
    'China' => 'Beigin'
];

foreach($arr as $key => $valie){
    // echo 'Country ' . $key. ' Capital ' . $valie. '<br>';
    echo "Country $key Capital $valie <br>";
}

echo "<br>";

foreach($arr as &$valie){
    $valie .= '!!!';
    // echo 'Country ' . $key. ' Capital ' . $valie. '<br>';
    echo "Capital $valie <br>";
}
unset($valie);

echo "<br>";

echo "list";

echo "<br>";

echo("test !!!!!!");

foreach($array as list($a)){
    print_r($a);
}

function nameFunction($a, $b){

}

function nameFunction1 (int $a, int $b): int{

}

function nameFunction2 (int $a = 0, int $b = 0): int{

}

$func = function(int $a = 0, int $b = 0): int {

};

//$fucn(1,2);
*/





/*
Создайте новую ветку от базовой, в проекте.
Добавьте решение следующих задач:

    Создайте переменную $var со значением 100.

Умножьте на 0.5
Извлеките корень
Приведите к int
Выведите на экран var_dump
*/

echo("Task #1 :");
echo ("<br>");

$var = 100;
var_dump((int)(sqrt($var*0.5)));

echo ("<br>");
echo ("<br>");


/*

    Вычислите длину вектора по координатам в переменных $x, $y, $z (Корень суммы квадратов по каждой оси)

*/

echo("Task #2 :");
echo ("<br>");

$x = 5;
$y = 7;
$z = 3;
var_dump(sqrt(($x * 2) + ($y * 2) + ($z ** 2)));
echo ("<br>");
echo ("<br>");


/*

    С помощью циклов, определите, является ли строка в переменной $strPoly палиндромом.

(Отдельно к буквам в строке можно обращаться как к элементам массива $strPoly[0] - первая буква )
*/

echo("Task #3 :");
echo ("<br>");

$firstStr = "deified";
$secondStr = "morning";

function Check (string $str) : string{

    // $tmp = strrev($str);
    // echo($str);
    // echo ($tmp);
    // if($str === $tmp){
    //     return $str + " Yes";
    // }
    // return " No";


    for($i = 0 ; $i < (int)strlen($str) / 2 ; $i++){  
        if($str[$i] !== $str[strlen($str) - $i - 1]){
            return $str . " " . "isn't palindrom";
        }
    }
    return $str . " " . "is palindrom";
}

echo(Check($firstStr));
echo ("<br>");

echo(Check($secondStr));
echo ("<br>");
echo ("<br>");

echo("One more way to solve that");
echo ("<br>");
echo ("<br>");

function Check_V2(string $str) : string{
    $tmp = strrev($str);   
    if($str === $tmp){
        return $str . " " . "is palindrom";
    }
    return $str . " " . "isn't palindrom";
}
echo(Check_V2($firstStr));
echo ("<br>");

echo(Check_V2($secondStr));
echo ("<br>");
echo ("<br>");

/*

    Напишите функцию, которая заполняет массив таблицы умножения (от 1 до 10) для переданного числа.

Пример как должно работать

$table = multiFunc(3);
print_r($table);
*/

/*
Array(
	[
		'3 * 1' => 3,
		'3 * 2' => 6,
		'3 * 3' => 9,
		.....
		'3 * 10' => 30,
		
	]
)

*/

echo("Task #3 :");
echo ("<br>");

function multiFunc(int $number) {
    $arr = [];

    for($i = 0 ; $i < 10 ; $i++){
        $tmp = $number . " " . "*" . ($i+1) . " " . "=" . " " . ($number * ($i+1));
        //array_push($arr,$tmp);
        //echo($arr[$i]);
        $arr[$number . " " . "*" . " " . $i+1] = $number * ($i+1);
    }
    return $arr;
}
$table = multiFunc(3);
print_r($table);