<?php
/* 连接数据库db_classroom */
header ( "Content-Type:text/html;charset=UTF-8" );
class DB {
	private $db_user;
	private $db_pwd;
	private $db_name;
	public function sql() {
		$db_user = "hong"; // 用户名
		
		$db_pwd = "1877888666"; // 数据库密码
		
		$db_name = "db_classroom"; // 数据库名
		$conn = mysql_connect ( "localhost", $db_user, $db_pwd );
		if ($conn == false) {
			die ( "不能连接数据库" . mysql_error () );
		} else {
			mysql_select_db ( $db_name ) or die ( "没有这个数据库" . mysql_error () );
			mysql_query ( "set names UTF8" );
		}
	}
}
$sql = new DB ();
$sql->sql ();

?>

