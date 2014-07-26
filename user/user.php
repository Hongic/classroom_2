<?php
@session_start ();
// var_dump ( $_SESSION ['user'] );
include_once '../public/config/config.php';

if (@$_SESSION ['user'] != "admin") {
	echo "<script> alert('" . @ $_SESSION ['user'] . ", 你没有权限执行此操作！！'); window.location.href='../index/manager.php';
 </script>";
	exit ();
}

?>

