<?php
/*
Cấu trúc dữ liệu là hình thức 
- tổ chức dữ liệu
- cung cấp các phương thức để thao tác với các phần tử
*/

/*
ArrayList 
	- lưu trữ các phần tử trong mảng
	- phù hợp với các bài toán cần thực hiện nhiều thao tác:
		+ truy xuất ngẫu nhiên 
		+ ít thêm, xoá ở đầu danh sách
*/

class MyArrayList {

	//dùng mảng để lưu trữ các phần tử
	private $data = [
		'items' => [

		]
	];

	//phương thức Lấy về một phần tử
	public function get(){

	}

	//Thêm một phần tử
	public function add( $element ){
		//$this->data[] = $element;
		array_push($this->data['items'], $element);
	}

	//Xoá một phần tử
	public function remove( $index ){
		//unset( $this->data[$index] );
		array_splice($this->data['items'],$index,1);
	}

	//Lấy về số lượng phần tử
	public function size(){
		//A.Giang: count
		//Hưng: count + 1
		//Xuân Cường: unknow
		//Hạnh: 
		//Thế Cường:unknow
		//Nhi: count()
		return count( $this->data['items'] );
	}

	//Tìm kiếm phần tử
	public function find( $item ){
		//duyệt mảng
		//hưng find for me a function like indexof of javascript
		//nhi: in_array
		$index = '';
		for( $i = 0; $i < $this->size(); $i++ ){
			if( $this->data['items'][$i] == $item ){
				$index = $i;
			}
		}
		return $index;

		//in_array

		var_dump( in_array(  $item,$this->data['items']  ) );



	}

	//Chèn phần tử vào vị trí
	public function insert($element,$index){
		array_splice($this->data['items'],$index,0,$element);
	}

	//Kiểm tra rỗng
	public function isEmpty(){
		if( $this->size() > 0 ){
			return false;//không rỗng
		}else{
			return true;//rỗng
		}
	}
}

$objC08Team = new MyArrayList();

/*
Anh Giang
Hạnh
Hưng
Xuân Cường
Thế Cường
Nhi
*/

$objC08Team->add('Anh Giang');		//0
$objC08Team->add('Hạnh');			//1
$objC08Team->add('Hưng');			//2
$objC08Team->add('Xuân Cường');		//3
$objC08Team->add('Thế Cường');		//4
$objC08Team->add('Nhi');			//5
//$objC08Team->add('AA'); 			//6

$objC08Team->add('Nguyên Văn A'); 	//6 + 1 = 7
$objC08Team->add('Nguyên Văn B'); 	//7 + 1 = 8
$objC08Team->add('Nguyên Văn C'); 	//8 + 1 = 9

//$objC08Team->remove(6);
//$objC08Team->remove(6);

$objC08Team->insert('AA',6);

$objC08Team->remove(6);

echo $objC08Team->find('Thế Cường');//4



//echo $objC08Team->size();


echo '<pre>';
print_r($objC08Team);
echo '</pre>';
