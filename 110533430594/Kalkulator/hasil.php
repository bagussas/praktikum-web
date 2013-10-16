<!DOCTYPE html>
<head>
<title>Hasil</title>
</head>
<body>
<?php

    $bil1 = $_POST['bil1'];

    $bil2 = $_POST['bil2'];

    if ($tambah = $_POST['tambah'])

    {

    $hasil = $bil1 + $bil2 ;
    }

    if ($kurang = $_POST['kurang'])

    {
		$hasil = $bil1 - $bil2;
    }

    if ($kali = $_POST['kali'])

    {

    $hasil = $bil1 * $bil2 ;

    }

    if ($bagi = $_POST['bagi'])

    {$hasil = $bil1 / $bil2 ;

    }
	
	header ("location:index.php?bil3=$hasil");
	
	?>
</body>
</html>