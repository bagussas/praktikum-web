<!DOCTYPE html>
        <head>
                <title>Menciptakan Tabel</title>
                <style type="text/css">
                body{
                        background-color:#000066;
                }
                </style>
        <link href="../../bootstrap.min.css" rel="stylesheet" type="text/css" />
        </head>

        <body>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="table table-hover">
                        <div class="control-group">
                    <label class="control-label" for="NIM">NIM</label>
                <div class="controls">
                        <input type="text" name="nim" placeholder="NIM" />
                </div>
            </div>
            <div class="control-group">
                    <label class="control-label" for="Nama">Nama</label>
                <div class="controls">
                        <input type="text" name="nama" placeholder="Nama" />
                </div>
            </div>
            <div class="control-group">
                    <label class="control-label" for="Alamat">Alamat</label>
                <div class="controls">
                        <input type="text" name="alamat" placeholder="Alamat" />
                </div>
            </div>
            <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Simpan" />
                </div>
            </div>
                </form>
                <?php
                        require_once '../koneksi.php';
                        //jika field nim dan nama diisi lalu disubmit
                        if(isset($_POST['nim']) && isset($_POST['nama'])){
                                $nim = $_POST['nim'];
                                $nama = $_POST['nama'];
                                $alamat = $_POST['alamat'];
                                        
                                //tambahkan data baru ke tabel
                                $sql = "INSERT INTO mahasiswa VALUES ('".$nim. "', '" .$nama. "','" .$alamat. "' )";
                                $res = mysql_query($sql);
                                if($res){
                                        echo 'Data Berhasil Ditambahkan';
                                        @mysql_close($res);
                                }else{
                                        echo 'Gagal Menambah Data <br />';
                                        echo mysql_error();
                                }
                        }
                        echo '<hr />';
                        //Memanfaatkan script pengambilan data untuk menampilkan hasil
                        require_once './seleksi.php';
                ?>
        </body>
</html>