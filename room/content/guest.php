<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>留言</title>
<?php include 'link.php';?>

</head>
<body>

	<!-- 头部 -->
	<?php include 'top.php';  ?>
	<div id="content">
		<!-- 留言板分左：留言  右：回复 -->
		<table>
	<?php
	include '../../public/config/config.php ';
	
	// 引入分页类文件
	include_once '../../public/config/page.class.php';
	
	$pageSize = 5; // 每页显示的记录数
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
	if ($sql) {
		while ( $row = @mysql_fetch_array ( $sql ) ) {
			?>
			<tr>
				<td class="r" style="vertical-align: top;">留言者：</td>
				<td class="l" style="vertical-align: top;"><?php echo $row['guest'];?></td>
				<td class="r" style="vertical-align: top;">回复者：</td>
				<td class="l" style="vertical-align: top;"><?php
			if (empty ( $row ['rely'] )) {
				echo "<font style='color:red;'>请耐心等待回复···</font>";
			} else {
				echo $row ['rely'];
			}
			?></td>
			</tr>
			<tr>
				<td class="r" style="vertical-align: top;">留言：</td>
				<td class="l" style="vertical-align: top;"><?php echo $row['gintro'];?></td>
				<td class="r" style="vertical-align: top;">回复：</td>
				<td class="l" style="vertical-align: top;"><?php echo $row['rintro'];?></td>
			</tr>
			<tr>
				<td class="r" style="vertical-align: top;">时间：</td>
				<td class="l" style="vertical-align: top;"><?php echo $row['pubtime'];?></td>
				<td class="r" style="vertical-align: top;">时间：</td>
				<td class="l" style="vertical-align: top;"><?php echo $row['relytime'];?></td>
			</tr>
			<tr>
				<td colspan="4"><hr></td>
			</tr>
		

<?php
		}
	} else {
		echo "<h2 style='color:red;'>没有任何留言信息！</h2>";
	}
	
	?>
	
		</table>

		<center style="padding: 6px;">
			<?php echo $pagenav;?>
		</center>



		<center>
			<div>
				<h3>
					<img src="../images/04.gif">欢迎您给我们留言
				</h3>
				<form action="guest_ok.php" method="post" name="form"
					onsubmit="return checkform(form);">
					<table>
						<tr>
							<td>昵称：</td>
							<td align="left"><input type="text" name="guest" /></td>
						</tr>
						<tr>
							<td>留言：</td>
							<td><script charset="utf-8"
									src="../../public/kindeditor/kindeditor.js"></script> <script>
    var editor;
    KindEditor.ready(function(K) {
    	   editor = K.create('#editor_id');
        });
</script> <textarea id="editor_id" name="gintro"
									style="width: 700px; height: 360px;" class="in">
	
</textarea></td>
						</tr>
						<tr>
							<td align="center" colspan="2"><input type="submit" value="留言" /></td>
						</tr>
					</table>
				</form>
			</div>
		</center>
	</div>

	<!-- 底部  -->
	<?php include 'footer.php';  ?>


</body>
</html>