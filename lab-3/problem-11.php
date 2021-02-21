<?php
	$arr = array(1,2,3,4,5);
	$insert = "$";
	echo "Original array :";
	echo "<br>";
	foreach ($arr as $i) 
	{
		echo "$i ";
	}
	array_splice( $arr, 2, 0, $insert ); 
	echo "<br>";
	echo "After inserting '$' the array is : ";
	echo "<br>";
	foreach ($arr as $i) 
	{
		echo "$i ";
	}
?>