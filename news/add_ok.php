<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>处理活动</title>
</head>
<body>

<?php
@session_start ();
include_once '../public/config/config.php';
$promulgator = $_SESSION ['user'];

$pubtime = date ( "Y-m-d H:i:s" );

$sql = mysql_query ( "insert into tb_news(title,content,promulgator,pubtime) 
values('" . $_POST ['title'] . "','" . $_POST ['content'] . "',
		'$promulgator','$pubtime')" );
if ($sql) {
	echo "<script>alert('添加成功！！');
		window.location.href='index.php';
		</script>";
} else {
	//var_dump ( $_POST ['title'] );
	//var_dump ( $_POST ['content'] );
	//var_dump ( $promulgator );
	//var_dump ( $pubtime );
	echo "<script>alert('失败'); window.location.href='add.php';</script>";
}
?>

</body>
</html>
