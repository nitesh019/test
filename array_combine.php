<?php
	error_reporting(E_ALL);

	function showArr($arr)	{
		echo "<pre>";print_r($arr);echo "</pre>";
	}

	// Array Combine

	$arrA = ['a','b','c'];
	$arrB = ['x','y','z'];
    
	echo "Array A";
	showArr($arrA);

	echo "Array B";
	showArr($arrB);

	$arrResult = array_combine($arrA,$arrB);

	echo "Array Cambine -  nitesh testing 123";
	showArr($arrResult);  
 
?>