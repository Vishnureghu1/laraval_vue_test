<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReverseWordController extends Controller
{
    public function reverseWord(Request $request)  {
        $str = $request->input('stringData');
        $strReversed = '';
        $length = strlen($str);
        for($i=$length-1; $i >= 0; $i--){
            $strReversed .= $str[$i];
        }
        return ["result" => $strReversed];
    }
}
