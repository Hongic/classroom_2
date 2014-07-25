<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>处理成果</title>
</head>
<body>

<?php
include_once '../public/config/config.php';
$produce = "../public/upload/";
$pic = $_FILES ['file'] ['name'];
$time = date ( "YmdHis" );
$pubtime = date ( "Y-m-d H:i:s" );
// var_dump ( $time );

$str = substr ( $pic, strripos ( $pic, "." ) );

$produce = $produce . $time . $str;
// var_dump ( $produce );
move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $produce );
$sql = mysql_query ( "insert into tb_produce(title,produce,intro,pubtime) 
values('" . $_POST ['title'] . "','$produce','" . $_POST ['intro'] . "','$pubtime')" );
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
