<!DOCTYPE html>
<head>
<title>Program Penanganan Seleksi</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Propinsi
<select name="Propinsi" />
<option value="JATIM"/> JATIM
<option value="JATENG" /> JATENG
<option value="JABAR" /> JABAR
<option value="JAMBI" /> JAMBI
<option value="SUMBA" /> SUMBA
<option value="SUMSEL" /> SUMSEL
<option value="BABEL" /> BABEL
</select>
<input type="submit" name="submit" value= "OK" />
</form>
<?php 
	if(isset($_POST['Propinsi'])){
		echo 'Anda memilih ' . $_POST['Propinsi'];}
?>
</body>
</html>