hi
<?php
echo "<h1>Welcome to IS218</h1>";
echo "<h2>indexed array</h2>";
$cars = array("Volvo","Nissan","Toyota");
$exam = array('Volvo',22,18);
echo $cars[0]."<br>";
$cars = array();
$cars[0] = "Volvo";
$cars[1] = "Nissan";
$cars[2] = "Toyota";
echo $cars[1]."<br>";
echo "<h2>associative arrays</h2>";
$age = array('Peter' => 32, 'Ben' => 27,'Joe' => 16);
echo $age['Peter']."<br>";
echo "<h2>multidimensional</h2>";
$car_info = array(
array('Volvo',22,18),
array('BMW',15,13),
array(
	array('apple',15,13),
		),
		);
		echo $car_info[2][0][0]."<br>";
		echo "<h2>mixed arrays</h2>";
		$values = array(0,0.0,false,'haha',array('BMW',15,13));
		echo $values."<br>";
		var_dump($values);
		echo "<br>";
		print_r($values);
		echo "<br>";
		$employees = array();
		$employees[0]="Mike";
		$employees['position']="manager";
		echo count($employees)."<br>";
		unset($employees);
		print_r($employees);
		echo "<br>";
		$number = range(0,5);
		print_r($number);
		echo "<br>";
		$number = range(0,5,2);
		print_r($number);
		echo "<br>";
		$num = array_fill(0, 5, 1);
		print_r($num);
		echo "<br>";
		$pad = array_pad($num, 7, 0);
		print_r($pad);
		echo "<br>";
		$obj=range(0,3);
		$obj1=range(4,6);
		$merge =array_merge($obj,$obj1);
		print_r($merge);
		echo "<br>";
		$slice=array_slice($merge, 2,3);
		print_r($slice);
		echo "<br>";
		echo array_sum($slice)."<br>";
		$name = array("Mike","Anne","Ray");
		sort($name);
		print_r($name);
		echo "<br>";
		rsort($name);
		print_r($name);
		echo "<br>";
		$tax_rate=array('ny'=7.75,'nj'=0.7,'oregon'=0.0);
		asort($tax_rate);
		print_r($tax_rate);
		echo "<br>";
		ksort($tax_rate);
		print_r($tax_rate);
		echo "<br>";
		arsort($tax_rate);
		print_r($tax_rate);
		echo "<br>";
		krsort($tax_rate);
		print_r($tax_rate);
		echo "<br>";
		echo "<br><br><br><br><br><br><br>";
		echo "<br><br><br><br><br><br><br>";
		echo "<br><br><br><br><br><br><br>";
		echo "<br><br><br><br><br><br><br>";
		?>
		
