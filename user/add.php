<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>添加用户</title>
<script type="text/javascript">
function user_form(form) {
	
	if (form.user.value == "") {
		alert("用户名不能为空！！");
		form.user.focus();
		return false;
	}
	if (form.pwd.value == "") {
		alert("密码不能为空!!");
		form.pwd.focus();
		return false;
	}
	
	if (form.repwd.value!= form.pwd.value) {
		alert("确认密码与密码不相等！！");
		form.repwd.focus();
		return false;
	}
}

</script>
<style type="text/css">
.ta {
	margin-top: 200px; margin-left : 400px;
	line-height: 1.6em;
	margin-left: 400px;
}
</style>

</head>
<body style="background-color: #cff">
<?php
// 导入数据库、权限等文件F
// include_once '../public/config/session.php';
include_once '../public/config/config.php';
include_once '../user/user.php';

?>
<div class="ta">
		<form action="../public/function/add_user.php" method="post"
			name="form" onsubmit="return user_form(form);">
			<table>
				<tr>
					<td>用&nbsp;&nbsp;户&nbsp;&nbsp;名：</td>
					<td><input type="text" name="user"></td>
				</tr>
				<tr>
					<td>密&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;码：</td>
					<td><input type="password" name="pwd"></td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input type="password" name="repwd"></td>
				</tr>
				<tr>

					<td colspan="2" align="center"><input type="submit" value="添加"></td>
				</tr>
			</table>



		</form>
	</div>
</body>
</html>
