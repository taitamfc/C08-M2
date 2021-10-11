<?php
	class MyStack {

		private $data 	= [];
		private $limit 	= 0;

		public function __construct($ts_limit){
			$this->limit = $ts_limit;
		}
		//đưa phần tử vào ngăn xếp, làm việc thuộc tính data
		public function push( $element ){
			//đẩy pt nguyễn văn a vào mảng data
			if( !$this->isFull() ){
				array_unshift($this->data, $element);
			}else{
				die('Stack is full');
			}

		}
		//lấy phần tử ra, xóa trong ngăn xếp
		public function pop(){
			//isEmpty
			if( !$this->isEmpty() ){
				array_shift($this->data);
			}else{
				die('Stack is empty');
			}
		}
		//lấy phần tử ra, không xóa trong ngăn xếp
		public function peek(){
			//đã code rồi
			//return current($this->data);
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

	$objMyStack = new MyStack(4);

	$objMyStack->push('Xanh lá cây');//A
	$objMyStack->push('Xanh biển');//B
	$objMyStack->push('Tím');//C
	$objMyStack->push('Nâu');//D
	//E: ko có gì cả

	// $objMyStack->pop();
	// $objMyStack->pop();
	// $objMyStack->pop();
	// $objMyStack->pop();

	//nó sẽ lấy 1 phần tử ở trong ngăn xếp, trả về giá trị
	//của phần tử đó, giá trị sẽ là A B C D
	echo $objMyStack->peek();//Nâu



	echo '<pre>';
	print_r($objMyStack);
	die();

