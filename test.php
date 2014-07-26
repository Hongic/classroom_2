<?php

echo md5 ( "jixinxi" . md5 ( "admin" ) . "602" );
echo "<br>";
echo date ( "Y-m-d H:i:s" );
echo "<br>";
echo date_default_timezone_set('PRC')."<br>"; //设置中国时区
echo date('Y-m-d H:i:s')."<br>";//中国标准时间

?>