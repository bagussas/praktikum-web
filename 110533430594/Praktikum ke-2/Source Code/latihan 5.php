<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Pengulangan/Looping</title>
	</head>

	<body>
		<p>Pengulangan while</p>
		<?php
			$i = 0;
			
			while($i <10) {
				echo $i;
				
				$i++; //increment counter
			}
		
		?>
		<p>Pengulangan do-while</p>
		<?php
			$i = 0;
			
			do{
				echo $i;
				
				$i++; //increment counter
			} while ($i < 10);
			
		?>
		<p>Pengulangan for</p>
		<?php
			for ($i = 0;$i < 10;$i++) {
				echo $i;
			}
		?>
		<p>Pernyataan foreach</p>
		<?php
			$arr = array(1,2,3,4);
			
			foreach($arr as $value){
				echo $value;
			}
		?>
	</body>
</html>
