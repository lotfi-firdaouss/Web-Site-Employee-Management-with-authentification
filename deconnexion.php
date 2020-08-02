<?php
  session_start();
?>


<?php

  unset($_SESSION['user_name']);
  unset($_SESSION['user_id']);
  unset($_SESSION['logged_in']);
  session_destroy();
  /*echo '<script type="text/javascript">
          window.location = "http://localhost/WEBPROJECT/index.php"
    </script>';*/
  header('Location:index.php');

?>