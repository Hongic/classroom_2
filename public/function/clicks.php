<?php

/*
 * 调用一次该函数，点击量就增加一次。
 *  主要的思路是：session_name 与 传过来的 id 比较相等
 */
function clicks($tb_name, $cid) {
	// include_once '../../public/config/config.php';
	session_start ();
	$sid = $cid;
	isset ( $_SESSION ['sec' . $sid] ) ? $_SESSION ['sec' . $sid] : "";
	
	if (@$_SESSION ['sec' . $sid] != $cid) {
		$_SESSION ['sec' . $sid] = $cid;
		// var_dump ( $_SESSION ['sec' . $sid] );
		$clicks_sql = mysql_query ( "update $tb_name set clicks=clicks+1 where id
	  = '$cid'" );
	}
}

?>