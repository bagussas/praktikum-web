<!DOCTYPE html>
        <head>
                <title>Halaman Administrator</title>
                <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <style type="text/css">
                        body{
                                background-color:#000066;
                                color:#FF0000;
                        }
                        a{
                                color:#FF0000;
                        }
                        .inner{
                                margin: 200px auto;
                                padding: 20px;
                                width:512px;
                                border:5px solid #FF0000;
                        }
                </style>
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css" />
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
                <h1 class="text-center">Simulasi Halaman Admin</h1>
                <p class="text-center">
                        <a href="">Logout</a>
                </p>
                <div class="inner">
                        <script type="text/javascript">
                                document.location.href="../admin";
                        </script>
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