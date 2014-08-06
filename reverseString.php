<?php

include_once 'functions.php';

if (isset($_POST['data'])) {
	$str = reverseString($_POST['data']);
	echo '<h1>The reversed string is: "';
	echo $str;
	echo '"</h1>';
	echo '<a href="index.php">Go Back</a>';
} else {
	echo '<h1>The input was invalid</h1>';
	echo '<a href="index.php">Go Back</a>';
}

die();
?>