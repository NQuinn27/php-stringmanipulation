<!DOCTYPE html>
<html>
<head>
<title>PHP Algorithms</title>
</head>
<body>
<p>Basic string manipulations, carried out with PHP. I did this to gain some experience with PHP and basic operations</p>
<p>Code can be found at <a href="http://github.com/NQuinn27">my github</a></p>

<hr width="100%">
<h2>Check if a string is a palindrome</h2>
<form action="palindromes.php" method="post">
<input type="text" name="str">
<input type="submit" value="check">
</form>

<hr width="100%">

<h2>Check if two strings are anagrams</h2>
<form action="anagrams.php" method="post">
<input type="text" name="str1">
<input type="text" name="str2">
<input type="submit" value="test">
</form>

<hr width="100%">

<h2>Reverse a String</h2>
<form action="reverseString.php" method="post">
	<input type="text" name="data"/>
	<input type="submit" value="Reverse" />
</form>

<hr width="100%">

<h2>Reverse words in a sentence</h2>
<form action="reverseWords.php" method="post">
<input type="text" name="str">
<input type="submit" value="reverse">

<hr width="100%">

</form>
</body>
</html>