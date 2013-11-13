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
// Proses jika objek komplit (kode = 4)
if (xmlHttp.readyState == 4) {
if (xmlHttp.status == 200) {
// Set teks
document.getElementById('hasil').
innerHTML = xmlHttp.responseText;
} else {
alert("Error: " + xmlHttp.statusText);
}
// Jika belum komplit
// tampilkan animasi indikator
} else {
document.getElementById('hasil').innerHTML =
'<img src="Loading.gif">';
}
}
</script>
</head>
<body>
<?php
require_once './koneksi.php';
$sql = 'SELECT * FROM mahasiswa WHERE nama LIKE %nama%';
$res = mysql_query($sql);
if ($res && mysql_num_rows($res)) { ?>
<form>
Nama:
<input type="text" name="nim" onchange="showData('show_data.php',
this.value);"/>

</form>
<?php
}
?>
<!-- Penting, ini untuk menampilkan hasil -->
<p><div id="hasil"></div></p>
</body
></html>