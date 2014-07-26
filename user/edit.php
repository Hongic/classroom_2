<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>用户信息修改</title>

<script type="text/javascript">
function user_form(form) {
	
	if (form.pwd.value == "") {
		alert("新密码不能为空!!");
		form.pwd.focus();
		return false;
	}
	
	if (form.repwd.value!= form.pwd.value) {
		alert("确认密码与新密码不相等！！");
		form.repwd.focus();
		return false;
	}
}

</script>

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
// 用户信息修改
include_once 'user.php';
 //session_start ();
$_SESSION ['eid'] = $_GET ['eid'];
$eid = $_GET ['eid'];
$sql = mysql_query ( "select * from tb_user where id = $eid" );
$row = mysql_fetch_array ( $sql );

?>
<div class="ta">
		<form action="../public/function/edit_user.php" method="post"
			name="form" onsubmit="return user_form(form);">
			<table>
				<tr>
					<td>旧密码：</td>
					<td><input type="text" value="<?=$row['pwd']?>" disabled="disabled"></td>
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
					<td colspan="2" align="center"><input type="submit" value="修改"></td>
				</tr>

			</table>


		</form>
	</div>
</body>
</html>
