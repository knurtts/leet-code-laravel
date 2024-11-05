<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeetCodeQuestions;
use Inertia\Inertia;

Route::get('/problems/prodofallnotself', [LeetCodeQuestions::class, 'productOfArrayNotSelf'])
    ->name('problems.prodofallnotslef');

Route::get('/leetcode', function() {
    return Inertia::render('LeetCode', []);
})->name('leetcode');
