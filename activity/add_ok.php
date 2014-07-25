<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>处理活动</title>
</head>
<body>

<?php
include_once '../public/config/config.php';
include_once '../public/config/session.php';
$pubtime = date ( "Y-m-d H:i:s" );
$author = $_SESSION ['user'];
$sql = mysql_query ( "insert into tb_activity(title,intro,pubtime,author) 
values('" . $_POST ['title'] . "','" . $_POST ['intro'] . "','$pubtime','$author')" );
if ($sql) {
	echo "<script>alert('添加成功！！');
		window.location.href='index.php';
		</script>";
} else {
	
	echo "<script>alert('失败'); window.location.href='add.php';</script>";
}
?>

</body>
</html>
