<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>活动</title>
<link type="text/css" href="../public/css/table.css" rel="stylesheet">
</head>
<body>
	<h3>当前行为：活动 >> 浏览</h3>
	<br color="blue">
	<table>
		<tr>
			<th class="centh">ID</th>
			<th class="centh">留言者</th>
			<th class="centh">留言</th>
			<th class="centh">留言时间</th>
			<th class="centh">回复者</th>
			<th class="centh">回言</th>
			<th class="centh">回复时间</th>
			<th class="centh">操作</th>
		</tr>
<?php
// include_once '../public/config/session.php';
include_once '../public/config/config.php';

// 引入分页类文件
include_once '../public/config/page.class.php';

$pageSize = 8; // 每页显示的记录数
$total = mysql_num_rows ( mysql_query ( "SELECT * FROM `tb_guestbook`" ) ); // 查询总记录！
pageft ( $total, $pageSize, 1, 1, 1, 9, 20, 1 );

// 参数一 总数
// 参数二 每页数量
// 参数三 开启与关闭数字分页 0关闭 1开启
// 参数四 开启总记录及当前页信息 1-20/100000 记录1/5000 页 0关闭 1开启
// 参数五 下拉选择框开关 0关闭 1开启
// 参数六 数字每页中间显示数量 最好为奇数 并且需开启参数三
// 参数七 下拉选择框中显示数量 需要开启参数五
// 参数八 跳转框开关 0关闭 1开启

$sql = "SELECT * FROM `tb_guestbook` order by `id` desc limit $firstcount,$pageSize";

$sql = mysql_query ( $sql );

// $sql = mysql_query ( "select * from tb_guestbook" );
while ( $row = @mysql_fetch_array ( $sql ) ) {
	?>
		<tr>
			<td class="center" style="width: 10px;"><?php echo $row['id']; ?></td>
			<td class="center" style="width: 100px;"><?php echo $row['guest']; ?></td>

			<td class="center" style="width: 300px;"
				style="text-align: left; padding-left: 3px;"><?php echo $row['gintro']; ?></td>
			<td class="center" style="width: 100px;"><?php echo $row['pubtime']; ?></td>

			<td class="center" style="width: 100px;"><?php echo $row['rely']; ?></td>

			<td class="center" style="width: 300px;"
				style="text-align: left; padding-left: 3px;"><?php echo $row['rintro']; ?></td>
			<td class="center" style="width: 100px;"><?php echo $row['relytime']; ?></td>

			<td class="center" style="width: 90px;">
			<?php
	
	if (empty ( $row ['rintro'] )) {
		?>
			<a href="rely.php?rid='<?php echo $row['id']?>'">回复</a> 
			<?php }else { echo "已回";}?>
			 <a href="delete.php?did='<?php echo $row['id']?>'">删除</a>
			</td>
		</tr>

<?php
}
?>
</table>


	<center style="padding: 6px;">
			<?php echo $pagenav;?>
		</center>


</body>
</html>
