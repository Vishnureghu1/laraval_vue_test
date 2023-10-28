<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function generateNumbers(Request $request)
    {
        $start = $request->input('num1');
        $end = $request->input('num2');
      
        for ($num = $start; $num <= $end; $num++) {
            $numStr = (string)$num;
            if ($numStr === strrev($numStr)) {
                $result[] = $num;
            }
        }
        return response()->json(['result' => $result]);
    }
    
}
