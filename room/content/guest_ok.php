<?php
include '../../public/config/config.php';
$pubtime = date ( "Y-m-d H:i:s" );
$gintro = @trim ( $_POST ['gintro'] );

if (empty ( $gintro )) {
	echo "<script>alert('留言不能为空');window.location.href='guest.php';</script>";
	exit ();
}
$sql = mysql_query ( "insert into tb_guestbook(guest,gintro,pubtime)
  values('" . $_POST ['guest'] . "','" . $_POST ['gintro'] . "','$pubtime')" );
if ($sql) {
	//var_dump ( $sql );
	echo "<script>alert('" . $_POST ['guest'] . ",您的留言已成功！');window.location.href='guest.php';</script>";
} else {
	echo "<script>alert('留言失败');window.location.href='guest.php';</script>";
}

?>