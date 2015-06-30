<?php

	//simple recursive search of an array to find a peak in an array (if it exists)
	
	$arr = array(1, 3, 4, 8, 4, 3, 5, 9, 7, 0, 5);
	
	print_r($arr); echo "<br/>";
	
	$n = count($arr) - 1;
	
	//echo $n;
	
	function peakfind ($array, $left, $right) {
		//echo "Lets start!";
		$start = ($left + $right) / 2;
		
		$start = floor($start);
		
		echo $start; echo "</br>";
		
		if ($array[$start] < $array[abs($start - 1 )]){
			echo "To the left" . "<br> ";
			peakfind($array,$left, $start+1);
			
			
		} else if ($array[$start] < $array[$start + 1]) {
			echo "To the Right" . "<br>";
			peakfind($array, $start+1, $right);
		} else {
			echo "this is the peak!";
			echo $array[$start];
			return $array[$start];
		}
	}
	
	$peak = peakfind($arr, 0, (count($arr)-1));
	
	var_dump($peak);

?>