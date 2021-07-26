<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//Import all models...
use App\home;
use App\project;
use App\blog;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.index');
    }

    public function info()
    {
        return view('backend.info');
    }
    public function skills()
    {
        return view('backend.skills');
    }

    public function skills_add(Request $request)
    {
        return $request->age;
    }

    public function expedu()
    {
        return view('backend.expedu');
    }




    public function contactDetails()
    {
        return view('backend.contact-details');
    }

    public function socialLinks()
    {
        return view('backend.social-media-links');
    }



    //Home Page Controllers..

    //Get Method
    public function home()
    {
        $data = home::all();
        return view('backend.home', ['info' => $data]);
    }

    //POST Method
    public function updateData(Request $req)
    {
        $home = home::find($req->id);
        $home->title = $req->title;
        $home->name = $req->name;
        $home->description = $req->description;
        $home->image = $req->image;
        $home->save();

        return redirect('/home');
    }

    //Profile page Controllers..

    //Get Method
    public function projects()
    {
        $data = project::all();
        return view('backend.projects', ['info' => $data]);
    }

    //POST Method...
    public function addProject(Request $req)
    {
        $project = new project();

        $project->project_name = $req->projectName;
        $project->clint_name = $req->clintName;
        $project->languages = $req->languages;
        $project->preview_link = $req->previewLink;
        $project->image = $req->image;
        $project->save();

        return redirect('projects');
    }

    //Blog Page Controller..

    //Get Method..
    public function blog()
    {
        return view('backend.blog');
    }

    //POST Method..
    public function addBlog(Request $req)
    {
        $blog = new blog();

        $blog->title = $req->title;
        $blog->post_by = $req->postBy;
        $blog->description = $req->description;
        $blog->post_date = $req->postDate;
        $blog->image = $req->image;
        $blog->save();

        return redirect('blog');
    }


    //End...
}
