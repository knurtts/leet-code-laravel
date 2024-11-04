<?php

namespace App\Solutions;


class ProductOfArrayNotSelf
{
    public static function prodExeptSelf(array $nums) : array
    {
        $answer = array();

        for ($i=0; $i < count($nums); $i++) { 
            $temp = $nums[$i];
            $nums[$i] = 1;

            $reduced = array_reduce($nums, function($a, $b) {
                return $a * $b;
            }, 1);


            array_push($answer, $reduced);

            $nums[$i] = $temp;
        }
        return $answer;
    }
}
