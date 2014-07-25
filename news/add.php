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
		onsubmit="check(this);" enctype="multipart/form-data">
		<table>
			<tr>
				<td class="r" width="100px">标题：</td>
				<td width="700px"><input type="text" name="title" class="in"></td>
			</tr>

			<tr>
				<td class="r" valign="top" width="100px">内容：</td>
				<td><script charset="utf-8" src="../public/kindeditor/kindeditor.js"></script>
					<script>
    var editor;
    KindEditor.ready(function(K) {
    	   editor = K.create('#editor_id');
        });
</script> <textarea id="editor_id" name="content"
						style="width: 700px; height: 360px;">
</textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="添 加"></td>
			</tr>

		</table>
	</form>

</body>
</html>

