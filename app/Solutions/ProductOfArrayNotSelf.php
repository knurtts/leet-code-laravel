<?php

namespace App\Solutions;


class ProductOfArrayNotSelf
{
    /*
    Given an integer array $nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[i].
    The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.
    You must write an algorithm that runs in O(n) time and without using the division operation.
    **/
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
