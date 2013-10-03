<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Passing By Reference</title>
	</head>

	<body>
		<?php 
			function jumlah(&$nilai){
				$nilai++;
			}
			$input=7;
			jumlah($input);
			echo $input;
		?>
	</body>
</html>
