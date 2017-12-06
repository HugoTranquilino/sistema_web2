<?php
session_start();
session_destroy();
print "<script>window.location='http://localhost/sistema-gimnasio/logeo/login/f_login.php';</script>";
?>