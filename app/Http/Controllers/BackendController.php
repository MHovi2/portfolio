<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('backend.index');
    }
    public function home() {
        return view('backend.home');
    }
    public function info() {
        return view('backend.info');
    }
    public function skills() {
        return view('backend.skills');
    }

    public function skills_add(Request $request) {
        return $request->age;
    }

    public function expedu() {
        return view('backend.expedu');
    }



}
