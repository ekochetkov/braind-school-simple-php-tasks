<?php

namespace BraindSchool;

class Task3
{

    var $arrOfN;
    var $n;

    function __construct($n)
    {

        $this->n = $n;

        $this->arrOfN = range(1, $n);

        usort($this->arrOfN, ['BraindSchool\Task3', 'mySort']);
    }

    function mySort($a, $b)
    {

        $a_s = strval($a);
        $b_s = strval($b);

        for ($i = 0; $i < strlen($a_s) && $i < strlen($b_s); $i++) {

            if (intval($a_s[$i]) < intval($b_s[$i]))
                return -1;

            if (intval($a_s[$i]) > intval($b_s[$i]))
                return 1;
        }

        if ($i < strlen($a_s))
            return 1;

        if ($i < strlen($b_s))
            return -1;

        return 0;
    }

    function getIndexOfK($k)
    {

        return array_search($k, $this->arrOfN) + 1;
    }
}
