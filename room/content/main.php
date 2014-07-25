<?php
//include_once '../../public/config/config.php';
include '../../public/function/substr_ch.php';
$sql = mysql_query ( "select * from tb_activity order by id desc limit 0 ,10" );
if ($sql) {
	while ( $row = @mysql_fetch_array ( $sql ) ) {
		?>
<div>
	<img src="../images/02.gif"> <a href=""><?php
		echo substr_ch ( $row ['title'],25, 0, 'UTF-8' );
		?>
</a>
</div>
<div style="float: right; margin-top: -20px;">【<?php echo substr($row['pubtime'],0,10);  ?>】</div>

<?php
	}
} else {
	echo "暂时没有相关的数据";
}
?>