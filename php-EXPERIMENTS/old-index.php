<?php

$fruitStart = "ebdac";
echo "origin : " ;
print_r ($fruitStart);
echo("<br><hr><br>");

//$fruits = array("e", "b", "d", "a", "c");
$fruits = str_split( $fruitStart );

echo "start : " ;
print_r ($fruits);
echo("<br><hr><br>");


sort($fruits);

foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
    echo("<br>");
}

echo("<br><hr><br>");

var_dump(implode( $fruits )); 
$fruitstr = implode( $fruits );


//$varComp = "edcba";
$varComp = "abcde";

echo("<br><hr><br>");

if (strcmp( $varComp, $fruitstr ) == 0) {
	echo("samie!");
}else{
	echo("sorry.");
}

?>
