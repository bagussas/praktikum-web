<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validasi Login</title>
</head>
<body>
<?php 
	if((@$_POST['Username']=='bagussas') AND (@$_POST['Password']=='bagussas')) { //validasi username dan password
		//pesan berhasil login
		echo 'You are Login as :'.$_POST['Username']; 
		echo '<br><br>Wellcome ' . $_POST['Username']; 
	} else { 
		//pesan gagal login
		echo "<body><strong>Eitsss, Username and Password not match with any account!<br></strong></body>"; 
	} 
?> 
</body>
</html>