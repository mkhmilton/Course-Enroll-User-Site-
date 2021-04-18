<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\CoursesModel;
use App\Models\DemoClassModel;
use App\Models\ClassModel;

class SiteController extends Controller
{
    function showHome()
    {
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);

        $CourseData= json_decode(CoursesModel::all());
        return view('home',['CourseData'=>$CourseData]);

       
    }
    function showAbout()
    {
        return view('about');
    }
    function showCourse()
    {
        $CourseData= json_decode(CoursesModel::all());
        return view('course',['CourseData'=>$CourseData]);
    }
    function showPortfolio()
    {
        return view('portfolio');
    }
    function showClass()
    {
        $DemoClassData= json_decode(DemoClassModel::all());
        return view('democlass',['DemoClassData'=>$DemoClassData]);
    }
    
    
    function resetPassword()
    {
        return view('reset');
    }


    function classroom()
    {
        $ClassData= json_decode(ClassModel::all());
        return view('classroom',['ClassData'=>$ClassData]);
    }
    function Logout()
    {
        return view('logout');
    }
}
