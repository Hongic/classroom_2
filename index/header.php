<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>顶部</title>
<style type="text/css">
.tbimg {
	background-image: url(../public/images/top.jpg);
	background-repeat: repeat-x;
	background-color: #ccc;
	height: 30px;
}

.topr {
	float: right;
	margin-left: 200px;
	margin-top: -20px;
	margin-right: 80px;
}

.topr a:LINK {
	background-color: #fff;
	text-decoration: none;
	padding: 5px;
}
</style>
</head>
<body class="tbimg">
	<div style="width: 100%;overflow: hidden;">
		<div>
			<img src="../public/images/1.gif" height="30">
		</div>
		<div class="topr">
			<a href="edit_pwd.php" target="manager"><?php @session_start();echo $_SESSION['user'];?>
		&nbsp;修改密码</a>&nbsp;&nbsp; <a href="../login/logout.php" target="_top">退出</a>&nbsp;&nbsp;
			<a href="../index.php" target="_blank"> 前台首页</a>
		</div>
	</div>
</body>
</html>
