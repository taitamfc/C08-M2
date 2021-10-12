<?php
	// $list = new SplDoublyLinkedList();
	// $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

	$list = new SplStack();
	$list->push('Xanh');//1
	$list->push('Đỏ');//2
	$list->push('Tím');//3

	//duyệt cấu trúc
	$arr = [];
	for( $list->rewind(); $list->valid(); $list->next() ){
		$arr[] = $list->current();
	}

	echo '<pre>';
	print_r($arr);
	die();