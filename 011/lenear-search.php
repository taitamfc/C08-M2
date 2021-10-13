<?php
	$findForMe = 3;
	$arr = [1,4,3,56,78,9,3,9,4,7];
	$arr = [1,3,56,78,9,3,9,7];

	$found = null;
	for( $i = 0; $i < count($arr); $i++ ){
		if( $arr[$i] == $findForMe ){
			$found = $i;
			break;
		}
	}

	echo 'The position of element at : '.$found;