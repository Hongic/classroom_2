<?php

@session_start ();
include_once '../public/config/config.php';
$user = $_SESSION ['user'];
$last_time = date ( "Y-m-d H:i:s" );
$sql = mysql_query ( "update tb_user set last_time='$last_time' where user='$user'" );

//exit ();
session_destroy ();
header ( "Content-Type:text/html;charset=UTF-8" );
echo "<script>alert('成功退出！！');window.location.href='log.php';</script>";
var_dump ( $_SESSION ['user'] );