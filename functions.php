<?php 
	/*
		Reverse the words in a sentence
	*/
	function revWords($str) {
		$len = strlen($str);
		$ret = '';
		$substr = '';
		for ($i=0 ; $i<$len ; $i++) {
			if ($str[$i] == ' ' || $i == $len-1) {
				if ($i == $len-1) {
					$substr = $substr . $str[$i];	
				}
				$slen = strlen($substr);
				for ($j = $slen-1 ; $j>=0 ; $j--) {
					$ret = $ret . $substr[$j];
				}
				$ret = $ret . ' ';
				$substr = '';
			} else {
				$substr = $substr . $str[$i];
			}
		}
		return $ret;
	}

	/*
		Check if a word is a palindrome
	*/
	function palindrome($str) {
		$len = strlen($str);
		$j = $len-1;
		for ($i=0 ; $i < $len/2 ; $i++) {
			if ($str[$i] == $str[$j]) {
				$j--;
				continue;
			} else {
				return false;
			}
		}
		return true;
	}
	
	/*
		reverse a string
	*/
	
	function reverseString($str) {
		$len = strLen($str);
		$ret = '';
		for ($i = $len-1 ; $i >= 0 ; $i--) {
			$ret = $ret . $str[$i];
		}
		return $ret;
	}
	
	/*
		check if two strings are anagrams
		method:Sort and Compare
	*/
	function anagrams($str1, $str2) {
		//Sort and compare
		$sort1 = sortString($str1);
		$sort2 = sortString($str2);
		return ($sort1 === $sort2) ? true:false ;
	}
	
	function sortString($str) {
		$len = strLen($str);
		$i = 0;
		$arr = [];
		for ($i = 0 ; $i < $len ; $i++) {
			$arr[$i] = $str[$i];
		}

		for ($i = 1 ; $i < $len ; $i++) {
			$comp = $arr[$i];
			$j = $i;
			while ($j > 0 && $arr[$j-1] < $comp) {
				$arr[$j] = $arr[$j-1];
				$j--;
			}
			$arr[$j] = $comp;
		}
		
		$ret = '';
		
		for ($i = 0 ; $i < $len ; $i++) {
			$ret = $ret . $arr[$i];
		}
		
		return $ret;
	}
?>