<link rel="stylesheet" type="text/css" href="../bootstrap.min.css" />
<?php
        defined('_VALID') or die('Not Allowed');
        
        function init_login(){
                //simulasi data account nama dan password
                $nama = 'admin';        //inisialisasi username
                $pass = 'admin';        //inisialisasi password
                session_start();        //mulai session
                if(isset($_POST['nama']) && isset($_POST['pass'])){        //cek nilai user dan password
                        $n = trim($_POST['nama']);
                        $p = trim($_POST['pass']);
                        
                        if(($n === $nama) && ($p === $pass)){                //cocokkan input dengan user dan password
                                if(isset($_POST['remember'])){                        //inisialisasi jika checkbox dicentang
                                        //jika sama,set cookie
                                        $_SESSION['login']=$n;
                                        //redireksi
                                        ?>
                                        <script type="text/javascript">
                                                document.location.href="./";
                                        </script>
                                        <?php
                                }else{
                                        $_SESSION['login']='';                                //inisialisasi jika checkbox tidak dicentang                                        
                                }
                        }else{                                                                                //teks yang ditampilkan jika inputan salah
                                echo '<h1 style="margin:10px auto;text-align:center;">nama/password tidak sesuai</h1>';
                                return false;
                        }
                }
        }
        function validate(){
                if(!isset($_SESSION['login'])){                                        //cek ketersediaan session
                        ?>
                        <div class="inner">
                                <form action="" method="post" class="form-horizontal">
        <div class="control-group">
        <label class="control-label" for="Nama">Nama</label>
<div class="controls">
        <input type="text" name="nama" placeholder="Nama" />
</div>
</div>
<div class="control-group">
        <label class="control-label" for="Password">Password</label>
<div class="controls">
        <input type="password" name="pass" placeholder="Password" />
</div>
</div>
<div class="control-group">
        <label class="checkbox">
        <input type="checkbox" name="remember" value="simpan" /> Remember Me
</label>
        <div class="controls">
        <input type="submit" value="Login" />
</div>
</div>
                                </form>
                        </div>
                        <?php
                        exit;                                        //keluar dari fungsi/prosedure
                }
                if(isset($_GET['m']) && $_GET['m'] == 'Logout'){        //perintah ketika logout diklik
                        //hapus session
                        if(isset($_SESSION['login'])){                                
                                unset($_SESSION['login']);
                                session_destroy();
                        }
                        
                        //redireksi halaman
                        ?>
                        <script type="text/javascript">
                                document.location.href="./";
                        </script>
                        <?php
                }
        }
?>