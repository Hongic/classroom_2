<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>处理活动</title>
</head>
<body>

<?php
include_once '../public/config/config.php';

$pubtime = date ( "Y-m-d H:i:s" );

$sql = mysql_query ( "insert into tb_notice(notice,pubtime) 
values('" . $_POST ['notice'] . "','$pubtime')" );
if ($sql) {
	echo "<script>alert('添加成功！！');
		window.location.href='index.php';
		</script>";
} else {
	// var_dump ( $sql );
	echo "<script>alert('失败'); window.location.href='add.php';</script>";
}
?>

</body>
</html>
