<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php
include_once '../public/config/config.php';
$picture = "../public/upload/";
$pic = $_FILES ['file'] ['name'];
$time = date ( "YmdHis" );
// var_dump ( $time );
$str = substr ( $pic, strripos ( $pic, "." ) );

$picture = $picture . $time . $str;
// var_dump ( $picture );
move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $picture );
$sql = mysql_query ( "insert into tb_member(member,grade,direction,picture,intro) 
values('" . $_POST ['member'] . "','" . $_POST ['grade'] . "',
'" . $_POST ['direction'] . "','$picture','" . $_POST ['intro'] . "')" );
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
