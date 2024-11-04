<?php

namespace App\Http\Controllers;

use App\Solutions\ProductOfArrayNotSelf;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeetCodeQuestions extends Controller
{
    public function productOfArrayNotSelf(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nums' => 'required|array'
        ]);

        $answer = ProductOfArrayNotSelf::prodExeptSelf($request->nums);

        $data = ['answer' => $answer];
        return response()->json($data);
    }
}
