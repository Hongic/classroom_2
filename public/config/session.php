<?php
session_start ();
// 动态的安全防御
$_SESSION ['user']; // 显示登陆用户名
$_SESSION ['id']; // 用户执行操作的动态凭证

if (empty ( $_SESSION ['id'] )) {
	
	echo "<script>
			alert('非法操作ON');
			window.location.href='../login/log.php';
			</script>";
}
?>