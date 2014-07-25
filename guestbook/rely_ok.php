<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>处理回复</title>
</head>
<body>

<?php
session_start ();
$rely = $_SESSION ['user'];
include_once '../public/config/config.php';

$rid = $_GET ['rid'];
// var_dump ( $eid );
// $guestbook = "../public/upload/";
// $pic = $_FILES ['file'] ['name'];
// var_dump ( $pic );
// $time = date ( "YmdHis" );
$relytime = date ( "Y-m-d H:i:s" );
// $str = substr ( $pic, strripos ( $pic, "." ) );

// $guestbook = $guestbook . $time . $str;
// var_dump ( $guestbook );
// exit ();
// move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $guestbook );

$sql = mysql_query ( "update tb_guestbook set rely='$rely',rintro='" . $_POST ['rintro'] . "',
relytime='$relytime' where id=$rid" );
// var_dump ( $sql );
if ($sql) {
	echo "<script>alert('回复成功！！');
		window.location.href='index.php';
		</script>";
} else {
	// var_dump ( $sql );
	echo "<script>alert('回复失败'); window.location.href='rely.php';</script>";
}

?>

</body>
</html>
