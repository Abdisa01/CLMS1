<?php
session_start();
session_cache_limiter(FALSE);
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header("location:index.php?log=");
    exit();
}
$session_id=trim($_SESSION['id']);

?>