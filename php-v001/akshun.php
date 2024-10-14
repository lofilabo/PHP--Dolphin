<!DOCTYPE html>
<html>
<head>
<style>
	table, th, td {
	  border: 1px solid green;
	  border-collapse: collapse;
		color: #440000;
	}

	th, td {
	  padding: 4px 16px 4px 16px ;
	}
</style>
</head>

<body>
<pre>
<?php 

	function theViewForReal($cars){
	//The 'V' part of our MVC gets its own function.
	//should it have its own Object....?
		//echo("<hr/>");
		echo("<table>");
			echo("<tr><th>ID (alpha order)</th><th>Count</th></tr>");
			foreach($cars as $a=>$b ){
				echo("<tr>");
					echo("<td>");
						echo( $a );
					echo("</td>");
					echo("<td>");
						echo( $b );
					echo("</td>");
				echo("</tr>");
			}
		echo("</table>");
		//echo("<hr/>");
	}

	function processWord($str){
		$arr1 = str_split($str);
		sort($arr1);
		$newstring = implode( $arr1 );
		//var_dump( $newstring );
		return $newstring;
	}



	function main(){
		if( isset($_POST["daata"])){
			//echo "Welcome " . $_POST["daata"]; 
			$daatafile = $_POST["daata"];
		}else{
			//echo "No Specified Input. Using my own data.txt "; 
			$daatafile = "data.txt";
		}

		echo ("Working with data: " . $daatafile . "<br/>" );

		$car  = array();
		$cars = array();
		$b = 0;
		$arrData = explode("\n", file_get_contents( $daatafile ));

		echo("Associative Array (Modified)<br/>");
		foreach($arrData as $i=>$arrDataItem ){

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
		Associative Array (key-value set)
		by
		arsort (reversed-number-order of VALUE)
		*/
		arsort($cars);
		theViewForReal($cars);

	}

main();

?>
</pre>

</body>
</html>

