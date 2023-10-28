<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $postData = $request->all();
        return response()->json(['message' => 'POST request received', 'data' => $postData]);
    }
}
