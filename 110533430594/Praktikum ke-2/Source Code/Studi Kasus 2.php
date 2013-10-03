<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Program Matrik Tabel</title>
	</head>

	<body>
		<?php 
			function matrik_tabel($rows,$cols){
				echo "<table border='1'>"; 
 
				for($tr=1;$tr<=$rows;$tr++){ 
      				echo "<tr>"; 
        			for($td=1;$td<=$cols;$td++){ 
               			echo "<td>baris: ".$tr." kolom: ".$td."</td>"; 
        			} 
    				echo "</tr>"; 
				} 
 
				echo "</table>"; 
			}
			$baris = 3; //jumlah baris yang akan dibuat
			$kolom = 4; //jumlah kolom yang akan dibuat
			matrik_tabel($baris,$kolom);
		?>
	</body>
</html>
