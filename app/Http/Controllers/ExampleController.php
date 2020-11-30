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
        Log::emergency($request);
Log::alert($request);
Log::critical($request);
Log::error($request);
Log::warning($request);
Log::notice($request);
Log::info($request);
Log::debug($request);

        return response()->json($request);
    }

    private function testLog(){
        console.log('fadsf');
    }

    //
}
