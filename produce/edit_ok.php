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
// var_dump ( $eid );
$produce = "../public/upload/";
$pic = $_FILES ['file'] ['name'];
// var_dump ( $pic );
$time = date ( "YmdHis" );
$pubtime = date ( "Y-m-d H:i:s" );
$str = substr ( $pic, strripos ( $pic, "." ) );

$produce = $produce . $time . $str;
// var_dump ( $produce );
// exit ();
move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $produce );

$sql = mysql_query ( "update tb_produce set title='" . $_POST ['title'] . "',
produce='$produce',intro='" . $_POST ['intro'] . "',pubtime='$pubtime' where id=$eid" );
// var_dump ( $sql );
if ($sql) {
	echo "<script>alert('更新成功！！');
		window.location.href='index.php';
		</script>";
} else {
	// var_dump ( $sql );
	echo "<script>alert('更新失败'); window.location.href='edit.php';</script>";
}

?>

</body>
</html>
