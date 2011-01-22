<?php
	$raw = $_POST['raw'];
	$raw = preg_split("/\./",$raw);
	
	$y1 = array ("C3","CN","Cx","Ch","D3","DN","Dx","Dh","E3","EN");
	$y2 = array ("n","j","f","b","D","z","v","r","T","p");
	$y3 = array ("Z","Y","X","W","3","2","1","0","7","6");
	
	$upc = $raw[3];
	$count = strlen($upc);
	$chunk = str_split($upc);
	
	$string="";
	for ($x=0; $x<=$count; $x++) {
		$b=0;
		$interpret="";
		if ($x==0||$x==4||$x==8||$x==12||$x==16) {
			$interpret=$chunk[$x].$chunk[$x+1];
			while ($interpret!=$y1[$b]) {
				$b++;
			}
			$string.=$b;
			$x++;
		} /*elseif ($x==2||$x==6||$x==10||$x==14||$x==18) {
			while ($chunk[$x]!=$y2[$b]) {
				$b++;
			}
			$string.=$b;
		} else {
			$interpret=$chunk[$x];
			while ($interpret!=$y3[$b]) {
				$b++;
			}
			$string.=$b;
		}*/
	}
	echo $string;
?>