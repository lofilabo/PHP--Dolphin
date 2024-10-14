

<!DOCTYPE html>
<html>
<body>

<pre>


 
<?php 
if( isset($_POST["daata"])){
	//echo "Welcome " . $_POST["daata"]; 
	$daatafile = $_POST["daata"];
}else{
	//echo "No Specified Input. Using my own data.txt "; 
	$daatafile = "data.txt";
}

echo ("Working with data: " . $daatafile );

?>

<br>

<?php  



$car  = array();
$cars = array();
$b = 0;

$arrData = explode("\n", file_get_contents( $daatafile ));

//most basic test
/*
echo("Indexed Array<br/><br/>");
foreach($arrData as $arrDataItem ){
	if($arrDataItem != ""){
		array_push ( $car , $arrDataItem );// $arrDataItem[0] to get 1st letter!! 
	}

}

var_dump($car);

echo("<br/><br/> <hr/> <br/><br/>");
*/

//little bit more advanced test
/*
echo("Associative Array<br/><br/>");
foreach($arrData as $i=>$arrDataItem ){
	if($arrDataItem != ""){

		//Same data - reversed x2
		$cars += [ $arrDataItem =>  $b * 3];  // name , count
		//$cars += [ $b * 3 => $arrDataItem]; // count, name

		$b++;
	}

}
var_dump($cars);

echo("<br/><br/> <hr/> <br/><br/>");
*/

// CURRENT test.

//  EXAMPLE of how to update.
//  $cars ["aebdc"] = 666;
//  NOT USED YET.  WILL BE NEEDED.

$testVar = "rrrrrrrrrrrrrrr";
//switch on & off to test.  SWITCH ON AND OFF TO TEST.
//$cars += [$testVar => 321];
//^^^^^^^^^^^^^^^^^^^^^^^^^ COMMENT/RUN TO TEST.

/*  May Not Need now - but keep for a while
if (array_key_exists($testVar, $cars)){
	echo ( $testVar . " : (it exist!!) :: ");
	$cars [$testVar] = $cars [$testVar]+1; //update!! add 1 !!!!
	echo(  $cars [$testVar] . "" );
	echo ("<br/>We should now add 1 to the COUNT.<br/><br/>");
}else{
	echo ($testVar . " : (did not exist. inserting now.)<br/>Insert 1 into the Count<br/><br/>");
	$cars += [ $testVar =>  1]; //add as 1
}

//Do again (many times) to test increase
for($z=0; $z<4; $z++){
	if (array_key_exists($testVar, $cars)){
		$cars [$testVar] = $cars [$testVar]+1; //update!! add 1 !!!!
	}else{
		$cars += [ $testVar =>  1]; //add as 1
	}
}
*/
echo("Associative Array (Modified)<br/><br/>");
foreach($arrData as $i=>$arrDataItem ){
/*
	if($arrDataItem != ""){

		//Same data - reversed x2
		$cars += [ $arrDataItem =>  $b * 3];  // name , count
		//$cars += [ $b * 3 => $arrDataItem]; // count, name

		$b++;
	}
*/

	$arrDataItem = processWord($arrDataItem);

	if($arrDataItem != ""){
		if (array_key_exists($arrDataItem, $cars)){
			$cars [$arrDataItem] = $cars [$arrDataItem]+1; //update!! add 1 !!!!
		}else{
			$cars += [ $arrDataItem =>  1]; //add as 1
		}
	}
}

/*
Sort:
Associative Array
by

*/
arsort($cars);
var_dump($cars);

echo("<br/><br/> <hr/> <br/><br/>");






function processWord($str){
	$arr1 = str_split($str);
	sort($arr1);
	$newstring = implode( $arr1 );
	//var_dump( $newstring );
	return $newstring;
}

?>
</pre>

</body>
</html>

