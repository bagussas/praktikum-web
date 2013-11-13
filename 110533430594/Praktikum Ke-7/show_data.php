<?php
require_once './koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE nim = $id";
$res = mysql_query($sql);
if ($res) {
if (mysql_num_rows($res)) { ?>
<table border=1 cellspacing=1 cellpadding=5>
<tr>
<th>#</th>
<th width=100>NIM</th>
<th width=150>Nama</th>
<th width=200>Alamat</th>
</tr>
<?php
$i = 1;
while ($row = mysql_fetch_row($res)) { ?>
<tr>
<td>
<?php echo $i;?>
</td>
<td>
<?php echo $row[0];?>
</td>
<td>
<?php echo $row[1];?>
</td>
<td>
<?php echo $row[2];?>
</td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
} else {
echo 'Data Tidak Ditemukan';
}
}
?>