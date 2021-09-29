<?php
	/*
		if(){
			while(){
	
			}
		}
	*/

global $name;
$name = 'Nguyễn Văn A';
function sum( $a, $b ){
	global $name;
	echo $name;
	echo '<br>';
	echo $a + $b;
}

//call function 
sum( 5,9 );