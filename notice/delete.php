<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>删除成果</title>
</head>
<body>

<?php
include_once '../public/config/config.php';
$did = $_GET ['did'];

$sql = mysql_query ( "delete from tb_notice where id=$did" );
if ($sql) {
	echo "<script>alert('删除成功');window.location.href='index.php';</script>";
} else {
	echo "<script>alert('删除失败');window.location.href='index.php';</script>";
}
?>

</body>
</html>
