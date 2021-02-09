<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Numbers;

class NumberController extends Controller
{
	/**
	 * @return JsonResponse
	 */
    public function generate(): JsonResponse
    {
    	$number = new Numbers();
    	$randomNumber = $number->randomNumber();
			$number->number = $randomNumber;
			$number->save();

    	return response()->json($number, 201);
    }

	/**
	 * @param int $id
	 * @return JsonResponse
	 */
    public function retrieve(int $id): JsonResponse
    {
    	$number = new Numbers();

			return response()->json($number::find($id), 200);
    }
}
