<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/mvc/index.php?controller=login&action=index");
?>