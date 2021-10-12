<?php
	// $list = new SplDoublyLinkedList();
	// $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
	

	$list = new SplQueue();
	$list->enqueue('Xanh');//1
	$list->enqueue('Đỏ');//2
	$list->enqueue('Tím');//3
	
	//duyệt cấu trúc
	/*
	$arr = [];
	$list->rewind();
	while ( $list->valid() ) {
		$arr[] = $list->current();
		$list->next();
	}
	*/

	//duyệt cấu trúc
	$arr = [];
	for( $list->rewind(); $list->valid(); $list->next() ){
		$arr[] = $list->current();
	}
?>
<script type="text/javascript">
	function num(x,y){
		x += y;
		y += x;
		return (x-y);
	}
	console.log(num(5,6));
</script>