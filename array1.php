<?php
echo '<h1> this is array_sum function</h1>';
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
echo '<hr>';

echo '<h1> this is array_column function</h1>';
$records = array(
array('id' => 2135,'first_name' => 'John','last_name' => 'Doe',),
array('id' => 3245,'first_name' => 'Sally','last_name' => 'Smith',),
array('id' => 5342,'first_name' => 'Jane','last_name' => 'Jones',),
array('id' => 5623,'first_name' => 'Peter','last_name' => 'Doe',));
$first_names= array_column($records,'first_name');
print_r($first_names);
echo '<hr>';

echo '<h1> this is array_diff function</h1>';
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);
echo '<hr>';

echo '<h1> this is array_fill function</h1>';
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);
echo '<hr>';

echo '<h1> this is array_combine function</h1>';
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
echo '<hr>';
print_r($c);

echo '<h1> this is array_count_values function</h1>';
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
echo '<hr>';

echo '<h1> this is array_merge function</h1>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo '<hr>';

echo '<h1> this is array_push function</h1>';
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo '<hr>';

echo '<h1> this is array_multisort function</h1>';
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);
var_dump($ar1);
var_dump($ar2);
echo '<hr>';

echo '<h1> this is array_replace function</h1>';
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");
$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
echo '<hr>';
?>
