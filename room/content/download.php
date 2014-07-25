<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>下载</title>
<?php include 'link.php';?>
</head>
<body>

	<!-- 头部 -->
	<?php include 'top.php';  ?>
    <div id="down">
		
		<?php
		include_once '../../public/function/substr_ch.php';
		include '../../public/config/config.php';
		// 引入分页类文件
		include_once '../../public/config/page.class.php';
		
		$pageSize = 20; // 每页显示的记录数
		$total = mysql_num_rows ( mysql_query ( "SELECT * FROM `tb_download`" ) ); // 查询总记录！
		pageft ( $total, $pageSize, 1, 1, 1, 9, 20, 1 );
		
		// 参数一 总数
		// 参数二 每页数量
		// 参数三 开启与关闭数字分页 0关闭 1开启
		// 参数四 开启总记录及当前页信息 1-20/100000 记录1/5000 页 0关闭 1开启
		// 参数五 下拉选择框开关 0关闭 1开启
		// 参数六 数字每页中间显示数量 最好为奇数 并且需开启参数三
		// 参数七 下拉选择框中显示数量 需要开启参数五
		// 参数八 跳转框开关 0关闭 1开启
		
		$sql = "SELECT * FROM `tb_download` order by `id` desc limit $firstcount,$pageSize";
		
		$sql = mysql_query ( $sql );
		
		if (empty ( $sql )) {
			echo "<h2 style='color: red; text-align: center;'>暂时没有下载的数据</h2>
		";
		} else {
			while ( $row = @mysql_fetch_array ( $sql ) ) {
				?>
		
			<div style="float: right:">
			<a href="downing.php?did='<?php echo $row['id']?>'"><img
				src="../images/07.gif" style="border: 0px;"> </a>
		</div>
		<div
			style="float: left; margin-top: -29px; margin-left: 108px; position: absolute;">
		<?php echo substr_ch ( $row['title'], 46, 0, 'UTF-8' );?>
		</div>
		<div style="float: right; margin-top: -29px; padding-right: 10px;">
				<?echo substr($row['pubtime'],0,10);?>
				</div>
		
<?php
			}
		}
		?>
		<div style="padding: 6px; text-align: center; padding-bottom : 0px; border: 1px;">
			
			<?php echo $pagenav;?>
		
		</div>
	</div>

	<!-- 底部  -->
	<?php include 'footer.php';  ?>


</body>
</html>
