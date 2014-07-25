<!DOCTYPE html>
<html>
<head>
<link type="text/css" href="../css/index.css" rel="stylesheet" />
<script src="js/index.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<title>河池学院计算机与信息科学系大学生科技创新实践基地</title>
</head>
<body>
        <?php
								include_once 'top.php';
								?>
        <div id="body">
		<!-- 左边的 -->
		<div id="ph_news">
			<script lang="javascript" src="../index.js" type="text/javascript"></script>
		</div>
		<div class="history">
			<div id="history_tilte">&nbsp;公告栏</div>
			<div id="content">

				<marquee behavior="scroll" onMouseOut="this.start()"
					onMouseOver="this.stop()" scrolldelay=300 scrollamount=10
					direction=up width="410" height="160">				
						<?php
						include '../../public/config/config.php';
						$sql = mysql_query ( "select * from tb_notice order by id desc" );
						$row = mysql_fetch_array ( $sql );
						echo $row ['notice'];
						?>
            </marquee>
			</div>


		</div>

		<div id="chaolink">
			<div id="history_tilte">&nbsp;链接</div>
			<div id="content">
				<a href="http://www.hcnu.edu.cn/"><img src="../images/hcxy.jpg"
					alt=""></a> <a href="http://222.218.130.75/jixinxi/"><img
					src="../images/jxx.jpg" alt=""></a>
			</div>
		</div>


		<!--    右边的    -->

		<div class="news">
			<div id="new_tilte">最新动态</div>
			<div id="content">
					<?php
					include_once '../../public/function/substr_ch.php';
					$activity_sql = mysql_query ( "select * from tb_news order by id desc limit 0 ,13" );
					while ( $row = mysql_fetch_array ( $activity_sql ) ) {
						?>
			
				<div>
					<img src="../images/02.gif"> <a
						href="news_scan.php?sid=<?php echo $row["id"]?>"><?php
						echo substr_ch ( $row ['title'], 25, 0, 'UTF-8' );
						?>
</a>
				</div>
				<div style="float: right; margin-top: -20px;">【<?php echo substr($row['pubtime'],0,10);  ?>】</div>
<?php }?>

			</div>
		</div>

		<div id="travel">
			<div id="new_tilte">活动</div>
			<div id="content">
			<?php
			include_once '../../public/function/substr_ch.php';
			$activity_sql = mysql_query ( "select * from tb_activity order by id desc limit 0 ,18" );
			while ( $row = mysql_fetch_array ( $activity_sql ) ) {
				?>
			
				<div>
					<img src="../images/02.gif"> <a
						href="activity_scan.php?sid=<?php echo $row["id"]?>"><?php
				echo substr_ch ( $row ['title'], 25, 0, 'UTF-8' );
				?>
</a>
				</div>
				<div style="float: right; margin-top: -20px;">【<?php echo substr($row['pubtime'],0,10);  ?>】</div>
<?php }?>

			</div>
		</div>

		<!--   成员的图片、超链接     -->
		<div id="photo">
			<div id="colee_left"
				style="overflow: hidden; width: 1000px; height: 300px;">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td id="colee_left1" valign="top" align="center">
							<table cellpadding="2" cellspacing="0" border="0">
								<tr align="center">
								
											<?php
											// include
											// '../../public/config/config.php';
											$mem_sql = mysql_query ( "select * from tb_member order by id desc" );
											while ( $row = mysql_fetch_array ( $mem_sql ) ) {
												?>
									<td><p>

											<img src="../<?php echo $row['picture'];?>" width="300px"
												height="300px" title="<?php echo $row['member'];?>">
										</p></td>
										<?php }?>

								</tr>
							</table>
						</td>
						<td id="colee_left2" valign="top"></td>
					</tr>
				</table>
			</div>
			<script>
                    var speed=20//速度数值越大速度越慢
                    var colee_left2=document.getElementById("colee_left2");
                    var colee_left1=document.getElementById("colee_left1");
                    var colee_left=document.getElementById("colee_left");
                    colee_left2.innerHTML=colee_left1.innerHTML
                    function Marquee4(){
                        if(colee_left.scrollLeft<=0)
                            colee_left.scrollLeft+=colee_left2.offsetWidth
                        else{
                            colee_left.scrollLeft--
                        }
                    }
                    var MyMar4=setInterval(Marquee4,speed)
                    colee_left.onmouseover=function() {clearInterval(MyMar4)}
                    colee_left.onmouseout=function() {MyMar4=setInterval(Marquee4,speed)}
                </script>
		</div>

	</div>

        <?php
								include_once 'footer.php';
								?>;
    

</body>
</html>
