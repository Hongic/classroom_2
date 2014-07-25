<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>下载文件的连接</title>
</head>
<body>

<?php
function download() {
	include_once '../../public/config/config.php';
	$did = $_GET ['did'];
	// var_dump ( $did );
	$sql = mysql_query ( "select * from tb_download where id =$did" );
	$row = mysql_fetch_array ( $sql );
	$download = "../" . $row ['download'];
	$file_name = substr ( $download, strripos ( $download, "/" )+1 );
	// var_dump ( $file_name );
	if (! file_exists ( $download )) { // 检查文件是否存在
		echo "<script>alert('没有这个文件！');window.location,href='download.php';</script>";
		exit ();
	} else {
		$file = fopen ( $download, "r" ); // 打开文件
		                                  // 输入文件标签
		header ( 'Content-Encoding: none' );
		header ( "Content-type: application/octet-stream" );
		header ( "Accept-Ranges: bytes" );
		header ( "Accept-Length: " . filesize ( $download ) );
		// header ( 'Content-Transfer-Encoding: binary' );
		header ( "Content-Disposition: attachment; filename=" . $file_name ); // 以真实文件名提供给浏览器下载
		//header ( 'Pragma: no-cache' );
		//header ( 'Expires: 0' );
		// 输出文件内容
		echo fread ( $file, filesize ( $download ) );
		fclose ( $file );
		exit ();
	}
}
download ();
?>

</body>
</html>
