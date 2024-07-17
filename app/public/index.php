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


// $array  = [
//     'Russia' => ['capital' => 'Moscow', 'citizen' => 14000000],
//     'China' => ['capital' => 'Beigin', 'citizen' => 15000000],
// ];

// foreach($array as $key => list('capital' => $capital, 'citizen' => $citizen)){
//     var_dump($key);
//     var_dump($capital);
//     var_dump($citizen);
// }


// $var = 'val1';
// $return = '';

// switch($var){
//     case "val1":
//         $return = 'foo_var1';
//         break;
//     case "val2":
//         $return = 'foo_var2';
//         break;
//     case "val3":
//         $return = 'foo_var3';
//         break;
//     default :
//         $return = 'default';
//         break;
// }

// echo $return;

// $return = match ($var) {
//     'val1' => "foo_var1",
//     'val2' => "foo_var2",
//     'val3' => "foo_var1\3",
//     default => "default"
// };

// echo PHP_EOL;
// echo $return;


// $micro = microtime(true);
// echo $micro;

// for($i = 0 ; $i < 500; ++$i){

//     $var = 'val1';
//     $return = '';
    
//     switch(true){
//         case $i < 1000:
//             $return = 'foo_var1';
//             break;
//         case $i < 1000:
//             $return = 'foo_var2';
//             break;
//         case $i < 1000:
//             $return = 'foo_var3';
//             break;
//         default :
//             $return = 'default';
//             break;
//     }
// }

// echo PHP_EOL;

// echo microtime(true) - $micro;

// echo PHP_EOL;

// $micro = microtime(true);

// for($i = 0 ; $i < 500; ++$i){

//     $var = 'val1';
//     $return = '';
    
//     try{
//         $return = match (true) {
//             $i < 1000 => "foo_var1",
//             $i < 1000 => "foo_var2",
//             $i < 1000 => "foo_var1\3",
//             default => "default"
//         };
//     }catch(Throwable $e){
//         //echo "Exeption";
//     }   
// }

// echo microtime(true) - $micro;

// // class

// include ('../src/Main.php') ;

// $main = new Main();

// var_dump($main->public);
// var_dump(Main::$ps);
// var_dump($main->func());

// echo ("<br>");

// $number = 5;
// Main::statFunc($number);
// echo $number;


print_r($_GET);

print_r($_POST);

print_r($_FILES);