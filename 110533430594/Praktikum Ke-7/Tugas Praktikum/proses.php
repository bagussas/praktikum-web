<style type="text/css">
<!--untuk tabel-->
p, td, th {
    font:2 Verdana, Arial, Helvetica, sans-serif;
}
.datatable {
    border: 1px solid #D6DDE6;
    border-collapse: collapse;
}
.datatable td {
    border: 1px solid #D6DDE6;
    padding: 4px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:10px;
}
.datatable th {
    border: 1px solid #828282;
    background-color: #BCBCBC;
    font-weight: bold;
    text-align: left;
    padding-left: 4px;
	padding-right: 0px;
	text-align:center;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:10px;
}
</style>


<?PHP
//buat konkesi
require_once './koneksi.php';
$koneksi = mysql_connect("localhost","root","");
$db = 'myweb';
mysql_select_db($db,$koneksi);

//pencarian nama
echo "Kata Kunci Anda adalah : ".$key=$_GET['key'];
$result=mysql_query("select * from mahasiswa where nama like '%$key%'",$koneksi); 
$get_pages=mysql_num_rows($result);

if ($get_pages){
	?>
		<br /><br />
		<TABLE width="52%" class="datatable">
		<TR>
			<TH width="162" scope="col">NIM</TH>
			<TH width="152" scope="col">Nama</TH>
			<TH width="185" scope="col">Alamat</TH>
		  </TR>
	<?PHP

	while ($row=mysql_fetch_array($result)){
		$nim=$row['nim'];
		$nama=$row['nama'];
		$alamat=$row['alamat'];
		?>
		<TR>
			<TD width="162" scope="col"><?PHP echo $nim;?></TD>
			<TD width="152" scope="col"><?PHP echo $nama;?></TD>
			<TD width="185" scope="col"><?PHP echo $alamat;?></TD>
		  </TR>
		<?PHP
	}
	
	
	?></TABLE>
		<?PHP
}else{
	?><br /><b>Belum ada data!!</b><?PHP
}
?>