<?php
            session_start();
            if(isset($_SESSION['user']))
            {
            session_destroy();
            }
?>
     <form action="cek_login.php" method="post">
            <div align="center">
            Username:
            <input type="text" name="username" size="14" />
            <br/>
            Password:
            <input type="password" name="password" size="14" />
            <br/><br/>
            <button name="login" type="submit">Login</button>
            </div>
      </form>
