<?php
/*
Order by Alphabet
*/

$retval1 = "dcba";
$retval2 = "abcd";

echo "1~Same; 0~Different<br/>";

$TorF = sameOrDifferent($retval1 , $retval2);
echo ($TorF);

function sameOrDifferent($v1, $v2){
	$retval1 = processWord($v1);
	$retval2 = processWord($v2);

	if ( $retval1 == $retval2 ){
		//echo "def same!";
		// SAME = 1
		return 1;
	}else{
		//echo "not same!";
		// DIFFERENT = 0
		return 0;
	}
}

function processWord($str){
	$arr1 = str_split($str);
	sort($arr1);
	$newstring = implode( $arr1 );
	//var_dump( $newstring );
	return $newstring;
}

?>
