<?php

use App\Solutions\StringCompression;

test('test 1', function () {
    $input = ["a","a","b","b","c","c","c"];
    $expected = 'a2b2c3';

    $this->assertSame($expected, StringCompression::compress($input));
});

test('test 2', function () {
    $input = ["a"];
    $expected = 'a';

    $this->assertSame($expected, StringCompression::compress($input));
});

test('test 3', function () {
    $input = ["a","b","b","b","b","b","b","b","b","b","b","b","b"];
    $expected = 'ab12';

    $this->assertSame($expected, StringCompression::compress($input));
});