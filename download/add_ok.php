<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>下载</title>
</head>
<body>

<?php
include_once '../public/config/config.php';
$download = "../public/download/";
$pic = $_FILES ['file'] ['name'];
$time = date ( "YmdHis" );
$pubtime = date ( "Y-m-d H:i:s" );
// var_dump ( $time );

$str = substr ( $pic, strripos ( $pic, "." ) );

$download = $download . $time . $str;
// var_dump ( $download );
move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $download );
$sql = mysql_query ( "insert into tb_download(title,download,pubtime) 
values('" . $_POST ['title'] . "','$download','$pubtime')" );
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
