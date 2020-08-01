<?php

#### 4 types of loops
// for, while, do...while.., foreach

// ramy comment

/*
for loop
@params - init, condition, inc

*/

for ($i = 0;$i <= 10;$i++){
	echo 'Number is ' . $i;
	echo '<br> '; // line break; 
}



# while loop
//  @params - condition

$i = 0;

while($i < 10){
	echo $i;
	echo '<br>';
	$i++;
}

$j = 0;

do {
	echo $j;
	echo '<br>';
	$j++;
} while ($j<10);


######## for each is meant to work with arrays

$people = array ('brad' , 'ramy' , 'michael');

foreach($people as $person){
	echo $person;
	echo '<br>';
}


















?>