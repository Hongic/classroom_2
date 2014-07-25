<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>成果展示</title>
<link type="text/css" rel="stylesheet" href="../public/css/member.css">
<script type="text/javascript" src="../public/js/member.js"></script>
<script type="text/javascript" src="../public/js/check_form.js"></script>

</head>
<body>
	<form action="add_ok.php" method="post" name="form"
		onsubmit="return check(this);" enctype="multipart/form-data">
		<table>
			<tr>
				<td class="r">标题：</td>
				<td><input type="text" name="title" class="in"></td>
			</tr>
			<tr>
				<td class="r">图片：</td>
				<td><input type="file" name="file" class="in"></td>
			</tr>

			<tr>
				<td class="r" valign="top">简介：</td>
				<td><?php include_once '../public/kind.php'; ?></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" value="添 加"></td>
			</tr>

		</table>
	</form>

</body>
</html>

