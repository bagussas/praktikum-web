<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tipe Data & Casting</title>
	</head>

	<body>
		<p>Cek Type Data</p>
		<?php
			$bil = 3;
			var_dump(is_int($bil)); // output: bool(true)
			
			$var = "";
			var_dump(is_string($var)); //output: bool(true)
			
		?>
		<p>Casting Type Data</p>
		<?php
			$str = '123abc';
			//casting nilai variabel $str ke integer
			$bil = (int) $str; // $bil = 123
			echo gettype($str); // Output: string
			echo gettype($bil) // Output: integer
			
		?>
	</body>
</html>
