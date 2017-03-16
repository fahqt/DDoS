<?php
	$fd = fopen("requests.txt", "a+");
	$request_info = $_SERVER["SERVER_ADDR"];
	fputs($fd,$request_info);
	fputs($fd,"\n");
	fclose($fd);
?>