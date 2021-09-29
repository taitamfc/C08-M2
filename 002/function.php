<?php
    //khai báo hàm
    function sum_1(){
        echo 'sum_1 <br> ';
    }
    function sum_2( $a ){
        echo 'sum_2 <br> ';
        echo 'Có giá trị là: '.$a;

    }

    function sum_3( $a ,$b ){
        echo 'sum_3 <br> ';
        echo 'Có giá trị là: '.$a . ' và '.$b;
    }

    function sum_4( $a ,$b = 5 ){
        echo 'sum_4 <br> ';
        echo 'Có giá trị là: '.$a . ' và '.$b;
    }

    function sum_total( $a, $b ){
        $c = $a + $b;
        return $c;

        echo 123;
    }

    //gọi hàm
    //sum_1();

    //sum_2(5);

    //sum_3( 5, 7 );

    //sum_4( 9 , 7);

    $ket_qua = sum_total( 3, 7 );//10

    echo $ket_qua;

