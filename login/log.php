<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>登陆页面</title>
<style type="text/css">
body {
	background-color: #0099EF;
}

.login {
	background-color: #0099CC;
	margin: 200px auto;
	padding: 20px;
	width: 428px;
	height:204px;
	line-height: 2em;
	vertical-align: middle;
	background-image: url(../public/images/login.jpg);
	background-repeat: no-repeat;
}
table {
	margin-left: 180px;
	margin-top: 35px;
}
</style>
<script type="text/javascript" src="../public/js/login_form.js"></script>
<script type='text/javascript' language="JavaScript">
function reflashVerify(){
  var change=document.getElementById('ImgVerify');
  change.src="verify.php?"+Math.random();
}
</script>

</head>
<body>
	<div class="login">
		<form action="login.php" method="post" name="form"
			onsubmit="return user_form(form);">
			<table>
				<tr>
					<td>昵称：</td>
					<td><input type="text" name="user"></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="pwd"></td>
				</tr>
				<tr>
					<td>验证码：</td>
					<td><input type="text" name="verify"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><img src="verify.php" id="ImgVerify"
						alt="单击刷新" onclick="reflashVerify()"  style="font-size: 30px;"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="登 陆"
						name="submit"></td>
				</tr>
			</table>

		</form>
	</div>

</body>
</html>
