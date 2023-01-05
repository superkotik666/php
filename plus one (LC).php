



	<?php
$digits = [];


function plusOne($digits) {
       
	
	   $length = count($digits);
	
	   
	   $last= array_key_last ($digits);
	   $preLast = $last-1;


for ($i=0 ; $i<$length; $i++){	    
	   if ( $digits[$i]==$digits[$last] and $digits[$last]<9){
		$digits[$last]++;
	   return $digits;
	   } 
	   if ($digits[$i]==$digits[$last] and $digits[$last]==9){
		$digits[$last]=0;
		 $digits[$preLast]++;
		 return $digits;
	   }
	}
}
var_dump( plusOne($digits));

	?>