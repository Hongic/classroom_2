<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>活动</title>
<link type="text/css" href="../public/css/table0.css" rel="stylesheet">
</head>
<body>
	<h3>当前行为：公告 >> 浏览</h3>
	<br color="blue">
	<table style="text-align: left;font-size: 16px;">
<?php
// include_once '../public/config/session.php';
include_once '../public/config/config.php';

// 引入分页类文件
include_once '../public/config/page.class.php';

$pageSize = 8; // 每页显示的记录数
$total = mysql_num_rows ( mysql_query ( "SELECT * FROM `tb_notice`" ) ); // 查询总记录！
pageft ( $total, $pageSize, 1, 1, 1, 9, 20, 1 );

// 参数一 总数
// 参数二 每页数量
// 参数三 开启与关闭数字分页 0关闭 1开启
// 参数四 开启总记录及当前页信息 1-20/100000 记录1/5000 页 0关闭 1开启
// 参数五 下拉选择框开关 0关闭 1开启
// 参数六 数字每页中间显示数量 最好为奇数 并且需开启参数三
// 参数七 下拉选择框中显示数量 需要开启参数五
// 参数八 跳转框开关 0关闭 1开启

$sql = "SELECT * FROM `tb_notice` order by `id` desc limit 0,1";

$sql = mysql_query ( $sql );
while ( $row = @mysql_fetch_array ( $sql ) ) {
	?>
		<tr>
			<td>ID：</td>
			<td><?php echo $row['id']; ?></td>
		</tr>
		<tr>
			<td>时间：</td>
			<td><?php echo $row['pubtime']; ?></td>
		</tr>
		<tr>
			<td>公告：</td>
			<td style="text-align: left; padding-left: 3px;"><?=$row['notice']; ?></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><a
				href="edit.php?eid='<?php echo $row['id']?>'">编辑</a> <a
				href="delete.php?did='<?php echo $row['id']?>'">删除</a></td>
		</tr>

<?php
}
?>
	</table>

</body>
</html>
