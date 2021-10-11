<?php
class MyQueue {
	private $data 	= [];
	private $limit 	= 0;

	public function __construct($ts_limit){
		$this->limit = $ts_limit;
	}
	//thêm (hay lưu trữ) một phần tử vào trong hàng đợi
	public function enqueue($element){
		/*
			Xanh lá cây
			Xanh biển
			Tím
			Nâu
		*/
		//$this->data[] = $element;
		array_push($this->data, $element);

	}

	//xóa một phần tử từ hàng đợi
	public function dequeue(){
		/*
			Xanh lá cây -> Xoa
			Xanh biển -> Xoa
			Tím -> Xoa
			Nâu
		*/
		if( !$this->isEmpty() ){
			array_shift($this->data);	
		}else{
			die('Queue is empty !');
		}
		
	}

	//lấy phần tử ra, không xóa trong ngăn xếp
	public function peek(){
		//trả về giá trị đầu tiên của mảng
		return reset($this->data);
	}
	//kiểm tra rỗng
	public function isEmpty(){
		//nếu rỗng thì trả về true
		//nếu không rỗng thì trả về false
		if( count($this->data) == 0 ){
			return true;
		}else{
			return false;
		}
	}
	//kiểm tra đầy chưa
	public function isFull(){
		if( count($this->data) == $this->limit ){
			return true;
		}else{
			return false;
		}
	}
}

$objMyQueue = new MyQueue(4);

$objMyQueue->enqueue('Xanh lá cây');//A
$objMyQueue->enqueue('Xanh biển');//B
$objMyQueue->enqueue('Tím');//C
$objMyQueue->enqueue('Nâu');//D

// $objMyQueue->dequeue();
// $objMyQueue->dequeue();
// $objMyQueue->dequeue();
// $objMyQueue->dequeue();

echo $objMyQueue->peek();//Xanh lá cây



echo '<pre>';
print_r($objMyQueue);
die();