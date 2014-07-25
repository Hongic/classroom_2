<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php
include '../public/config/config.php';
session_start ();
$user = $_SESSION ['user'];
$eid = $_GET ['eid'];
$pwd = md5 ( "jixinxi" . md5 ( trim ( $_POST ['pwd'] ) . "602" ) );
//$user = trim ( $_POST ['user'] );
$sql = mysql_query ( "update tb_user set pwd='$pwd'
 where id=$eid" );
if ($sql) {
	echo "<script>alert('密码已经修改');window.location.href='manager.php';</script>";
} else {
	echo "<script>alert('失败');window.location.href='edit_pwd.php';</script>";
}
?>

</body>
</html>
