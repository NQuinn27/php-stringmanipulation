<?php

include_once 'functions.php';

$str = $_POST['str'];
if ($str) {
	echo '<h1>The Reversed Sentence is "';
	echo revWords($str);
	echo ' "</h1>';
} else {
	echo '<h1>Input is invalid</h1>';
}
echo '<a href="index.php">Go Back</a>';
die();
?>