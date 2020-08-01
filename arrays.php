<?php
##############  ARRAYS ##################
/* types of arrays

- Indexed
- Associative
- Multi Dimensional

*/

// Indexed

$people = array('Kevin', 'Sara','Sherif');
//echo $people[0];

$ids = array(23, 55, 12);
//echo $ids[2];

// square brackets equivalent to using an array. 
$cars = ['Honda' , 'Toyota'];
$cars[2] = 'Ford'; 
$cars[] = 'BMW'; // empty brackets will add item to the end of array. 

//echo(count($cars)); //length of array

//print_r($cars); // returns the whole array;
//var_dump($cars); // returns whole array with data type

### Associative arrays
// here the name which is brad and jose is like key ... for the elements in the array so this is like array of numbers but u access each element with the key brad or jose
$people = array('Brad' => 35, 'Jose' => 32); // this will override on top
//echo $people ['Brad'];

$people ['Michael'] = 25;
//var_dump($people);

#### now multidimensional -- array inside an array

$trucksstocksold = array(
	array('honda' , 20 , 10),
	array('logan' , 10, 10)
);
echo $trucksstocksold[1][2];
echo var_dump($trucksstocksold);


?>