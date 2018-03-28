<?php
	// parameters:
	$filename = 'data.txt';
	$max_letters = 100;


	//	code
    $file = fopen($filename, "r");

    $sentences = 0;
    while (!feof($file)) {
        $array[$sentences] = fgets($file);
        $sentences++;
    }

    fclose($file);


    $i = 0;
    while ($i <= $max_letters) {
    	$temp = $array[rand(0, $sentences-1)];
    	
    	$letters = strlen($temp);

    	if($letters+$i > $max_letters){
    		$test = ($letters+$i) - $max_letters; 
            $pos = $letters - $test + - 1;

    		$new_String = substr($temp, 0, $pos);
    		echo $new_String.'.<br/>';

    		$i += strlen($new_String);
      
            break;
    		
    	}
    	else{
    		$i += $letters;
    		echo $temp;
    	}
    	
  
    	
    	

    }



?>