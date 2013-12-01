<!DOCTYPE html>
        <head>
                <title>Halaman Administrator</title>
                <style type="text/css">
                        body{
                                background-color:#0F0;
                                color:#0FF;
                        }
                        a{
                                color:#CCC;
                        }
                        .inner{
                                margin: 200px auto;
                                padding: 20px;
                                width:240px;
                                border:5px solid #F09;
                        }
                </style>
        </head>

        <body>
                <?php
                        ini_set('display errors',1);
                        define('_VALID',1);
                        //include file eksternal
                        require_once('./proses.php');
                        init_login();                //cocokkan username dan passsword dengan input
                        validate();                        //tampilkan login jika session kosong atau perintah logout jika session tidak kosong
                ?>
                <h1 style="text-align:center">Simulasi Halaman Admin</h1>
                <p style="text-align:center">
                        <a href="">Logout</a>
                </p>
                <div class="inner">
                        
                        Menu-menu Admin Disini
                        <?php
                                if($_SESSION['login']==''){                        //hapus session jika checkbox tidak dicentang
                                        unset($_SESSION['login']);
                                        session_destroy();
                                        exit;
                                }
                        ?>
                </div>
        </body>
</html>