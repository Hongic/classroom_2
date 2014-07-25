<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style type="text/css">
.table {
	border: 1px #369 solid;
	font-size: 20px;
	margin-left: 50px
}

.tdr {
	text-align: right;
	border-bottom: 1px #ccc solid;
	border-left: 1px #ccc solid;
	padding: 15px;
}

.tdl {
	text-align: left;
	border-bottom: 1px #ccc solid;
	border-left: 1px #ccc solid;
	padding-left: 10px;
	padding-right: 10px;
}
</style>
</head>
<body>
<?php include '../public/config/config.php';?>
	
	<table class="table">
		<tr>
			<td colspan="2" style='text-align: center' class="tdr">信息相关信息</td>
		</tr>
		<tr>
			<td class="tdr">服务器操作系统：</td>
			<td class="tdl"><?php echo PHP_OS;   ?></td>
		</tr>
		<tr>
			<td class="tdr">服务器主机名：</td>
			<td class="tdl"><?php echo $_SERVER['SERVER_NAME'];   ?></td>
		</tr>
		<tr>
			<td class="tdr">服务器主机IP：</td>
			<td class="tdl"><?php echo $_SERVER['SERVER_ADDR'];   ?></td>
		</tr>
		<tr>
			<td class="tdr">Web服务器端口：</td>
			<td class="tdl"><?php echo $_SERVER['SERVER_PORT'];   ?></td>
		</tr>
		<tr>
			<td class="tdr">Web服务器：</td>
			<td class="tdl"><?php echo $_SERVER['SERVER_SOFTWARE'];   ?></td>
		</tr>
		<tr>
			<td class="tdr">PHP版本：</td>
			<td class="tdl"><?php echo PHP_VERSION;   ?></td>
		</tr>
		<tr>
			<td class="tdr">MYSQL版本：</td>
			<td class="tdl"><?php echo mysql_get_server_info();   ?></td>
		</tr>
		<tr>
			<td class="tdr">字符集：</td>
			<td class="tdl"><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];   ?></td>
		</tr>

	</table>

</body>
</html>
