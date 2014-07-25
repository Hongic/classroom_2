<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>活动详细信息</title>
</head>
<body>

<?php
include_once '../public/config/config.php';
$sid = $_GET ['sid'] ? $_GET ['sid'] : "";
$sql = mysql_query ( "select * from tb_news where id =$sid" );
if ($sql) {
	$row = @mysql_fetch_array ( $sql );
	?>
	<table>
		<tr>

			<td
				style="padding: 10px; vertical-align: top; font-size: 18px; line-height: 1.6em;">
				标题：<?php echo $row['title'];?><br> 
			时间：<?php echo $row['pubtime'];?><br>
				内容：<?php echo $row['content'];?><br>
			</td>
		</tr>
	</table>
		
	<?php
} else {
	
	echo "对不起，没有你要的相关的数据信息";
}

?>





</body>
</html>
