<meta charset="utf-8">
<?php
//echo time(); //timestamp
//chuyển múi giờ về múi giờ VN

date_default_timezone_set('Asia/Ho_Chi_Minh');
echo date('d/m/Y H:i:s',time() );

echo '<hr>';
$name = 'Nguyen Van A';
$arrString =  str_split($name);
echo '<pre>';
print_r($arrString);
echo '</pre>';

echo '<hr>';
echo md5(1234);
echo '<hr>';
echo substr($name, 0,6);//Nguyen

echo '<hr>';

$tim = strpos($name,'A');
echo $tim;
echo '<hr>';
//091, 094

$phone 	= '0943111094';
$tim 	= strpos($phone,'094');
if( $tim === 0 ){
	echo 'Đây là số vina phone';
}
echo $tim;
echo '<hr>';
function sum_2so(){
	echo __FUNCTIONS__;
}
sum_2so();



