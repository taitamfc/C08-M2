<?php
//isset(null) => false
//isset('') => true

$a = 11;
//biến đã tồn tại hay chưa, đã được lưu vào bộ nhớ chưa
var_dump( isset( $a ) );

//
echo '<hr>';
//biến đã tồn tại có giá trị hay không
var_dump( empty($a) );


if( isset($_REQUEST['id']) ){
	$id = $_REQUEST['id'];
	//nếu biến $id KHÔNG rỗng
	if( !empty($id) ){
		echo 'Giá trị của id là: '.$id;
	}
	
}

echo '<pre>';
print_r( $_REQUEST);
die();