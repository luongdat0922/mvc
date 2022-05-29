<?php
session_start();
if (!isset($_SESSION['username'])) 
{
    header("Location: http://localhost/mvc/index.php?controller=login&action=index");
}
?>