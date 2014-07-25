<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>详细的信息</title>
<?php include 'link.php'; ?>
</head>
<body>


	<!-- 头部 -->
	<?php include 'top.php';  ?>
	<!--  活动列表    -->
	<div id="activity">
		<div style="min-height: 330px;">
<?php
include '../../public/config/config.php';
include_once '../../public/function/substr_ch.php';
include '../../public/function/clicks.php';
$sid = $_GET ['sid'];
$tb_name = "tb_activity";
clicks ( $tb_name, $sid );

$sql = mysql_query ( "select * from tb_activity where id = $sid" );
$row = @mysql_fetch_array ( $sql );
if ($sql) {
	
	?>
	<center>
				<h2><?php echo $row['title']?></h2>
			发布人：<?php echo $row['author'];?> &nbsp;
			发布时间：<?php echo $row['pubtime'];?> &nbsp;
			点击量：<?php echo $row['clicks'];?>  &nbsp;
		</center>
			<br>
<?php
	
	include 'con_page.php';
	$content1 = $row ['intro'];
	$current = @ $_REQUEST ['page_t'];
	$result = ff_page ( $content1, $current );
	
	echo $result;
	?>
	
	<?php
} else {
	
	echo "<script>alert('不能查看该标题的详细信息');window,locaton.href='activity.php';</script>";
}
?>

</div>

		<div style="position: relative; bottom: 0px; left: 0px;">
			<span style="float: left;">
<?php
$left = mysql_query ( "select * from tb_activity where id> $sid order by id asc limit 0,1" );
$left_row = @mysql_fetch_array ( $left );
?>
<?php

if (! empty ( $left_row ['id'] )) {
	?>
上一篇：<a href="activity_scan.php?sid=<?php echo $left_row['id'];?>"
				title="<?=$left_row['title']?>">
<?php echo substr_ch ($left_row['title'], 15, 0, 'UTF-8' ); ?></a>
<?php
} else {
	echo "已经没有了！";
}
?>
</span> <span style="float: right;">
<?php
$right = mysql_query ( "select * from tb_activity where id < $sid order by id desc limit 0,1" );
$right_row = @mysql_fetch_array ( $right );

?>
<?php

if (! empty ( $right_row ['id'] )) {
	?>
下一篇：<a href="activity_scan.php?sid=<?php echo $right_row['id'];?>"
				title="<?=$right_row['title']?>">
<?php echo substr_ch ( $right_row['title'], 15, 0, 'UTF-8' );?></a>
<?php
} else {
	echo "已经没有了！";
}
?>
</span>

		</div>
	</div>

	<!-- 底部  -->
	<?php include 'footer.php';  ?>



</body>
</html>
