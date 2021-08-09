<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Import all models...
use App\home;
use App\about_info;
use App\project;
use App\blog;
use App\contact_detail;
use App\expedu;
use App\skill;
use App\social_link;

class FrontendController extends Controller
{
    public function index(Request $req)
    {
        $data = home::all();
        return view('frontend.index', ['info' => $data]);
    }

    public function about()
    {
        $data = about_info::all();
        $data2 = skill::all();

        $edu = expedu::where('expedu', 'education')->get();
        $exp = expedu::where('expedu', 'experience')->get();

        // return view('frontend.about', ['info' => $data], ['info2' => $data2]);

        return view('frontend.about', compact('data', 'data2', 'edu', 'exp'));
    }


    public function projects()
    {
        $data = project::all();
        return view('frontend.projects', compact('data'));
    }

    public function contact()
    {
        $cdata = contact_detail::all();
        $slink = social_link::all();
        return view('frontend.contact', ['cdinfo' => $cdata], ['slinfo' => $slink]);
    }

    public function blog()
    {
        $data = blog::all();
        return view('frontend.blog', ['info' => $data]);
    }
}
