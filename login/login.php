<?php
/* 对登陆表单的数据进行处理 Y-->index.php N--> login.php */
session_start ();
// header ( "Content-Type:text/html;charset=UTF-8" );
require '../public/config/config.php';
$_SESSION ['user'] = "";
/*
 * var_dump ( $_POST ['user'] ); var_dump ( $_POST ['verify'] ); var_dump (
 * $_SESSION ['verify'] );
 */
// exit ();
if (isset ( $_POST ['submit'] )) {
	
	if ($_SESSION ['verify'] != strtolower ( trim ( $_POST ['verify'] ) )) {
		echo "<script>alert('验证码错误！');window.location.href='log.php';</script>";
		exit ();
	} else {
		
		$where = "select * from tb_user where user='" . $_POST ['user'] . " '
		and pwd='" . $_POST ['pwd'] . "'";
		$sql = mysql_query ( $where );
		if ($sql) {
			$_SESSION ['user'] = $_POST ['user'];
			$_SESSION ['id'] = rand ( 000000, 999999 );
			echo "<script>
				//alert('" . "欢迎  " . $_SESSION ['user'] . "  您已成功登陆');
				//setTimeout("."alert('" . "欢迎  " . $_SESSION ['user'] . "  您已成功登陆')".",3000);
				window.location.href='../index/index.php';
				
				</script>";
		} else {
			echo "<script>
				alert('奥，NO，用户名或密码错误');
				window.location.href='log.php';
				</script>";
		}
	}
} else {
	echo "<script>
			alert('非法操作ON');
			window.location.href='log.php';
			</script>";
}