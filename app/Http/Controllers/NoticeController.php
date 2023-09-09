<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NoticeController extends Controller
{

    function deleteNotice(Request $request){

        $fileName =  DB::table('notice')->where('id', $request->id)->value('file');

        File::delete('files/notice/'.$fileName);

        DB::table('notice')->where('id', $request->id)->delete();

        return redirect()->route('notice');
    }
    function addNotice(Request $request){

        if ($request->hasFile('notice-pdf')){

            $fileName = time().'.'.$request->file('notice-pdf')->getClientOriginalExtension();

            $request->file('notice-pdf')->move(public_path('files/notice'), $fileName);

            DB::table('notice')->insert([
                'title' => $request->input('notice-title'),
                'description' => $request->input('notice-description'),
                'file' => $fileName,
            ]);
        }

        return redirect()->route('notice');
    }
}
