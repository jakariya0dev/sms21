<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

    function getAcademicData(){
        return DB::table('academic_info')->get()->first();
    }

    function getBannerData(){
        return DB::table('banner')->get()->first();
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

    function getNewsEventData(){
        return DB::table('news_event')->get();
    }

    function getVisitorData(Request $request){

        return $request->visitor();
    }

    function updateTeachers(Request $request){

        if($request->hasFile('teachers-file')){

            File::deleteDirectory(public_path('files/teachers'));
            $request->file('teachers-file')->move(public_path('files/teachers'), 'teachers.pdf');
            return redirect()->route('academic');
        }

        return 'Select File to Upload';
    }

    function updateRoutine(Request $request){

        if($request->hasFile('routine-file')){

            File::deleteDirectory(public_path('files/routine'));
            $request->file('routine-file')->move(public_path('files/routine'), 'routine.pdf');
            return redirect()->route('academic');
        }

        return 'Select File to Upload';
    }

    function updateSyllabus(Request $request){

        if($request->hasFile('syllabus-file')){

            File::deleteDirectory(public_path('files/syllabus'));
            $request->file('syllabus-file')->move(public_path('files/syllabus'), 'syllabus.pdf');
            return redirect()->route('academic');
        }

        return 'Select File to Upload';
    }

}
