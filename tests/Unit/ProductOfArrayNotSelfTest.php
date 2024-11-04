<?php

use App\Solutions\ProductOfArrayNotSelf;

test('case 1', function () {
    $input = [-1,1,1,-1,1,1,1,-1];
    $expected = [1,-1,-1,1,-1,-1,-1,1];

    $this->assertSame($expected, ProductOfArrayNotSelf::prodExeptSelf($input));
});

test('case 2', function () {
    $input = [-1,1,0,-3,3];
    $expected = [0,0,9,0,0];

    $this->assertSame($expected, ProductOfArrayNotSelf::prodExeptSelf($input));
});

test('case 3', function () {
    $input = [1,2,3,4];
    $expected = [24,12,8,6];

    $this->assertSame($expected, ProductOfArrayNotSelf::prodExeptSelf($input));
});