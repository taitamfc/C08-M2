<?php
	$xhtml 	= file_get_contents('https://vnexpress.net/rss/suc-khoe.rss');
	$arr 	= simplexml_load_string($xhtml);

	echo '<pre>';
	print_r($arr);
	echo '</pre>';