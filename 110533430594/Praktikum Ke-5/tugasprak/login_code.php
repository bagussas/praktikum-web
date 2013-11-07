<?php
	session_start();
	include "koneksi.php";
	$user = $_POST['nama'];
	$pass = $_POST['pass'];
		
	$select = "SELECT nim,nama FROM mahasiswa WHERE nim='$pass' and nama='$user'";
	$query_login = mysql_query($select);
	if($query_login){
		$_SESSION['nama'] = $_POST['nama'];
		header("location:latihan4.php");
	}else{
		?>
			<script language="javascript">
				alert("maaf, username atau password anda tidak cocok");
				document.location="login.php";
			</script>
		<?php
	}
?>