<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>回复留言</title>
<link type="text/css" rel="stylesheet" href="../public/css/download.css">
<link type="text/css" rel="stylesheet" href="../public/css/table.css">
<script type="text/javascript" src="../public/js/download.js"></script>
<link type="text/css" rel="stylesheet" href="../public/css/member.css">
<script type="text/javascript" src="../public/js/member.js"></script>
</head>
<body>

<?php
include_once '../public/config/config.php';
$rid = $_GET ['rid'] ? $_GET ['rid'] : "";
$sql = mysql_query ( "select * from tb_guestbook where id =$rid" );
$row = mysql_fetch_array ( $sql );
?>

<form action="rely_ok.php?rid='<?php echo $row['id']?>'" method="post"
		name="form" onsubmit="return check_form(form)"
		enctype="multipart/form-data">
		<table>
			<tr>
				<td class="r">留言者：</td>
				<td><?php echo $row['guest'];?></td>
			</tr>
			<tr>
				<td class="r">留言：</td>
				<td><?php echo $row['gintro'];?></td>
			</tr>

			<tr>
				<td class="r">留言时间：</td>
				<td><?php echo $row['pubtime'];?></td>
			
			
			<tr>
			
			
			<tr>
				<td class="r">回复：</td>
				<td><script charset="utf-8" src="../public/kindeditor/kindeditor.js"></script>
					<script>
    var editor;
    KindEditor.ready(function(K) {
    	   editor = K.create('#editor_id');
        });
</script> <textarea id="editor_id" name="rintro"
						style="width: 700px; height: 360px;" class="in">
	<?=$row['rintro'];?>
</textarea></td>
			</tr>
			<td colspan="2" align="center"><input type="submit" value="回复"></td>
			</tr>
		</table>
	</form>

</body>
</html>
