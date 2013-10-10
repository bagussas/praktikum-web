<!DOCTYPE HTML>
<head>
<title>Identifikasi Metode</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama" /> <br />
<input type="submit" value="OK" />
</form>
<?php
if (isset($_POST['nama'])) {
echo 'Metode, ' . $_Post['nama'];
}
?>
</body>
</html>