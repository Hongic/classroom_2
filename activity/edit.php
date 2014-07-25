<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>编辑活动</title>
<link type="text/css" rel="stylesheet" href="../public/css/activity.css">
<script type="text/javascript" src="../public/js/activity.js"></script>
</head>
<body>

<?php
include_once '../public/config/config.php';
$eid = $_GET ['eid'] ? $_GET ['eid'] : "";
$sql = mysql_query ( "select * from tb_activity where id =$eid" );
$row = mysql_fetch_array ( $sql );
?>

<form action="edit_ok.php?eid='<?php echo $row['id']?>'" method="post"
		name="form" onsubmit="return check_form(form)"
		enctype="multipart/form-data">
		<table>
			<tr>
				<td class="r">标题：</td>
				<td><input type="text" name="title" class="in"
					value="<?php echo $row['title'];?>"></td>
			</tr>


			<tr>
				<td class="r" valign="top">简介：</td>
				<td><script charset="utf-8" src="../public/kindeditor/kindeditor.js"></script>
					<script>
    var editor;
    KindEditor.ready(function(K) {
    	   editor = K.create('#editor_id');
        });
</script> <textarea id="editor_id" name="intro"
						style="width: 700px; height: 360px;" class="in">
	<?php echo $row['intro'];?>
</textarea></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" value="添 加"></td>
			</tr>
		</table>
	</form>

</body>
</html>
