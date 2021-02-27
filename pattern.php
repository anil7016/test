<?php

for($i=1;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){	
		//echo '*'; 
		//echo $i; 
		//echo $j; 
	}
		echo '<br />'; 
	
}


// pattern reverse
/* for($i=5;$i>=1;$i--){
	for($j=$i;$j<=1;$j--){	
		echo '*'; 
		//echo $i; 
		//echo $j; 
	
	exit;}
		echo '<br />'; 
	
} */
for($i=5;$i>=1;$i--)
 {
   for($j=$i;$j>=1;$j--)
    {
     echo $j." ";
    if($j==1)
		{
		echo " ";
		echo "<br />";
		}
	}
 }	
   
?>