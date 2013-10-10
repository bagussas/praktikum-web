<!DOCTYPE html>
<head>
<title>Program Penanganan Seleksi</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Propinsi
<input type="checkbox" name="Propinsi[]" value="JATIM" checked="checked"/>JATIM
<input type="checkbox" name="Propinsi[]" value="JATENG"/>JATENG
<input type="checkbox" name="Propinsi[]" value="JABAR"/>JABAR 
<input type="checkbox" name="Propinsi[]" value="BABEL"/>SUMBA
<input type="checkbox" name="Propinsi[]" value="SUMSEL"/>SUMSEL<br />
<input type="submit" name="submit" value= "OK" />
</form>
<?php
if (isset($_POST['Propinsi'])) {
foreach ($_POST['Propinsi'] as $key => $val) {
echo ' * ' .$val . '<br />';
}
}
?>
</body>
</html>