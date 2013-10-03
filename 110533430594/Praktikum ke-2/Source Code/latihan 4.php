<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Pernyataan Seleksi</title>
	</head>

	<body>
		<p>Pernyataan if</p>
		<?php
			$a = 10;
			$b = 5;
			
			if($a > $b){
				echo 'a lebih besar dari b';
			}
		
		?>
		<p>Pernyataan if-else</p>
		<?php
			$a = 10;
			$b = 5;
			
			if($a > $b){
				echo 'a lebih besar dari b';
			} else {
				echo 'a TIDAK lebih besar dari b';
			}
		
		?>
		<p>Pernyataan if-elseif</p>
		<?php
			$a = 10;
			$b = 5;
			
			if($a > $b){
				echo 'a lebih besar dari b';
			} elseif ($a == $b) {
				echo 'a sama dengan b';
			} else {
				echo 'a kurang dari b';
			}
		
		?>
		<p>Pernyataan switch </p>
		<?php
			$i = 0;
			if ($i == 0) {
				echo "i equals 0";
			} elseif ($i == 1) {
				echo "i equals 1";
			} elseif ($i == 2) {
				echo "i equals 2";
			}
			
			//Ekuivalen, dengan pendekatan switch
			switch($i) {
				case 0:
					echo "i equals 0";
					break;
				case 1:
					echo "i equals 1";
					break;
				case 2:
					echo "i equals 2";
					break;
			}
		?>
	</body>
</html>
