<?php

namespace JOYPKG;

class JOYPKG
{
    public static function getSimpleSum(int ...$numbers)
    {
        return array_sum($numbers);
    }
}