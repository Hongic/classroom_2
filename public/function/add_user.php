

<?php
// 名字不能相同 、 密码二重加密
function add_user() {
	include_once '../config/config.php';
	header ( "content-type:text/html; charset=UTF-8" );
	$reg_time = date ( "Y-m-d H:i:s" );
	$pwd = md5 ( "jixinxi" . md5 ( trim ( $_POST ['pwd'] ) . "602" ) );
	$user = trim ( $_POST ['user'] );
	$is_admin = mysql_query ( "SELECT * FROM `tb_user` where user=$user" );
	$is_admin = mysql_num_rows ( $is_admin );
	if ($is_admin == 0) {
		$sql = mysql_query ( "insert into
		  tb_user(user,pwd,power,reg_time,last_time) values('$user
		  ','$pwd','1','$reg_time','$reg_time')" );
		if ($sql) {
			echo "<script>
		  alert('恭喜你，" . $_POST ['user'] . "');
		  window.location.href='../../user/index.php'; </script>";
		} else {
			echo "<script> alert('注册失败？？');
		  window.location.href='../../user/add.php'; </script>";
		}
		// var_dump ( $user );
	} else {
		echo "<script> alert('对不起 " . $_POST ['user'] . "已经被注册');
		 window.location.href='../../user/add.php'; </script>";
	}
}
add_user ();
?>
