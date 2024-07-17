<?php

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