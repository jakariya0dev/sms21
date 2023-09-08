<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    function updateBannerSection(Request $request){

        if ($request->hasFile('banner-logo') && $request->hasFile('banner-bg')){

            File::deleteDirectory(public_path('images/banner'));
            File::deleteDirectory(public_path('images/logo'));

            $logoExtension =   $request->file('banner-logo')->getClientOriginalExtension();
            $request->file('banner-logo')->move(public_path('/images/logo/'), 'image1'.'.'.$logoExtension);
            $bannerExtension =   $request->file('banner-bg')->getClientOriginalExtension();
            $request->file('banner-bg')->move(public_path('/images/banner/'), 'image1'.'.'.$bannerExtension);

            DB::table('banner')->where('id', 1)->update([
                'title' => $request->input('banner-title'),
                'subtitle' => $request->input('banner-subtitle'),
                'logo' => 'image1'.'.'.$logoExtension,
                'banner_bg' => 'image1'.'.'.$bannerExtension,
            ]);
        }

        else if($request->hasFile('banner-logo')){
            File::deleteDirectory(public_path('images/logo'));
            $logoExtension = $request->file('banner-logo')->getClientOriginalExtension();
            $request->file('banner-logo')->move(public_path('/images/logo/'), 'image1'.'.'.$logoExtension);
            DB::table('banner')->where('id', 1)->update([
                'title' => $request->input('banner-title'),
                'subtitle' => $request->input('banner-subtitle'),
                'logo' => 'image1'.'.'.$logoExtension,
            ]);
        }
        else if ($request->hasFile('banner-bg')){

            File::deleteDirectory(public_path('images/banner'));
            $bannerExtension = $request->file('banner-bg')->getClientOriginalExtension();
            $request->file('banner-bg')->move(public_path('/images/banner/'), 'image1'.'.'.$bannerExtension);

            DB::table('banner')->where('id', 1)->update([
                'title' => $request->input('banner-title'),
                'subtitle' => $request->input('banner-subtitle'),
                'banner_bg' => 'image1'.'.'.$bannerExtension,
            ]);
        }





        return redirect()->route('banner');
    }
}
