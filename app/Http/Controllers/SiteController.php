<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function showHome()
    {
         return view('home');
    }
    function showAbout()
    {
        return view('about');
    }
    function showService()
    {
        return view('service');
    }
    function showPortfolio()
    {
        return view('portfolio');
    }
    
    
    function resetPassword()
    {
        return view('reset');
    }


    function classroom()
    {
        return view('classroom');
    }
    function Logout()
    {
        return view('logout');
    }
}
