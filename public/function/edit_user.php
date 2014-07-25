<?php
function edit_user() {
	session_start ();
	include_once '../config/config.php';
	header ( "content-type:text/html;charset=utf-8" );
	$pwd = md5 ( "jixinxi" . md5 ( trim ( $_POST ['pwd'] ) . "602" ) );
	$eid = $_SESSION ['eid'];
	$sql = mysql_query ( "update tb_user set pwd= '$pwd'  where id=$eid" );
	
	if ($sql) {
		echo "<script>
			alert('恭喜你,密码修改成功 ');
			window.location.href='../../user/index.php';
			</script>";
	} else {
		
		echo "<script> alert('密码修改失败？？');
		  window.location.href='../../user/index.php'; </script>";
	}
}
edit_user ();
?>