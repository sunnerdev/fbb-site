<?php
session_start();
$_SESSION['access_token']='';
$_SESSION['refresh_token']='';
$_SESSION['expires_in']='';
echo "<script>location.href = '../index.php';</script>";
exit;
?>