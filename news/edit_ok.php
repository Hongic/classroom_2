<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>处理成果</title>
</head>
<body>

<?php
include_once '../public/config/config.php';
$eid = $_GET ['eid'];

$pubtime = date ( "Y-m-d H:i:s" );

$sql = mysql_query ( "update tb_news set title='" . $_POST ['title'] . "',
content='" . $_POST ['content'] . "',pubtime='$pubtime' where id=$eid" );
if ($sql) {
	echo "<script>alert('更新成功！！');
		window.location.href='index.php';
		</script>";
} else {
	echo "<script>alert('更新失败'); window.location.href='edit.php';</script>";
}

?>

</body>
</html>
