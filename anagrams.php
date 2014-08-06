<?php

include_once 'functions.php';

$str1 = $_POST['str1'];
$str2 = $_POST['str2'];

if (str1 && str2) {
	echo '<h1>The Strings Are ';
	echo (anagrams($str1, $str2)) ? 'Anagrams':'Not Anagrams';
	echo '</h1>';
} else {
	echo '<h1>Input was invalid</h1>';
}
echo '<a href="index.php">Go Back</a>';

?>