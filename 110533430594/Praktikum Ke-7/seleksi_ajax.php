<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Aplikasi Database Ajax</title>
</head>
<script language="JavaScript" type="text/javascript">
var xmlHttp = false;
function createXmlHttpRequest() {
var xmlHttp = false;
if (window.ActiveXObject) {
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
} else {
xmlHttp = new XMLHttpRequest();
}
if (!xmlHttp) {
alert("Gagal menciptakan Objek");
}
return xmlHttp;
}
function showData(url, id) {
xmlHttp = createXmlHttpRequest();
if (xmlHttp.readyState == 4 ||
xmlHttp.readyState == 0) {
// Membentuk url dan argumen
var url = url + "?id=" + id;
xmlHttp.onreadystatechange = handleRespon;
xmlHttp.open("GET", url, true)
xmlHttp.send(null)
} else {
// Jika gagal, coba setelah 1 detik
setTimeout('showData(url, id)', 1000);
}
}
function handleRespon() {
if (xmlHttp.readyState == 4) {
if (xmlHttp.status == 200) {
document.getElementById('hasil').
innerHTML = xmlHttp.responseText;
} else {
alert("Error: " + xmlHttp.statusText);
}
}
}
</script>
</head>
<body>
<?php
require_once './koneksi.php';
$sql = 'SELECT nim FROM mahasiswa';
$res = mysql_query($sql);
if ($res && mysql_num_rows($res)) { ?>
<form>
NIM:
<select name="nim" onchange="showData('show_data.php',
this.value);">
<?php
while ($row = mysql_fetch_row($res)) { ?>
<option value="<?php echo $row[0];?>"><?php echo
$row[0];?></option>
<?php
}
?>
</select>
</form>
<?php
}
?>
<!-- Penting, ini untuk menampilkan hasil -->
<p><div id="hasil"></div></p>
</body
></html>