<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Fungsi dan Prosedur</title>
	</head>

	<body>
		<p>Definisi Fungsi/Prosedur</p>
		<?php
			//Contoh prosedur
			function do_print() {
				//mencetak informasi timestamp;
				echo time();
			}
			
			//Memanggil prosedur
			do_print();
			
			echo '<br />';
			
			//contoh fungsi penjumlahan
			function jumlah($a, $b) {
				return ($a + $b);
			}
			
			echo jumlah(2,3); //output: 5
		?>
		<p>Argumen Fungsi/Prosedur</p>
		<?php
			/**
			 * Mencetak string
			 * $teks nilai string
			 * $bold adalah argumen opsional
			 */
			function print_teks($teks, $bold = true) {
				echo $bold ? '<b>' .$teks. '</b>' : $teks;
			}
			
			print_teks('Indonesiaku'); //Mencetak dengan huruf tebal
			print_teks('Indonesiaku', false); //Mencetak dengan huruf reguler
		?>
		
	</body>
</html>
