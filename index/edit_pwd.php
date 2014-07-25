<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>当前用户修改密码</title>
<style type="text/css">
.ta {
	margin-top: 200px;
	margin-left: 400px;
	line-height: 1.6em;
}
</style>

</head>
<body style="background-color: #cff">

<?php
include '../public/config/config.php';
@session_start ();
$user = $_SESSION ['user'];
// exit();
//$sql = mysql_query ( "select id,user from tb_user where power=0" );
$sql = mysql_query ( "select id,user from tb_user where user='$user'" );
$row = mysql_fetch_array ( $sql );

?>
<form action="edit_pwd_ok.php?eid=<?php echo $row['id'];?>" method="post">
		<div class="ta">
			<table>
				<tr>
					<td>用&nbsp;&nbsp;&nbsp;&nbsp;户：</td>
					<td><input type="text" value="<?php echo $row['user'];?>"
						disabled="disabled"></td>
				</tr>
				<tr>
					<td>新密码：</td>
					<td><input type="password" name="pwd"></td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input type="password" name="repwd"></td>
				</tr>
				<tr>

					<td colspan="2" align="center"><input type="submit" value="确认"></td>
				</tr>
			</table>

		</div>
	</form>

</body>
</html>
