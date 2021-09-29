<?php

function so_sanh( $a, $b ){
	if( $a > $b ){
		return 'A lớn hơn B';
	}elseif( $a < $b ){
		return 'A nhỏ hơn B';
	}else{
		return 'A bằng B';
	}
}

echo so_sanh( 5, 6 );