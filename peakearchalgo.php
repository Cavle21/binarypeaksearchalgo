<?php

	//simple recursive search of an array to find a peak in an array (if it exists)
	
	$arr = array(1, 9, 3, 4, 8, 1, 3, 1, 9, 7, 0, 5);
	
	print_r($arr); echo "<br/>";
	
	$n = count($arr) - 1;
	
	//echo $n;
	
	function peakfind ($array, $n) {
		//echo "Lets start!";
		
		$start = $n / 2;
		
		$start = floor($start);
		
		echo $start; echo "</br>";
		
		if ($array[$start] < $array[abs($start - 1 )]){
			echo "To the left" . " ";
			$n = $start;
			peakfind($array, $n);
			
			
		} else if ($array[$start] < $array[$start + 1]) {
			echo "To the Right";
			//return $array[start];
			
		} else {
			echo "this is the peak!";
			echo $array[$start];
			return $array[$start];
		}
	}
	
	echo peakfind($arr, $n)

?>