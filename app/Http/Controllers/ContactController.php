<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function updateContactData(Request $request){

        DB::table('contact')->where('id', 1)->update([
            'address' => $request->input('contact-address'),
            'email' => $request->input('contact-email'),
            'cell' => $request->input('contact-cell'),
            'maps' => $request->input('contact-maps'),
            'twitter' => $request->input('contact-twitter'),
            'facebook' => $request->input('contact-facebook'),
            'instagram' => $request->input('contact-instagram'),
            'youtube' => $request->input('contact-youtube'),
            'linkedin' => $request->input('contact-linkedin'),
        ]);

        return redirect()->route('contact');
    }
}
