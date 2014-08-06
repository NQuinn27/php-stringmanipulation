<?php

include_once 'functions.php';

$str = $_POST['str'];
if ($str) {
	echo '<h1>The String is ';
	echo (palindrome($str)) ? '':'Not';
	echo ' a Palindrome</h1>';
} else {
	echo '<h1>Input is invalid</h1>';
}
echo '<a href="index.php">Go Back</a>';
die();
?>