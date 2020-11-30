<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;


class ExampleController extends Controller
{


    public function logAll()
    {
        Log::warning('Showing user');

        return response()->json('test2');
    }

    public function logHappy(Request $request)
    {  
        Log::info($request);

        return response()->json($request);
    }

    private function testLog(){
        console.log('fadsf');
    }

    //
}
