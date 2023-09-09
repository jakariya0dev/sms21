<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    function updateCounterData(Request $request){

        DB::table('counter')->where('id', 1)->update([
            'student' => $request->input('counter-student'),
            'teacher' => $request->input('counter-teacher'),
            'official' => $request->input('counter-official'),
            'admin' => $request->input('counter-admin'),
        ]);

        return redirect()->route('counter');
    }
}
