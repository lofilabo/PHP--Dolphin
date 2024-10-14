<?php

/*
Move:
  * Text File
    into
  * Associative Array 


  SEEEE ALSO:
  05.php


*/

$car = array();
$i = 0;

$arrData = explode("\n", file_get_contents('data.txt'));
//var_dump($arrData);

foreach($arrData as $arrDataItem ){
	if($arrDataItem != ""){
		print_r( $arrDataItem );
		echo("<br/>");
		array_push ( $car , [$arrDataItem] );
		//$car += [$i=>$arrDataItem];
		$i++;
	}

}

foreach($car as $one=>$two ){
	echo( $one );
	echo( "  -  " );
	echo( $two[0] );
	echo("<br/>");
}


/*

//FORGET this. Use 
//  explode("\n", file_get_contents('data.txt'));
// instead.

// fopen does NOT give a reurn value.

$myfile = fopen("data.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file


	while(!feof($myfile)) {


	  	echo fgets($myfile) . "<br>";

		//$car[] = $myfile => $i;

		//$car += [$myfile];

		array_push ( $car, $i );

		$i++;
	}

fclose($myfile);
//print_r($car);

var_dump($car);
foreach($car as $one=>$two ){
	print_r( $one );
	print_r( $two );
	echo("<br/>");
}
*/


?>
