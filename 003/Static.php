<?php
class DemoStatic{

	public static $link = 'xxx';

	public static function showInfo(){
		echo '<br>'.__METHOD__;
	}
	
	private $name = '';

	public function setName( $ts_name ){
		$this->name = $ts_name;
	}
	public function getName(){
		return $this->name;
	}

}

//khởi tạo đối tượng
$objDemoStatic = new DemoStatic();
$objDemoStatic->setName('Nguyễn Văn A');

echo $objDemoStatic->getName();

//truy cập vào thuộc tính của lớp
echo '<br>'.DemoStatic::$link;

//truy cập vào phương thức của lớp
DemoStatic::showInfo();