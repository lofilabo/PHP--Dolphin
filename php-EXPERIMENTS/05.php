

<!DOCTYPE html>
<html>
<body>

<pre>
<?php  

$car  = array();
$cars = array();
$b = 0;

$arrData = explode("\n", file_get_contents('data.txt'));


foreach($arrData as $arrDataItem ){
	if($arrDataItem != ""){
		array_push ( $car , $arrDataItem );// $arrDataItem[0] to get 1st letter!! 
	}

}

var_dump($car);

foreach($arrData as $i=>$arrDataItem ){
	if($arrDataItem != ""){
		$cars += [ $b * 3 => $arrDataItem];
		$b++;
	}
}
var_dump($cars);

?>
</pre>

</body>
</html>

