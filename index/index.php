<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理页面</title>
<?php
@session_start ();
if (! isset ( $_SESSION ['user'] )) {
	echo "<script>
			alert('非法操作ON');
			window.location.href='../login/log.php';
			</script>";
}

?>



<frameset rows="65,*" frameborder="1">
	<frame noresize="noresize" src="header.php" name="header"
		scrolling="auto">



	<frameset cols="170,*">
		<frame noresize="noresize" src="side.php" name="side" scrolling="auto">
		<frame noresize="noresize" src="manager.php" name="manager"
			scrolling="auto">
	</frameset>

</frameset>
</head>
<body>
	<noframes>您的浏览器不支持frameset框架
	</noframes>
</body>
</body>

</html>
