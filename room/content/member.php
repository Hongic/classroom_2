<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>成员</title>
<?php include 'link.php';?>
</head>
<body>

	<!-- 头部 -->
	<?php include 'top.php';  ?>
	<!--  成员展示    -->

	<div id="member">
         <?php
									include '../../public/config/config.php';
									
									$Page_size = 9; // 每页条数
									
									$result = mysql_query ( 'select * from tb_member' );
									$count = @mysql_num_rows ( $result );
									$page_count = ceil ( $count / $Page_size );
									
									$init = 1;
									$page_len = 5; // 显示页数数字长度
									$max_p = $page_count;
									$pages = $page_count;
									
									// 判断当前页码
									if (empty ( $_GET ['page'] ) || $_GET ['page'] < 0) {
										$page = 1;
									} else {
										$page = $_GET ['page'];
									}
									
									$offset = $Page_size * ($page - 1); // 起始页
									
									$sql = mysql_query ( "select * from tb_member order by id desc limit $offset,$Page_size" );
									if ($sql) {
										while ( $row = mysql_fetch_array ( $sql ) ) {
											
											?>
										
		<div class="imgteaser">
			<a href=#> <img src="../<?php echo $row['picture'];?>" class="mm_img"> <span
				class="more"><?php echo $row['direction'];?></span> <span class="mem_img"> <strong> <img
						alt="" src="../images/10.gif"
						style="border: 0px; width: 23px; height: 20px;"><?php echo $row['member'];?></strong>
			年级：<?php echo $row['grade'];?><br>
			方向：<?php echo $row['direction'];?><br>
			简介：<?php echo $row['intro'];?><br>
			</span>
			</a>
		</div>
											
											<?php
										}
										?>
										</div>
										<?php
										
										$page_len = ($page_len % 2) ? $page_len : $pagelen + 1; // 页码个数
										$pageoffset = ($page_len - 1) / 2; // 页码个数左右偏移量
										
										$key = '<div class="page">';
										$key .= "<span>共 $page / $pages 页</span>&nbsp;"; // 第几页,共几页
										if ($page != 1) {
											$key .= "<a href=\"" . $_SERVER ['PHP_SELF'] . "?page=1\">第一页</a> "; // 第一页
											$key .= "<a href=\"" . $_SERVER ['PHP_SELF'] . "?page=" . ($page - 1) . "\">上一页</a>"; // 上一页
										} else {
											$key .= "第一页 "; // 第一页
											$key .= "上一页"; // 上一页
										}
										
										if ($pages > $page_len) {
											// 如果当前页小于等于左偏移
											if ($page <= $pageoffset) {
												$init = 1;
												$max_p = $page_len;
											} else { // 如果当前页大于左偏移
											         // 如果当前页码右偏移超出最大分页数
												if ($page + $pageoffset >= $pages + 1) {
													$init = $pages - $page_len + 1;
												} else {
													// 左右偏移都存在时的计算
													$init = $page - $pageoffset;
													$max_p = $page + $pageoffset;
												}
											}
										}
										for($i = $init; $i <= $max_p; $i ++) {
											if ($i == $page) {
												$key .= ' <span>' . $i . '</span>';
											} else {
												$key .= " <a href=\"" . $_SERVER ['PHP_SELF'] . "?page=" . $i . "\">" . $i . "</a>";
											}
										}
										
										if ($page != $pages) {
											$key .= " <a href=\"" . $_SERVER ['PHP_SELF'] . "?page=" . ($page + 1) . "\">下一页</a> "; // 下一页
											$key .= "<a href=\"" . $_SERVER ['PHP_SELF'] . "?page={$pages}\">最后一页</a>"; // 最后一页
										} else {
											$key .= " 下一页 "; // 下一页
											$key .= " 最后一页"; // 最后一页
										}
										
										echo "<center>" . $key .= '</div>' . "</center>";
									} else {
										
										echo "暂时没有相关的信息";
									}
									
									?>
									</div>






	<!-- 底部  -->
	<?php include 'footer.php';  ?>
</body>
</html>