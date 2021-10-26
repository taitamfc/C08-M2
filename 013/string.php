<?php

$wellcom = "Ran Dy";
		//	01234

//Hàm trả về độ dài chuỗi $string
//echo '<br>'.strlen($wellcom);

//Hàm trả về số từ trong chuỗi $string
//echo '<br>'.str_word_count($wellcom);

//Hàm đảo ngược chuỗi $string
//echo '<br>'.strrev($wellcom);

//yD naR
//Dy Ran
//Hàm tìm kiếm chuỗi $text trong chuỗi $strin
//$find = strpos($wellcom, 'Ran');

//Tim va thay
$new_wellcome = str_replace('Ran','Run',$wellcom);

//echo($new_wellcome);

$phone = '  0123456789    ';

$phone = trim($phone);

// echo substr($phone, 0, 5);//01234
echo strlen($phone);