<?php
$subject = '+83-999-888-777';
//+84-111-111-111
$pattern = '/^\+84\-[0-9]{3,3}\-[0-9]{3}\-[0-9]{3}/';

//aBc1@xxx.xxx
$pattern = '/^[a-zA-Z0-9]+\@[a-z]+\.[a-z]{3,3}$/';

//20/10/2021
$pattern = '/\d{2}\/\d{2}\/\d{4}/';

$subject = 'a 20/10/2021 21/11/2022';

preg_match_all($pattern, $subject, $matches); 

echo '<pre>';
print_r($matches);
echo '</pre>';

$ip = "192..168.1.,1";
$iparr = preg_split ("/[\.\,]+/", $ip);
$iparr = preg_split ("/(\.|\,)+/", $ip);
//$iparr = explode ('.', $ip);

echo '<pre>';
print_r($iparr);
echo '</pre>';