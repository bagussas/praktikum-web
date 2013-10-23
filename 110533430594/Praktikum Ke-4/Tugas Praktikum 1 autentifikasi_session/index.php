 <?php
            
			session_start();
            if (isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            echo
            '<p align="center">'.
            '<b>Wellcome Dud!</b>'.
            '<br/><br/>'.
            '<a href="#">Data Lengkap</a>'.
            '<br/><br/>'.
            '<a href="login.php">Logout</a>'.
            '</p>';
            echo
            $user;
            } else {
            header('location: login.php');
            exit;
            }
      ?>