<?php
echo '<h1> this is explode function</h1>';
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; 
echo $pieces[1]; 
echo '<hr>';

echo '<h1> this is count_chars function</h1>';
$data = "hello world.";
foreach (count_chars($data, 1) as $i => $val) {
echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
echo '<hr>';
}

echo '<h1> this is addslashes function</h1>';
$str = "Is your name manigonda'srujana" ;
echo addslashes($str);
echo '<hr>';

echo '<h1> this is implode function</h1>';
$array = array('srujana', 'sm2555@njit.edu', '08744-255552');
$comma_separated = implode(",", $array);
echo $comma_separated; 
echo '<hr>';
 
echo '<h1> this is join function</h1>';
$array = array('apple', 'banana', 'grape', 'orange', 'guava');    
echo join('<br>', $array);
echo '<hr>';

echo '<h1> this is lcfirst function</h1>';
$bar = 'HELLO WORLD!';
$bar = lcfirst($bar);
echo $bar;
echo '<hr>';

echo '<h1> this is ucfirst function</h1>';
$bar = 'hello world';
$bar = ucfirst($bar);
echo $bar;
echo '<hr>';

echo '<h1> this is str_repeat function</h1>';
$repeatt = str_repeat("HI, ",5);
echo $repeatt;
echo '<hr>';

echo '<h1> this is ucwords function</h1>';
$what = 'this is really amazing';
$what = ucwords($what);
echo $what;
echo '<hr>';

echo '<h1> this is wordwrap function</h1>';
$why = "string functions and array functions are interesting";
$how = wordwrap($why, 10, "<br>");
echo $how;
echo '<hr>';
?>
