<?php
/*
Cấu trúc dữ liệu là hình thức 
- tổ chức dữ liệu
- cung cấp các phương thức để thao tác với các phần tử
*/

/*	
	LinkedList 
	- lưu trữ các phần tử theo cơ chế liên kết giữa các phần tử (NODE)
	- phù hợp với các bài toán cần 
		+ thêm, xoá nhiều ở đầu danh sách
		+ ít truy xuất ngẫu nhiên
	- các loại danh sách liên kết
		+ Singly Linked List: Danh sách liên kết đơn
		+ Doubly Linked List: Danh sách liên kết đôi)
*/
//Lớp tạo ra một NODE
class MyNode {
	public $next; //tham chiếu tới NODE
	public $data; //Giá trị của node

	public function __construct($data){
		$this->data = $data;//Khởi tạo giá trị cho NODE
	}
}

//Lớp danh sách liên kết
class MyLinkedlist{
	public $firstNode = null;	//đầu tiên
	public $lastNode = null;	//last cuối
	public $count = 0;			//

	//Phương thức chèn một NODE vào phía đầu
	// NODE chèn -> NODE 1 -> NODE 2

	public function insertFirst( $data ){
		//khởi tạo một NODE
		$node = new MyNode($data);

		//tham chiếu tới NODE đầu tiên
		// NODE chèn -> NODE 1 -> NODE 2

		/*
		//$this->firstNode có thể mang giá trị null hoặc là giá trị của node cũ
		*/
		$node->next = $this->firstNode;

		//Đặt lại giá trị của firstNode
		$this->firstNode = $node;

		//Lưu vào giá trị lastNode
		//Nếu lastNode đang null thì lastNode chính là node được chèn vào
		if (is_null($this->lastNode)){
            $this->lastNode = $node;
        }

        //Tăng số lượng lên 1 đơn vị
        $this->count++;
		
	}

	//Phương thức chèn một NODE vào phía sau
	//NODE 1 -> NODE 2 -> NODE chèn
	public function inserLast( $data ){
		/*
			kiểm tra nếu NODE đầu tiên đã có chưa, nếu chưa có thì dùng
			phương thức chèn vào đầu
		*/
		if (is_null($this->firstNode)) {
			$this->insertFirst( $data );
		}else{//Nếu firstNode đã có rồi thì chèn ở phía sau
			
			//Tạo một NODE mới
			$node = new MyNode($data);
			$node->next = null;

			//$this->lastNode->next lúc này đã có giá trị ở dòng 35
			//sau khi thực hiện sẽ là:
			//NODE 1 -> NODE 2 -> NODE chèn
			$this->lastNode->next = $node;

			//gán giá trị Node cuối cùng cho lastNode
			$this->lastNode = $node;

			//Tăng số lượng lên 1 đơn vị
			$this->count++;
		}
	}

}


$objMyLinkedlist 	= new MyLinkedlist();

//NODE( Anh Giang ) -> null
$objMyLinkedlist->insertFirst('Anh Giang');

//NODE( Hạnh ) -> NODE( Anh Giang ) -> null 
$objMyLinkedlist->insertFirst('Hạnh');

//NODE( Hưng ) -> NODE( Hạnh ) -> NODE( Anh Giang ) -> null 
$objMyLinkedlist->insertFirst('Hưng');

//NODE( Hưng ) -> NODE( Hạnh ) -> NODE( Anh Giang ) -> NODE( Thế Cường ) -> null
$objMyLinkedlist->inserLast('Thế Cường');

echo '<pre>';
print_r($objMyLinkedlist);
die();