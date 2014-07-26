<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>查看用户</title>
<style type="text/css">
table {
	width: 1100px;
	height: auto;
	border: 0px #ccc solid;
}

.center {
	text-align: center;
	vertical-align: middle;
	border-bottom: 1px #ccc solid;
	border-right: 1px #000 solid;
	padding: 6px 0px;
}

.centh {
	text-align: center;
	vertical-align: middle;
	border-bottom: 1px #ccc solid;
	border-right: 1px #000 solid;
	font-size: 20px;
	padding: 6px;
	background-color: #369;
}
</style>
</head>
<body>
<?php
// 导入数据库、权限等文件F
// include_once '../public/config/session.php';

include_once '../public/config/config.php';
include_once '../user/user.php';

?>
	<h3>当前行为：用户管理 >> 浏览用户</h3>
	<br color="blue">
	<table>
		<tr>
			<th class="centh">ID</th>
			<th class="centh">用户名</th>
			<th class="centh">密码</th>
			<th class="centh">权限</th>
			<th class="centh">注册时间</th>
			<th class="centh">最近登录</th>
			<th class="centh">操作</th>
		</tr>
<?php

// 查询 tb_user
//$sql = mysql_query ( "select * from tb_user" );

// 引入分页类文件
include_once '../public/config/page.class.php';

$pageSize = 12; // 每页显示的记录数
$total = mysql_num_rows ( mysql_query ( "SELECT * FROM `tb_user`" ) ); // 查询总记录！
pageft ( $total, $pageSize, 1, 1, 1, 9, 20, 1 );

// 参数一 总数
// 参数二 每页数量
// 参数三 开启与关闭数字分页 0关闭 1开启
// 参数四 开启总记录及当前页信息 1-20/100000 记录1/5000 页 0关闭 1开启
// 参数五 下拉选择框开关 0关闭 1开启
// 参数六 数字每页中间显示数量 最好为奇数 并且需开启参数三
// 参数七 下拉选择框中显示数量 需要开启参数五
// 参数八 跳转框开关 0关闭 1开启

$sql = "SELECT * FROM `tb_user` order by `id` desc limit $firstcount,$pageSize";

$sql = mysql_query ( $sql );

while ( $row = @mysql_fetch_array ( $sql ) ) {
	?>
	<tr>
			<td class="center"><?php echo $row['id']; ?></td>
			<td class="center"><?php echo $row['user']; ?></td>
			<td class="center"><?php echo $row['pwd']; ?></td>

			<td class="center"><?php echo $row['power']; ?></td>

			<td class="center"><?php echo $row['reg_time']; ?></td>

			<td class="center"><?php echo $row['last_time']; ?></td>
			<td class="center"><a href="edit.php?eid='<?php echo $row['id']?>'">编辑</a> <a
				href="del.php?id='<?php echo $row['id']?>'">删除</a></td>
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
