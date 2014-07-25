
<?php
function download($url, $filename) {
	// 获得文件大小, 防止超过2G的文件, 用sprintf来读
	$filesize = sprintf ( "%u", filesize ( $url ) );
	if (! $filesize) {
		return;
	}
	header ( "Content-type:application/octet-stream\n" );
	// application/octet-stream header ( "Content-type:unknown/unknown;" );
	header ( "Content-disposition: attachment; filename=\"" . $filename . "\"" );
	header ( 'Content-transfer-encoding: binary' );
	if ($range = getenv ( 'HTTP_RANGE' )) {
		// 当有偏移量的时候，采用206的断点续传头
		$range = explode ( '=', $range );
		$range = $range [1];
		header ( "HTTP/1.1 206 Partial
Content" );
		header ( "Date: " . gmdate ( "D, d M Y H:i:s" ) . " GMT" );
		header ( "Last-Modified: " . gmdate ( "D, d M Y H:i:s", filemtime ( $url ) ) . " GMT" );
		header ( "Accept-Ranges: bytes" );
		header ( "Content-Length:" . ($filesize - $range) );
		header ( "Content-Range:
bytes " . $range . ($filesize - 1) . "/" . $filesize );
		header ( "Connection: close" . "\n\n" );
	} else {
		header ( "Content-Length:" . $filesize . "\n\n" );
		$range = 0;
	}
	loadFile ( $url );
}
function loadFile($filename, $retbytes = true) {
	$buffer = '';
	$cnt = 0;
	$handle = fopen ( $filename, 'rb' );
	if ($handle === false) {
		return false;
	}
	while ( ! feof ( $handle ) ) {
		$buffer = fread ( $handle, 1024 * 1024 );
		echo $buffer;
		ob_flush ();
		flush ();
		if ($retbytes) {
			$cnt += strlen ( $buffer );
		}
	}
	$status = fclose ( $handle );
	if ($retbytes && $status) {
		return $cnt; // return num. bytes delivered like readfile() does.
	}
	return $status;
}
?>