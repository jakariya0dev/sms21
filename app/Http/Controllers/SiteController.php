<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    function getAboutData(){

        return DB::table('about')->get()->first();
    }

    function getAchievementData(){
        return DB::table('achievement')->get();
    }

    function getAdministrationData(){
        return DB::table('administration')->get();
    }

    function getCounterData(){
        return DB::table('counter')->get()->first();
    }

    function getFeatureData(){
        return DB::table('feature')->get()->first();
    }

    function getHeroData(){
        return DB::table('hero_section')->get()->first();
    }

    function getNoticeData(){
        return DB::table('notice')->orderBy('id', 'desc')->get();
    }

    function getPhotoGalleryData(){
        return DB::table('photo_gallery')->get()->first();
    }

    function getContactData(){
        return DB::table('contact')->get()->first();
    }

}
