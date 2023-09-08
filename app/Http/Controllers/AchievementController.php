<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AchievementController extends Controller
{
    function updateAchievementData(Request $request){

        $id = $request->id;
        $imageKey = 'image-'.$id;


        if($request->hasFile($imageKey)){

            $imgExtension = $request->file($imageKey)->getClientOriginalExtension();

            $request->file($imageKey)->move(public_path('images/achieve'), 'image'.$id.'.'.$imgExtension);

            DB::table('achievement')->where('id', $id)->update([
                'title' => $request->input('title-'.$id),
                'image' => 'image'.$id.'.'.$imgExtension
            ]);

        }
        else{
            DB::table('achievement')->where('id', $id)->update([
                'title' => $request->input('title-'.$id),
            ]);
        }

        return redirect()->route('achievement');

    }
}
