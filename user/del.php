<?php
include_once '../public/config/config.php';
header ( "content-type:text/html;charset=UTF-8" );

$id = $_GET ['id'];
$query = "delete from tb_user where id = " . $id;
$sql = mysql_query ( $query );
// var_dump ( $sql );
if ($sql) {
	echo "<script>alert('删除成功！！');window.location.href='index.php';</script>";
} else {
	echo "<script>alert('删除失败！！');window.location.href='index.php';</script>";
}

?>