<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationController extends Controller
{

    function updateAdministrationInfo(Request $request){

        $id = $request->id;
        $imageKey = 'image-'.$id;


        if($request->hasFile($imageKey)){

            $imgExtension = $request->file($imageKey)->getClientOriginalExtension();

            $request->file($imageKey)->move(public_path('images/admin'), 'image'.$id.'.'.$imgExtension);

            DB::table('administration')->where('id', $id)->update([
                'name' => $request->input('name-'.$id),
                'designation' => $request->input('designation-'.$id),
                'message' => $request->input('message-'.$id),
                'image' => 'image'.$id.'.'.$imgExtension
            ]);

        }
        else{
            DB::table('administration')->where('id', $id)->update([
                'name' => $request->input('name-'.$id),
                'designation' => $request->input('designation-'.$id),
                'message' => $request->input('message-'.$id),
            ]);
        }

        return redirect()->route('administration');


    }
}
