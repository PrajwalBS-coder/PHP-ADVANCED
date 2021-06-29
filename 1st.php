      <center><?php
	$file="aa.txt";
	$linecount = 0;
	$handleFile = fopen($file, "r");
	while(!feof($handleFile)){
	$line = fgets($handleFile);
	$linecount++;
	}
	$wcount = 0; 
	$handleFile = fopen($file, "r");
	while (($line = fgets($handleFile)) !== false) {  
    //Splits each line into words  
    $words = explode(" ", $line);  
    //Counts each word  
    $wcount = $wcount + count($words);  
  }  
  $str=file_get_contents("aa.txt");
  $str = strtolower($str);  
  $vcount=0;
  $ccount=0;
  $dcount=0;
  $scount=0;
    for($i = 0; $i < strlen($str); $i++) {
    	 if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {  
        $vcount++;  
		 }
		else if($str[$i] >= 'a' && $str[$i] <= 'z') {  
        $ccount++;  
        } 
		 else  if($str[$i] >= '0' && $str[$i] <= '9') {  
        $dcount++;  
        }  
		 else{
    	$scount++;
        }
     
    }
	   $chr= mb_strlen($str);

	 echo "Number ofvowels :  $vcount <br>";  
     echo  "No of lines in file is  $linecount \n\n\n <br>";
	 echo "Number of words :  $wcount <br>";  
	 echo "Number of Character :  $chr <br>";  
     echo "Number of Consonants :  $ccount<br>";
     echo "Number of Digits :  $dcount<br>";
     echo "Number of special Characters : " , $scount-$dcount+1; 
     echo '<br>Size of the file is:',filesize("aa.txt");
	 fclose($handleFile);

	
?></center>
