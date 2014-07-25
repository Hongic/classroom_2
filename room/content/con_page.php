<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

	<?php
	function ff_page($content, $page) {
		global $sid;
		$PageLength = 2000;
		// 每页字数
		$CLength = strlen ( $content );
		$PageCount = floor ( ($CLength / $PageLength) ) + 1;
		// 计算页数
		$PageArray = array ();
		$Seperator = array (
				"\n",
				"\r",
				"。",
				"！",
				"？",
				"； ",
				"，",
				"”",
				"’" 
		);
		// 分隔符号
		// echo "页数：".$PageCount."< br>";
		// echo "长度：".$CLength."< br>< br><br>";
		// strrpos() 函数返回字符串在 另一个字符串中第一次出现的位置
		if ($CLength < $PageLength) {
			echo $content;
		} else {
			$PageArray [0] = 0;
			$Pos = 0;
			$i = 0;
			// 第一页
			for($j = 0; $j < sizeof ( $Seperator ); $j ++) {
				// echo $Seperator[$j];
				$Pos = strrpos ( $content, $Seperator [$j], $PageArray [$i] + 1900 );
				while ( $Pos > 0 && $Pos < ($i + 1) * $PageLength && $Pos > $i * $PageLength ) {
					$PageArray [$i] = $Pos;
					$Pos = strrpos ( $Pos + $PageLength, $content, $Seperator [$j] );
				}
				if ($PageArray [$i] > 0) {
					$j = $j + sizeof ( $Seperator ) + 1;
				}
			}
			// ---
			for($i = 1; $i < $PageCount - 1; $i ++) {
				for($j = 0; $j < sizeof ( $Seperator ); $j ++) {
					// echo $Seperator[$j];
					$Pos = strrpos ( $content, $Seperator [$j], $PageArray [$i - 1] + 1900 );
					while ( $Pos > 0 && $Pos < ($i + 1) * $PageLength && $Pos > $i * $PageLength ) {
						$PageArray [$i] = $Pos;
						$Pos = strrpos ( $Pos + $PageLength, $content, $Seperator [$j] );
					}
					if ($PageArray [$i] > 0) {
						$j = $j + sizeof ( $Seperator ) + 1;
					}
				}
			}
			// --PHP长文章分页函数最后一页
			$PageArray [$PageCount - 1] = $CLength;
			// $page=2;
			if ($page == 1) {
				$output = substr ( $content, 0, $PageArray [$page - 1] + 2 );
			}
			if ($page > 1 && $page <= $PageCount) {
				$output = substr ( $content, $PageArray [$page - 2] + 2, $PageArray [$page - 1] - $PageArray [$page - 2] );
				
				$output = "(上接第" . ($page - 1) . "页）\n" . $output;
			}
			echo str_replace ( "\n", "< br>&nbsp;&nbsp;&nbsp;", $output );
			// if($page==$PageCount) //return
			$output = substr ( $content, $PageArray [$page - 2] + 2, ($PageArray [$page - 1]) - ($PageArray [$page - 2]) );
			if ($PageCount > 1) {
				echo "< br>< br>< br>< center>";
				echo "	<font color='ff0000'>" . $page . "< /font>/" . $PageCount . " 页 &nbsp;";
				if ($page > 1)
					echo "< a href=$?sid=$sid&page_t=" . ($page - 1) . ">上一页< /a> ";
				else
					echo "上一页 ";
				for($i = 1; $i <= $PageCount; $i ++) 

				{
					echo "< a
		href=$PHP_SELF?sid=$sid&page_t=" . $i . ">[" . $i . "]< /a> ";
				}
				if ($page < $PageCount)
					echo " < a
		href=$PHP_SELF?sid=$sid&page_t=" . ($page + 1) . ">下一页< /a> ";
				else
					echo " 下一页 ";
				echo "< /center>";
			}
		}
	}
	?> 

</body>
</html>
