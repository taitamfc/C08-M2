<?php
$list = new SplDoublyLinkedList();

//First IN First Out => Màu tím vào đầu -> Ra đầu
//LIFO: Last in First out
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

$list->push('Màu tím');//A
$list->push('Màu xanh');//B
$list->push('Màu đỏ');//C

/*
[dllist:SplDoublyLinkedList:private] => Array
    (
        [0] => Màu tím
        [1] => Màu xanh
        [1] => Màu đỏ
    )
*/

//you can delete an item from the bottom of the list by using pop
//$list->pop();

//Shifts a node from the beginning of the doubly linked list
//$list->shift();

//while an unshift inserts an object at top of the list
//$list->unshift('ABC');

//duyệt cấu trúc
$arr = [];
for( $list->rewind(); $list->valid(); $list->next() ){
	$arr[] = $list->current();
}

echo '<pre>';
print_r($arr);
die();