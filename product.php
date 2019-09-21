
<?php 
require('common/config.php');
if($_SESSION['refresh_token']=='')
{ 
    echo "<script>location.href = 'index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<link rel="shortcut icon" href="_static/_css/img/favicon.ico" type="image/x-icon" />

<?php include('common/module/head.php'); ?>    
</head>
<body class="account grey">
<?php include('common/module/header.php'); ?>
<?php include('common/module/menu.php'); ?>
<?php include('common/module/marquee.php'); ?>
<?php //include('common/module/loginframe.php'); ?>
<?php include('common/module/modalFrame.php'); ?>


</body>
</html>