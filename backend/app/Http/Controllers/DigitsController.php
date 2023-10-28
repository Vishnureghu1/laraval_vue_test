<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitsController extends Controller
{
    public function digitsCombination(Request $request)
    {
        $digits = $request->input('digits');

        return response()->json(['combinationCount' => $digits]);
        }
}
