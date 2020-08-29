<?php

function mySort($a,$b){

    $a_s = strval($a);
    $b_s = strval($b);

    for($i=0;$i<strlen($a_s)&&$i<strlen($b_s);$i++){

        if( intval($a_s[$i]) < intval($b_s[$i]) )
            return -1;

        if( intval($a_s[$i]) > intval($b_s[$i]) )
            return 1;

    }

    if( $i < strlen($a_s) )
        return 1;

    if( $i < strlen($b_s) )
        return -1;

    return 0;

}

function getIndexOfK($n,$k){

    $arrOfN = range(1,$n);

    usort( $arrOfN, 'mySort' );

    return array_search($k,$arrOfN) + 1;

}