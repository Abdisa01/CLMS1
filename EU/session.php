<?php
session_start();
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header("location:index.php?log=");
    exit();
}
$session_id=trim($_SESSION['id']);

?>