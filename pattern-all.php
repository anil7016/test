<?php



function pattern($n){
	$num = 65;	
	for($i=0;$i<$n;$i++){
		for($j=0;$j <= $i;$j++){
			$ch = chr($num);
			echo $ch.' ';
			$num = $num + 1;
		}
			echo '<br/>';
	}
}

// pattern(5);

function pattern2($n){
	$num = 65;	
	for($i=0;$i<$n;$i++){
		for($j=0;$j <= $i;$j++){
			$ch = chr($num);
			echo $ch.' ';
		}

			echo '<br/>';
			$num = $num + 1;

	}
}


function pattern3($n){
	$num = 1;	
	for($i=0;$i<$n;$i++){
		for($j=0;$j <= $i;$j++){
			$ch = $num;
			echo $ch.' ';
					$num = $num + 1;

		}

			echo '<br/>';

	}
}

pattern3(5);    
?>